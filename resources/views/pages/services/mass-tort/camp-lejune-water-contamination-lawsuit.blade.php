@extends('layouts.main')

@section('content')
@include('components.services-header', ['title' => $title, 'backgroundImgUrl' => asset('assets/img/camp-lejune.jpg')])
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <img class="img-ind" src="{{ asset('assets/img/contamination.jpg') }}" alt="">
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8">
                <p>The contamination of Camp Lejeune's water supply stands as a highly significant environmental catastrophe in American history. Between the 1950s and 1980s, two wells containing hazardous industrial chemicals polluted the water source used by more than 800,000 Marines, their families, and civilian employees stationed at the military base.</p>
                <p>Numerous Marines and their families have experienced a multitude of severe health consequences, including but not limited to bladder and kidney cancer, female infertility, leukemia, and other debilitating conditions.</p>
                <p>President Biden took action on August 10 by signing the Honoring our PACT Act of 2022. This act provides an opportunity for veterans and other affected individuals to pursue justice and receive compensation for the harm caused by the contaminated water at Camp Lejeune in North Carolina.</p>
            </div>
        </div>
        <h5 class="mt-5 ind-page-subtitle">
            We Can Help You
        </h5>
        <p>It is crucial to comprehend your legal entitlements and choices if you or a loved one were deployed at Camp Lejeune during the period from 1957 to 1987.</p>
        <h5 class="mt-5 ind-page-subtitle">
            FAQs
        </h5>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Who is eligible to file a Camp Lejeune Water lawsuit?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Under the law, anyone who “resided, worked, or was otherwise exposed” to Camp Lejeune drinking water for 30 days or more between August 1, 1953, and December 31, 1987, may be eligible to file a damages claim. This group includes:</p>
                        <ul>
                            <li>Military veterans who served at Camp Lejeune during the above period</li>
                            <li>Family members of veterans who live on the base</li>
                            <li>Civilians workers who lived or worked on the base</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Can family members sue on behalf of deceased loved ones?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                        <p>Yes. Under the Camp Lejeune Justice Act, a relative or legal representative can file a claim on behalf of a person, living or deceased, who was exposed to the contaminated water during the specified period. These representatives may include the exposed individual’s parent, child, spouse, or sibling.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Which illnesses are linked to contaminated water at Camp Lejeune?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>The Agency for Toxic Substances and Disease Registry (ATSDR), a federal public health agency, evaluated the scientific and medical evidence linking Camp Lejeune’s water contamination to various health conditions.</p>
                        <p>The report and subsequent scientific studies identified more than three dozen diseases linked to chemicals in the camp’s drinking water prompting the camp lejeune toxic water lawsuit. The report and subsequent scientific studies identified more than three dozen diseases linked to chemicals in the camp’s drinking water prompting the camp lejeune toxic water lawsuit.</p>
                        <p>
                            <strong>Cancers linked to Camp Lejeune water contamination:</strong> <br>
                            Contact us to see if you qualify for a camp lejeune cancer lawsuit.
                        </p>
                        <p><strong>Birth defects and reproductive health conditions linked to Camp Lejeune water contamination:</strong></p>
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <ul>
                                    <li>Cardiac birth defects</li>
                                    <li>Choanal atresia</li>
                                    <li>Female infertility</li>
                                </ul>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <ul>
                                    <li>Fetal death</li>
                                    <li>Low birth weight</li>
                                    <li>Major malformations</li>
                                </ul>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <ul>
                                    <li>Miscarriage</li>
                                    <li>Neural tube defects</li>
                                    <li>Oral cleft defects</li>
                                </ul>
                            </div>
                        </div>
                        <p><strong>Other diseases and conditions linked to Camp Lejeune water contamination:</strong></p>
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <ul>
                                    <li>End-stage renal disease</li>
                                    <li>Liver cirrhosis</li>
                                </ul>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <ul>
                                    <li>Parkinson disease</li>
                                    <li>Scleroderma</li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            <strong>VA Disability Benefits vs. Camp Lejeune Lawsuit Damages: What’s the difference?</strong> <br>
                            Following the Camp Lejeune Families Act of 2012, the Department of Veterans Affairs (VA) has provided health care benefits to veterans and their family members stationed at Camp Lejeune between 1953 and 1987 who suffer from any of these 15 health conditions:
                        </p>
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <ul>
                                    <li>Bladder cancer</li>
                                    <li>Breast cancer</li>
                                    <li>Esophageal cancer</li>
                                    <li>Female infertility</li>
                                    <li>Hepatic steatosis</li>
                                </ul>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <ul>
                                    <li>Kidney cancer</li>
                                    <li>Leukemia</li>
                                    <li>Lung cancer</li>
                                    <li>Miscarriage</li>
                                    <li>Multiple myeloma</li>
                                </ul>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <ul>
                                    <li>Myelodysplastic syndromes</li>
                                    <li>Neurobehavioral effects</li>
                                    <li>Neurobehavioral effects</li>
                                    <li>Renal toxicity</li>
                                    <li>Scleroderma</li>
                                </ul>
                            </div>
                        </div>
                        <p>Setting aside the VA’s notorious “deny until they die” approach to rejecting veteran’s disability claims under the 2012 law, the health care benefits available through the VA are not the same as filing a lawsuit and receiving compensation for your injuries. VA disability benefits only cover the cost of health care related to the qualifying condition. They do not compensate for pain and suffering, lost wages, or other damages.</p>
                        <p>In contrast, filing a successful Camp Lejeune lawsuit is the only way to receive compensation for those damages. Because each case is unique, it’s essential to speak with an experienced lawyer to get an accurate assessment of the payment you may be eligible to receive.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Can I file a Camp Lejeune water lawsuit if I’ve received VA disability benefits?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                        <p>Yes. You can file a Camp Lejeune lawsuit even if you have already received VA disability compensation. Under the Camp Lejeune Justice Act of 2022, any damage awards you may receive from a successful lawsuit will be offset by the cost of benefits received from the VA. For example, if you receive a $100,000 settlement from your suit and you’ve already received $50,000 in VA disability benefits—your total award would be $50,000.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        How much compensation can I expect from a Camp Lejeune water contamination lawsuit?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Your compensation will depend on a couple of factors related to your individual case, the entire class action group, and other political considerations.</p>
                        <p>Individual Case Factors The first set of factors will hinge on the strength of your particular case. These factors include:</p>
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <ul>
                                    <li>the severity of your qualifying, diagnosed condition</li>
                                    <li>proof of residency at Camp Lejeune between August 1, 1953, and December 31, 1987</li>
                                    <li>your pre-existing conditions</li>
                                </ul>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <ul>
                                    <li>available medical records and documentation of your injuries</li>
                                    <li>the scientific evidence linking your particular illness to contaminated water</li>
                                    <li>damages you have suffered as a result of your exposure, such as lost wages and medical expenses</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Are There Any Deadlines For When I Need To File?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                        <p>Yes. There is a limited timeline to file your Camp Lejeune water contamination lawsuit—so it’s critical to act quickly. Litigants must file their claims within two years from the final passage of the Camp Lejeune Justice Act.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        How much will I need to pay to hire an attorney to help with my Camp Lejeune water contamination lawsuit?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                        <p>We work on a contingency fee basis. That means our Camp Lejeune lawyers only get paid if we recover compensation for you. There are no upfront costs or hourly rates, and you only pay us a percentage of the settlement recovered in your case. There is no financial risk to working with us.</p>
                    </div>
                </div>
            </div>
        @include('components.get-help-btn')
    </div>
</section>
@endsection
