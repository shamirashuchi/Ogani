<?php

namespace App\Http\Controllers;
use App\Events\MessageSent;
use App\Message;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
class ChatsController extends Controller
{
    //Add the below functions
    public function __construct()
    {
//        $this->middleware('auth');
    }
    public function chataccept()
    {
//        $messages = \App\Models\Message::all(); // Example: Retrieve all messages
        $messages = \App\Models\Message::
        select('id', 'customer_id', 'message')
            ->whereIn('id', function($query) {
                $query->selectRaw('MIN(id)')
                    ->from('messages')
                    ->whereNull('user_id')
                    ->groupBy('customer_id');
            })
            ->orderBy('customer_id')
            ->get()
            ->groupBy('customer_id');


        // Pass the data to the view
        return view('admin.Chat.chat', ['messages' => $messages]);
    }

    public function index()
    {
        $messages = \App\Models\Message::all(); // Example: Retrieve all messages

        // Pass the data to the view
        return view('front-end.Chat.chat', ['messages' => $messages]);
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
}
