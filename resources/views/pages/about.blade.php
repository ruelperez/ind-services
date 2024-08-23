@extends('layouts.main')

@section('content')

<main id="main">
    <section class="gray-gradient-bg" style="margin-top: 75px">
        <div class="container">
            <div class="section-title text-center">
                <p>About Us</p>
            </div>
            <div class="section-title">
                <h2 class="text-ind-blue">Overview</h2>
            </div>
            <p class="text-justify"><strong>ITTS Services</strong> is an experienced call center. We have been a reliable provider of high quality services since 2017. Our award-winning agents are known for continuously delivering professional results while handling calls accurately and efficiently.</p>
            <p class="text-justify"><strong>ITTS</strong> takes up outsourcing processes that are enabled by information technology. These services span over diverse areas like Mass Tort, Customer Service, Lead Generation, Appointment Setting, Sales and Support, Auto Warranty, Health Insurance, MCA (b2b) and Home Security campaigns as Outbound Services.</p>
            <p class="text-justify"><strong>ITTS Services</strong> is a leader in the management of business processes for different companies across the United States and other countries. To deliver a wide range of services, the company combines process knowledge for both BPO and IT in several industries.</p>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 mb-3">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('assets/img/mission.jpg') }}" class="card-img-top" alt="Our Mission">
                        <div class="card-header bg-white">
                            <p class="card-title text-center text-ind-blue">
                                <strong>OUR MISSION</strong>
                            </p>
                        </div>
                        <div class="card-body d-flex align-items-center">
                            <p>To grow and establish business stability, and maintain good client relationships in a family-oriented environment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 mb-3">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('assets/img/vision.jpg') }}" class="card-img-top" alt="Our Vision">
                        <div class="card-header bg-white">
                            <p class="card-title text-center text-ind-blue">
                                <strong>OUR VISION</strong>
                            </p>
                        </div>
                        <div class="card-body d-flex align-items-center">
                            <p><strong>ITTS Legal Consultation</strong> will inspire its employees to be the best they can be. We will engage in sustainable practices and anticipate the needs of our customers. We will maximize return to the clients while still maintaining Quality in our work.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 mb-3">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('assets/img/values.jpg') }}" class="card-img-top" alt="Our Core Values">
                        <div class="card-header bg-white">
                            <p class="card-title text-center text-ind-blue">
                                <strong>OUR CORE VALUES</strong>
                            </p>
                        </div>
                        <div class="card-body">
                            <p>
                                <strong>Respect</strong>. We value everyone and treat people with dignity and professionalism.
                            </p>
                            <p>
                                <strong>Integrity</strong>. We build trust through responsible actions and honest relationships that unify us as an undivided team.
                            </p>
                            <p>
                                <strong>Team Spirit</strong>. We achieve more when we collaborate and all work together towards a common goal.
                            </p>
                            <p>
                                <strong>Transparency</strong>. It promotes trust and increases motivation. It fosters growth and increases loyalty and responsibility.
                            </p>
                            <p>
                                <strong>Accountability</strong>. Each of us is responsible for our words, our actions, and our results.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
