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

                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="form-control-label" for="contact">contact</label>
                            <input type="text" class="form-control" id="contact"
                                   value="" name="address"
                                   placeholder="Contact" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <h3 class="mb-0">About</h3>
                        <input type="hidden" name="about" id="about">
                        <div data-toggle="quill-editor" data-quill-placeholder="About"></div>
                    </div>
                </div>

                <button class="btn btn-primary" id="btn-submit" type="submit">Save</button>
                <button class="btn btn-primary" type="reset">Cancel</button>
            </form>
        </div>
    </div>

@endsection
@push('js')
    <script src="{{ asset('vendor/quill/dist/quill.min.js') }}"></script>
    <script>
        $(function () {
            //defining the editor
            var options = {
                modules: {toolbar: [["bold", "italic"], ["link", "blockquote", "code", "image"], [{list: "ordered"}, {list: "bullet"}]]},
                placeholder: 'about',
                theme: "snow"
            };
            var editor = new Quill('[data-toggle="quill-editor"]', options);

            $('#locale_id').on('change', function () {
                if ($(this).val() !== '')
                    $.ajax({
                        url: '{{ route('language.byLocale') }}',
                        dataType: 'json',
                        method: 'post',
                        data: {
                            locale_id: $(this).val(),
                            _token: $('input[name="_token"]').val()
                        },
                        success: function (response) {
                            // alert(response[0].about);
                            $('#about').val(response[0].about);
                            editor.root.innerHTML = typeof response[0].about == "undefined" ? '' : response[0].about;
                            // alert(editor.root.innerHTML);
                            $('#contact').val(response[0].address);
                            //
                        }
                    });
            });

            $('#btn-submit').on('click', function (e) {
                $('#about').val(editor.root.innerHTML);
            });
        });
    </script>
@endpush
