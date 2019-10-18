<section id="team" class="section-bg">
    <div class="container">
        <div class="section-header">
            <h3>{{ __('front.team') }}</h3>
            <p>{{ __('front.team_desc') }}</p>
        </div>

        <div class="row">
            {{--            @for($i=0;$i<16;$i++)--}}
            @php($t=0.1)
            @foreach($team_members as $team_member)
                @php($t += 0.1)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay={{ $t }}"s">
                    <div class="member">
                        <img src="{{ asset($team_member->image) }}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h6>{{ $team_member->name }}</h6>
                                <span>{{ $team_member->position }}</span>
                                <div class="social">
                                    <a href="{{ $team_member->twitter }}"><i class="fa fa-twitter"></i></a>
                                    {{--                                <a href=""><i class="fa fa-facebook"></i></a>--}}
                                    {{--                                <a href=""><i class="fa fa-google-plus"></i></a>--}}
                                    <a href="{{ $team_member->linkedin }}"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            {{--                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">--}}
            {{--                    <div class="member">--}}
            {{--                        <img src="img/team-2.jpg" class="img-fluid" alt="">--}}
            {{--                        <div class="member-info">--}}
            {{--                            <div class="member-info-content">--}}
            {{--                                <h4>Sarah Jhonson</h4>--}}
            {{--                                <span>Product Manager</span>--}}
            {{--                                <div class="social">--}}
            {{--                                    <a href=""><i class="fa fa-twitter"></i></a>--}}
            {{--                                    <a href=""><i class="fa fa-facebook"></i></a>--}}
            {{--                                    <a href=""><i class="fa fa-google-plus"></i></a>--}}
            {{--                                    <a href=""><i class="fa fa-linkedin"></i></a>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}

            {{--                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">--}}
            {{--                    <div class="member">--}}
            {{--                        <img src="img/team-3.jpg" class="img-fluid" alt="">--}}
            {{--                        <div class="member-info">--}}
            {{--                            <div class="member-info-content">--}}
            {{--                                <h4>William Anderson</h4>--}}
            {{--                                <span>CTO</span>--}}
            {{--                                <div class="social">--}}
            {{--                                    <a href=""><i class="fa fa-twitter"></i></a>--}}
            {{--                                    <a href=""><i class="fa fa-facebook"></i></a>--}}
            {{--                                    <a href=""><i class="fa fa-google-plus"></i></a>--}}
            {{--                                    <a href=""><i class="fa fa-linkedin"></i></a>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}

            {{--                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">--}}
            {{--                    <div class="member">--}}
            {{--                        <img src="img/team-4.jpg" class="img-fluid" alt="">--}}
            {{--                        <div class="member-info">--}}
            {{--                            <div class="member-info-content">--}}
            {{--                                <h4>Amanda Jepson</h4>--}}
            {{--                                <span>Accountant</span>--}}
            {{--                                <div class="social">--}}
            {{--                                    <a href=""><i class="fa fa-twitter"></i></a>--}}
            {{--                                    <a href=""><i class="fa fa-facebook"></i></a>--}}
            {{--                                    <a href=""><i class="fa fa-google-plus"></i></a>--}}
            {{--                                    <a href=""><i class="fa fa-linkedin"></i></a>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}

        </div>

    </div>
</section><!-- #team -->
