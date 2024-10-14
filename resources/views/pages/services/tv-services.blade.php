@extends('layouts.main')

@section('content')
    @include('components.header.tv-service', ['title' => $title, 'backgroundImgUrl' => asset('assets/img/brown.png')])
    <section>
        <div class="container">
            <p class="mb-4 mt-4" style="font-size: 25px;"><b>Unlock Exceptional Entertainment at Home!</b></p>
            <div class="row">
                <div class="col-sm-12 col-md-5 col-lg-4">
                    <img class="img-ind" src="{{ asset('assets/img/remote.jpg') }}" alt="">
                </div>
                <div class="col-sm-12 col-md-7 col-lg-8 mt-3 mt-md-0">
                    <p style="font-size: 20px;">Looking for a reliable and high-quality entertainment experience for your home? Discover a
                        service that offers crystal-clear picture quality, a vast channel selection, and flexible
                        plans designed to fit your needs. Whether you're a sports enthusiast, a movie buff, or love
                        to stay updated with the latest shows, this service has you covered.</p>
                </div>
            </div>
            <h5 class="mt-4 ind-page-subtitle">
                Unbeatable Offers Just for You!
            </h5>
            <h6 class="mt-2 ms-4">
               Unlock Exclusive Savings!
            </h6>
            <div style="margin-left: 12px;">
                <p>
                <ul style="list-style-type: square;">
                    <li><b>Get a $140 Rewards Card</b><br>
                        Sign up now and receive a $140 reward card after your installation! Use it for anything from dining to shopping, just for choosing your entertainment service.
                    </li>
                    <li><b>Free Installation</b><br> Enjoy professional installation at no extra cost – hassle-free and quick setup!
                    </li>
                    <li><b>Flexible Plans</b><br> Choose from a variety of plans to suit your lifestyle. Whether you’re a sports fanatic or a movie lover, we have something for everyone!
                    </li>

                </ul>
                </p>
            </div>
            <h5 class="mt-4 ind-page-subtitle">
                Why Choose Us?
            </h5>
            <div style="margin-left: 12px;">
                <p>
                <ul style="list-style-type: square;">
                    <li><b>Record and Rewind with the Genie HD DVR</b>  With our advanced Genie HD DVR, you can record up to 5 shows simultaneously and store up to 200 hours of HD programming. Pause, rewind, and replay – never miss a moment!
                    </li>
                    <li><b>Crystal Clear Picture Quality</b> <br> Experience your favorite shows and movies in stunning HD. You won’t miss a single detail.
                    </li>
                    <li><b>Watch Anytime, Anywhere</b> <br>  Access your favorite shows on-the-go! Stream on your devices using the TV app – perfect for busy lifestyles.
                    </li>
                    <li><b>Sports Coverage Like No Other</b> <br>  Get ready for game day! We offers NFL Sunday Ticket, giving you access to every out-of-market NFL game, plus exclusive sports channels dedicated to all major sports leagues.
                    </li>
                    <li><b>Reliable Customer Support</b> <br>  Our award-winning customer support team is available 24/7 to assist you with any questions or issues. We prioritize your satisfaction and are here to help!
                    </li>
                </ul>
                </p>
            </div>
            <div class="mt-4">
                <b>Customer Satisfaction Guaranteed!</b>
                <p>Join millions of satisfied customers who have made the switch to our services. Our commitment to customer service ensures you receive the best support at all times.</p>
            </div>
            <h4 class="mb-2 mt-4">Don’t Miss Out!</h4>
            <p><b>Sign Up Today and Start Saving!</b> <br>
                Your next great adventure in entertainment awaits. Click the button below to grab this limited-time offer!</p>
            <h5 class="mt-5 ind-page-subtitle">
                FAQs
            </h5>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What channels are included in my package?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>All packages come with a wide variety of channels, including local, sports, and premium channels.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Can I change my package later?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Absolutely! You can easily upgrade or downgrade your package anytime.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Is there a contract?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Yes, but we offer flexible terms that suit your needs!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="dotted-border">
    <div class="text-center mt-5 mb-5 container">
        <a href="{{ url('get-started') }}" class="btn bg-ind-blue col-xl-5 col-xxl-4 btn-lg text-uppercase"> <i class="bx bi-box-arrow-right"></i> CHOOSE YOUR PLAN NOW!</a>
    </div>
@endsection
