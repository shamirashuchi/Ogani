@extends('admin.master')
@section('title', 'Add User')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">User</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">User</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add User</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Add User Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('user.update', ['id' => $user->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">User Name</label>
                            <div class="col-md-9">
                                <input class="form-control" id="" value="{{$user->name}}" required placeholder="User Name" type="text" name="name"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">User role</label>
                            <div class="col-md-9">
                                <select class="form-select" id="role" required name="role">
                                    <option value="">Select User Role</option>
                                    <option value="Admin" {{ $user->role === 'Admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="Category Manager" {{ $user->role === 'Category Manager' ? 'selected' : '' }}>Category Manager</option>
                                    <option value="Brand Manager" {{ $user->role === 'Brand Manager' ? 'selected' : '' }}>Brand Manager</option>
                                    <option value="Unit Manager" {{ $user->role === 'Unit Manager' ? 'selected' : '' }}>Unit Manager</option>
                                    <option value="Product Manager" {{ $user->role === 'Product Manager' ? 'selected' : '' }}>Product Manager</option>
                                    <option value="Employee" {{ $user->role === 'Employee' ? 'selected' : '' }}>Employee</option>
                                    <!-- Add more options if needed -->
                                </select>
                            </div>

                        </div>
                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">User Email</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" value="{{$user->email}}" required placeholder="User Email" name="email"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">User Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" value="{{$user->password}}" required placeholder="User Password" name="password"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">User Image</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control"  name="image"/>
                                <img src="{{asset($user->profile_photo_path)}}" alt="" height="100" width="100"/>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">update User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

