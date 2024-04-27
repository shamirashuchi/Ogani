@extends('admin.master')
@section('title', 'Edit Category')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-5 site-btn">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title text-white fs-1">Edit Category Form</h3>
                </div>
                <div class="card-body text-white">
                    <p class="text-muted">{{session('message')}}</p>
{{--                    action="{{route('category.beforeupdate', ['id' => $category->id])}}"--}}
                    <div class="form-horizontal"  method="GET" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Category Name</label>
                            <div class="col-md-9">
                                <input class="form-control" id="CategoryName" value="{{$category->name}}" placeholder="Category Name" type="text" name="name"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Category Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="CategoryDescription" placeholder="Category Description" name="description">{{$category->description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Category Image</label>
                            <div class="col-md-9">
                                <input class="form-control bg-white" id="CategoryImage" type="file" name="image"/>
                                <img src="{{asset($category->image)}}" alt="" height="100" width="100"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3 form-label">Publication Status</label>
                            <div class="col-md-9">
                                <label><input type="radio"   name="status" {{$category->status == 1 ? 'checked' : ''}} value="1"> Published</label>
                                <label><input type="radio"  name="status" {{$category->status == 0 ? 'checked' : ''}} value="0"> Unpublished</label>
                            </div>
                        </div>
                        <div class="row">
                        <button class="btn bg-white text-success mx-auto col-md-4" id="updateCategoryButton" type="submit">Update Category Info</button>
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
// Your code here
        document.getElementById('updateCategoryButton').addEventListener('click', function() {
            console.log("clicked");
            // document.getElementById('subCategoryName').addEventListener('change', function() {
            //     console.log("changed");
            var formData = new FormData(); // Create FormData object
            var statusFormData = new FormData();
            var token = '{{ csrf_token() }}';
            formData.append('_token', token);
            statusFormData.append('_token', token);
            var CategoryNameOldValue = '{{$category->name}}';
            var CategoryNameNewValue = document.getElementById('CategoryName').value;
            if (CategoryNameOldValue !== CategoryNameNewValue) {
                console.log(CategoryNameOldValue);
                console.log(CategoryNameNewValue);
                console.log({{$category->id}});
                formData.append('field', "name");
                formData.append('old_value', CategoryNameOldValue);
                formData.append('new_value', CategoryNameNewValue);
                var CategoryId = '{{ $category->id }}';
                formData.append('category_id', CategoryId);
                logCategoryChange(formData);
            }
            console.log(CategoryNameOldValue); // Check if this message appears in the console
            var CategoryDescriptionOldValue = '{{$category->description}}';
            var CategoryDescriptionNewValue = document.getElementById('CategoryDescription').value;
            if (CategoryDescriptionOldValue !== CategoryDescriptionNewValue) {
                formData.append('field', "description");
                formData.append('old_value', CategoryDescriptionOldValue);
                formData.append('new_value', CategoryDescriptionNewValue);
                var CategoryId = '{{ $category->id }}';
                formData.append('category_id', CategoryId);
                logCategoryChange(formData);
            }

            var CategoryImageOldValue = '{{$category->image}}';
            var CategoryImageNewValue = document.getElementById('CategoryImage').files[0];
            if (CategoryImageNewValue) {
                formData.append('field', "image");
                formData.append('old_value', CategoryImageOldValue);
                formData.append('new_value', CategoryImageNewValue);
                var CategoryId = '{{ $category->id }}';
                formData.append('category_id', CategoryId);
                logCategoryChange(formData);
            }


            var PublicationStatusOldValue = '{{$category->status}}';
            var PublicationStatusNewValue = document.querySelector('input[name="status"]:checked');
console.log(PublicationStatusOldValue);
console.log(parseInt(PublicationStatusNewValue.value));
            // PublicationStatusOldValue ===
            if (PublicationStatusNewValue !== null && parseInt(PublicationStatusNewValue.value)  === 0) {
                // If a new value is selected and it's different from the old value
                statusFormData.append('field', "status");
                statusFormData.append('old_value', PublicationStatusOldValue);
                statusFormData.append('new_value', parseInt(PublicationStatusNewValue.value).toString());
                var CategoryId = '{{ $category->id }}';
                statusFormData.append('category_id', CategoryId);
                logCategoryChange(statusFormData);
                {{--logCategoryChange('status', PublicationStatusOldValue, parseInt(PublicationStatusNewValue.value), {{$category->id}});--}}
            }



        });
    });


    function logCategoryChange(formData) {
        // Send AJAX request
        $.ajax({
            url: '{{ route('category.update', ['id' => $category->id]) }}',
            method: 'POST',
            data: formData,
            contentType: false, // Don't set contentType
            processData: false, // Don't process data
            success: function(response) {
                // Handle success
                window.location.href = '/category/manage?mes=Category%20info%20updated%20successfully';
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error('Error logging change');
            }
        });
    }
</script>





