@extends('front-end.master')
@section('title', 'Customer Dashboard')
@section('body')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Customer</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href=""><i class="lni lni-home"></i> Home</a></li>
                        <li>Dashboard</li>
                        <h1>Welcome, {{ Session::get('customer_name') }}</h1>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="account-login section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>My Dashboard</h1>
                    <div class="card mt-5">
                        <div class="card-body">
{{--                            <div class="d-flex align-items-start">--}}
{{--                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">--}}
{{--                                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">My Dashboard</button>--}}
{{--                                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>--}}
{{--                                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-orders" type="button" role="tab" aria-controls="v-pills-orders" aria-selected="false">My Orders</button>--}}
{{--                                </div>--}}
{{--                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">--}}
{{--                                    <button class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">My Dashboard</button>--}}
{{--                                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>--}}
{{--                                    <button class="nav-link active" id="v-pills-orders-tab" data-bs-toggle="pill" data-bs-target="#v-pills-orders" type="button" role="tab" aria-controls="v-pills-orders" aria-selected="false">My Orders</button>--}}

{{--                                </div>--}}

{{--                                <div class="tab-content" id="v-pills-tabContent">--}}
{{--                                    <div class="tab-pane fade " id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">My dashboard</div>--}}
{{--                                    <div class="tab-pane fade " id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">My profile</div>--}}
{{--                                    <div class="tab-pane fade show" id="v-pills-orders" role="tabpanel" aria-labelledby="v-pills-orders-tab" tabindex="0">--}}
                                        <table class="table table-bordered table-hover">
                                            <tr>
                                                <th>sl</th>
                                                <th>order no</th>
                                                <th>order total</th>
                                                <th>order status</th>
                                                <th>action</th>
                                            </tr>
                                            @foreach($orders as $order)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <a href="">{{ '000'.$order->id }}</a>
                                                </td>
                                                <td>{{ $order->order_total }}</td>
                                                <td>{{ $order->order_status }}</td>
                                                <td>
                                                    <a href="">invoice</a>||
                                                    <a href="">Details</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

