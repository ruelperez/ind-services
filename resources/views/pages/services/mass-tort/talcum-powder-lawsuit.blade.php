@extends('layouts.main')

@section('content')
    @include('components.mass-tort-header', [
        'title' => 'Talcum Powder Cancer Lawsuit',
        'backgroundImgUrl' => asset('assets/img/mine-talc.jpg')
    ])

    <section class="py-5">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row">
                {{-- Content --}}
                <div class="col-md-7 mb-4 mb-md-0 order-2 order-md-1">
                    <div class="pe-md-4">
                        <div class="mb-3 text-center">
                            <img class="img-ind mx-auto d-block" src="{{ asset('assets/img/powder.jpg') }}" alt="Talcum Powder">
                        </div>
                        <p>
                            If you have used talcum powder and subsequently developed ovarian cancer or mesothelioma, you may be entitled to financial compensation. Our legal partners can assist you in evaluating your eligibility and pursuing justice.
                        </p>
                        <p>
                            Talc, a mineral found in baby powder and other hygiene products, may be contaminated with asbestos—a known carcinogen. Companies like Johnson & Johnson continued selling talc-based products despite being aware of these dangers, failing to warn consumers.
                        </p>

                        <h4 class="mt-5 ind-page-subtitle">What is Talc?</h4>
                        <p>Talc is a naturally occurring mineral known for its moisture-absorbing and skin-smoothing properties. It's widely used in baby powder and other personal care items.</p>
                        <p>Unfortunately, talc may be contaminated with asbestos during mining. Prolonged use—especially in the genital area or through inhalation—can increase the risk of developing cancer.</p>
                        <p>Since talcum powder is classified as a cosmetic product, it bypasses stricter FDA oversight, allowing manufacturers to avoid proper warnings or regulation for years.</p>

                        <h4 class="mt-5 ind-page-subtitle">Does Talcum Powder Cause Cancer?</h4>
                        <p>Research has shown a significant link between long-term talc use and ovarian cancer. Contaminated particles can enter the body and trigger chronic inflammation, which may lead to cancer.</p>
                        <p>Additionally, frequent inhalation of talc particles has been associated with mesothelioma and other respiratory issues.</p>

                        <h4 class="mt-5 ind-page-subtitle">Other Cancers Under Investigation</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item">Fallopian tube cancer</li>
                                    <li class="list-group-item">Uterine cancer</li>
                                    <li class="list-group-item">Vaginal/vulvar cancer</li>
                                    <li class="list-group-item">Cervical cancer</li>
                                    <li class="list-group-item">Endometrial cancer</li>
                                </ul>
                            </div>
                        </div>

                        <h4 class="mt-5 ind-page-subtitle">Why Take Legal Action Now?</h4>
                        <ul class="list-group">
                            <li class="list-group-item">Thousands of cases have already been filed</li>
                            <li class="list-group-item">Major verdicts and settlements have been awarded</li>
                            <li class="list-group-item">You may lose eligibility if you delay</li>
                            <li class="list-group-item">Legal teams work on contingency – no fees unless you win</li>
                        </ul>

                        <p class="mt-4">
                            Don’t wait. If you or a loved one has been diagnosed with cancer after using talcum powder, legal help is available. Our network can connect you with experienced attorneys to help guide your case.
                        </p>

                        <p class="lead">
                            <strong>Get the help you deserve. Reach out now for a free case review.</strong>
                        </p>
                    </div>
                </div>

                {{-- Form --}}
                @include('components.mass-tort-form', ['prod' => 'Talcum'])
            </div>
        </div>

        @include('components.sign-up-btn')
    </section>
@endsection

@push('css')
    <style>
        .fixed-bottom-btn-mobile {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1050;
        }
    </style>
@endpush

@push('js')
    <script src="{{ asset('js/get-help.js') }}?v{{ \Illuminate\Support\Str::random() }}"></script>
@endpush
