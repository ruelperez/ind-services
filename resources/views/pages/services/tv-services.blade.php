@extends('layouts.main')

@section('content')
    @include('components.services-header', ['title' => $title, 'backgroundImgUrl' => asset('assets/img/watching-tv.jpg')])
{{--    <section>--}}
{{--        <div class="container">--}}
{{--            <h2 class="mb-4">Safeguard Your House and What Counts</h2>--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-12 col-md-4 col-lg-4">--}}
{{--                    <img class="img-ind" src="{{ asset('assets/img/cctv.jpg') }}" alt="">--}}
{{--                </div>--}}
{{--                <div class="col-sm-12 col-md-8 col-lg-8">--}}
{{--                    <p>Nowadays, home security is absolutely essential. You shouldn't put your faith in chance to keep--}}
{{--                        your home safe because it is your haven. Which is why we have a wide variety of cutting-edge--}}
{{--                        security systems designed to make you feel safe at home or on the go. From simple cameras and--}}
{{--                        smart locks to comprehensive monitoring systems, we have solutions to meet the needs of any--}}
{{--                        household. Thanks to cutting-edge electronics and effortless connectivity, home security has--}}
{{--                        never been easier.</p>--}}
{{--                    <p>By combining state-of-the-art technology with user-friendly features, our innovative solutions--}}
{{--                        provide you effortless control and unparalleled safety. Whether you are in the market for smart--}}
{{--                        locks, dependable surveillance cameras, or a comprehensive security system, we have the perfect--}}
{{--                        solution to meet your needs.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <h5 class="mt-5 ind-page-subtitle">--}}
{{--                What Makes Us the Best?--}}
{{--            </h5>--}}
{{--            <div style="margin-left: 12px;">--}}
{{--                <p>--}}
{{--                <ul style="list-style-type: square;">--}}
{{--                    <li>Cutting-edge Technology: In order to ensure the security of your home, our devices are equipped--}}
{{--                        with the most recent technological developments.--}}
{{--                    </li>--}}
{{--                    <li>Straightforward Installation: Our user-friendly, do-it-yourself solutions make the process of--}}
{{--                        setting up as easy as possible.--}}
{{--                    </li>--}}
{{--                    <li>Monitoring Around the Clock: You may rest easy knowing that our team of professionals is always--}}
{{--                        keeping a watchful check on everything.--}}
{{--                    </li>--}}
{{--                    <li>Integration of Smart Technology: With our security systems, you can easily integrate them with--}}
{{--                        your smart home equipment to bring about more convenience.--}}
{{--                    </li>--}}
{{--                    <li>Support for Customers: We have a dedicated team of support specialists who are accessible to--}}
{{--                        assist you at every point during the process.--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <h5 class="mt-5 ind-page-subtitle">--}}
{{--                Discover Our Thorough Selection of Home Security Products--}}
{{--            </h5>--}}
{{--            <div style="margin-left: 25px;">--}}
{{--                <b>Cameras for Electronic Security</b>--}}
{{--                <p>Maintain a connection to your house at any time and from any location. Your property will be under--}}
{{--                    constant surveillance thanks to our intelligent cameras, which are equipped with high-definition--}}
{{--                    (HD) footage that is crystal clear, motion detection, and night vision capabilities. With--}}
{{--                    notifications that are sent directly to your smartphone in real time, you are able to keep an eye on--}}
{{--                    your house regardless of where you are.</p>--}}
{{--                <p>--}}
{{--                <ul style="list-style-type: square;">--}}
{{--                    <li><b>Indoor & Outdoor Cameras:</b> We provide cameras that are designed to be used in a variety of--}}
{{--                        settings, including indoor and outdoor cameras. These cameras may be used to monitor the inside--}}
{{--                        of your house or to secure the perimeter of your property.--}}
{{--                    </li>--}}
{{--                    <li><b>Easily Configurable and Wireless:</b> There are no extensive installs or intricate wiring--}}
{{--                        involved. Our cameras are intended to ease the process of setting them up, making it possible--}}
{{--                        for everyone to have access to home security.--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                </p>--}}
{{--                <b>Electronic Locks and Security System Integration</b>--}}
{{--                <p>Lost keys or unwanted visitors won't be an issue anymore. Whether you prefer keycodes, fingerprint--}}
{{--                    recognition, or smartphone applications, our smart locks make it easy to manage who gets into your--}}
{{--                    house.</p>--}}
{{--                <p>--}}
{{--                <ul style="list-style-type: square;">--}}
{{--                    <li><b>Remote Access:</b> You may unlock or lock your doors remotely from your smartphone using the--}}
{{--                        remote access feature.--}}
{{--                    </li>--}}
{{--                    <li><b>Guest Access:</b> Create temporary or permanent access codes for family members, friends, or--}}
{{--                        service professionals to use in order to get entry to the facility.--}}
{{--                    </li>--}}
{{--                    <li><b>Logs of Activities:</b> Monitoring who comes into and leaves your house provides you with the--}}
{{--                        ability to exercise control and visibility over the safety of your residence.--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                </p>--}}
{{--                <b>Robust Security Systems for Your Home</b>--}}
{{--                <p>In order to provide complete safety, we have developed sophisticated security measures. Your first--}}
{{--                    line of defense against intruders, these systems include door/window sensors, motion detectors,--}}
{{--                    alarms, and 24/7 monitoring options.</p>--}}
{{--                <p>--}}
{{--                <ul style="list-style-type: square;">--}}
{{--                    <li><b>Smart Integration:</b> Seamlessly integrates with your existing smart home devices, including--}}
{{--                        voice assistants like Amazon Alexa or Google Home.--}}
{{--                    </li>--}}
{{--                    <li><b>24/7 Professional Monitoring: </b> Ensure your home is protected at all times with--}}
{{--                        round-the-clock monitoring services that dispatch emergency personnel when needed.--}}
{{--                    </li>--}}
{{--                    <li><b>Customizable Packages:</b> Tailor your security system to meet your unique needs, from a--}}
{{--                        basic setup to advanced solutions for maximum protection.--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                </p>--}}
{{--                <b>Video Doorbells</b>--}}
{{--                <p>See who's at your door before you even open it. Our video doorbells provide instant alerts, live--}}
{{--                    video feeds, and two-way communication, so you can safely interact with visitors or deter potential--}}
{{--                    intruders.</p>--}}
{{--                <p>--}}
{{--                <ul style="list-style-type: square;">--}}
{{--                    <li><b>Real-Time Alerts: </b> Receive instant notifications on your phone when someone approaches--}}
{{--                        your door.--}}
{{--                    </li>--}}
{{--                    <li><b>Two-Way Audio: </b> Talk to visitors, delivery personnel, or potential intruders without--}}
{{--                        needing to open the door.--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <h4 class="mb-2 mt-4">Take Action Now to Safeguard Your House</h4>--}}
{{--            <p>Get moving before it gets worse. The first step in protecting what's important is to peruse our inventory--}}
{{--                of home security devices now. Your home security products and services are at your fingertips, so you--}}
{{--                can rest easy.</p>--}}
{{--            @include('components.get-started-btn')--}}
{{--        </div>--}}
{{--    </section>--}}
    <hr class="mt-5 dotted-border">
    <div class="text-center mt-5 mb-5">
        <a href="{{ url('get-started') }}" class="btn bg-ind-blue col-sm-12 col-md-4 col-lg-4 btn-lg text-uppercase"> <i class="bx bi-box-arrow-right"></i> CHOOSE YOUR PLAN NOW!</a>
    </div>

@endsection
