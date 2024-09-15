<section class="services-header" style="background-image: url({{ $backgroundImgUrl }}); background-size: cover; background-position: center; position: relative">
    <div class="overlay"></div>
    <div class="container" style="position: relative; z-index: 2; margin-top: 40px">
        <div class="row">
            <div class="col-1">

            </div>
            <div class="col-5 section-title">
                <p class="text-ind-dark">{{$title}}</p>
                @if($title == "Tv-Services")
                    <p class="text-ind-dark">The Best TV Experience at Your Fingertips</p>
                    <h3 class="text-ind-dark mt-2"><b>Great Offers Await!</b></h3>
                    <button class="btn btn-dark w-50 mt-2">Get Yours Now!</button>
                @endif
            </div>
            <div class="col-1">

            </div>
            <div class="col-5">

            </div>
        </div>
{{--        <div class="section-title w-100 mt-5 mb-5">--}}
{{--            <p class="text-ind-dark">{{ $title }} The Best TV Experience at Your Fingertips</p>--}}
{{--        </div>--}}
    </div>
</section>
