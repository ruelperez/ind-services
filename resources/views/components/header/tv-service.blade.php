<div class="section-reward py-4 text-center text-lg-start" style="margin-top: 40px !important;">
    <div class="container">
        <p>Get a $140 Rewards Card!</p>
    </div>
</div>
<section class="services-header " style="background-image: url({{ $backgroundImgUrl }}); background-size: cover; background-position: center; position: relative">
    <div class="overlay "></div>
    <div class="container" style="position: relative; z-index: 2; ">
        <div class="row py-5">
            <div class="order-1 col-lg-6 order-lg-2 overlap-lg overlap-lg-first text-center mt-lg-4">
                <img class="img-fluid" alt="Responsive Image" src="{{asset('assets/img/dtv_dtv.png')}}">
            </div>
            <div class="order-2 col-xl-6 section-title mt-4 text-center text-lg-start col-lg-6 order-lg-1  overlap-lg overlap-lg-second">
                <p class="text-ind-dark mt-sm-4">Experience nonstop sports action, all year round!</p>
                <p class="text-ind-dark mt-4" style="font-size: 19px;">Your ultimate hub for streaming pro basketball, NHL games, and all the sports you love. Seamlessly find and enjoy your favorites, all in one spot.</p>
                <div class="row mt-5 mt-sm-5 justify-content-center justify-content-lg-start">
                    <div class="col-sm-8 col-lg-9 col-xl-7 col-xxl-6">
                        <button onclick="window.location.href='{{ url('/get-started') }}'" class="btn btn-dark w-100"><i class="bx bi-box-arrow-right me-2"></i> CHOOSE YOUR PLAN NOW!</button>
                    </div>
                </div>
            </div>
        </div>
        {{--        <div class="section-title w-100 mt-5 mb-5">--}}
        {{--            <p class="text-ind-dark">{{ $title }} The Best TV Experience at Your Fingertips</p>--}}
        {{--        </div>--}}
    </div>
</section>
