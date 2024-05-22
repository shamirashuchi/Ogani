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
                <th class="wd-15p border-bottom-0">User_id</th>
                <th class="wd-15p border-bottom-0">Action</th>
            </tr>
            </thead>
            <tbody>
    @foreach ($messages as $customerId => $customerMessages)
                <tr>
                    <td>{{ $customerId }}</td>
                    <td>
                        {{ $customerMessages->first()->message}}
                    </td>
                    <td><button class="bg-primary" onclick="pickMessage({{ $customerId }})">Pick</button></td>
                </tr>

    @endforeach
</div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    function pickMessage(messageId) {
        axios.post(`/api/messages/${messageId}/pick`)
            .then(response => {
                alert('Message picked!');
                window.location.href = `/messages`; // Redirect to the customer messages page
            })
            .catch(error => {
                console.error('Error picking message:', error);
            });
    }
</script>

