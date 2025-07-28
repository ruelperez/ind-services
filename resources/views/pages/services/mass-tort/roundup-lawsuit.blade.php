@extends('layouts.main')

@section('content')
    @include('components.mass-tort-header', [
        'title' => 'Roundup Cancer Lawsuit',
        'backgroundImgUrl' => asset('assets/img/roundup.jpg')
    ])

    <section class="py-5">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row">
                {{-- Content --}}
                <div class="col-md-7 mb-4 mb-md-0 order-2 order-md-1">
                    <div class="pe-md-4">
                        <p>
                            If you have developed cancer as a result of exposure to the chemicals in Roundup, you may be eligible to file a lawsuit against Monsanto. Glyphosate, one of the main ingredients in the pesticide, has been linked to an increased risk of various types of cancer, including hairy cell leukemia and non-Hodgkin's lymphoma (NHL).
                        </p>
                        <p>
                            Monsanto continued to market Roundup as safe, despite growing evidence linking long-term exposure to cancer. Holding manufacturers accountable is crucial for justice and prevention.
                        </p>

                        <h4 class="mt-5 ind-page-subtitle">What is Roundup?</h4>
                        <p>Roundup, introduced in the 1970s, quickly became a popular herbicide used by farmers, gardeners, and landscapers. Its main ingredient, glyphosate, is a non-selective herbicide that kills most plants by disrupting essential growth proteins.</p>
                        <p>Despite its popularity, glyphosate has come under scrutiny due to its potential health effects. The International Agency for Research on Cancer (IARC) classified it as "probably carcinogenic to humans," linking it to cancers like non-Hodgkin's lymphoma.</p>

                        <h4 class="mt-5 ind-page-subtitle">Who Is at Risk?</h4>
                        <p>Regular exposure to glyphosate increases the risk of certain cancers, especially for individuals in these professions:</p>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item">Groundskeepers</li>
                                    <li class="list-group-item">Farmers</li>
                                    <li class="list-group-item">Pesticide applicators</li>
                                    <li class="list-group-item">Professional gardeners</li>
                                    <li class="list-group-item">Landscapers</li>
                                    <li class="list-group-item">Agricultural workers</li>
                                </ul>
                            </div>
                        </div>

                        <h4 class="mt-5 ind-page-subtitle">Why Take Legal Action Now?</h4>
                        <ul class="list-group">
                            <li class="list-group-item">Thousands of Roundup cancer lawsuits have been filed</li>
                            <li class="list-group-item">Major verdicts and settlements have already occurred</li>
                            <li class="list-group-item">You may lose eligibility if you wait too long</li>
                            <li class="list-group-item">Legal consultations are free and confidential</li>
                        </ul>

                        <p class="mt-4">
                            If you or someone you know developed cancer after Roundup exposure, now is the time to act. Our network connects you with experienced legal teams who work on contingency—no fees unless you win.
                        </p>

                        <p class="lead">
                            <strong>Get the help you deserve. Request your free case review today.</strong>
                        </p>
                    </div>
                </div>

                {{-- Form --}}
                @include('components.mass-tort-form', ['prod' => 'Round Up'])
            </div>
        </div>

        {{-- Mobile CTA --}}
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
