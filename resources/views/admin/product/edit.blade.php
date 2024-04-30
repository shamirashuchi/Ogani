@extends('admin.master')
@section('title', 'Add Product')

@section('body')
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card mt-5 site-btn">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title text-white fs-1">Edit Product Form</h3>
                </div>
                <div class="card-body text-white">
                    <p class="text-muted">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('product.update', ['id' => $product->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <label for="firstName" class="col-md-3 form-label">Product Manager Name</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <select id="productManagerName" class="form-control" name="product_manager_id"  style="height: 40px;">
                                    <option value=""> -- Select Product Manager Name -- </option>
                                    @foreach($product_managers as $product_manager)
                                        <option value="{{$product_manager->id}}" @selected($product->product_manager->id == $product_manager->id)>{{$product_manager->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Category Name</label>
                            <div class="col-md-9">
                                <select id="categoryIdSelect" class="form-control" name="category_id" style="height: 40px;">
                                    <option value=""> -- Select Category Name -- </option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" @selected($product->category_id == $category->id)>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Sub Category Name</label>
                            <div class="col-md-9">
                                <select id="subCategoryIdSelect" class="form-control" name="sub_category_id" style="height: 40px;">
                                    <option value=""> -- Select Sub Category Name -- </option>
                                    @foreach($subCategories as $subCategory)
                                        <option value="{{$subCategory->id}}"@selected($product->sub_category_id == $subCategory->id)>{{$subCategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Brand Name</label>
                            <div class="col-md-9">
                                <select id="brandIdSelect" class="form-control" name="brand_id" style="height: 40px;">
                                    <option value=""> -- Select Brand Name -- </option>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}"@selected($product->brand_id == $brand->id)>{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Unit Name</label>
                            <div class="col-md-9">
                                <select id="unitIdSelect" class="form-control" name="unit_id" style="height: 40px;">
                                    <option value=""> -- Select unit Name -- </option>
                                    @foreach($units as $unit)
                                        <option value="{{$unit->id}}" @selected($product->unit_id == $unit->id)>{{$unit->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">Product Name</label>
                            <div class="col-md-9">
                                <input id="productNameInput" class="form-control" id="" placeholder="Product Name" type="text" name="name" value="{{$product->name}}"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">Product Code</label>
                            <div class="col-md-9">
                                <input id="productCodeInput" class="form-control" id="" placeholder="Product Code" type="text" name="code" value="{{$product->code}}"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Short Description</label>
                            <div class="col-md-9">
                                <textarea id="shortDescriptionTextarea" class="form-control" id="" placeholder="Short Description" name="short_description">{{$product->short_description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Long Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="longDescriptionTextarea" placeholder="Long Description" name="long_description">{{$product->long_description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Meta Title</label>
                            <div class="col-md-9">
                                <textarea id="metaTitle" class="form-control"  placeholder="Meta title" name="meta_title">{{$product->meta_title}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Meta Description</label>
                            <div class="col-md-9">
                                <textarea id="metaDescription" class="form-control" id="" placeholder="Meta Description" name="meta_description">{{$product->meta_description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">Product Price</label>
                            <div class="col-md-9">
                                <div class="">
                                    <input class="form-control mb-3" id="regularPrice" placeholder="Regular Price" type="number" name="regular_price" value="{{$product->regular_price}}"/>
                                    <input class="form-control" id="sellingPrice" placeholder="Selling Price" type="number" name="selling_price" value="{{$product->selling_price}}"/>
                                </div>

                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">Stock Amount</label>
                            <div class="col-md-9">
                                <input class="form-control" id="stockAmount" placeholder="Stock Amount" type="number" name="stock_amount" value="{{$product->stock_amount}}"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Product Image</label>
                            <div class="col-md-9">
                                <input id="productImage" class="form-control bg-white" id="" type="file" name="image" accept="image/*"/>
                                <img src="{{asset($product->image)}}" alt="" height="70px" width="70px">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">Product Other Image</label>
                            <div class="col-md-9">
                                <input class="form-control bg-white" id="otherImageInput" type="file" name="other_image[]" multiple accept="image/*"/>
                              <div id="otherImagePreview">
                                  @foreach($product->otherImage as $otherImage)
                                      <img src="{{asset($otherImage->image)}}" alt="" width="70px" height="70px">
                                  @endforeach
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 form-label">Publication Status</label>
                            <div class="col-md-9">
                                <label><input type="radio" name="status" {{$product->status == 1 ? 'checked' : ' '}} checked value="1"> Published</label>
                                <label><input type="radio" name="status" {{$product->status == 0 ? 'checked' : ' '}} value="0"> Unpublished</label>
                            </div>
                        </div>
                        <div class="row">
                        <button class="btn bg-white text-success mx-auto col-md-4" type="submit">Update Product Info</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    console.log('Script executed');
    document.addEventListener('DOMContentLoaded', function() {
        console.log('DOM content loaded');

        document.getElementById('updateProductButton').addEventListener('click', function() {
            console.log("clicked");

            var formData = new FormData();
            var statusFormData = new FormData();
            var token = '{{ csrf_token() }}';
            formData.append('_token', token);
            statusFormData.append('_token', token);


            // Product Manager Name
            var productManagerIdOldValue = '{{$product->product_manager_id}}';
            var productManagerIdNewValue = document.getElementById('productManagerName').value;
            if (productManagerIdOldValue !== productManagerIdNewValue) {
                formData.append('field', 'product_manager_id');
                formData.append('old_value', productManagerIdOldValue);
                formData.append('new_value', productManagerIdNewValue);
            }




            var categoryIdOldValue = '{{$product->category_id}}';
            var categoryIdNewValue =  document.getElementById('categoryIdSelect').value;
                if (categoryIdOldValue !== categoryIdNewValue) {
                    formData.append('field', 'category_id');
                    formData.append('old_value', categoryIdOldValue);
                    formData.append('new_value', categoryIdNewValue);
                }





            var subCategoryIdOldValue = '{{$product->sub_category_id}}';
            var subCategoryIdNewValue = document.getElementById('subCategoryIdSelect').value;
                if (subCategoryIdOldValue !== subCategoryIdNewValue) {
                    formData.append('field', 'sub_category_id');
                    formData.append('old_value', subCategoryIdOldValue);
                    formData.append('new_value', subCategoryIdNewValue);
                }


                var brandIdOldValue = '{{$product->brand_id}}';
                var brandIdNewValue = document.getElementById('brandIdSelect').value;
                if (brandIdOldValue !== brandIdNewValue) {
                    formData.append('field', 'brand_id');
                    formData.append('old_value', brandIdOldValue);
                    formData.append('new_value', brandIdNewValue);
                }



                var unitIdOldValue = '{{$product->unit_id}}';
                var unitIdNewValue =  document.getElementById('unitIdSelect').value;
                if (unitIdOldValue !== unitIdNewValue) {
                    formData.append('field', 'unit_id');
                    formData.append('old_value', unitIdOldValue);
                    formData.append('new_value', unitIdNewValue);
                }

                var productNameOldValue = '{{$product->name}}';
                var productNameNewValue = document.getElementById('productNameInput').value;
                if (productNameOldValue !== productNameNewValue) {
                    formData.append('field', 'name');
                    formData.append('old_value', productNameOldValue);
                    formData.append('new_value', productNameNewValue);
                }


                var productCodeOldValue = '{{$product->code}}';
                var productCodeNewValue = document.getElementById('productCodeInput').value;
                if (productCodeOldValue !== productCodeNewValue) {
                    formData.append('field', 'code');
                    formData.append('old_value', productCodeOldValue);
                    formData.append('new_value', productCodeNewValue);
                }


                var shortDescriptionOldValue = '{{$product->short_description}}';
                var shortDescriptionNewValue =  document.getElementById('shortDescriptionTextarea').value;
                if (shortDescriptionOldValue !== shortDescriptionNewValue) {
                    formData.append('field', 'short_description');
                    formData.append('old_value', shortDescriptionOldValue);
                    formData.append('new_value', shortDescriptionNewValue);
                }

            var longDescriptionOldValue = '{{$product->long_description}}';
            var longDescriptionNewValue =   document.getElementById('longDescriptionTextarea').value;
            if (longDescriptionOldValue !== longDescriptionNewValue) {
                formData.append('field', 'long_description');
                formData.append('old_value', longDescriptionOldValue);
                formData.append('new_value', longDescriptionNewValue);
            }
            var metaTitleOldValue = '{{$product->meta_title}}';
            var metaTitleNewValue = document.getElementById('metaTitle').value;
                if (metaTitleOldValue !== metaTitleNewValue) {
                    formData.append('field', 'meta_title');
                    formData.append('old_value', metaTitleOldValue);
                    formData.append('new_value', metaTitleNewValue);
                }

            var metaDescriptionOldValue = '{{$product->meta_description}}';
            var metaDescriptionNewValue = document.getElementById('metaDescription').value;
                if (metaDescriptionOldValue !== metaDescriptionNewValue) {
                    formData.append('field', 'meta_description');
                    formData.append('old_value', metaDescriptionOldValue);
                    formData.append('new_value', metaDescriptionNewValue);
                }


            var regularPriceOldValue = '{{$product->regular_price}}';
            var regularPriceNewValue = document.getElementById('regularPrice').value;
                if (regularPriceOldValue !== regularPriceNewValue) {
                    formData.append('field', 'regular_price');
                    formData.append('old_value', regularPriceOldValue);
                    formData.append('new_value', regularPriceNewValue);
                }


            var sellingPriceOldValue = '{{$product->selling_price}}';
            var sellingPriceNewValue = document.getElementById('sellingPrice').value;
                if (sellingPriceOldValue !== sellingPriceNewValue) {
                    formData.append('field', 'selling_price');
                    formData.append('old_value', sellingPriceOldValue);
                    formData.append('new_value', sellingPriceNewValue);
                }


            var stockAmountOldValue = '{{$product->stock_amount}}';
                var stockAmountNewValue = document.getElementById('stockAmount').value;
                if (stockAmountOldValue !== stockAmountNewValue) {
                    formData.append('field', 'stock_amount');
                    formData.append('old_value', stockAmountOldValue);
                    formData.append('new_value', stockAmountNewValue);
                }


            var ProductImageOldValue = '{{$product->image}}';
            var ProductImageNewValue = document.getElementById('productImage').files[0];
            if (ProductImageNewValue) {
                formData.append('field', "image");
                formData.append('old_value', ProductImageOldValue);
                formData.append('new_value', ProductImageNewValue);
            }


            var otherImagePreview = document.getElementById('otherImagePreview').files;
            var otherImageInput = document.getElementById('otherImageInput').files;
            if (otherImageInput) {
                formData.append('field', "other_image[]");
                formData.append('old_value', otherImagePreview);
                formData.append('new_value', otherImageInput);
            }

            var ProductPublicationStatusOldValue = '{{$product->status}}';
            var ProductPublicationStatusNewValue = document.querySelector('input[name="status"]:checked');
            if (ProductPublicationStatusOldValue != parseInt(ProductPublicationStatusNewValue.value)){
                // If a new value is selected and it's different from the old value
                statusFormData.append('field', "status");
                statusFormData.append('old_value', ProductPublicationStatusOldValue);
                statusFormData.append('new_value', parseInt(ProductPublicationStatusNewValue.value).toString());
            }
});
    });
</script>
