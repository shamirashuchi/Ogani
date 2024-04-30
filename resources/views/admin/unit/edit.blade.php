@extends('admin.master')
@section('title', 'Edit Unit')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card  mt-5 site-btn">
                <div class="card-header border-bottom mx-auto">
                    <h3 class="card-title  text-white fs-1">Edit Unit Form</h3>
                </div>
                <div class="card-body text-white">
                    <p class="text-muted">{{session('message')}}</p>
                    <div class="form-horizontal"  enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Unit Name</label>
                            <div class="col-md-9">
                                <input class="form-control" id="UnitName" value="{{$unit->name}}" placeholder="Unit Name" type="text" name="name"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Unit Code</label>
                            <div class="col-md-9">
                                <input class="form-control" id="UnitCode" value="{{$unit->code}}" placeholder="Unit Code" type="text" name="code"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Unit Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="UnitDescription" placeholder="Unit Description" name="description">{{$unit->description}}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 form-label">Publication Status</label>
                            <div class="col-md-9">
                                <label><input type="radio" name="status" {{$unit->status == 1 ? 'checked' : ''}} value="1"> Published</label>
                                <label><input type="radio" name="status" {{$unit->status == 0 ? 'checked' : ''}} value="0"> Unpublished</label>
                            </div>
                        </div>
                        <div class="row">
                        <button class="btn bg-white text-success mx-auto col-md-4" id="updateUnitButton" type="submit">Update Unit Info</button>
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
        document.getElementById('updateUnitButton').addEventListener('click', function() {
            console.log("clicked");
            var formData = new FormData();
            var statusFormData = new FormData();
            var token = '{{ csrf_token() }}';
            formData.append('_token', token);
            statusFormData.append('_token', token);
            var UnitNameOldValue = '{{$unit->name}}';
            var UnitNameNewValue = document.getElementById('UnitName').value;
            if (UnitNameOldValue !== UnitNameNewValue) {
                console.log(UnitNameOldValue);
                console.log(UnitNameNewValue);
                formData.append('field', "name");
                formData.append('old_value', UnitNameOldValue);
                formData.append('new_value', UnitNameNewValue);
                var UnitId = '{{ $unit->id }}';
                formData.append('unit_id', UnitId);
                logUnitChange(formData);
            }

            var UnitDescriptionOldValue = '{{$unit->description}}';
            var UnitDescriptionNewValue = document.getElementById('UnitDescription').value;
            if (UnitDescriptionOldValue !== UnitDescriptionNewValue) {
                formData.append('field', "description");
                formData.append('old_value', UnitDescriptionOldValue);
                formData.append('new_value', UnitDescriptionNewValue);
                var UnitId = '{{ $unit->id }}';
                formData.append('unit_id', UnitId);
                logUnitChange(formData);
            }

            var UnitCodeOldValue = '{{$unit->code}}';
            var UnitCodeNewValue = document.getElementById('UnitCode').value;
            console.log(UnitCodeNewValue);
            if (UnitCodeOldValue  !== UnitCodeNewValue) {
                formData.append('field', "code");
                formData.append('old_value', UnitCodeOldValue);
                formData.append('new_value', UnitCodeNewValue);
                var UnitId = '{{ $unit->id }}';
                formData.append('unit_id', UnitId);
                logUnitChange(formData);
            }


            var UnitPublicationStatusOldValue = '{{$unit->status}}';
            var UnitPublicationStatusNewValue = document.querySelector('input[name="status"]:checked');
            if (UnitPublicationStatusOldValue != parseInt(UnitPublicationStatusNewValue.value)){
                statusFormData.append('field', "status");
                statusFormData.append('old_value', UnitPublicationStatusOldValue);
                statusFormData.append('new_value', parseInt(UnitPublicationStatusNewValue.value).toString());
                var UnitId = '{{ $unit->id }}';
                statusFormData.append('unit_id', UnitId);
                logUnitChange(statusFormData);
            }



        });
    });


    function logUnitChange(formData) {
        // Send AJAX request
        $.ajax({
            url: '{{ route('unit.update', ['id' => $unit->id]) }}',
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                window.location.href = '/unit/newUpdatedRequest?mes=Unit%20info%20update%20request%20successfully';
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    }
</script>

