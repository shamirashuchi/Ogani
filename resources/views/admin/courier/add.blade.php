@extends('admin.master')
@section('title', 'Add Courier')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card site-btn text-white">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title text-white fs-1">Add Courier Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted text-white-50 fs-4">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('courier.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <label for="" class="col-md-3 form-label">Courier Name</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <input class="form-control" id="" required placeholder="Courier Name" type="text" name="name"/>
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-3 form-label">Courier Email</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <input type="email" class="form-control" required placeholder="User Email" name="email"/>
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-3 form-label">Courier Mobile</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <input type="number" class="form-control" required placeholder="User Email" name="mobile"/>
                            </div>
                        </div>
                        <div class="row">
                            <label for="lastName" class="col-md-3 form-label">Courier Address</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <textarea class="form-control" required placeholder="Courier Address" name="address"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <label for="lastName" class="col-md-3 form-label">Courier Image</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <input type="file" class="form-control bg-white" required name="image"/>
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-3 form-label">Courier Cost</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <input type="number" class="form-control" required placeholder="Courier Cost" name="cost"/>
                            </div>
                        </div>
                        <div class="row">
                        <button class="btn bg-white text-success col-md-4 mx-auto" type="submit">Create New Courier</button>
    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
