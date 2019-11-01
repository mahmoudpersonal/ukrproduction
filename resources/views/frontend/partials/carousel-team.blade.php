<section id="clients" class="wow fadeInUp section-bg" >
    <div class="container">

        <header class="section-header">
            <h3>{{ __('front.team') }}</h3>
        </header>

        <div class="owl-carousel team-carousel">
            @foreach($team_members as $team_member)
                <div class="row">
                    <div class="col-md-6">
                        <div id="" class="wow " data-wow-delay="0.2&quot;s&quot;"
                             style="visibility: visible; animation-name: fadeInUp; padding-top: 0px">
                            <div class="member">
                                <img src="{{ asset($team_member->image) }}" class="img-fluid" alt="">
                                {{--                                <div class="member-info">--}}
                                {{--                                    <div class="member-info-content">--}}
                                {{--                                        <h6>{{ $team_member->name }}</h6>--}}
                                {{--                                        <span>{{ $team_member->position }}</span>--}}
                                {{--                                        <div class="social">--}}
                                {{--                                            <a href="{{ $team_member->twitter }}"><i class="fa fa-twitter"></i></a>--}}
                                {{--                                            <a href="{{ $team_member->linkedin }}"><i class="fa fa-linkedin"></i></a>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="description">
                            <h4><b>{{ $team_member->name }}</b></h4>
                            {!!  $team_member->bio  !!}
                            <div class="social">
                                <b>{{ __('front.contact') }}: </b>
                                <a href="{{ $team_member->twitter }}"><i
                                        class="fa fa-twitter"></i></a>
                                <a href="{{ $team_member->linkedin }}"><i
                                        class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section><!-- #clients -->
