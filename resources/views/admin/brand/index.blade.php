@extends('admin.master')
@section('title', 'Manage Brand')

@section('body')
    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12 mx-auto">
            <div class="card mt-5 site-btn">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title  text-white fs-1">All Brand Information</h3>
                </div>
                <div class="card-body">
                    <p class="text-white text-center">{{session('message')}}</p>
                    <div class="table-responsive bg-white">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">SL NO</th>
                                <th class="wd-15p border-bottom-0">Name</th>
                                <th class="wd-20p border-bottom-0">Description</th>
                                <th class="wd-15p border-bottom-0">Image</th>
                                <th class="wd-10p border-bottom-0">Status</th>
                                @isset(Auth::user()->role)
                                    @if(Auth::user()->role == "Brand Manager"  || Auth::user()->role == "Admin")
                                <th class="wd-25p border-bottom-0">Action</th>
                                    @endif
                                @else
                                    <span></span>
                                @endisset
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($brands as $brand)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$brand->name}}</td>
                                    <td>{{$brand->description}}</td>
                                    <td><img src="{{asset($brand->image)}}" alt="" height="50" width="60"/></td>
                                    <td>{{$brand->status}}</td>
                                    @isset(Auth::user()->role)
                                        @if(Auth::user()->role == "Brand Manager"  || Auth::user()->role == "Admin")
                                    <td>
                                        @isset(Auth::user()->role)
                                            @if(Auth::user()->role == "Brand Manager")
                                        <a href="{{route('brand.edit', ['id' => $brand->id])}}" class="btn site-btn btn-sm rounded-0">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                            @endif
                                        @else
                                            <span></span>
                                        @endisset
                                        @isset(Auth::user()->role)
                                            @if(Auth::user()->role == "Admin")
                                        <a href="{{route('brand.delete', ['id' => $brand->id])}}" onclick="return confirm('Are you sure to delete this..');" class="btn btn-danger btn-sm rounded-0">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                                @endif
                                            @else
                                                <span></span>
                                            @endisset
                                    </td>
                                        @endif
                                    @else
                                        <span></span>
                                    @endisset
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
