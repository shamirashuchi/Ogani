@extends('admin.master')
@section('title', 'Manage Order')

@section('body')

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12 mx-auto">
            <div class="card  mt-5 site-btn">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title text-white fs-1">All Order Information</h3>
                </div>
                <div class="card-body">
                    <p class="text-white text-center">{{session('message')}}</p>
                    <div class="table-responsive bg-white">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">SL NO</th>
                                    <th class="wd-15p border-bottom-0">Customer Info</th>
                                    <th class="wd-15p border-bottom-0">Order Date</th>
                                    <th class="wd-15p border-bottom-0">Order Total</th>
                                    <th class="wd-15p border-bottom-0">Order Status</th>
                                    <th class="wd-25p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$order->customer->email.'( '.$order->customer->mobile.' )'}}</td>
                                    <td>{{$order->order_date}}</td>
                                    <td>{{$order->order_total}}</td>
                                    <td>{{$order->order_status}}</td>
                                    <td>
                                        <a href="{{route('order.detail', ['id' => $order->id])}}" class="btn btn-info btn-sm rounded-0">
                                            <i class="fa fa-bookmark-o"></i>
                                        </a>
                                        <a href="{{route('order.invoice', ['id' => $order->id])}}" class="btn btn-primary btn-sm rounded-0">
                                            <i class="fa fa-download"></i>
                                        </a>
                                        <a href="{{route('order.edit', ['id' => $order->id])}}" class="btn btn-success btn-sm rounded-0">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{route('order.delete', ['id' => $order->id])}}" onclick="return confirm('Are you sure to delete this..');" class="btn btn-danger btn-sm rounded-0">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
@endsection
