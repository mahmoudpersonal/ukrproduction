<section id="study" class="section-bg">
    <div class="container">
        <div class="section-header">
{{--            <h3>{{ __('front.study') }}</h3>--}}
        </div>

        <div class="row" >
            <div class="col-md-6 col-md-offset-3" style="margin: 0 auto">
                <div class="well well-sm">
                    <form class="form-horizontal" id="study-form" enctype="multipart/form-data">
                        @csrf
                        <fieldset style="padding-top: 10px">
                            <!-- Name input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Name</label>
                                <div class="col-md-9">
                                    <input id="name" name="name" type="text" placeholder="Your name"
                                           class="form-control">
                                </div>
                            </div>

                            <!-- Email input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="email">Your E-mail</label>
                                <div class="col-md-9">
                                    <input id="email" name="email" type="email" placeholder="Your email"
                                           class="form-control">
                                </div>
                            </div>

                            <!-- notes body -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="message">Your Notes</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="message" name="message"
                                              placeholder="Please enter your notes here..." rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="message">Your Notes</label>
                                <div class="col-md-9">
                                    <input type="file" name="file[]" id="file" {{--onchange="getfolder(e)" webkitdirectory mozdirectory msdirectory odirectory directory--}} multiple />

                                </div>
                            </div>

                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" id="btn-submit" class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section><!-- #team -->
