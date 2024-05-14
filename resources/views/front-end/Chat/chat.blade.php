@extends('admin.master')

@section('title','Chat System')

@section('body')
    <div class="container">
        <div class="card">
            <div class="card-header">Chats</div>
            <div class="card-body">
                @if($messages->count() > 0)
                    <ul>
                        @foreach($messages as $message)
                            <li>{{ $message->message }}</li>
                        @endforeach
                    </ul>
                @else
                    <p>No messages available.</p>
                @endif
            </div>
{{--            <div class="card-body">--}}
{{--                <chat-messages :messages="messages"></chat-messages>--}}
{{--            </div>--}}
            <div class="card-footer">
                <form>
                @csrf <!-- Include CSRF token -->

                    <div class="input-group">
                        {{-- Input field --}}

                        <input id="btn-input" type="text" name="message" class="form-control input-sm" placeholder="Type your message here..." v-model="newMessage" @keyup.enter="sendMessage" />

                        {{-- Button --}}
                        <span class="input-group-btn">
        <button class="btn btn-primary btn-sm" id="btn-chat" >
            Send
        </button>
    </span>
                    </div>
                </form>
{{--                <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}"></chat-form>--}}
            </div>
        </div>
    </div>
@endsection
{{--<script>--}}
{{--    window.Echo.private('chat')--}}
{{--        .listen('MessageSent', (e) => {--}}
{{--            this.messages.push({--}}
{{--                message: e.message.message,--}}
{{--                user: e.user--}}
{{--            });--}}
{{--        });--}}

{{--</script>--}}
