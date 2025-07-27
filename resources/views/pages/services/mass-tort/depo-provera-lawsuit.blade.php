@extends('layouts.main', [
        'camp_name' => 'mass-tort'
    ])

@section('content')
    @include('components.services-header', [
        'title' => 'Depo-Provera Lawsuit',
        'backgroundImgUrl' => asset('assets/img/injection.jpg')
    ])

    <section class="py-5">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row">
                {{-- Content --}}
                <div class="col-md-7 mb-4 mb-md-0 order-2 order-md-1">
                    <div class="pe-md-4">
                        <div class="mb-3 text-center">
                            <img class="img-ind mx-auto d-block" src="{{ asset('assets/img/injection_2.jpg') }}" alt="Depo-Provera">
                        </div>
                        <p>
                            Depo-Provera, a hormonal birth control injection manufactured by Pfizer, has come under scrutiny for its alleged link to serious health risks, including **bone density loss, osteoporosis, and breast cancer**. Thousands of women who received the injection are now stepping forward to seek justice.
                        </p>
                        <p>
                            Many claim they were not adequately warned about the long-term side effects of Depo-Provera, especially its impact on bone health and increased risk of developing breast cancer. These complications have affected women’s quality of life and, in some cases, led to permanent damage.
                        </p>
                        <p>
                            If you or a loved one received Depo-Provera injections and were later diagnosed with a serious medical condition, you may be eligible for financial compensation. Our team can connect you with attorneys experienced in product liability and pharmaceutical lawsuits.
                        </p>

                        <h4 class="mt-5 ind-page-subtitle">Potential Health Risks Linked to Depo-Provera</h4>
                        <ul class="list-group mb-3">
                            <li class="list-group-item">Osteoporosis or bone density loss</li>
                            <li class="list-group-item">Breast cancer</li>
                            <li class="list-group-item">Mood disorders or depression</li>
                            <li class="list-group-item">Irregular menstrual bleeding or amenorrhea</li>
                            <li class="list-group-item">Increased risk of blood clots</li>
                            <li class="list-group-item">Severe migraines or headaches</li>
                        </ul>

                        <p>
                            Several of these conditions may not present symptoms immediately, making it crucial for users to undergo medical evaluations and seek legal consultation as soon as possible.
                        </p>

                        <h4 class="mt-5 ind-page-subtitle">Who May Qualify for a Depo-Provera Lawsuit?</h4>
                        <p>Women who meet the following criteria may qualify for a claim:</p>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item">Received multiple Depo-Provera injections</li>
                                    <li class="list-group-item">Suffered bone fractures or diagnosed with low bone density</li>
                                    <li class="list-group-item">Diagnosed with breast cancer</li>
                                    <li class="list-group-item">Experienced life-altering side effects not disclosed by the manufacturer</li>
                                    <li class="list-group-item">Was unaware of long-term risks when prescribed the injection</li>
                                </ul>
                            </div>
                        </div>

                        <h4 class="mt-5 ind-page-subtitle">Why Take Legal Action Now?</h4>
                        <ul class="list-group">
                            <li class="list-group-item">Time limits apply — missing a deadline can forfeit your claim</li>
                            <li class="list-group-item">Legal teams are actively reviewing Depo-Provera cases</li>
                            <li class="list-group-item">You may be entitled to compensation for medical costs, pain and suffering, and lost income</li>
                            <li class="list-group-item">Filing is risk-free — no upfront legal fees</li>
                        </ul>

                        <p class="mt-4">
                            If you suspect that Depo-Provera has caused your medical condition, you deserve answers and support. A legal team can guide you through the process and help determine whether you have a valid claim.
                        </p>

                        <p class="lead">
                            <strong>Take the first step toward justice — request a free case review today.</strong>
                        </p>
                    </div>
                </div>

                {{-- Form --}}
                <div class="col-md-5 mb-4 mb-md-0 order-1 order-md-2">
                    {{-- Free Consultation Banner --}}
                    <div class="text-center mb-3">
                        <span class="badge bg-success fs-5 px-4 py-2 shadow-sm">
                            FREE CONSULTATION
                        </span>
                    </div>
                    <div class="card border-0 shadow-sm" style="background-color: #f1f1f1">
                        {{-- Header with background color --}}
                        <div class="px-4 py-3" style="background-color: #DCDCDC;">
                            <p class="text-dark text-center mb-0">
                                <b>Have you been affected by a Product or Service?</b>
                            </p>
                        </div>
                        <div class="card-body p-4 rounded">
                            {{-- DO NOT MODIFY THIS FORM --}}
                            <form id="getHelpFormDepo" style="color: #000000">
                                <div class="form-group mb-4">
                                    <label class="mb-2 text-muted">Type of Product Liability</label>
                                    <select name="type" class="form-control">
                                        <option value="Depo-Provera">Depo-Provera</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mb-2 text-muted">Did you or a loved one receive Depo-Provera medication on a regular basis?</label>
                                    <select name="depo_provera_taken" class="form-control">
                                        <option value="">-- select --</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                <div class="form-group mb-4">
                                    <label class="mb-2 text-muted">Approximately how long did you or loved one take Depo-Provera medication on a regular basis?</label>
                                    <select name="depo_provera_use" class="form-control">
                                        <option value="">-- select --</option>
                                        <option value="1 year">1 year</option>
                                        <option value="2 years">2 years</option>
                                        <option value="3 or more years">3 or more years</option>
                                        <option value="Less than 1 year">Less than 1 year</option>
                                        <option value="Never took Depo-Provera">Never took Depo-Provera</option>
                                    </select>
                                </div>

                                <div class="form-group mb-4">
                                    <label class="mb-2 text-muted">Have you or a loved one been diagnosed with a medical condition?</label>
                                    <select name="diagnosis" class="form-control">
                                        <option value="">-- select --</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                <div class="form-group mb-4">
                                    <label class="mb-2 text-muted">Is an attorney helping you with your case?</label>
                                    <select name="attorney" class="form-control">
                                        <option value="">-- select --</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                <div class="form-group mb-4">
                                    <label class="mb-2 text-muted">Case Injury?</label>
                                    <select name="injury" class="form-control">
                                        <option value="">-- select --</option>
                                        <option value="Brain Meningioma">Brain Meningioma</option>
                                        <option value="Brain Cyst">Brain Cyst</option>
                                        <option value="Brain Tumor">Brain Tumor</option>
{{--                                        <option value="Disorientation">Disorientation</option>--}}
{{--                                        <option value="Dizziness">Dizziness</option>--}}
{{--                                        <option value="Moderate to severe headaches">Moderate to severe headaches</option>--}}
{{--                                        <option value="Nausea">Nausea</option>--}}
{{--                                        <option value="Spinal Meningioma">Spinal Meningioma</option>--}}
                                        <option value="Other injury">Other injury</option>
                                        <option value="None of These">None of These</option>
                                    </select>
                                </div>

                                <div class="form-group mb-4">
                                    <label class="mb-2 text-muted">Describe your case</label>
                                    <textarea name="description" class="form-control"></textarea>
                                </div>

                                <div class="form-group mb-4">
                                    <label class="mb-2 text-muted">First Name</label>
                                    <input type="text" name="firstname" class="form-control">
                                </div>

                                <div class="form-group mb-4">
                                    <label class="mb-2 text-muted" >Last Name</label>
                                    <input type="text" name="lastname" class="form-control">
                                </div>

                                <div class="form-group mb-4">
                                    <label class="mb-2 text-muted">Phone</label>
                                    <input type="text" name="phone" class="form-control">
                                </div>

                                <div class="form-group mb-4">
                                    <label class="mb-2 text-muted">Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>

                                <div class="form-group mb-4">
                                    <label class="mb-2 text-muted">Zip Code</label>
                                    <input type="text" name="zip_code" class="form-control">
                                </div>

                                <div class="form-group mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="terms" value="1">
                                        <label class="form-check-label text-small text-muted" style="text-align: justify;">
                                            By submitting "Yes", you provide your electronic signature and agree to be called at the number provided above by PLM about our services, which may include auto dialers and pre-recorded voice, even if your telephone number is currently listed on any state, federal or corporate Do Not Call registry. Your consent is not required to purchase any goods or services. You also agree to the <a href="{{ url('/terms-&-condition') }}">Terms Of Use</a> (including arbitration), <a href="{{ url('legal-privacy-policy') }}">PRIVACY POLICY</a>, <a href="{{ url('tcpa-consent') }}">TCPA Consent</a> & <a href="{{ url('legal-privacy-disclaimer') }}">Privacy Disclaimer</a>. Message and data rates may apply. Message frequency varies.
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    @csrf
                                    <button type="submit" class="btn btn-primary w-100">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> {{-- End Form --}}
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script src="{{ asset('js/depo.js') }}?v{{ \Illuminate\Support\Str::random() }}"></script>
@endpush
