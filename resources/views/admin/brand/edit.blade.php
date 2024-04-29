@extends('admin.master')
@section('title', 'Edit Brand')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card  mt-5 site-btn">
                <div class="card-header border-bottom  mx-auto">
                    <h3 class="card-title  text-white fs-1">Edit Brand Form</h3>
                </div>
                <div class="card-body text-white">
                    <p class="text-muted">{{session('message')}}</p>
                    <div class="form-horizontal"  method="GET" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Brand Name</label>
                            <div class="col-md-9">
                                <input class="form-control" id="BrandName" value="{{$brand->name}}" placeholder="Brand Name" type="text" name="name"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Brand Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="BrandDescription" placeholder="Brand Description" name="description">{{$brand->description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Brand Image</label>
                            <div class="col-md-9">
                                <input class="form-control bg-white" id="BrandImage" type="file" name="image"/>
                                <img src="{{asset($brand->image)}}" alt="" height="100" width="100"/>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 form-label">Publication Status</label>
                            <div class="col-md-9">
                                <label><input type="radio" name="status" {{$brand->status == 1 ? 'checked' : ''}} value="1"> Published</label>
                                <label><input type="radio" name="status" {{$brand->status == 0 ? 'checked' : ''}} value="0"> Unpublished</label>
                            </div>
                        </div>
                        <div class="row">
                        <button class="btn bg-white text-success mx-auto col-md-4" id="updateBrandButton"  type="submit">Update Brand Info</button>
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
        document.getElementById('updateBrandButton').addEventListener('click', function() {
            console.log("clicked");
            var formData = new FormData();
            var statusFormData = new FormData();
            var token = '{{ csrf_token() }}';
            formData.append('_token', token);
            statusFormData.append('_token', token);
            var BrandNameOldValue = '{{$brand->name}}';
            var BrandNameNewValue = document.getElementById('BrandName').value;
            if (BrandNameOldValue !== BrandNameNewValue) {
                console.log(BrandNameOldValue);
                console.log(BrandNameNewValue);
                formData.append('field', "name");
                formData.append('old_value', BrandNameOldValue);
                formData.append('new_value', BrandNameNewValue);
                var BrandId = '{{ $brand->id }}';
                formData.append('brand_id', BrandId);
                logBrandChange(formData);
            }

            var BrandDescriptionOldValue = '{{$brand->description}}';
            var BrandDescriptionNewValue = document.getElementById('BrandDescription').value;
            if (BrandDescriptionOldValue !== BrandDescriptionNewValue) {
                formData.append('field', "description");
                formData.append('old_value', BrandDescriptionOldValue);
                formData.append('new_value', BrandDescriptionNewValue);
                var BrandId = '{{ $brand->id }}';
                formData.append('brand_id', BrandId);
                logBrandChange(formData);
            }

            var BrandImageOldValue = '{{$brand->image}}';
            var BrandImageNewValue = document.getElementById('BrandImage').files[0];
            if (BrandImageNewValue) {
                formData.append('field', "image");
                formData.append('old_value', BrandImageOldValue);
                formData.append('new_value', BrandImageNewValue);
                var BrandId = '{{ $brand->id }}';
                formData.append('brand_id', BrandId);
                logBrandChange(formData);
            }


            var BrandPublicationStatusOldValue = '{{$brand->status}}';
            var BrandPublicationStatusNewValue = document.querySelector('input[name="status"]:checked');
            if (BrandPublicationStatusOldValue != parseInt(BrandPublicationStatusNewValue.value)){
                // If a new value is selected and it's different from the old value
                statusFormData.append('field', "status");
                statusFormData.append('old_value', BrandPublicationStatusOldValue);
                statusFormData.append('new_value', parseInt(BrandPublicationStatusNewValue.value).toString());
                var BrandId = '{{ $brand->id }}';
                statusFormData.append('brand_id', BrandId);
                logBrandChange(statusFormData);
                {{--logCategoryChange('status', PublicationStatusOldValue, parseInt(PublicationStatusNewValue.value), {{$category->id}});--}}
            }



        });
    });


    function logBrandChange(formData) {
        // Send AJAX request
        $.ajax({
            url: '{{ route('brand.update', ['id' => $brand->id]) }}',
            method: 'POST',
            data: formData,
            contentType: false, // Don't set contentType
            processData: false, // Don't process data
            success: function(response) {
                // Handle success
                window.location.href = 'http://127.0.0.1:8000/brand/newUpdatedRequest?mes=Brand%20info%20update%20request%20successfully';
            },
            error: function(xhr, status, error) {
                // Handle error
                console.log(error);
            }
        });
    }
</script>

