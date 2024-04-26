@extends('admin.master')
@section('title', 'Manage User')

@section('body')
    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12 mx-auto">
            <div class="card  mt-5 site-btn">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title text-white fs-1">All Customer Information</h3>
                </div>
                <div class="card-body">
                    <p class="text-white text-center">{{session('message')}}</p>
                    <div class="table-responsive bg-white">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">SL NO</th>
                                <th class="wd-15p border-bottom-0">Name</th>
                                <th class="wd-20p border-bottom-0">Email</th>
{{--                                <th class="wd-20p border-bottom-0">Role</th>--}}
{{--                                <th class="wd-15p border-bottom-0">Image</th>--}}
{{--                                <th class="wd-25p border-bottom-0">Action</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customers as $custoomer)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$custoomer->name}}</td>
                                    <td>{{$custoomer->email}}</td>
{{--                                    <td>{{$user->role}}</td>--}}
{{--                                    <td><img src="{{asset($user->profile_photo_path)}}" alt="" height="50" width="60"/></td>--}}
{{--                                    <td>--}}
{{--                                        <a href="{{route('user.edit', ['id' => $user->id])}}" class="btn btn-success btn-sm rounded-0">--}}
{{--                                            <i class="fa fa-edit"></i>--}}
{{--                                        </a>--}}
{{--                                        <a href="{{route('user.delete', ['id' => $user->id])}}" onclick="return confirm('Are you sure to delete this..');" class="btn btn-danger btn-sm rounded-0">--}}
{{--                                            <i class="fa fa-trash"></i>--}}
{{--                                        </a>--}}
{{--                                    </td>--}}
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
