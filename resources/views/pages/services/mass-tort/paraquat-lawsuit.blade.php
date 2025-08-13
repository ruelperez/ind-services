@extends('layouts.main')

@section('content')
    @include('components.mass-tort-header', [
        'title' => 'Paraquat Parkinson’s Disease Lawsuit',
        'backgroundImgUrl' => asset('assets/img/herbicide.jpg')
    ])

    <section class="py-5">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row">
                {{-- Content --}}
                <div class="col-md-7 mb-4 mb-md-0 order-2 order-md-1">
                    <div class="pe-md-4">
                        <p>
                            If you have been diagnosed with Parkinson’s disease or have experienced other serious health issues due to exposure to the herbicide Paraquat (Gramoxone), you may be entitled to seek compensation from its manufacturer. Pursuing the compensation you deserve can be complex, but with the guidance of an experienced attorney, you can take strong action toward justice.
                        </p>
                        <p>
                            Paraquat is an extremely toxic herbicide that has been banned in many countries due to its dangerous properties. Even minimal skin contact can result in poisoning, while ingestion or inhalation can be life-threatening.
                        </p>
                        <p>
                            Studies, including research from the National Institutes of Health (NIH), show that individuals exposed to Paraquat are 2.5 times more likely to develop Parkinson’s disease compared to those without exposure. Agricultural workers are particularly at high risk.
                        </p>

                        <h4 class="mt-5 ind-page-subtitle">What Is Paraquat?</h4>
                        <p>
                            Paraquat, commonly sold under the brand name Gramoxone, has been in use since 1961 and is manufactured by Syngenta, a Swiss agricultural chemical company. It is used to control grass and weeds on crops such as soybeans, corn, apples, strawberries, sweet potatoes, and cotton.
                        </p>
                        <p>
                            Classified by the U.S. Environmental Protection Agency (EPA) as a “restricted use” herbicide, Paraquat requires a special license for application and is primarily used in large-scale industrial agriculture.
                        </p>

                        <h4 class="mt-5 ind-page-subtitle">How Is Paraquat Dangerous?</h4>
                        <p>
                            Paraquat is highly toxic to humans and animals. It can cause severe damage to soft tissues including the mouth, esophagus, stomach, intestines, lungs, liver, and kidneys. Inhalation and ingestion are the most common exposure routes.
                        </p>
                        <p>
                            Long-term exposure can lead to irreversible lung damage (“paraquat lung”), pulmonary fibrosis, or respiratory failure. There is currently no known antidote for Paraquat poisoning.
                        </p>

                        <h4 class="mt-5 ind-page-subtitle">Health Risks and Symptoms</h4>
                        <p>
                            Even small amounts can be fatal. Symptoms of Paraquat poisoning include:
                        </p>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item">Skin irritation</li>
                                    <li class="list-group-item">Mouth ulcers</li>
                                    <li class="list-group-item">Nausea and vomiting</li>
                                    <li class="list-group-item">Difficulty breathing</li>
                                    <li class="list-group-item">Seizures</li>
                                    <li class="list-group-item">Organ failure (liver, kidney, heart)</li>
                                    <li class="list-group-item">Coma</li>
                                    <li class="list-group-item">Respiratory failure</li>
                                    <li class="list-group-item">Confusion</li>
                                </ul>
                            </div>
                        </div>

                        <h4 class="mt-5 ind-page-subtitle">Why Take Legal Action Now?</h4>
                        <ul class="list-group">
                            <li class="list-group-item">Growing evidence linking Paraquat to Parkinson’s disease</li>
                            <li class="list-group-item">Thousands of lawsuits already filed</li>
                            <li class="list-group-item">Potential compensation for medical bills, lost wages, and suffering</li>
                            <li class="list-group-item">Free and confidential legal consultations</li>
                        </ul>

                        <p class="mt-4">
                            If you or a loved one developed Parkinson’s disease after Paraquat exposure, now is the time to act. Our network connects you with attorneys who work on a contingency fee basis—no fees unless you win.
                        </p>

                        <p class="lead">
                            <strong>Get the help you deserve. Request your free case review today.</strong>
                        </p>
                    </div>
                </div>

                {{-- Form --}}
                @include('components.mass-tort-form', ['prod' => 'Paraquat'])
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
