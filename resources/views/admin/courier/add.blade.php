@extends('admin.master')
@section('title', 'Add Courier')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Courier</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Courier</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Courier</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Add Courier Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('courier.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">Courier Name</label>
                            <div class="col-md-9">
                                <input class="form-control" id="" required placeholder="Courier Name" type="text" name="name"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">Courier Email</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" required placeholder="User Email" name="email"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">Courier Mobile</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" required placeholder="User Email" name="mobile"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Courier Address</label>
                            <div class="col-md-9">
                                <textarea class="form-control" required placeholder="Courier Address" name="address"></textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Courier Image</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" required name="image"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">Courier Cost</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" required placeholder="Courier Cost" name="cost"/>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Create New Courier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
