@extends('admin.master')
@section('title', 'Manage Category')

@section('body')

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-10 mx-auto">
            <div class="card  mt-5 site-btn">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title text-white fs-1">All Category Information</h3>
                </div>
                <div class="card-body">
                    <p class="text-white text-center">{{session('message')}}</p>
                    <div class="table-responsive bg-white">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">SL NO</th>
                                <th class="wd-15p border-bottom-0">User_id</th>
                                <th class="wd-15p border-bottom-0">Flag</th>
                                <th class="wd-15p border-bottom-0">Field</th>
                                <th class="wd-20p border-bottom-0">OldValue</th>
                                <th class="wd-15p border-bottom-0">NewValue</th>
                                <th class="wd-15p border-bottom-0">Status</th>
                                <th class="wd-15p border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($updateproducts as $category)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$category->user_id}}</td>
                                    <td>{{$category->flag}}</td>
                                    <td>{{$category->field}}</td>
                                    <td>
                                        @if($category->field === 'image')
                                            <img src="{{asset($category->old_value)}}" alt="" height="50" width="60"/>
                                        @else
                                            {{$category->old_value}}
                                        @endif
                                    </td>
                                    <td>
                                        @if($category->field === 'image')
                                            <img src="{{asset($category->new_value)}}" alt="" height="50" width="60"/>
                                        @else
                                            {{$category->new_value}}
                                        @endif
                                    </td>
                                    <td>{{$category->action}}</td>
                                    <td>
                                        <a href="{{route('product.acceptbyadmin', ['id' => $category->id])}}" class="btn site-btn btn-sm rounded-0 text-white">
                                            Accept
                                        </a>
                                        <a href="{{route('product.cancelbyadmin', ['id' => $category->id])}}"  class="btn btn-danger btn-sm rounded-0">
                                            Cancel
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                            @foreach($updateimages as $productData)
                                @foreach($productData as $userId => $imagess)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$imagess->first()->product_id}}</td>
                                        <td>{{$userId}}</td>
                                        <td>Other image</td>
                                        <td>
                                                                                @php
                                                                                    $productImages = \App\Models\ProductImage::where('product_id',$imagess->first()->product_id)->get();
                                                                                @endphp
                                                                                @foreach($productImages as $productImage)
                                                                                    <img src="{{asset($productImage->image)}}" alt="" height="50" width="60"/>
                                                                                @endforeach
                                                                            </td>
                                        <td>
                                            @foreach($imagess as $image)
                                                <img src="{{asset($image->image)}}" alt="" height="50" width="60"/>
                                            @endforeach
                                        </td>
                                        <td>Requested</td>
                                        <td>
                                            @if($imagess->isNotEmpty())
                                            <a href="{{route('product.acceptbyadmin', ['id' => $imagess->first()->product_id])}}" class="btn site-btn btn-sm rounded-0 text-white">
                                                Accept
                                            </a>
                                            @endif
                                            <a href="{{route('product.cancelbyadmin', ['id' => $imagess->first()->product_id])}}"  class="btn btn-danger btn-sm rounded-0">
                                                Cancel
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
@endsection

