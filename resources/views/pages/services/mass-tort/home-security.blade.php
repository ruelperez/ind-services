@extends('layouts.main')

@section('content')
    @include('components.services-header', ['title' => $title, 'backgroundImgUrl' => asset('assets/img/home-security.jpg')])
    <section>
        <div class="container">
            <h2 class="mb-4">Secure Your Home, Protect What Matters</h2>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <img class="img-ind" src="{{ asset('assets/img/cctv.jpg') }}" alt="">
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <p>In today’s world, home security is more important than ever. Your home is your sanctuary, and keeping it safe shouldn’t be left to chance. That’s why we offer a comprehensive range of cutting-edge security products designed to provide you with peace of mind, whether you're at home or away. From smart locks and cameras to complete surveillance systems, our solutions are tailored to meet the unique needs of every household. With top-tier technology and seamless integration, securing your home has never been easier.</p>
                    <p>Our state-of-the-art systems combine advanced technology with user-friendly features, providing you with seamless control and unparalleled protection. Whether you’re looking for robust surveillance cameras, smart locks, or complete security systems, we have the perfect solution to meet your needs.</p>
                </div>
            </div>
            <h5 class="mt-5 ind-page-subtitle">
                Why Choose Us?
            </h5>
            <div style="margin-left: 12px;">
                <p><ul style="list-style-type: square;">
                    <li>Advanced Technology: Our products are equipped with the latest innovations to keep your home secure.</li>
                    <li>Easy Installation: Enjoy hassle-free setup with our intuitive, DIY-friendly systems.</li>
                    <li>24/7 Monitoring: Rest easy knowing that our professional monitoring services are always on guard.</li>
                    <li>Smart Integration: Seamlessly integrate our security solutions with your smart home devices for enhanced convenience.</li>
                    <li>Customer Support: Our dedicated support team is here to assist you every step of the way.</li>
                </ul></p>
            </div>
            <h5 class="mt-5 ind-page-subtitle">
                Explore Our Range of Home Security Products
            </h5>
            <div style="margin-left: 25px;">
                <b>Smart Security Cameras</b>
                <p>Stay connected with your home, anytime, anywhere. Our smart cameras provide crystal-clear HD video, motion detection, and night vision capabilities to ensure your property is always under watchful eyes. With real-time alerts sent straight to your smartphone, you can monitor your home from wherever you are.</p>
                <p><ul style="list-style-type: square;">
                    <li><b>Indoor & Outdoor Cameras:</b> Whether it's for monitoring the inside of your home or securing your property’s perimeter, we have cameras built for every environment.</li>
                    <li><b>Wireless and Easy Setup:</b> No complicated wiring or lengthy installations. Our cameras are designed for hassle-free setup, making home security accessible for everyone.</li>
                </ul></p>
                <b>Smart Locks & Access Control Systems</b>
                <p>No more worrying about lost keys or unauthorized access. Our smart locks allow you to control who enters your home with ease, using mobile apps, fingerprint recognition, or keycodes.</p>
                <p><ul style="list-style-type: square;">
                    <li><b>Remote Access:</b>  Unlock or lock your doors remotely from your smartphone.</li>
                    <li><b>Guest Access:</b>  Create temporary or permanent access codes for family, friends, or service personnel.</li>
                    <li><b>Activity Logs:</b>  Keep track of who enters and exits your home, giving you control and visibility over your home’s security.</li>
                </ul></p>
            </div>
            @include('components.get-help-btn')
        </div>
    </section>
@endsection
