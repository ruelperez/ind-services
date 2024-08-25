@extends('layouts.main')

@section('content')

  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="col-md-6">
        <div class="section-title mt-5" style="text-align: left !important">
            <p class="text-dark">Explore our full range of products and solutions.</p>
            <h4 class="text-dark">Round-The-Clock Availability: Capture Every Lead, Never Miss a Client.</h4>
        </div>
        <div class="mt-5" style="text-align: left !important">
          <a href="{{ url('about') }}" class="btn bg-ind-blue px-5 py-3 text-white mt-3 mt-sm-0 ml-3 mb-1 shadow-sm">Learn More</a>
          <a href="{{ url('contact') }}" class="btn btn-light px-5 py-3 mt-3 mt-sm-0 mb-1 shadow-sm">Contact Us</a>
        </div>
      </div>
    </div>
  </div>
  </section>

  <main id="main">

    <section class="gray-gradient-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 mb-3">
                    <div class="card ind-services-btn h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <p class="fw-bold text-white text-uppercase mt-5 mb-5" style="font-size: 20px">Lead Generation Services</p>
                            <p class="text-white">Maximize your lead generation potential with our top-notch Lead Generation Services, tailored to attract and capture high-quality leads for your business's growth and success.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 mb-3">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <p class="fw-bold text-center text-uppercase mt-5 mb-5" style="font-size: 20px">Sales & Support</p>
                            <p>Our Sales & Support services provide comprehensive assistance and guidance to ensure a seamless customer experience, driving sales and fostering customer satisfaction.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 mb-3">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <p class="fw-bold text-center text-uppercase mt-5 mb-5" style="font-size: 20px">Chat & Email Services</p>
                            <p>Elevate your customer communication with our Chat & Email services, offering efficient and personalized interactions to meet your customers' needs and enhance satisfaction.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding-bottom: 30px">
        <div class="container" style="padding-bottom: 0px">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <a href="{{ url('services/mass-tort/home-security') }}" class="btn ind-services-btn d-grid d-flex align-items-center p-3 mb-3" style="border-radius: 0px;">
                        <span class="text-start w-100">Home Security</span>
                        <i class="bx bx-right-arrow-circle display-6 text-white text-end"></i>
                    </a>
{{--                    <a href="{{ url('services/mass-tort/camp-lejune-water-contamination-lawsuit') }}" class="btn ind-services-btn d-grid d-flex align-items-center p-3 mb-3" style="border-radius: 0px;">--}}
{{--                        <span class="text-start w-100">Camp Lejune Water Contamination Lawsuit</span>--}}
{{--                        <i class="bx bx-right-arrow-circle display-6 text-white text-end"></i>--}}
{{--                    </a>--}}
{{--                    <a href="{{ url('services/mass-tort/firefighting-foam-lawsuit') }}" class="btn ind-services-btn d-grid d-flex align-items-center p-3 mb-3" style="border-radius: 0px;">--}}
{{--                        <span class="text-start w-100">Firefighting Foam (FFF) Lawsuit</span>--}}
{{--                        <i class="bx bx-right-arrow-circle display-6 text-white text-end"></i>--}}
{{--                    </a>--}}
{{--                    <a href="{{ url('services/mass-tort/nec-baby-formula-lawsuit') }}" class="btn ind-services-btn d-grid d-flex align-items-center p-3 mb-3" style="border-radius: 0px;">--}}
{{--                        <span class="text-start w-100">NEC Baby Formula Lawsuit</span>--}}
{{--                        <i class="bx bx-right-arrow-circle display-6 text-white text-end"></i>--}}
{{--                    </a>--}}
{{--                    <a href="{{ url('services/mass-tort/zantac-lawsuit') }}" class="btn ind-services-btn d-grid d-flex align-items-center p-3 mb-3" style="border-radius: 0px;">--}}
{{--                        <span class="text-start w-100">Zantac Lawsuit</span>--}}
{{--                        <i class="bx bx-right-arrow-circle display-6 text-white text-end"></i>--}}
{{--                    </a>--}}
{{--                    <a href="{{ url('services/mass-tort/mesothelioma-lawsuit') }}" class="btn ind-services-btn d-grid d-flex align-items-center p-3 mb-3" style="border-radius: 0px;">--}}
{{--                        <span class="text-start w-100">Mesothelioma Lawsuit</span>--}}
{{--                        <i class="bx bx-right-arrow-circle display-6 text-white text-end"></i>--}}
{{--                    </a>--}}
{{--                    <a href="{{ url('services/mass-tort/pfas-lawsuit') }}" class="btn ind-services-btn d-grid d-flex align-items-center p-3 mb-3" style="border-radius: 0px;">--}}
{{--                        <span class="text-start w-100">PFAS Lawsuit</span>--}}
{{--                        <i class="bx bx-right-arrow-circle display-6 text-white text-end"></i>--}}
{{--                    </a>--}}
                </div>
{{--                <div class="col-sm-12 col-md-6 col-lg-6">--}}
{{--                    <a href="{{ url('services/mass-tort/talcum-powder-lawsuit') }}" class="btn ind-services-btn d-grid d-flex align-items-center p-3 mb-3" style="border-radius: 0px;">--}}
{{--                        <span class="text-start w-100">Talcum Powder Lawsuit</span>--}}
{{--                        <i class="bx bx-right-arrow-circle display-6 text-white text-end"></i>--}}
{{--                    </a>--}}
{{--                    <a href="{{ url('services/mass-tort/paraquat-lawsuit') }}" class="btn ind-services-btn d-grid d-flex align-items-center p-3 mb-3" style="border-radius: 0px;">--}}
{{--                        <span class="text-start w-100">Paraquat Lawsuit</span>--}}
{{--                        <i class="bx bx-right-arrow-circle display-6 text-white text-end"></i>--}}
{{--                    </a>--}}
{{--                    <a href="{{ url('services/mass-tort/roundup-lawsuit') }}" class="btn ind-services-btn d-grid d-flex align-items-center p-3 mb-3" style="border-radius: 0px;">--}}
{{--                        <span class="text-start w-100">Roundup Lawsuit</span>--}}
{{--                        <i class="bx bx-right-arrow-circle display-6 text-white text-end"></i>--}}
{{--                    </a>--}}
{{--                    <a href="{{ url('services/mass-tort/cpap-lawsuit') }}" class="btn ind-services-btn d-grid d-flex align-items-center p-3 mb-3" style="border-radius: 0px;">--}}
{{--                        <span class="text-start w-100">CPAP Lawsuit</span>--}}
{{--                        <i class="bx bx-right-arrow-circle display-6 text-white text-end"></i>--}}
{{--                    </a>--}}
{{--                    <a href="{{ url('services/mass-tort/rideshare-lawsuit') }}" class="btn ind-services-btn d-grid d-flex align-items-center p-3 mb-3" style="border-radius: 0px;">--}}
{{--                        <span class="text-start w-100">Rideshare Lawsuit</span>--}}
{{--                        <i class="bx bx-right-arrow-circle display-6 text-white text-end"></i>--}}
{{--                    </a>--}}
{{--                    <a href="{{ url('get-help') }}" class="btn bg-ind-darkblue d-grid d-flex align-items-center justify-content-center p-3 mb-3" style="border-radius: 0px;">--}}
{{--                        <i class="bx bi-box-arrow-right display-6" style="margin-right: 10px"></i> Get Help Now--}}
{{--                    </a>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
{{--    <div class="container">--}}
{{--        <hr class="dotted-border">--}}
{{--    </div>--}}
{{--    <section id="about" class="about gray-gradient-bg">--}}
{{--      <div class="container">--}}
{{--        <div class="row content">--}}
{{--          <div class="col-lg-6">--}}
{{--            <div class="section-title">--}}
{{--                <p>ITTS Legal Consultation</p>--}}
{{--            </div>--}}
{{--            <h3 class="text-justify text-wrap">Defending victims of defective products, offering free assistance - <a href="{{ url('contact') }}">contact us</a> today.</h3>--}}
{{--            <img class="img-ind" src="{{ asset('assets/img/ind-telemarketing.jpg') }}" alt="">--}}
{{--          </div>--}}
{{--          <div class="col-lg-6 pt-4 pt-lg-0">--}}
{{--            <p>--}}
{{--                We can help if you lost a loved one or sustained injuries due to a defective medical device, prescription drug, or dangerous consumer product. With years of experience, we protect the legal rights of individuals whose physical and mental health have been harmed by others. When you hire us, our team will qualify your case, provide legal guidance at every step, and keep you updated on your litigation. Take advantage of our free assistance to discuss your case with a member of our team.--}}
{{--            </p>--}}
{{--            <ul>--}}
{{--              <li><i class="ri-check-double-line"></i> We ensure that our call center remains open round-the-clock, guaranteeing that we never miss your call.</li>--}}
{{--              <li><i class="ri-check-double-line"></i> We streamline our intake process to make it effortless for you, ensuring that you can promptly initiate your case with a qualified lawyer.</li>--}}
{{--              <li><i class="ri-check-double-line"></i> A knowledgeable and dedicated professional will provide you with the personalized attention you rightfully deserve.</li>--}}
{{--              <li><i class="ri-check-double-line"></i> We offer a complimentary case evaluation to assess your situation and determine your eligibility for a lawsuit.</li>--}}
{{--            </ul>--}}
{{--            <p class="fst-italic">--}}
{{--              We are committed to assisting you in reaching your legal goals. Our compassionate team will stand by your side, advocating for your rights, and ensuring that your attorney fights tirelessly until the very end.--}}
{{--            </p>--}}
{{--          </div>--}}
{{--        </div>--}}

{{--      </div>--}}
{{--    </section>--}}

{{--    <section id="services" class="services">--}}
{{--      <div class="container">--}}

{{--        <div class="row">--}}
{{--          <div class="col-md-6">--}}
{{--            <div class="icon-box">--}}
{{--              <i class="bi bi-briefcase"></i>--}}
{{--              <h4><a href="#">Enhanced Client Experience</a></h4>--}}
{{--              <p>A legal answering service ensures that your clients receive prompt, courteous, and professional assistance whenever they reach out. This leaves a lasting positive impression and improves overall client satisfaction.</p>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="col-md-6 mt-4 mt-md-0">--}}
{{--            <div class="icon-box">--}}
{{--              <i class="bi bi-card-checklist"></i>--}}
{{--              <h4><a href="#">24/7 Availability</a></h4>--}}
{{--              <p>With a legal answering service, you can provide round-the-clock availability to your clients. Whether it's after business hours, weekends, or holidays, your dedicated team will be there to handle inquiries, schedule appointments, and offer support.</p>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="col-md-6 mt-4 mt-md-0">--}}
{{--            <div class="icon-box">--}}
{{--              <i class="bi bi-bar-chart"></i>--}}
{{--              <h4><a href="#">Efficient Call Management</a></h4>--}}
{{--              <p>Leave behind the stress of managing incoming calls and focus on your legal expertise. A professional answering service efficiently handles call routing, message-taking, and call screening, allowing you to prioritize your time and concentrate on important matters.</p>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="col-md-6 mt-4 mt-md-0">--}}
{{--            <div class="icon-box">--}}
{{--              <i class="bi bi-binoculars"></i>--}}
{{--              <h4><a href="#">Increased Productivity</a></h4>--}}
{{--              <p>By outsourcing your call management to a legal answering service, you and your staff can dedicate more time to crucial legal tasks. This boosts productivity, minimizes interruptions, and maximizes billable hours.</p>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="col-md-6 mt-4 mt-md-0">--}}
{{--            <div class="icon-box">--}}
{{--              <i class="bi bi-brightness-high"></i>--}}
{{--              <h4><a href="#">Cost Savings</a></h4>--}}
{{--              <p>Hiring a full-time receptionist can be expensive, but with a legal answering service, you enjoy cost savings. You only pay for the services you need, avoiding the overhead costs associated with hiring and training in-house staff.</p>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div class="col-md-6 mt-4 mt-md-0">--}}
{{--            <div class="icon-box">--}}
{{--              <i class="bi bi-calendar4-week"></i>--}}
{{--              <h4><a href="#">Scalability and Flexibility</a></h4>--}}
{{--              <p>As your law firm grows, your legal answering service can easily scale to meet your evolving needs. Whether you require additional call handling during peak periods or wish to customize services as per your preferences, a flexible answering service adapts to your requirements seamlessly.</p>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}

{{--      </div>--}}
{{--    </section>--}}

{{--    @include('partials._faq')--}}

  </main>

@endsection
