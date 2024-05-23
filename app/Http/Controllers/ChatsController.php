<?php

namespace App\Http\Controllers;
use App\Events\MessageSent;
use App\Message;
use App\Models\Customer;
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
        if($userid) {
            $customer = Customer::find($userid);
            $message = $customer->messages()->create([
                'message' => $request->input('message'),
                'product_id' => $request->input('Product_id'),
//                Product_id:productId,
            ]);
            broadcast(new MessageSent(null,$customer, $message,$product_id));
        }
        else{
//            $user=Auth::user();
////            $user = User::find($userid);
//            $message = $user->messages()->create([
//                'message' => $request->input('message')
//            ]);
//            broadcast(new MessageSent($user,null, $message));
        }
        return back()->with('message', 'Message sent successfully');


    }




//    public function sendMessage(Request $request)
//    {
//        $customerid = Session::get('customer_id');
//        if ($customerid) {
//            $customer = Customer::find($customerid);
//            $product_id = $request->input('Product_id');
//
//            // Find the most recent message from the same customer for the same product
//            $mostRecentMessage = Message::where('customer_id', $customer->id)
//                ->where('product_id', $product_id)
//                ->latest()
//                ->first();
//
//            // Find the first message from the same customer for the same product within the last two hours
//            $firstMessageWithinTwoHours = Message::where('customer_id', $customer->id)
//                ->where('product_id', $product_id)
//                ->where('created_at', '>=', now()->subHours(2))
//                ->oldest()
//                ->first();
//
//            if ($firstMessageWithinTwoHours) {
//                // If the first message within two hours exists, update the user ID of the most recent message
//                if ($mostRecentMessage) {
////                    $mostRecentMessage->update(['user_id' => $firstMessageWithinTwoHours->user_id]);
////                    $message = $mostRecentMessage;
////                } else {
////                    // Create a new message with the customer's user ID if there are no recent messages
////                    $message = $customer->messages()->create([
////                        'message' => $request->input('message'),
////                        'product_id' => $product_id,
////                        'user_id' => $firstMessageWithinTwoHours->user_id,
////                    ]);
//                    $userid = $firstMessageWithinTwoHours->user_id;
//                    $mostRecentMessage = $customer->messages()->create([
//                        'message' => $request->input('message'),
//                        'product_id' => $product_id,
//                        'user_id' => $customer->$firstMessageWithinTwoHours->user_id,
//                    ]);
//                }
//                broadcast(new MessageSent(userid, $customer, $mostRecentMessage, $product_id));
//            } else {
//                // If no message from the same customer for the same product within the last two hours exists,
//                // create a new message with the customer's user ID
//                $message = $customer->messages()->create([
//                    'message' => $request->input('message'),
//                    'product_id' => $product_id,
//                    'user_id' => $customer->user_id,
//                ]);
//            }
//
//            broadcast(new MessageSent(null, $customer, $message, $product_id));
//        } else {
//            // Handle messages from authenticated users (if needed)
//        }
//
//        return back()->with('message', 'Message sent successfully');
//    }

//    public function sendMessage(Request $request)
//    {
//        $customerid = Session::get('customer_id');
//        if ($customerid) {
//            $customer = Customer::find($customerid);
//            $product_id = $request->input('Product_id');
//
//            // Find the most recent message from the same customer for the same product
//            $mostRecentMessage = \App\Models\Message::where('customer_id', $customer->id)
//                ->where('product_id', $product_id)
//                ->latest()
//                ->first();
//
//            // Find the first message from the same customer for the same product within the last two hours
//            $firstMessageWithinTwoHours = \App\Models\Message::where('customer_id', $customer->id)
//                ->where('product_id', $product_id)
//                ->where('created_at', '>=', now()->subHours(2))
//                ->oldest()
//                ->first();
//
//            if ($firstMessageWithinTwoHours) {
//                // If the first message within two hours exists, update the user ID of the most recent message
//                if ($mostRecentMessage) {
//                    $userid = $mostRecentMessage->user_id;
//                    $mostRecentMessage = $customer->messages()->create([
//                        'message' => $request->input('message'),
//                        'product_id' => $product_id,
//                        'customer_id' => $customer->user_id,
//                        'user_id' => $firstMessageWithinTwoHours->user_id;]);
//                }
//                broadcast(new MessageSent($userid, $customer, $mostRecentMessage, $product_id));
//                } else {
//                    // Create a new message with the customer's user ID if there are no recent messages
//                    $mostRecentMessage = $customer->messages()->create([
//                        'message' => $request->input('message'),
//                        'product_id' => $product_id,
//                        'customer_id' => $customer->user_id,
//                    ]);
//                }
//            }
//            broadcast(new MessageSent($userid, $customer, $mostRecentMessage, $product_id)); // Broadcast after creating or updating the message
//
//
//        return back()->with('message', 'Message sent successfully');
//    }

//    public function sendMessage(Request $request)
//    {
//        $customerid = Session::get('customer_id');
//        if ($customerid) {
//            $customer = Customer::find($customerid);
//            $product_id = $request->input('product_id');
//
//            // Find the most recent message from the same customer for the same product
//            $mostRecentMessage = \App\Models\Message::where('customer_id', $customer->id)
//                ->where('product_id', $product_id)
//                ->latest()
//                ->first();
//
//            // Find the first message from the same customer for the same product within the last two hours
//            $firstMessageWithinTwoHours = \App\Models\Message::where('customer_id', $customer->id)
//                ->where('product_id', $product_id)
//                ->where('created_at', '>=', now()->subHours(2))
//                ->oldest()
//                ->first();
//
//            if ($firstMessageWithinTwoHours) {
//                // If the first message within two hours exists, update the user ID of the most recent message
//                if ($mostRecentMessage) {
//                    $userid = $firstMessageWithinTwoHours->user_id;
//                    $newMessage = $customer->messages()->create([
//                        'message' => $request->input('message'),
//                        'product_id' => $product_id,
//                        'customer_id' => $customer->id, // Corrected customer_id field
//                        'user_id' => $userid, // Corrected user_id field
//                    ]);
//                }
//            } else {
//                // Create a new message with the customer's user ID if there are no recent messages
//                $newMessage = $customer->messages()->create([
//                    'message' => $request->input('message'),
//                    'product_id' => $product_id,
//                    'customer_id' => $customer->id, // Corrected customer_id field
//                    'user_id' => null, // Assuming a new message does not have an associated user yet
//                ]);
//            }
//
//            broadcast(new MessageSent($newMessage->user_id ?? null, $customer, $newMessage, $product_id));
//
//            return back()->with('message', 'Message sent successfully');
//        }
//
//        return back()->with('error', 'Customer not found');
//    }
//

}
