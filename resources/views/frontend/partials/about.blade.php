<section id="about">

    <div class="container">
        <div class="row">

            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="{{ asset('img/radiology.png')}}" alt="">
                </div>
            </div>

            <div class="col-lg-7 col-md-6">
                <div class="about-content">
                    <h2>{{__('front.about')}}</h2>
{{--                    <h2>{{ __('about') }}</h2>--}}
                    {{--                        <h3>Odio sed id eos et laboriosam consequatur eos earum soluta.</h3>--}}
{{--                    <p>The UK Radiologist Online provides a high quality, secure and accredited online radiology--}}
{{--                        reporting service. We have expertise which includes plain film X-rays, mammography, CT--}}
{{--                        (computed tomography) and MRI (magnetic resonance imaging).</p>--}}
{{--                    <p>All reporting radiologists are highly qualified, based in the UK or in Spain and working as--}}
{{--                        UK Consultants or the Spanish equivalent with specialist registration in radiology.</p>--}}
{{--                    <ul>--}}
{{--                        <li>--}}{{--<i class="ion-android-checkmark-circle"></i>--}}
{{--                            We ensure that we have necessary tools, facilities and procedures to maintain--}}
{{--                            confidentiality and ensure data protection.--}}
{{--                        </li>--}}
{{--                        <li>--}}{{--<i class="ion-android-checkmark-circle"></i>--}}
{{--                            We pride ourselves in being easy to work with and in providing a high quality and speedy--}}
{{--                            service.--}}
{{--                        </li>--}}
{{--                        <li>--}}{{--<i class="ion-android-checkmark-circle"></i>--}}{{-- We report for health services primarily we--}}
{{--                            can also report directly to patients.--}}
{{--                        </li>--}}
{{--                    </ul>--}}
                    {!! $settings['about'] ?? '' !!}
                </div>
            </div>
        </div>
    </div>

</section><!-- #about -->
