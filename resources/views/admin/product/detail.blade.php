@extends('admin.master')
@section('title', 'Product Detail')

@section('body')
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card mt-5 site-btn">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title text-white fs-1">Product Detail Information</h3>
                </div>
                <div class="card-body text-white">
                    <p class="text-muted text-white">{{session('message')}}</p>
                    <table class="table table-bordered table-hover text-nowrap bg-white">
                        <tr>
                            <th>Product manager</th>
                            <td>{{$product->product_manager_id}}</td>
                        </tr>
                        <tr>
                            <th>Product Id</th>
                            <td>{{$product->id}}</td>
                        </tr>
                        <tr>
                            <th>Product Name</th>
                            <td>{{$product->name}}</td>
                        </tr>
                        <tr>
                            <th>Category Name</th>
                            <td>{{isset($product->category->name) ? $product->category->name : ''}}</td>
                        </tr>
                        <tr>
                            <th>Sub Category Name</th>
                            <td>{{isset($product->subCategory->name) ? $product->subCategory->name : ''}}</td>
                        </tr>
                        <tr>
                            <th>Brand Name</th>
                            <td>{{isset($product->brand->name) ? $product->brand->name : ''}}</td>
                        </tr>
                        <tr>
                            <th>Unit Name</th>
                            <td>{{isset($product->unit->name) ? $product->unit->name : ''}}</td>
                        </tr>
                        <tr>
                            <th>Product Code</th>
                            <td>{{$product->code}}</td>
                        </tr>
                        <tr>
                            <th>Short Description</th>
                            <td>{{$product->short_description}}</td>
                        </tr>
                        <tr>
                            <th>Long Description</th>
                            <td>{!! $product->long_description !!}</td>
                        </tr>
                        <tr>
                            <th>Meta Title</th>
                            <td>{{$product->meta_title}}</td>
                        </tr>
                        <tr>
                            <th>Meta Description</th>
                            <td>{{$product->meta_description}}</td>
                        </tr>
                        <tr>
                            <th>Product Regular Price</th>
                            <td>{{$product->regular_price}}</td>
                        </tr>
                        <tr>
                            <th>Product Selling Price</th>
                            <td>{{$product->selling_price}}</td>
                        </tr>
                        <tr>
                            <th>Stock Amount</th>
                            <td>{{$product->stock_amount}}</td>
                        </tr>
                        <tr>
                            <th>Product Image</th>
                            <td>
                                <img src="{{asset($product->image)}}" alt="" width="70px" height="70px">
                            </td>
                        </tr>
                        <tr>
                            <th>Product Other Image</th>
                            <td>@foreach($product->otherImage as $otherImage)
                                    <img src="{{asset($otherImage->image)}}" alt="" width="70px" height="70px">
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>Product Feature Status</th>
                            <td>{{$product->featured_status}}</td>
                        </tr>
                        <tr>
                            <th>Product Trending Status</th>
                            <td>{{$product->trending_status}}</td>
                        </tr>
                        <tr>
                            <th>Total Sales</th>
                            <td>{{$product->sales_count}}</td>
                        </tr>
                        <tr>
                            <th>Total View</th>
                            <td>{{$product->hit_count}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


