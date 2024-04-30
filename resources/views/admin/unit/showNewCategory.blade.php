@extends('admin.master')
@section('title', 'Manage Category')

@section('body')

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-10 mx-auto">
            <div class="card  mt-5 site-btn">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title text-white fs-1">All requested Unit Information</h3>
                </div>
                <div class="card-body">
                    <p class="text-white text-center">{{session('message')}}</p>
                    <div class="table-responsive bg-white">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">SL NO</th>
                                <th class="wd-15p border-bottom-0">User_id</th>
                                <th class="wd-15p border-bottom-0">Name</th>
                                <th class="wd-15p border-bottom-0">Flag</th>
                                <th class="wd-20p border-bottom-0">Description</th>
                                <th class="wd-15p border-bottom-0">Code</th>
                                <th class="wd-10p border-bottom-0">Status</th>
                                <th class="wd-15p border-bottom-0">State</th>
                                <th class="wd-25p border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($units as $unit)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$unit->user_id}}</td>
                                    <td>{{$unit->name}}</td>
                                    <td>{{$unit->flag}}</td>
                                    <td style="white-space: wrap;">{{$unit->description}}</td>
                                    <td>{{$unit->code}}</td>
                                    <td>{{$unit->status}}</td>
                                    <td style="white-space: wrap;">{{$unit->action}}</td>
                                    <td>
                                        <a href="{{route('unit.accept', ['id' => $unit->id])}}" class="btn site-btn btn-sm rounded-0 text-white">
                                            Accept
                                        </a>
                                        <a href="{{route('unit.cancel', ['id' => $unit->id])}}"  class="btn btn-danger btn-sm rounded-0">
                                            Cancel
                                        </a>
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
