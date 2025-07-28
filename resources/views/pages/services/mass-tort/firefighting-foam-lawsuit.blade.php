@extends('layouts.main')

@section('content')
    @include('components.mass-tort-header', [
        'title' => 'AFFF Firefighting Foam Lawsuit',
        'backgroundImgUrl' => asset('assets/img/fire-foam.jpg')
    ])

    <section class="py-5">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row">
                {{-- Content --}}
                <div class="col-md-7 mb-4 mb-md-0 order-2 order-md-1">
                    <div class="pe-md-4">
                        <div class="mb-3 text-center">
                            <img class="img-ind mx-auto d-block" src="{{ asset('assets/img/firefighter_img.jpg') }}" alt="Firefighter">
                        </div>
                        <p>
                            If you or a loved one has developed cancer or a serious illness after exposure to firefighting foam (AFFF), you may be entitled to financial compensation. Thousands of lawsuits have already been filed, and more are being added every month. Legal experts expect that a major settlement may be reached soon, so now is the time to act.
                        </p>
                        <p>
                            AFFF has been widely used by firefighters, military personnel, airports, and chemical facilities to suppress flammable liquid fires. Unfortunately, this foam contains toxic chemicals called PFAS—also known as "forever chemicals"—which have been linked to multiple forms of cancer and other health risks.
                        </p>
                        <p>
                            Our team can connect you with experienced attorneys who understand the complexity of these claims. You won’t have to face this process alone. A legal team can guide you every step of the way, while you focus on your health and recovery.
                        </p>

                        <h4 class="mt-5 ind-page-subtitle">Common Cancers and Conditions Linked to AFFF Exposure</h4>
                        <ul class="list-group mb-3">
                            <li class="list-group-item">Kidney cancer</li>
                            <li class="list-group-item">Testicular cancer</li>
                            <li class="list-group-item">Liver cancer</li>
                            <li class="list-group-item">Thyroid cancer</li>
                            <li class="list-group-item">Ulcerative colitis</li>
                            <li class="list-group-item">Hypothyroidism (thyroid disease)</li>
                        </ul>

                        <p>
                            Other conditions such as pancreatic cancer, breast cancer, prostate cancer, bladder cancer, and leukemia are also under investigation and may qualify for compensation depending on your specific case.
                        </p>

                        <h4 class="mt-5 ind-page-subtitle">Where AFFF Exposure Typically Occurs</h4>
                        <p>Firefighting foam exposure is most common in the following environments:</p>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item">Fire stations and training facilities</li>
                                    <li class="list-group-item">Military bases (especially Navy and Air Force)</li>
                                    <li class="list-group-item">Airports and aviation hangars</li>
                                    <li class="list-group-item">Chemical plants and oil refineries</li>
                                    <li class="list-group-item">Highway accident scenes</li>
                                    <li class="list-group-item">Offshore oil rigs and tankers</li>
                                    <li class="list-group-item">Fuel storage depots</li>
                                </ul>
                            </div>
                        </div>

                        <h4 class="mt-5 ind-page-subtitle">Why Act Now?</h4>
                        <ul class="list-group">
                            <li class="list-group-item">Thousands of cases are already filed in federal court</li>
                            <li class="list-group-item">Trial dates are scheduled and settlements may be offered soon</li>
                            <li class="list-group-item">You may lose your right to compensation if you wait too long</li>
                            <li class="list-group-item">You can file at no upfront cost – legal teams work on contingency</li>
                        </ul>

                        <p class="mt-4">
                            Don’t wait. If you or someone you know has suffered after AFFF exposure, take action today. Our network can help you determine your eligibility and connect you with the right legal support.
                        </p>

                        <p class="lead">
                            <strong>Get the help you deserve. Reach out now for a free case review.</strong>
                        </p>
                    </div>
                </div>

                {{-- Form --}}
                @include('components.mass-tort-form', ['prod' => 'Firefighting Foam'])
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
