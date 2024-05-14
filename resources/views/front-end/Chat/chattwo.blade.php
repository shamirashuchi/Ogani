<ul class="chat">
    @foreach ($messages as $message)
        <li class="left clearfix">
            <div class="clearfix">
                <div class="header">
                    <strong>
                        {{ $message->user->name }}
                    </strong>
                </div>
                <p>
                    {{ $message->message }}
                </p>
            </div>
        </li>
    @endforeach
</ul>
<script>
    export default {
        props: ["messages"],
    };
</script>
