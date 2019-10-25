@extends('cms.layouts.app')
@section('content')
    <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header">
            <h3 class="mb-0">Add/Edit City</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
            <!-- Form groups used in grid -->
            <form method="POST"
                  action="@if(isset($city)){{ route('city.update', $city->id) }}@else{{ route('city.store') }}@endif"
                {{--class="needs-validation" novalidate--}}>
                @csrf
                @isset($city) @method('PUT') @endisset
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="name">Name</label>
                            <input type="text" class="form-control" id="name"
                                   value="@if(isset($city)){{ $city->name }}@endif" name="name"
                                   placeholder="Name" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="Country_id">City</label>
                            <select class="form-control" id="Country_id" name="Country_id" required>
                                <option value="">-- Choose Country --</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}"
                                            @if(isset($city) && $country->id==$city->country_id) selected @endif>{{ $country->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <button class="btn btn-primary" type="submit">Save</button>
                    <button class="btn btn-primary" type="reset">Cancel</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('js')
@endpush
