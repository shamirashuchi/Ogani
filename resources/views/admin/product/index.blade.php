@extends('admin.master')
@section('title', 'Manage Product')

@section('body')
    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12 mx-auto">
            <div class="card  mt-5 site-btn">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title text-white fs-1">All Product Information</h3>
                </div>
                <div class="card-body text-white">
                    <p class="text-white text-center">{{session('message')}}</p>
                    <div class="table-responsive bg-white">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">SL NO</th>
                                <th class="wd-15p border-bottom-0">Name</th>
                                <th class="wd-15p border-bottom-0">code</th>
                                <th class="wd-20p border-bottom-0">Category</th>
                                <th class="wd-15p border-bottom-0">Image</th>
                                <th class="wd-10p border-bottom-0">Stock</th>
                                <th class="wd-25p border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->code}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td><img src="{{asset($product->image)}}" alt="" height="50" width="60"/></td>
                                    <td>{{$product->stock_amount}}</td>
                                    <td>
                                        <a href="{{route('product.detail', ['id' => $product->id])}}" class="btn site-btn btn-sm rounded-0">
                                            <i class="fa fa-bookmark-o"></i>
                                        </a>
                                        <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn btn-primary btn-sm rounded-0">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{route('product.delete', ['id' => $product->id])}}" onclick="return confirm('Are you sure to delete this..');" class="btn btn-danger btn-sm rounded-0">
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
