@extends('cms.layouts.app')
@push('css')
    <style>

        /*#my-dropzone .message {*/
        /*    font-family: "Segoe UI Light", "Arial", serif;*/
        /*    font-weight: 600;*/
        /*    color: #0087F7;*/
        /*    font-size: 1.5em;*/
        /*    letter-spacing: 0.05em;*/
        /*}*/

        /*.dropzone {*/
        /*    border: 2px dashed #0087F7;*/
        /*    background: white;*/
        /*    border-radius: 5px;*/
        /*    !*min-height: 300px;*!*/
        /*    padding: 90px 0;*/
        /*    vertical-align: baseline;*/
        /*}*/
    </style>
@endpush
@section('content')
    <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header">
            <h3 class="mb-0">Add/Edit Study</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
            <!-- Form groups used in grid -->
            <form method="POST"
                  action="@if(isset($study)){{ route('study.update', $study->id) }}@else{{ route('study.store') }}@endif"
                  enctype="multipart/form-data">
                @csrf
                @isset($study) @method('PUT') @endisset
                <div class="row">
                    <div class="col-md-12">
                        <input type="file" multiple name="logo[]">
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="patient_id">Patient</label>
                            <select class="form-control" id="patient_id" name="patient_id" required>
                                <option value="">-- Choose Patient --</option>
                                @foreach($patients as $patient)
                                    <option value="{{ $patient->id }}"
                                            @if(isset($study) && $study->patient->id == $patient->id) selected @endif>
                                        {{ $patient->reference }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="area_id">Areas</label>
                            <select class="form-control" id="area_id" name="area_id" required>
                                <option value="">-- Choose Area --</option>
                                @foreach($areas as $area)
                                    <option value="{{ $area->id }}"
                                            @if(isset($study) && $study->area->id == $area->id) selected @endif>
                                        {{ $area->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="subarea_id">Subarea</label>
                            <select class="form-control" id="subarea_id" name="subarea_id" required>
                                <option value="">-- Choose Subarea --</option>
                                @foreach($subareas as $area)
                                    <option value="{{ $area->id }}"
                                            @if(isset($study) && $study->subarea->id == $area->id) selected @endif>
                                        {{ $area->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="visit_type">Visit Type</label>
                            <input type="text" class="form-control" id="visit_type"
                                   value="@if(isset($study)){{ $study->visit_type }}@endif" name="visit_type"
                                   placeholder="visit type" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="center_id">Center</label>
                            <select class="form-control" id="center_id" name="center_id" required>
                                <option value="">-- Choose Center --</option>
                                @foreach($centers as $center)
                                    <option value="{{ $center->id }}"
                                            @if(isset($study) && $study->center->id == $center->id) selected @endif>
                                        {{ $center->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="priority">Priotrity</label>
                            <select class="form-control" id="priority" name="priority" required>
                                <option value="">-- Choose Priority --</option>
                                @foreach($priorities as $priority)
                                    <option value="{{ $priority }}"
                                            @if(isset($study) && $study->priority == $priority) selected @endif>
                                        {{ $priority }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="user_id">Doctors</label>
                            <select class="form-control" id="user_id" name="user_id" required>
                                <option value="">-- Choose Doctor --</option>
                                @foreach($doctors as $doctor)
                                    <option value="{{ $doctor->id }}"
                                            @if(isset($study) && $study->user->id == $doctor->id) selected @endif>
                                        {{ $doctor->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="examination">Examination</label>
                            <input class="form-control" name="examination" id="examination"
                                   placeholder="Select Examination" type="text"
                                   value="@if(isset($study)){{ $study->examination }}@endif" autocomplete="off">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="examination_date">Examination Date</label>
                            <input class="form-control dob" name="examination_date" id="examination_date"
                                   placeholder="Select date" type="text"
                                   value="@if(isset($study)){{ $study->examination_date }}@endif" autocomplete="off">
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="radiological_form">Radiological form</label>
                            <textarea name="radiological_form" class="form-control" id="radiological_form"
                                      rows="3">@if(isset($study)){{ $study->radiological_form }}@endif</textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="previous_studies">Previous Studies</label>
                            <textarea name="previous_studies" class="form-control" id="previous_studies"
                                      rows="3">@if(isset($study)){{ $study->previous_studies }}@endif</textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="technical_description">Technical Description</label>
                            <textarea name="technical_description" class="form-control" id="technical_description"
                                      rows="3">@if(isset($study)){{ $study->technical_description }}@endif</textarea>
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
    <script src="{{ asset('vendor/dropzone/dist/min/dropzone.min.js') }}"></script>
    <script>
        $(function () {
            $(".dob").datepicker({format: 'yyyy-mm-dd'});

            var total_photos_counter = 0;
            Dropzone.options.myDropzone = {
                uploadMultiple: true,
                parallelUploads: 2,
                maxFilesize: 16,
                previewTemplate: document.querySelector('#preview').innerHTML,
                addRemoveLinks: true,
                dictRemoveFile: 'Remove file',
                dictFileTooBig: 'Image is larger than 16MB',
                timeout: 10000,

                init: function () {
                    this.on("removedfile", function (file) {
                        $.post({
                            url: '/images-delete',
                            data: {id: file.name, _token: $('[name="_token"]').val()},
                            dataType: 'json',
                            success: function (data) {
                                total_photos_counter--;
                                $("#counter").text("# " + total_photos_counter);
                            }
                        });
                    });
                },
                success: function (file, done) {
                    total_photos_counter++;
                    $("#counter").text("# " + total_photos_counter);
                }
            };
        });
    </script>
@endpush
