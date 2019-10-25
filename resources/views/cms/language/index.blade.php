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
                  action="{{ route('language.update') }}">
                @csrf
                <div class="row">


                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="locale_id">language</label>
                            <select class="form-control" id="locale_id" name="locale_id" required>
                                <option value="">-- Choose language --</option>
                                <option value="en">en</option>
                                <option value="ar">ar</option>
                                <option value="es">es</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="contact">contact</label>
                            <input type="text" class="form-control" id="contact"
                                   value="" name="contact"
                                   placeholder="Contact" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h3 class="mb-0">About</h3>
                        <div data-toggle="quill" data-quill-placeholder="Quill WYSIWYG"></div>
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
    <script src="{{ asset('vendor/quill/dist/quill.min.js') }}"></script>
    <script>
        $(function () {
            $('#locale_id').on('change', function () {
                if ($(this).val() !== '')
                    $.ajax({
                        url: '{{ route('cities.byCountry') }}',
                        dataType: 'json',
                        method: 'post',
                        data: {
                            locale_id: $(this).val(),
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
        });
    </script>
@endpush
