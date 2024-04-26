@extends('admin.master')
@section('title', 'Edit Sub-Category')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card  mt-5 site-btn">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title">Edit sub-category Form</h3>
                </div>
                <div class="card-body text-white">
                    <p class="text-muted">{{session('message')}}</p>
{{--                    action="{{route('sub-category.update', ['id' => $subCateogory->id])}}" method="POST"--}}
                    <div class="form-horizontal"  method="GET" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Category Name</label>
                            <div class="col-md-9">
                                <select class="form-control" name="category_id">
                                    <option value=""> -- Select Category Name -- </option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" @selected($category->id == $subCateogory->category_id)>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Sub-Category Name</label>
                            <div class="col-md-9">
                                <input class="form-control"  id="subCategoryName" value="{{$subCateogory->name}}" placeholder="Brand Name" type="text" name="name"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Sub-Category Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="subCategoryDescription" placeholder="Sub-Category Description" name="description">{{$subCateogory->description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Sub-Category Image</label>
                            <div class="col-md-9">
                                <input class="form-control bg-white" id="subCategoryImage" type="file" name="image"/>
                                <img src="{{asset($subCateogory->image)}}" alt="" height="100" width="100"/>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 form-label">Publication Status</label>
                            <div class="col-md-9">
                                <label><input type="radio" id="statusPublished" name="status" {{$subCateogory->status == 1 ? 'checked' : ''}} value="1"> Published</label>
                                <label><input type="radio" id="statusUnpublished" name="status" {{$subCateogory->status == 0 ? 'checked' : ''}} value="0"> Unpublished</label>
                            </div>
                        </div>
                        <div class="row">
                        <button class="btn bg-white text-success mx-auto col-md-4"  id="updateSubCategoryButton" type="submit">Update Sub-Category Info</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



{{--    <script>--}}
{{--        console.log('Script executed');--}}
{{--        document.addEventListener('DOMContentLoaded', function() {--}}
{{--            console.log('DOM content loaded');--}}
{{--// Your code here--}}
{{--            document.getElementById('updateSubCategoryButton').addEventListener('click', function() {--}}
{{--  console.log("clicked");--}}
{{--        // document.getElementById('subCategoryName').addEventListener('change', function() {--}}
{{--        //     console.log("changed");--}}
{{--            var subCategoryNameOldValue = '{{$subCateogory->name}}';--}}
{{--            var subCategoryNameNewValue = document.getElementById('subCategoryName').value;--}}
{{--                if (subCategoryNameOldValue !== subCategoryNameNewValue) {--}}
{{--                    logSubCategoryChange('name', subCategoryNameOldValue, subCategoryNameNewValue, {{$subCateogory->id}});--}}
{{--                }--}}
{{--            console.log(subCategoryNameOldValue); // Check if this message appears in the console--}}
{{--                var subCategoryDescriptionOldValue = '{{$subCateogory->description}}';--}}
{{--                var subCategoryDescriptionNewValue = document.getElementById('subCategoryDescription').value;--}}
{{--                if (subCategoryDescriptionOldValue !== subCategoryDescriptionNewValue) {--}}
{{--                    logSubCategoryChange('description', subCategoryDescriptionOldValue, subCategoryDescriptionNewValue, {{$subCateogory->id}});--}}
{{--                }--}}
{{--            // Here you can proceed with your logic to capture and log the changes--}}

{{--        --}}{{--document.getElementById('subCategoryName').addEventListener('change', function(event) {--}}
{{--        --}}{{--    console.log(1);--}}
{{--        --}}{{--    var subCategoryNameOldValue = '{{$subCateogory->name}}';--}}
{{--        --}}{{--    var subCategoryNameNewValue = this.value;--}}
{{--        --}}{{--    logSubCategoryChange('name', subCategoryNameOldValue, subCategoryNameNewValue, {{$subCateogory->id}});--}}
{{--            --}}{{--var subCategoryDescriptionOldValue = '{{$subCateogory->description}}';--}}
{{--            --}}{{--var subCategoryDescriptionNewValue = document.getElementById('subCategoryDescription').value;--}}

{{--            --}}{{--// You can add similar code to capture old and new values for other fields--}}

{{--            --}}{{--// Check if any changes have been made--}}
{{--            --}}{{--if (subCategoryNameOldValue !== subCategoryNameNewValue) {--}}
{{--            --}}{{--    logSubCategoryChange('name', subCategoryNameOldValue, subCategoryNameNewValue, {{$subCateogory->id}});--}}
{{--            --}}{{--}--}}
{{--            --}}{{--if (subCategoryDescriptionOldValue !== subCategoryDescriptionNewValue) {--}}
{{--            --}}{{--    logSubCategoryChange('description', subCategoryDescriptionOldValue, subCategoryDescriptionNewValue, {{$subCateogory->id}});--}}
{{--            --}}{{--}--}}

{{--            // You can add similar conditions for other fields--}}
{{--        });--}}
{{--        });--}}


{{--        function logSubCategoryChange(field, oldValue, newValue, categoryId) {--}}
{{--            // Send AJAX request--}}
{{--            $.ajax({--}}
{{--                url: '{{ route('sub-category.update', ['id' => $subCateogory->id]) }}',--}}
{{--                method: 'POST',--}}
{{--                data: {--}}
{{--                    _token: '{{ csrf_token() }}',--}}
{{--                    field: field,--}}
{{--                    old_value: oldValue,--}}
{{--                    new_value: newValue,--}}
{{--                    category_id: categoryId--}}
{{--                },--}}
{{--                success: function(response) {--}}
{{--                    // Handle success--}}
{{--                    window.location.href = '/sub-category/manage?mes=Sub%20Category%20info%20updated%20successfully';--}}
{{--                },--}}
{{--                error: function(xhr, status, error) {--}}
{{--                    // Handle error--}}
{{--                    console.error('Error logging change');--}}
{{--                }--}}
{{--            });--}}
{{--        }--}}
{{--    </script>--}}


