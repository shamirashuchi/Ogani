<?php

namespace App\Http\Controllers;
use App\Events\MessageSent;
use App\Message;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Session;
class ChatsController extends Controller
{
    //Add the below functions
    public function __construct()
    {
//        $this->middleware('auth');
    }
//    public function chataccept()
//    {
//        // Retrieve the first message for each customer where user_id is NULL, for each product
//        $messages = \App\Models\Message::select('id', 'customer_id', 'message', 'product_id')
//            ->whereIn('id', function($query) {
//                $query->selectRaw('MIN(id)')
//                    ->from('messages')
//                    ->whereNull('user_id')
//                    ->groupBy('customer_id', 'product_id');
//            })
//            ->orderBy('customer_id')
//            ->orderBy('product_id')
//            ->get()
//            ->groupBy('customer_id')
//            ->map(function ($group) {
//                return $group->groupBy('product_id');
//            });
//
//        // Debug the structure
//
//
//        // Pass the data to the view
//        return view('admin.Chat.chat', ['messages' => $messages]);
//    }
    public function chataccept()
    {
        // Retrieve the first message for each customer for each product where user_id is NULL, including customer name
        $messages = \App\Models\Message::select('messages.id', 'messages.customer_id', 'customers.name as customer_name', 'messages.message', 'messages.product_id')
            ->join('customers', 'messages.customer_id', '=', 'customers.id')
            ->whereIn('messages.id', function($query) {
                $query->selectRaw('MIN(messages.id)')
                    ->from('messages')
                    ->whereNull('messages.user_id')
                    ->groupBy('messages.customer_id', 'messages.product_id');
            })
            ->orderBy('messages.customer_id')
            ->orderBy('messages.product_id')
            ->get()
            ->groupBy('customer_id')
            ->map(function ($group) {
                return $group->groupBy('product_id');
            });

        // Pass the data to the view
        return view('admin.Chat.chat', ['messages' => $messages]);
    }





//    public function index($user_id, $customer_id, $product_id)
//    {
//        $messages = \App\Models\Message::
//            where('customer_id', $customer_id)
//            ->where('product_id', $product_id)
//            ->get();
//        for each messahes{
//            $message = new \App\Models\Message();
//            $message->user_id = $user_id;
//            $message->save();
//        }
//
////dd($user_id);
//        $finalmessages = \App\Models\Message::where('user_id', $user_id)
//            ->where('customer_id', $customer_id)
//            ->where('product_id', $product_id)
//            ->get();
//dd($messages);
//        return view('admin.Chat.chatwithcustomer', ['messages' => $finalmessages]);
//    }
    public function index($user_id, $customer_id, $product_id)
    {
        // Retrieve existing messages where user_id is null
        $messagesWithNullUserId = \App\Models\Message::whereNull('user_id')
            ->where('customer_id', $customer_id)
            ->where('product_id', $product_id)
            ->get();

        // Iterate over each existing message with null user_id and update it with the provided user_id
        foreach ($messagesWithNullUserId as $message) {
            $message->user_id = $user_id;
            $message->save();
        }

        // Retrieve messages for the new user_id, customer_id, and product_id
        $finalMessages = \App\Models\Message::where('user_id', $user_id)
            ->where('customer_id', $customer_id)
            ->where('product_id', $product_id)
            ->get();

        // Debugging: Dump the messages with null user_id
//        dd($messagesWithNullUserId);

        // Pass the final messages to the view
        return view('admin.Chat.chatwithcustomer', ['messages' => $finalMessages,
            'user_id' => $user_id,
            'customer_id' =>$customer_id,
            'product_id' => $product_id]);
    }


        public function admin(Request $request, $user_id, $customer_id, $product_id)
        {
            // Returning $request for debugging purposes

            // Assuming you want to create a new message
            $message = new \App\Models\Message();
            $message->user_id = $user_id;
            $message->customer_id = $customer_id;
            $message->product_id = $product_id;
            $message->message = $request->message;
            $message->flag = '1';
            $message->save();
            $finalMessages = \App\Models\Message::where('user_id', $user_id)
                ->where('customer_id', $customer_id)
                ->where('product_id', $product_id)
                ->get();
            return view('admin.Chat.chatwithcustomer', ['messages' => $finalMessages,
                'user_id' => $user_id,
                'customer_id' =>$customer_id,
                'product_id' => $product_id]);

            // Perform other actions as needed
        }







    public function fetchMessages()
    {
        return \App\Models\Message::with('user')->get();
    }

    public function sendMessage(Request $request)
    {
        $userid = Session::get('customer_id');
        date_default_timezone_set('Asia/Dhaka');
        $current_timestamp = time();
        if($userid) {
            $customer = Customer::find($userid);
            $message = $customer->messages()->create([
                'message' => $request->input('message'),
                'product_id' => $request->input('Product_id'),
                 'custom_created_at' =>date('Y-m-d H:i:s', $current_timestamp)
            ]);
            broadcast(new MessageSent(null,$customer, $message,$product_id,$custom_created_at));
        }
        return back()->with('message', 'Message sent successfully');
    }



//    public function sendMessage(Request $request)
//    {
//            $customerid = Session::get('customer_id');
//            date_default_timezone_set('Asia/Dhaka');
//            $current_timestamp = time();
//
//            if ($customerid) {
//                $customer = Customer::find($customerid);
//                $productId = $request->input('Product_id');
//
//                // Find the first message from the same customer for the same product within the last two hours
//                $firstMessageWithinTwoHours = \App\Models\Message::where('customer_id', $customer->id)
//                    ->where('product_id', $productId)
//                    ->where('custom_created_at', '>=', now()->subHours(2))
//                    ->oldest()
//                    ->first();
//return $firstMessageWithinTwoHours;
//                if ($firstMessageWithinTwoHours) {
//                    if ($firstMessageWithinTwoHours->user_id) {
//                        $user = User::find($firstMessageWithinTwoHours->user_id);
//                        $message = $customer->messages()->create([
//                            'message' => $request->input('message'),
//                            'product_id' => $request->input('Product_id'),
//                            'custom_created_at' => date('Y-m-d H:i:s', $current_timestamp),
//                            'user_id' => $firstMessageWithinTwoHours->user_id,
//                        ]);
//                        broadcast(new MessageSent($user, $customer, $message, $product_id, $custom_created_at));
//                    } else {
//                        $message = $customer->messages()->create([
//                            'message' => $request->input('message'),
//                            'product_id' => $request->input('Product_id'),
//                            'custom_created_at' => date('Y-m-d H:i:s', $current_timestamp),
//                        ]);
//                        broadcast(new MessageSent(null, $customer, $message, $product_id, $custom_created_at));
//                    }
//                } else {
//                    $message = $customer->messages()->create([
//                        'message' => $request->input('message'),
//                        'product_id' => $request->input('Product_id'),
//                        'custom_created_at' => date('Y-m-d H:i:s', $current_timestamp),
//                    ]);
//                    broadcast(new MessageSent(null, $customer, $message, $product_id, $custom_created_at));
//                }
//            }
//
//            return view('frontend.master')->with('message', 'Message sent successfully');
//    }

}
