@extends('admin.master')
@section('title', 'Manage Category')

@section('body')

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-10 mx-auto">
            <div class="card  mt-5 site-btn">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title text-white fs-1">All Unit update Information</h3>
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
                            @foreach($updateunits as $unit)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$unit->user_id}}</td>
                                    <td>{{$unit->flag}}</td>
                                    <td>{{$unit->field}}</td>
                                    <td>{{$unit->old_value}}</td>
                                    <td>{{$unit->new_value}}</td>
                                    <td>{{$unit->action}}</td>
                                    <td>
                                        <a href="{{route('unit.acceptbyadmin', ['id' => $unit->id])}}" class="btn site-btn btn-sm rounded-0 text-white">
                                            Accept
                                        </a>
                                        <a href="{{route('unit.cancelbyadmin', ['id' => $unit->id])}}"  class="btn btn-danger btn-sm rounded-0">
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

