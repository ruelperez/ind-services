@extends('layouts.main')

@section('content')
    @include('components.mass-tort-header', [
        'title' => 'PFAS Lawsuit',
        'backgroundImgUrl' => asset('assets/img/pfas-lawsuit.jpg')
    ])

    <section class="py-5">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row">
                {{-- Content --}}
                <div class="col-md-7 mb-4 mb-md-0 order-2 order-md-1">
                    <div class="pe-md-4">
                        <h4 class="ind-page-subtitle">What Are PFAS?</h4>
                        <p>Since the 1940s, per- and polyfluoroalkyl substances (PFAS), also referred to as "forever chemicals," have been extensively used in industrial and consumer products. These include food packaging, waterproof clothing, firefighting foams, and non-stick cookware, prized for their water-, oil-, and stain-resistant properties. However, their persistence means they accumulate in the environment and human body, raising serious health concerns.</p>

                        <h4 class="mt-5 ind-page-subtitle">Why Are PFAS Harmful?</h4>
                        <p>PFAS have been linked to serious health problems including cancer, liver damage, thyroid disease, immune system dysfunction, and developmental issues in children. Because these chemicals do not break down easily, they contaminate soil, water, and air—creating long-term environmental and public health risks. Drinking water contamination across the U.S. has triggered investigations and lawsuits, demanding accountability from responsible companies.</p>

                        <h4 class="mt-5 ind-page-subtitle">Common Health Conditions Linked to PFAS Exposure</h4>
                        <ul class="list-group mb-3">
                            <li class="list-group-item">Kidney cancer</li>
                            <li class="list-group-item">Testicular cancer</li>
                            <li class="list-group-item">Liver damage</li>
                            <li class="list-group-item">Thyroid disease</li>
                            <li class="list-group-item">Ulcerative colitis</li>
                            <li class="list-group-item">Developmental effects in children</li>
                        </ul>

                        <h4 class="mt-5 ind-page-subtitle">What Is a PFAS Lawsuit?</h4>
                        <p>PFAS lawsuits are filed against manufacturers and users of PFAS-based products, aiming to hold them accountable for the environmental and health damage caused. These cases have already resulted in large settlements and are helping to drive regulatory changes. The EPA and other agencies are now enforcing stricter standards to address PFAS exposure.</p>

                        <h4 class="mt-5 ind-page-subtitle">Why Act Now?</h4>
                        <ul class="list-group">
                            <li class="list-group-item">Widespread litigation is already underway in federal courts</li>
                            <li class="list-group-item">Regulations are tightening, and more settlements are likely</li>
                            <li class="list-group-item">You may forfeit your legal rights if you wait too long</li>
                            <li class="list-group-item">There’s no upfront cost – lawyers work on contingency</li>
                        </ul>

                        <p class="mt-4">
                            If you or a loved one has been affected by PFAS exposure, now is the time to act. Legal support is available to guide you through the process and help pursue the compensation you deserve.
                        </p>

                        <p class="lead">
                            <strong>Take control of your future. Reach out today for a free case evaluation.</strong>
                        </p>
                    </div>
                </div>

                {{-- Form --}}
                @include('components.mass-tort-form', ['prod' => 'PFAS'])
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
