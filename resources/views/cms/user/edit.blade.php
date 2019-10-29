@extends('cms.layouts.app')
@section('content')
    <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header">
            <h3 class="mb-0">Add/Edit Radiologist</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
            <!-- Form groups used in grid -->
            <form method="POST" enctype="multipart/form-data"
                  action="@if(isset($user)){{ route('user.update', $user->id) }}@else{{ route('user.store') }}@endif">
                @csrf
                @isset($user) @method('PUT') @endisset
                <div class="row">

                    <div class="col-md-12">
                        <input type="file" class="file" name="logo">
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="name">Name</label>
                            <input type="text" class="form-control" id="name"
                                   value="@if(isset($user)){{ $user->name }}@endif" name="name"
                                   placeholder="ex: Dr. ex ex" required>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="position">Position</label>
                            <input type="text" class="form-control" id="position"
                                   value="@if(isset($user)){{ $user->position }}@endif" name="position"
                                   placeholder="position" required>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="bio">Biography</label>
                            <textarea name="bio" class="form-control" id="bio"
                                      rows="3">@if(isset($user)){{ $user->bio }}@endif</textarea>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="email">Email</label>
                            <input type="email" class="form-control" id="email"
                                   value="@if(isset($user)){{ $user->email }}@endif" name="email"
                                   placeholder="email">
                            @if ($errors->has('email'))
                                <br>
                                <span style="color:red">already taken</span>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="linkedin">Linkedin link</label>
                            <input type="url" class="form-control" id="linkedin"
                                   value="@if(isset($user)){{ $user->linkedin }}@endif" name="linkedin"
                                   placeholder="linkedin">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label" for="twitter">Twitter link</label>
                            <input type="url" class="form-control" id="twitter"
                                   value="@if(isset($user)){{ $user->twitter }}@endif" name="twitter"
                                   placeholder="twitter">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label class="form-control-label" for="admin">admin?</label><br>
                        <label class="custom-toggle">
                            <input type="checkbox" name="admin" @if(isset($user) && $user->admin == 1) checked @endif>
                            <span class="custom-toggle-slider rounded-circle" data-label-off="No"
                                  data-label-on="Yes"></span>
                        </label>
                    </div>

                    <div class="col-md-4 password">
                        <div class="form-group">
                            <label class="form-control-label" for="password">Password</label>
                            <input type="password" class="form-control" id="password"
                                   value="" name="password"
                                   placeholder="*******">
                        </div>
                    </div>

                    <div class="col-md-4 password">
                        <div class="form-group">
                            <label class="form-control-label" for="password_confirmation">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation"
                                   value="" name="password_confirmation"
                                   placeholder="*******">
                            @if ($errors->has('password'))
                                <br>
                                <span style="color:red">password doesnt match</span>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label class="form-control-label" for="viewable">viewable?</label><br>
                        <label class="custom-toggle">
                            <input type="checkbox" name="viewable"
                                   @if(isset($user) && $user->viewable == 1) checked @endif>
                            <span class="custom-toggle-slider rounded-circle" data-label-off="No"
                                  data-label-on="Yes"></span>
                        </label>
                    </div>

                    {{--                    <div class="col-md-8"></div>--}}

                    <div class="col-md-12">
                        <button class="btn btn-primary" type="submit">Save</button>
                        <button class="btn btn-primary" type="reset">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(function () {
            $('.password').css({'display': 'none'});
            $('.file').css({'display': 'none'});
            @if(isset($user) && $user->viewable == 1)
            $('.file').css({'display': 'block'});
            @endif
            @if(isset($user) && $user->admin == 1)
            $('.password').css({'display': 'block'});
            @endif
            $('input[name="admin"]').on('change', function () {
                if ($(this).prop('checked'))
                    $('.password').css({'display': 'block'});
                else
                    $('.password').css({'display': 'none'});
            });

            $('input[name="viewable"]').on('change', function () {
                if ($(this).prop('checked'))
                    $('.file').css({'display': 'block'});
                else
                    $('.file').css({'display': 'none'});
            });
        });
    </script>
@endpush
