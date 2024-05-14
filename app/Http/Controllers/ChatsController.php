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
                'message' => $request->input('message')
            ]);
            broadcast(new MessageSent(null,$customer, $message));
        }
        else{
            $user=Auth::user();
//            $user = User::find($userid);
            $message = $user->messages()->create([
                'message' => $request->input('message')
            ]);
            broadcast(new MessageSent($user,null, $message));
        }
        return back()->with('message', 'Message sent successfully');


    }
}
