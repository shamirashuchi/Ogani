@extends('admin.master')
@section('title', 'Manage User')

@section('body')
    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12  mx-auto">
            <div class="card  mt-5 site-btn">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title text-white fs-1">All Courier Information</h3>
                </div>
                <div class="card-body">
                    <p class="text-white text-center">{{session('message')}}</p>
                    <div class="table-responsive bg-white">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">SL NO</th>
                                <th class="wd-15p border-bottom-0">Name</th>
                                <th class="wd-20p border-bottom-0">Email</th>
                                <th class="wd-20p border-bottom-0">Mobile</th>
                                <th class="wd-15p border-bottom-0">Image</th>
                                <th class="wd-25p border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($couriers as $courier)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$courier->name}}</td>
                                    <td>{{$courier->email}}</td>
                                    <td>{{$courier->mobile}}</td>
                                    <td><img src="{{asset($courier->logo)}}" alt="" height="50" width="60"/></td>
                                    <td>
                                        <a href="{{route('courier.edit', $courier->id)}}" class="btn btn-success btn-sm rounded-0">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="{{route('courier.destroy', $courier->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure to delete this..');" class="btn btn-danger btn-sm rounded-0">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
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
