<div class="input-group">
    {{-- Input field --}}
    <input id="btn-input" type="text" name="message" class="form-control input-sm" placeholder="Type your message here..." v-model="newMessage" @keyup.enter="sendMessage" />

    {{-- Button --}}
    <span class="input-group-btn">
        <button class="btn btn-primary btn-sm" id="btn-chat" @click="sendMessage">
            Send
        </button>
    </span>
</div>

<script>
    // Assuming you're using Echo for real-time broadcasting
    Echo.private('chat')
        .listen('MessageSent', (e) => {
            // Handle the event, e.g., by updating the messages list
        });

    function sendMessage() {
        const input = document.getElementById('btn-input');
        const message = input.value;
        input.value = ''; // Clear the input field

        // Send the message using Laravel's HTTP client or another method
        axios.post('/send-message', {
            message: message,
            user: {!! json_encode(Auth::user()) !!}
        })
            .then(response => {
                // Handle the successful response
            })
            .catch(error => {
                // Handle any errors
            });
    }

    // Attach the sendMessage function to the button's click event
    document.getElementById('btn-chat').addEventListener('click', sendMessage);

    // Attach the sendMessage function to the input field's enter key event
    document.getElementById('btn-input').addEventListener('keyup', function(event) {
        if (event.key === 'Enter') {
            sendMessage();
        }
    });
</script>

<script>
    export default {
        //Takes the "user" props from <chat-form> … :user="{{ Auth::user() }}"></chat-form> in the parent chat.blade.php.
        props: ["user"],
        data() {
            return {
                newMessage: "",
            };
        },
        methods: {
            sendMessage() {
                //Emit a "messagesent" event including the user who sent the message along with the message content
                this.$emit("messagesent", {
                    user: this.user,
                    //newMessage is bound to the earlier "btn-input" input field
                    message: this.newMessage,
                });
                //Clear the input
                this.newMessage = "";
            },
        },
    };
</script>
