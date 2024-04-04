@extends('admin.master')
@section('title', 'Edit Brand')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card  mt-5 site-btn">
                <div class="card-header border-bottom  mx-auto">
                    <h3 class="card-title  text-white fs-1">Edit Brand Form</h3>
                </div>
                <div class="card-body text-white">
                    <p class="text-muted">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('brand.update', ['id' => $brand->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Brand Name</label>
                            <div class="col-md-9">
                                <input class="form-control" id="firstName" value="{{$brand->name}}" placeholder="Brand Name" type="text" name="name"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Brand Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="lastName" placeholder="Brand Description" name="description">{{$brand->description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Brand Image</label>
                            <div class="col-md-9">
                                <input class="form-control bg-white" id="email" type="file" name="image"/>
                                <img src="{{asset($brand->image)}}" alt="" height="100" width="100"/>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 form-label">Publication Status</label>
                            <div class="col-md-9">
                                <label><input type="radio" name="status" {{$brand->status == 1 ? 'checked' : ''}} value="1"> Published</label>
                                <label><input type="radio" name="status" {{$brand->status == 0 ? 'checked' : ''}} value="0"> Unpublished</label>
                            </div>
                        </div>
                        <div class="row">
                        <button class="btn bg-white text-success mx-auto col-md-4" type="submit">Update Brand Info</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

