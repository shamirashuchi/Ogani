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
                    <form class="form-horizontal" action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">User Name</label>
                            <div class="col-md-9">
                                <input class="form-control" id="" required placeholder="User Name" type="text" name="name"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">User role</label>
                            <div class="col-md-9">
                                <select class="form-select" id="role" required name="role">
                                    <option value="">Select User Role</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Category Manager">Category Manager</option>
                                    <option value="Brand Manager">Brand Manager</option>
                                    <option value="Unit Manager">Unit Manager</option>
                                    <option value="Product Manager">Product Manager</option>
                                    <option value="Employee">Employee</option>
                                    <!-- Add more options if needed -->
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">User Email</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" required placeholder="User Email" name="email"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">User Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" required placeholder="User Password" name="password"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">User Image</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" required name="image"/>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Create New User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
