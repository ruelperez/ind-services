@extends('layouts.main')

@section('content')
    @include('components.mass-tort-header', [
        'title' => 'SSDI',
        'backgroundImgUrl' => asset('assets/img/disability.jpg')
    ])

    <section class="py-5">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row">
                {{-- Content --}}
                <div class="col-md-7 mb-4 mb-md-0 order-2 order-md-1">
                    <div class="pe-md-4">
                        <h4 class="ind-page-subtitle">What Is SSDI?</h4>
                        <p>Social Security Disability Insurance (SSDI) is a federal program that provides monthly benefits to individuals who can no longer work due to a serious medical condition. These benefits are funded through payroll taxes and are designed to help eligible workers and their families maintain financial stability after a disabling injury or illness.</p>

                        <h4 class="mt-5 ind-page-subtitle">Who Qualifies for SSDI?</h4>
                        <p>To qualify for SSDI, applicants must have worked long enough in jobs covered by Social Security and have a medical condition that meets the SSA’s definition of disability. The disability must prevent you from performing substantial gainful activity and be expected to last at least one year or result in death.</p>

                        <ul class="list-group mb-3">
                            <li class="list-group-item">You have a qualifying physical or mental condition</li>
                            <li class="list-group-item">Your disability prevents you from working full-time</li>
                            <li class="list-group-item">You have earned sufficient work credits under Social Security</li>
                            <li class="list-group-item">Your condition is expected to last 12 months or longer</li>
                        </ul>

                        <h4 class="mt-5 ind-page-subtitle">Common Disabilities Covered Under SSDI</h4>
                        <ul class="list-group mb-3">
                            <li class="list-group-item">Musculoskeletal disorders (e.g., back injuries, arthritis)</li>
                            <li class="list-group-item">Cardiovascular diseases (e.g., heart failure, coronary artery disease)</li>
                            <li class="list-group-item">Neurological conditions (e.g., multiple sclerosis, epilepsy)</li>
                            <li class="list-group-item">Mental health disorders (e.g., depression, PTSD, schizophrenia)</li>
                            <li class="list-group-item">Cancer and other terminal illnesses</li>
                        </ul>

                        <h4 class="mt-5 ind-page-subtitle">Why Are SSDI Claims Denied?</h4>
                        <p>Many initial SSDI applications are denied due to incomplete information, lack of medical evidence, or errors in the application process. However, with proper legal guidance, applicants can appeal these denials and increase their chances of approval. Working with an experienced disability attorney helps ensure that every required document and detail is properly submitted.</p>

                        <h4 class="mt-5 ind-page-subtitle">How a Disability Lawyer Can Help</h4>
                        <ul class="list-group mb-3">
                            <li class="list-group-item">Gather and organize medical evidence</li>
                            <li class="list-group-item">Communicate with doctors and SSA representatives on your behalf</li>
                            <li class="list-group-item">Prepare you for hearings and appeals</li>
                            <li class="list-group-item">Handle all paperwork and deadlines</li>
                            <li class="list-group-item">Work on contingency – no fees unless you win</li>
                        </ul>

                        <p class="mt-4">
                            If your SSDI claim has been denied or delayed, it’s not the end of the road. You still have the right to appeal and fight for the benefits you deserve.
                        </p>

                        <p class="lead">
                            <strong>Don’t face the process alone. Get your free case evaluation today and discover how experienced legal professionals can help you secure your SSDI benefits.</strong>
                        </p>
                    </div>
                </div>

                {{-- Form --}}
                @include('components.lawlogic-form', ['prod' => 'SSDI'])
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
    <script src="{{ asset('js/lawlogic-form.js') }}?v{{ \Illuminate\Support\Str::random() }}"></script>
@endpush
