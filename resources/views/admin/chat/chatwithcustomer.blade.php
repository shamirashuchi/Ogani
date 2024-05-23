
@extends('admin.master')

@section('title', 'Chat System')

@section('body')
    <div class="container">
        <div class="card">
            <div class="card-header">Chats</div>
            <div class="card-body">
                @if($messages->count() > 0)

                    <ul>
                        @foreach($messages as $message)
                            @if($message->flag === 1)
                            <li class="p-2 mb-2 rounded bg-danger text-white float-right"  style="width: 200px; word-wrap: break-word;">{{ $message->message }}</li><br><br><br><br>
                            @else
                                <li class="bg-primary p-2 mb-2 rounded  text-white float-left"  style="width: 200px; word-wrap: break-word;">{{ $message->message }}</li><br><br><br>
                            @endif

                        @endforeach
                    </ul>

                @else
                    <p>No messages available.</p>
                @endif
            </div>
            <div class="card-footer">
                <form action="{{ route('chat', ['user_id' => $user_id, 'customer_id' => $customer_id, 'product_id' => $product_id]) }}" method="post">
                @csrf <!-- Include CSRF token -->

                    <div class="input-group">
                        {{-- Input field --}}
                        <input id="btn-input" type="text" name="message" class="form-control input-sm" placeholder="Type your message here..." v-model="newMessage" @keyup.enter="sendMessage" />

                        {{-- Button --}}
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-primary btn-sm">
                                Send
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
