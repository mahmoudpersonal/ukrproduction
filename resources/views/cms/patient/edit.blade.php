@extends('cms.layouts.app')
@section('content')
    <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header">
            <h3 class="mb-0">Add/Edit Patient</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
            <!-- Form groups used in grid -->
            <form method="POST"
                  action="@if(isset($patient)){{ route('patient.update', $patient->id) }}@else{{ route('patient.store') }}@endif">
                @csrf
                @isset($patient) @method('PUT') @endisset
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="first_name">First Name</label>
                            <input type="text" class="form-control" id="first_name"
                                   value="@if(isset($patient)){{ $patient->first_name }}@endif" name="first_name"
                                   placeholder="first name" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name"
                                   value="@if(isset($patient)){{ $patient->last_name }}@endif" name="last_name"
                                   placeholder="last name" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="reference">Reference</label>
                            <input type="text" class="form-control" id="reference"
                                   value="@if(isset($patient)){{ $patient->reference }}@endif" name="reference"
                                   placeholder="reference" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="country_id">Country</label>
                            <select class="form-control" id="country_id" name="country_id" required>
                                <option value="">-- Choose Country --</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}"
                                            @if(isset($patient) && $patient->city->country->id == $country->id) selected @endif>
                                        {{ $country->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="city_id">City</label>
                            <select class="form-control" id="city_id" name="city_id" required>
                                <option value="">-- Choose City --</option>
                                @isset($patient)
                                    @foreach($cities as $city)
                                        <option value="{{ $city->id }}"
                                                @if($city->id==$patient->city_id) selected @endif>{{ $city->name }}
                                        </option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="attendance_number">Attendance Number</label>
                            <input type="text" class="form-control" id="attendance_number" readonly
                                   value="@if(isset($patient)){{ $patient->attendance_number }}@else{{ time() }}@endif"
                                   name="attendance_number"
                                   placeholder="" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="dob">Date of Birth</label>
                            <input class="form-control dob" name="dob" id="dob" placeholder="Select date" type="text"
                                   value="@if(isset($patient)){{ $patient->dob }}@endif" autocomplete="off">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="previous_medical_details">Previous Medical
                                Details</label>
                            <textarea name="previous_medical_details" class="form-control" id="previous_medical_details"
                                      rows="3">@if(isset($patient)){{ $patient->previous_medical_details }}@endif</textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="previous_surgical_details">Previous Surgical
                                Details</label>
                            <textarea name="previous_surgical_details" class="form-control"
                                      id="previous_surgical_details"
                                      rows="3">@if(isset($patient)){{ $patient->previous_surgical_details }}@endif</textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="medication">Medication</label>
                            <textarea name="medication" class="form-control" id="medication"
                                      rows="3">@if(isset($patient)){{ $patient->medication }}@endif</textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="allergy">Allergy</label>
                            <textarea name="allergy" class="form-control" id="allergy"
                                      rows="3">@if(isset($patient)){{ $patient->allergy }}@endif</textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="additional_info">Additional Info</label>
                            <textarea name="additional_info" class="form-control" id="additional_info"
                                      rows="3">@if(isset($patient)){{ $patient->additional_info }}@endif</textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Save</button>
                    <button class="btn btn-primary" type="reset">Cancel</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(function () {
            $('#country_id').on('change', function () {
                if ($(this).val() !== '')
                    $.ajax({
                        url: '{{ route('cities.byCountry') }}',
                        dataType: 'json',
                        method: 'post',
                        data: {
                            country_id: $(this).val(),
                            _token: $('input[name="_token"]').val()
                        },
                        success: function (response) {
                            $('#city_id').html('<option value="">-- Choose City --</option>');
                            $.each(response, function (i, v) {
                                $('#city_id').append('<option value="' + i + '">' + v + '</option>');
                            });
                        }
                    });
                else $('#city_id').html('<option value="">-- Choose City --</option>');
            });
            $(".dob").datepicker({format: 'yyyy-mm-dd'});
        });
    </script>
@endpush
