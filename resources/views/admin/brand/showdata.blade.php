@extends('admin.master')
@section('title', 'Manage Category')

@section('body')

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-10 mx-auto">
            <div class="card  mt-5 site-btn">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title text-white fs-1">All Brand Information</h3>
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
                            @foreach($updatecategories as $category)
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
                                        <a href="{{route('brand.deletebyuser', ['id' => $category->id])}}" class="btn bg-danger btn-sm rounded-0 text-white">
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
<script>
    window.onload = function() {
        const message = new URLSearchParams(window.location.search).get('mes');
        if (message) {
            Swal.fire({
                title: '',
                text: message,
                icon: 'success',
                confirmButtonText: 'OK',
                confirmButtonColor: '#7fad39'
            });
        }
    }
</script>
