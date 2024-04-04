@extends('admin.master')
@section('title', 'Add Product')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card site-btn text-white">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title text-white fs-1">Add Product Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted  text-white-50 fs-4">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <label for="firstName" class="col-md-3 form-label">Category Name</label>
                        </div>
                            <div class="row mb-4">
                            <div class="col-md-12">
                                <select class="form-control" name="category_id" onchange="getSubCategory(this.value)" style="height: 40px;">
                                    <option value=""> -- Select Category Name -- </option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label for="firstName" class="col-md-3 form-label">Sub Category Name</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <select class="form-control" name="sub_category_id" id="subCategoryId" style="height: 40px;">
                                    <option value=""> -- Select Sub Category Name -- </option>
                                    @foreach($subCategories as $subCategory)
                                        <option value="{{$subCategory->id}}">{{$subCategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label for="firstName" class="col-md-3 form-label">Brand Name</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <select class="form-control" name="brand_id" style="height: 40px;">
                                    <option value=""> -- Select Brand Name -- </option>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label for="firstName" class="col-md-3 form-label">Unit Name</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <select class="form-control" name="unit_id" style="height: 40px;">
                                    <option value=""> -- Select unit Name -- </option>
                                    @foreach($units as $unit)
                                        <option value="{{$unit->id}}">{{$unit->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-3 form-label">Product Name</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <input class="form-control" id="" placeholder="Product Name" type="text" name="name" style="height: 40px;"/>
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-3 form-label">Product Code</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <input class="form-control" id="" placeholder="Product Code" type="text" name="code" style="height: 40px;"/>
                            </div>
                        </div>
                        <div class="row">
                            <label for="lastName" class="col-md-3 form-label">Short Description</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <textarea class="form-control" id="" placeholder="Short Description" name="short_description"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <label for="lastName" class="col-md-3 form-label">Long Description</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <textarea class="form-control" id="summernote" placeholder="Long Description" name="long_description"></textarea>
                            </div>
                        </div>
                            <div class="row">
                                <label for="lastName" class="col-md-3 form-label">Meta Title</label>
                            </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <textarea class="form-control" id="" placeholder="Meta title" name="meta_title" style="height: 40px;"></textarea>
                            </div>
                        </div>
                            <div class="row">
                                <label for="lastName" class="col-md-3 form-label">Meta Description</label>
                            </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <textarea class="form-control" id="" placeholder="Meta Description" name="meta_description"></textarea>
                            </div>
                        </div>
                            <div class="row">
                                <label for="" class="col-md-3 form-label">Product Price</label>
                            </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="">
                                    <input class="form-control" id="" placeholder="Regular Price" type="number" name="regular_price"/>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="">
                                    <input class="form-control" id="" placeholder="Selling Price" type="number" name="selling_price"/>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-3 form-label">Stock Amount</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <input class="form-control bg-white" id="" placeholder="Stock Amount" type="number" name="stock_amount"/>
                            </div>
                        </div>
                        <div class="row">
                            <label for="email" class="col-md-3 form-label">Product Image</label>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control bg-white" id="" type="file" name="image" accept="image/*"/>
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-3 form-label">Product Other Image</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <input class="form-control bg-white" id="" type="file" name="other_image[]" multiple accept="image/*"/>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 form-label">Publication Status</label>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label><input type="radio" name="status" checked value="1"> Published</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label><input type="radio" name="status" value="0">Unublished</label>
                            </div>
                        </div>
                        <div class="row">
                        <button class="btn  bg-white text-success col-md-4 mx-auto" type="submit">Create New Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
