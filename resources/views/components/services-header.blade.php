<section class="services-header" style="background-image: url({{ $backgroundImgUrl }}); background-size: cover; background-position: center; position: relative">
    <div class="overlay"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <div class="row border">
            <div class="order-2 col-md-8 col-lg-6 col-xl-5 section-title border">
                @if($title == "Home-Security")
                    <p class="text-ind-dark">Home Security</p>
                @endif
                @if($title == "Tv-Services")
                    <p class="text-ind-dark">Experience nonstop sports action, all year round!</p>
                    <p class="text-ind-dark mt-2" style="font-size: 20px;">Your ultimate hub for streaming pro basketball, NHL games, and all the sports you love. Seamlessly find and enjoy your favorites, all in one spot.</p>
                    <div class="col-sm-8 col-lg-7">
                        <button onclick="window.location.href='{{ url('/get-started') }}'" class="btn btn-dark w-100 mt-2"><i class="bx bi-box-arrow-right me-2"></i> CHOOSE YOUR PLAN NOW!</button>
                    </div>
                @endif
            </div>
            @if(!$title)
                <div class="order-1 border">
                    <img class="img-fluid" alt="Responsive Image" src="{{asset('assets/img/dtv_pic.png')}}">
                </div>
            @endif
        </div>
        @if($title == "Depo-Provera Lawsuit")
            <div class="section-title w-100 mt-5 mb-5 text-center" style="height: 250px;">
                <p class="text-ind-dark" style="margin-top: 150px;">{{ $title }}</p>
            </div>
        @endif
{{--        <div class="section-title w-100 mt-5 mb-5">--}}
{{--            <p class="text-ind-dark">{{ $title }} The Best TV Experience at Your Fingertips</p>--}}
{{--        </div>--}}
    </div>
</section>
