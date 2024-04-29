@extends('admin.master')
@section('title', 'Manage Sub-category')

@section('body')
    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            {{-- Display success message if available --}}
            @if(request()->has('mes'))
                <div class="alert alert-success" role="alert">
                    {{ request()->get('mes') }}
                </div>
            @endif
            <div class="card site-btn">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title text-white fs-1">All Sub-category Information</h3>
                </div>
                <div class="card-body">
                    <p class="text-white text-center">{{session('message')}}</p>
                    <div class="table-responsive bg-white">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">SL NO</th>
                                <th class="wd-15p border-bottom-0">Category Name</th>
                                <th class="wd-15p border-bottom-0">Name</th>
                                <th class="wd-20p border-bottom-0">Description</th>
                                <th class="wd-15p border-bottom-0">Image</th>
                                <th class="wd-10p border-bottom-0">Status</th>
                                @isset(Auth::user()->role)
                                    @if(Auth::user()->role == "Category Manager"  || Auth::user()->role == "Admin")
                                <th class="wd-25p border-bottom-0">Action</th>
                                    @endif
                                @else
                                    <span></span>
                                @endisset
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subCateogories as $subCateogory)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{isset($subCateogory->category->name) ? $subCateogory->category->name : ' '}}</td>
                                    <td>{{$subCateogory->name}}</td>
                                    <td style="white-space: wrap;">{{$subCateogory->description}}</td>
                                    <td><img src="{{asset($subCateogory->image)}}" alt="" height="50" width="60"/></td>
                                    <td>{{$subCateogory->status}}</td>
                                    @isset(Auth::user()->role)
                                        @if(Auth::user()->role == "Category Manager"  || Auth::user()->role == "Admin")
                                    <td>
                                        @isset(Auth::user()->role)
                                            @if(Auth::user()->role == "Category Manager")
                                        <a href="{{route('sub-category.edit', ['id' => $subCateogory->id])}}" class="btn site-btn btn-sm rounded-0">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                            @endif
                                        @else
                                            <span></span>
                                        @endisset
                                        @isset(Auth::user()->role)
                                            @if(Auth::user()->role == "Admin")
                                        <a href="{{route('sub-category.delete', ['id' => $subCateogory->id])}}" onclick="return confirm('Are you sure to delete this...');" class="btn btn-danger btn-sm rounded-0">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                                @endif
                                            @else
                                                <span></span>
                                            @endisset
                                    </td>
                                        @endif
                                    @else
                                        <span></span>
                                    @endisset
                                </tr>
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
