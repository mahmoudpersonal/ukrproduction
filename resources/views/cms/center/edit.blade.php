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
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="name">Name</label>
                            <input type="text" class="form-control" id="name"
                                   value="@if(isset($center)) {{ $center->name }} @endif" name="name"
                                   placeholder="Name" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label" for="city">City</label>
                            <select class="form-control" id="city" name="city" required>
                                <option value="">-- Choose City --</option>
                                @foreach($cities as $city)
                                    <option value="{{ $city->id }}"
                                            @if(isset($center) && $center->city_id == $city->id) selected @endif>
                                        {{ $city->name }}
                                    </option>
                                @endforeach
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
