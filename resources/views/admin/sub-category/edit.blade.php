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
                                <select class="form-control" id="categorySelect">
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


<script>
    console.log('Script executed');
    document.addEventListener('DOMContentLoaded', function() {
        console.log('DOM content loaded');
        document.getElementById('updateSubCategoryButton').addEventListener('click', function() {
            console.log("clicked");
            var formData = new FormData(); // Create FormData object
            var statusFormData = new FormData();
            var token = '{{ csrf_token() }}';
            formData.append('_token', token);
            statusFormData.append('_token', token);

            var CategoryNameOldValue = '{{$subCateogory->category_id}}';
            console.log("old Value:",CategoryNameOldValue);
            var CategoryNameNewValue = document.getElementById('categorySelect').value;
            console.log("New Value:", CategoryNameNewValue);
                if (CategoryNameOldValue !== CategoryNameNewValue) {
                    formData.append('field', "category_id");
                    formData.append('old_value', CategoryNameOldValue);
                    formData.append('new_value', CategoryNameNewValue);
                    var categoryId = '{{$subCateogory->category_id}}';
                    var SubCategoryId = '{{$subCateogory->id}}';
                    formData.append('category_id', categoryId);
                    formData.append('sub_category_id', SubCategoryId);
                    logSubCategoryChange(formData);
                }
            var SubCategoryNameOldValue = '{{$subCateogory->name}}';
            console.log("old Value:",SubCategoryNameOldValue);
            var SubCategoryNameNewValue = document.getElementById('subCategoryName').value;
            console.log("New Value:", SubCategoryNameNewValue);
            if (SubCategoryNameOldValue !== SubCategoryNameNewValue) {
                formData.append('field', "name");
                formData.append('old_value', SubCategoryNameOldValue);
                formData.append('new_value', SubCategoryNameNewValue);
                var categoryId = '{{$subCateogory->category_id}}';
                var SubCategoryId = '{{$subCateogory->id}}';
                formData.append('category_id', categoryId);
                formData.append('sub_category_id', SubCategoryId);
                logSubCategoryChange(formData);
            }

            var SubCategoryDescriptionOldValue = '{{$subCateogory->description}}';
            console.log("old Value:",SubCategoryDescriptionOldValue);
            var SubCategoryDescriptionNewValue = document.getElementById('subCategoryDescription').value;
            console.log("New Value:", SubCategoryDescriptionNewValue);
            if (SubCategoryDescriptionOldValue !== SubCategoryDescriptionNewValue) {
                formData.append('field', "name");
                formData.append('old_value', SubCategoryDescriptionOldValue);
                formData.append('new_value', SubCategoryDescriptionNewValue);
                var categoryId = '{{$subCateogory->category_id}}';
                var SubCategoryId = '{{$subCateogory->id}}';
                formData.append('category_id', categoryId);
                formData.append('sub_category_id', SubCategoryId);
                logSubCategoryChange(formData);
            }

            var SubCategoryImageOldValue = '{{$subCateogory->image}}';
            var SubCategoryImageNewValue = document.getElementById('subCategoryImage').files[0];
            if (SubCategoryImageNewValue) {
                formData.append('field', "image");
                formData.append('old_value', SubCategoryImageOldValue);
                formData.append('new_value', SubCategoryImageNewValue);
                var categoryId = '{{$subCateogory->category_id}}';
                var SubCategoryId = '{{$subCateogory->id}}';
                formData.append('category_id', categoryId);
                formData.append('sub_category_id', SubCategoryId);
                logSubCategoryChange(formData);
            }

            var SubPublicationStatusOldValue = '{{$subCateogory->status}}';
            var SubPublicationStatusNewValue = document.querySelector('input[name="status"]:checked');
            console.log(SubPublicationStatusOldValue);
            console.log(parseInt(SubPublicationStatusNewValue.value));
            // PublicationStatusOldValue ===
            // if (SubPublicationStatusNewValue !== null && parseInt(SubPublicationStatusNewValue.value)  === 0) {
                // If a new value is selected and it's different from the old value
            if (SubPublicationStatusOldValue != parseInt(SubPublicationStatusNewValue.value)) {
                statusFormData.append('field', "status");
                statusFormData.append('old_value', SubPublicationStatusOldValue);
                statusFormData.append('new_value', parseInt(SubPublicationStatusNewValue.value).toString());
                var categoryId = '{{$subCateogory->category_id}}';
                var SubCategoryId = '{{$subCateogory->id}}';
                statusFormData.append('category_id', categoryId);
                statusFormData.append('sub_category_id', SubCategoryId);
                logSubCategoryChange(statusFormData);
                {{--logCategoryChange('status', PublicationStatusOldValue, parseInt(PublicationStatusNewValue.value), {{$category->id}});--}}
            }


        });
    });


    function logSubCategoryChange(formData) {
        // Send AJAX request
        $.ajax({
            url: '{{ route('sub-category.update', ['id' => $subCateogory->id]) }}',
            method: 'POST',
            data: formData,
            contentType: false, // Don't set contentType
            processData: false, // Don't process data
            success: function(response) {
                // Handle success
                window.location.href = 'http://127.0.0.1:8000/sub-category/newUpdatedRequest?mes=Sub%20Category%20info%20updated%20successfully';
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error('Error logging change');
            }
        });
    }
</script>



