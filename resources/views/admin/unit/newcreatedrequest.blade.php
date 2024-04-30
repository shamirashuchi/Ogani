@extends('admin.master')
@section('title', 'Manage Category')

@section('body')

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-10 mx-auto">
            <div class="card  mt-5 site-btn">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title text-white fs-1">All Unit Information</h3>
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
                                <th class="wd-15p border-bottom-0">code</th>
                                <th class="wd-15p border-bottom-0">Action</th>
                                <th class="wd-10p border-bottom-0">Status</th>
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
                                    <td style="white-space: wrap;">{{$unit->action}}</td>
                                    <td>{{$unit->status}}</td>
                                    <td>
                                        <a href="{{route('unit.deleterequest', ['id' => $unit->id])}}" class="btn bg-danger btn-sm rounded-0 text-white">
                                            Delete
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
