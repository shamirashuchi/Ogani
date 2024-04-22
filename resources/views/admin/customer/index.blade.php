@extends('admin.master')
@section('title', 'Manage User')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">User</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">User</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage User</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">All User Information</h3>
                </div>
                <div class="card-body">
                    <p class="text-success text-center">{{session('message')}}</p>
                    <div class="table-responsive">
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
