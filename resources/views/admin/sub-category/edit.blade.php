@extends('admin.master')
@section('title', 'Edit Sub-Category')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card  mt-5 site-btn">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title">Edit sub-category Form</h3>
                </div>
                <div class="card-body text-white">
                    <p class="text-muted">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('sub-category.update', ['id' => $subCateogory->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Category Name</label>
                            <div class="col-md-9">
                                <select class="form-control" name="category_id">
                                    <option value=""> -- Select Category Name -- </option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" @selected($category->id == $subCateogory->category_id)>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Sub-Category Name</label>
                            <div class="col-md-9">
                                <input class="form-control" id="firstName" value="{{$subCateogory->name}}" placeholder="Brand Name" type="text" name="name"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Sub-Category Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="lastName" placeholder="Sub-Category Description" name="description">{{$subCateogory->description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Sub-Category Image</label>
                            <div class="col-md-9">
                                <input class="form-control bg-white" id="email" type="file" name="image"/>
                                <img src="{{asset($subCateogory->image)}}" alt="" height="100" width="100"/>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 form-label">Publication Status</label>
                            <div class="col-md-9">
                                <label><input type="radio" name="status" {{$subCateogory->status == 1 ? 'checked' : ''}} value="1"> Published</label>
                                <label><input type="radio" name="status" {{$subCateogory->status == 0 ? 'checked' : ''}} value="0"> Unpublished</label>
                            </div>
                        </div>
                        <div class="row">
                        <button class="btn bg-white text-success mx-auto col-md-4" type="submit">Update Sub-Category Info</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

