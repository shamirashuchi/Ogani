@extends('admin.master')
@section('title', 'Manage Category')

@section('body')

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-10 mx-auto">
            <div class="card  mt-5 site-btn">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title text-white fs-1">All requested Products Information</h3>
                </div>
                <div class="card-body">
                    <p class="text-white text-center">{{session('message')}}</p>
                    <div class="table-responsive bg-white">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">SL NO</th>
                                <th class="wd-15p border-bottom-0">User_id</th>
                                <th class="wd-15p border-bottom-0">Name</th>
                                <th class="wd-15p border-bottom-0">Flag</th>
                                <th class="wd-20p border-bottom-0">Description</th>
                                <th class="wd-15p border-bottom-0">Image</th>
                                <th class="wd-15p border-bottom-0">Action</th>
                                <th class="wd-10p border-bottom-0">Status</th>
                                <th class="wd-25p border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $category)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$category->user_id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->flag}}</td>
                                    <td style="white-space: wrap;">{{$category->short_description}}</td>
                                    <td><img src="{{asset($category->image)}}" alt="" height="50" width="60"/></td>
                                    <td style="white-space: wrap;">{{$category->action}}</td>
                                    <td>{{$category->status}}</td>
                                    <td>
                                        <a href="{{route('product.detail', ['id' => $category->id])}}" class="btn site-btn btn-sm rounded-0">
                                            <i class="fa fa-bookmark-o"></i>
                                        </a>
                                        <a href="{{route('product.accept', ['id' => $category->id])}}" class="btn site-btn btn-sm rounded-0 text-white">
                                            Accept
                                        </a>
                                        <a href="{{route('product.cancel', ['id' => $category->id])}}"  class="btn btn-danger btn-sm rounded-0">
                                            Cancel
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
