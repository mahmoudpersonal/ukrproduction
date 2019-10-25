@extends('cms.layouts.app')
@section('content')
    <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header">
            <h3 class="mb-0">Add/Edit Area</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
            <!-- Form groups used in grid -->
            <form method="POST"
                  action="@if(isset($area)){{ route('area.update', $area->id) }}@else{{ route('area.store') }}@endif"
                {{--class="needs-validation" novalidate--}}>
                @csrf
                @isset($area) @method('PUT') @endisset
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="name">Name</label>
                            <input type="text" class="form-control" id="name"
                                   value="@if(isset($area)){{ $area->name }}@endif" name="name"
                                   placeholder="Name" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label class="form-control-label" for="name">subarea?</label><br>
                        <label class="custom-toggle">
                            <input type="checkbox" name="type"  @if(isset($area) && $area->type == 1) checked @endif>
                            <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                        </label>
                    </div>
                    <div class="col-md-4"></div>
                    <button class="btn btn-primary" type="submit">Save</button>
                    <button class="btn btn-primary" type="reset">Cancel</button>
                </div>
            </form>
        </div>
    </div>
@endsection
