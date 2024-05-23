{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>Chat Messages</title>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div id="messages">--}}
{{--    <h1>Messages</h1>--}}
{{--    @foreach ($messages as $customerId => $customerMessages)--}}
{{--        <h2>Customer ID: {{ $customerId }}</h2>--}}
{{--        <ul>--}}
{{--            @foreach ($customerMessages as $message)--}}
{{--                <li>--}}
{{--                    {{ $message->message }}--}}
{{--                    <button onclick="pickMessage({{ $message->id }})">Pick</button>--}}
{{--                </li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    @endforeach--}}
{{--</div>--}}

{{--<script>--}}
{{--    function pickMessage(messageId) {--}}
{{--        axios.post(`/api/messages/${messageId}/pick`)--}}
{{--            .then(response => {--}}
{{--                alert('Message picked!');--}}
{{--                location.reload(); // Refresh the page to update the list--}}
{{--            })--}}
{{--            .catch(error => {--}}
{{--                console.error('Error picking message:', error);--}}
{{--            });--}}
{{--    }--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}
@extends('admin.master')
@section('title', 'Manage Chatting')

@section('body')

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-10 mx-auto">
            <div class="card  mt-5 site-btn">
                <div class="card-header border-bottom mx-auto site-btn">
                    <h3 class="card-title text-white fs-1">All Messages</h3>
                </div>
                <div class="card-body">
<div id="messages" class="bg-white">
    <div class="table-responsive bg-white">
        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
            <thead>
            <tr>
                <th class="wd-15p border-bottom-0">SL NO</th>
                <th class="wd-15p border-bottom-0">Name</th>
                <th class="wd-15p border-bottom-0">Customerid</th>
                <th class="wd-15p border-bottom-0">ProductId</th>
                <th class="wd-15p border-bottom-0">MessageId</th>
                <th class="wd-15p border-bottom-0">Message</th>
                <th class="wd-15p border-bottom-0">Action</th>
            </tr>
            </thead>
            <tbody>
{{--    @foreach ($messages as $customerId => $customerMessages)--}}
{{--                <tr>--}}
{{--                    <td>{{ $customerId }}</td>--}}
{{--                    <td>--}}
{{--                        {{ $customerMessages->first()->message}}--}}
{{--                    </td>--}}
{{--                    <td><button class="bg-primary" onclick="pickMessage({{ $customerId }})">Pick</button></td>--}}
{{--                </tr>--}}

{{--    @endforeach--}}
{{--@foreach ($messages as $customerId => $products)--}}
{{--    <h2>Customer ID: {{ $customerId }}</h2>--}}
{{--    @foreach ($products as $productId => $messagesGroup)--}}
{{--        <h3>Product ID: {{ $productId }}</h3>--}}
{{--        @foreach ($messagesGroup as $message)--}}
{{--            <p>Message ID: {{ $message->id }}</p>--}}
{{--            <p>Message: {{ $message->message }}</p>--}}
{{--        @endforeach--}}
{{--        @endforeach--}}
{{--        @endforeach--}}
<!-- resources/views/admin/Chat/chat.blade.php -->

{{--@foreach ($messages as $customerId => $products)--}}
{{--    <tr>--}}
{{--    <td><h2>Customer ID: {{ $customerId }}</h2></td>--}}
{{--    @foreach ($products as $productId => $messagesGroup)--}}
{{--       <td> <h3>Product ID: {{ $productId }}</h3></td>--}}
{{--        @foreach ($messagesGroup as $message)--}}
{{--            <td><p>Message ID: {{ $message->id }}</p></td>--}}
{{--            <td><p>Message: {{ $message->message }}</p></td>--}}

{{--        @endforeach--}}
{{--        @endforeach--}}
{{--    </tr>--}}
{{--        @endforeach--}}
@php $count = 1; @endphp
@php $user_id = auth()->id(); @endphp <!-- Fetch current user's ID -->
@foreach ($messages as $customerId => $products)
    @foreach ($products as $productId => $messagesGroup)
        @foreach ($messagesGroup as $message)
            <tr>
                <td>{{ $count }}</td>
                <td>{{ $message->customer_name }}</td>
                <td>{{ $customerId }}</td>
                <td>{{ $productId }}</td>
                <td>{{ $message->id }}</td>
                <td>{{ $message->message }}</td>
                <td>
                    <!-- Concatenate the URL with dynamic parameters -->
                    <button class="bg-primary" onclick="window.location.href = '{{ route('chat', ['user_id' => $user_id, 'customer_id' => $customerId, 'product_id' => $productId]) }}'">Pick</button>
                </td>
            </tr>
        @php $count++; @endphp
        @endforeach
        @endforeach
        @endforeach


    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    // function pickMessage(messageId) {
    //     axios.get(`/api/messages/${messageId}/pick`)
    //         .then(response => {
    //             alert('Message picked!');
    //             // window.location.href = `/messages`; // Redirect to the customer messages page
    //         })
    //         .catch(error => {
    //             console.error('Error picking message:', error);
    //         });
    // }
</script>

