@extends('cms.layouts.app')
@section('content')
    <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header">
            <h3 class="mb-0">Add/Edit Center</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
            <!-- Form groups used in grid -->
            <form method="POST"
                  action="@if(isset($center)){{ route('center.update', $center->id) }}@else{{ route('center.store') }}@endif"
                {{--class="needs-validation" novalidate--}}>
                @csrf
                @isset($center) @method('PUT') @endisset
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="name">Name</label>
                            <input type="text" class="form-control" id="name"
                                   value="@if(isset($center)) {{ $center->name }} @endif" name="name"
                                   placeholder="Name" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="country_id">Country</label>
                            <select class="form-control" id="country_id" name="country_id" required>
                                <option value="">-- Choose Country --</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}"
                                            @if(isset($center) && $center->city->country->id == $country->id) selected @endif>
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
                                @isset($center)
                                    @foreach($cities as $city)
                                        <option value="{{ $city->id }}"
                                                @if($city->id==$center->city_id) selected @endif>{{ $city->name }}
                                        </option>
                                    @endforeach
                                @endisset
                            </select>
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
    </script>
@endpush
