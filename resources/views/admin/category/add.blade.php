@extends('admin.master')
@section('title', 'Add Category')

@section('body')

    <div class="row m-2">
        <div class="col-md-12">
            <div class="card site-btn">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title text-white fs-1">Add Category Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted text-white-50 fs-4">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <label for="firstName" class="col-md-3 form-label text-white">Category Name</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <input class="form-control" id="firstName" placeholder="Category Name" type="text" name="name"/>
                            </div>
                        </div>
                        <div class="row">
                            <label for="lastName" class="col-md-3 form-label text-white">Category Description</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <textarea class="form-control" id="lastName" placeholder="Category Description" name="description"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <label for="email" class="col-md-3 form-label text-white">Category Image</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <input class="form-control bg-white" id="email" type="file" name="image"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-12 form-label text-white">Publication Status</label>
                            <div class="col-md-12">
                                <label class="text-white"><input  type="radio" name="status" value="1"> Published</label>
                            </div>
                            <div class="col-md-12">
                                <label class="text-white"><input type="radio" name="status" value="0"> Unpublished</label>
                            </div>
                        </div>
                        <div class="row">
                        <button class="btn bg-white text-success col-md-4 mx-auto" type="submit">Create New Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
