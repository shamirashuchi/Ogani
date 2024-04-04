@extends('admin.master')
@section('title', 'Add Unit')

@section('body')
    <div class="row m-2">
        <div class="col-md-12">
            <div class="card site-btn text-white">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title  text-white fs-1">Add Unit Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted  text-white-50 fs-4">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('unit.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <label for="firstName" class="col-md-3 form-label">Unit Name</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <input class="form-control" id="firstName" placeholder="Unit Name" type="text" name="name"/>
                            </div>
                        </div>
                        <div class="row">
                            <label for="firstName" class="col-md-3 form-label">Unit Code</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <input class="form-control" id="firstName" placeholder="Unit Code" type="text" name="code"/>
                            </div>
                        </div>
                        <div class="row">
                            <label for="lastName" class="col-md-3 form-label">Unit Description</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <textarea class="form-control" id="lastName" placeholder="Unit Description" name="description"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 form-label">Publication Status</label>
                            <div class="col-md-12">
                                <label><input type="radio" name="status" checked value="1"> Published</label>
                            </div>
                            <div class="col-md-12">
                                <label><input type="radio" name="status" value="0"> Unpublished</label>
                            </div>
                        </div>
                        <div class="row">
                        <button class="btn  bg-white text-success col-md-4 mx-auto" type="submit">Create New Unit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

