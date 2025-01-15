@extends('layouts.main')

@section('content')
    @include('components.header.roofing-window', ['title' => $title, 'backgroundImgUrl' => asset('assets/img/roof.jpg')])
    <section>
        <div class="container">
            <h2 class="mb-4 mt-4">Restore Your Roof & Windows</h2>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <img class="img-ind" src="{{ asset('assets/img/roof2.jpg') }}" alt="">
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 mt-2">
                    <p>Your home deserves the best protection and style. Our roofing and window repair and replacement
                        services are designed to enhance your home’s durability and curb appeal. Whether you’re dealing with leaks, drafts, or
                        outdated designs, our expert team ensures high-quality solutions tailored to your needs. Protect your investment and enjoy peace of
                        mind with reliable services you can trust.</p>
                    <p>With a focus on durability and style, we use premium materials and proven techniques to ensure long-lasting results.
                        Say goodbye to costly repairs and skyrocketing energy bills—invest in your home’s future today.
                        Let us help you create a stronger, safer, and more beautiful home with our reliable roofing and window services!</p>
                </div>
            </div>
            <h5 class="mt-5 ind-page-subtitle">
                Why Choose Us for Your Roofing and Window Needs?
            </h5>
            <div style="margin-left: 12px;">
                <p>
                <ul style="list-style-type: square;">
                    <li>Premium Quality Materials: We use industry-leading materials to ensure your roof and windows are built to withstand time and weather.
                    </li>
                    <li>Expert Craftsmanship: Our skilled professionals deliver precision and attention to detail in every project.
                    </li>
                    <li>Energy Efficiency: Upgrade to energy-efficient windows and roofing to reduce utility costs and enhance your home’s comfort.
                    </li>
                    <li>Custom Solutions: Every home is unique—our tailored solutions meet your specific needs and preferences.
                    </li>
                    <li>Dedicated Support: From consultation to completion, our team is here to guide you every step of the way.
                    </li>
                </ul>
                </p>
            </div>
            <h5 class="mt-5 ind-page-subtitle">
                Roof Repair and Replacement
            </h5>
            <div style="margin-left: 25px;">
                <p>Safeguard your home with durable and weather-resistant roofing solutions. Whether it’s minor repairs or a full replacement, we’ve got you covered.</p>
                <p>
                <ul style="list-style-type: square;">
                    <li><b>Leak Protection:</b> Say goodbye to water damage with our expertly sealed roofs.
                    </li>
                    <li><b>Storm Damage Restoration:</b> Quick and reliable repair services to restore your roof after severe weather.
                    </li>
                    <li><b>Variety of Styles:</b> Choose from a range of materials and styles to suit your home’s aesthetic.
                    </li>
                </ul>
            </div>
            <h5 class="mt-5 ind-page-subtitle">
                Window Repair and Replacement
            </h5>
            <div style="margin-left: 25px;">
                <p>Enhance your home’s appearance and energy efficiency with our top-notch window services.</p>
                <p>
                <ul style="list-style-type: square;">
                    <li><b>Custom Window Designs:</b> Modern styles that elevate your home’s curb appeal.
                    </li>
                    <li><b>Energy-Saving Glass:</b> Reduce heat loss and keep your home comfortable year-round.
                    </li>
                    <li><b>Easy Installation:</b> Our team ensures a seamless installation process with minimal disruption.
                    </li>
                </ul>
            </div>
            <h5 class="mt-5 ind-page-subtitle">
                Additional Services
            </h5>
            <div style="margin-left: 25px;">
                <p>Roof Inspections</p>
                <p>
                <ul style="list-style-type: square;">
                    <li><b>Thorough Assessments:</b> Identify potential issues before they become major problems.
                    </li>
                    <li><b>Preventive Maintenance:</b> Extend the life of your roof with regular check-ups.
                    </li>
                </ul>
                <p>Gutter Installation and Repair</p>
                <p>
                <ul style="list-style-type: square;">
                    <li><b>Improved Drainage:</b> Protect your home’s foundation with well-functioning gutters.
                    </li>
                    <li><b>Seamless Integration:</b> Gutters designed to match your roof and home exterior.
                    </li>
                </ul>
            </div>
            <h4 class="mb-2 mt-4">Take the First Step to a Better Home</h4>
            <p>Don’t wait until damage worsens—secure your home’s future today. Explore our range of roofing and window services and let us help you create a safer, more beautiful home. Contact us now for a free consultation!</p>
            @include('components.get-started-btn')
        </div>
    </section>
@endsection
