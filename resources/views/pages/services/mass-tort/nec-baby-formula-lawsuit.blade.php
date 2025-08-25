@extends('layouts.main')

@section('content')
    @include('components.mass-tort-header', [
        'title' => 'NEC Baby Formula Lawsuit',
        'backgroundImgUrl' => asset('assets/img/services/mass-tort/nec-baby-formula.jpg')
    ])

    <section class="py-5">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row">
                {{-- Content --}}
                <div class="col-md-7 mb-4 mb-md-0 order-2 order-md-1">
                    <div class="pe-md-4">
                        <p>
                            Parents trust baby formula manufacturers to provide safe and healthy nutrition for their infants. Unfortunately, recent studies and lawsuits allege that certain cow’s milk-based formulas, such as Similac® and Enfamil®, have been linked to a serious and potentially fatal condition in premature infants known as Necrotizing Enterocolitis (NEC).
                        </p>
                        <p>
                            NEC is a life-threatening gastrointestinal disease that can cause the intestines to become inflamed, leading to tissue death and, in severe cases, the need for emergency surgery or even death. Premature babies fed cow’s milk-based formula are at significantly higher risk compared to those fed breast milk.
                        </p>
                        <p>
                            Families are now filing lawsuits against formula manufacturers, claiming they failed to warn parents and healthcare providers of the risks associated with their products.
                        </p>

                        <h4 class="mt-5 ind-page-subtitle">What Is Necrotizing Enterocolitis (NEC)?</h4>
                        <p>
                            NEC is a dangerous intestinal disease that primarily affects premature infants. It causes intestinal tissue to become inflamed and die, which can lead to perforation, sepsis, or life-threatening infections.
                        </p>
                        <p>
                            Symptoms often appear within the first weeks of life and require immediate medical attention.
                        </p>

                        <h4 class="mt-5 ind-page-subtitle">How Is NEC Linked to Baby Formula?</h4>
                        <p>
                            Studies have shown that premature infants who are fed cow’s milk-based formula are much more likely to develop NEC than those who are fed human breast milk. Despite the known risks, manufacturers of Similac® and Enfamil® did not provide adequate warnings about the dangers their products may pose to preterm babies.
                        </p>
                        <p>
                            Parents are now seeking justice, alleging negligence and failure to warn in these lawsuits.
                        </p>

                        <h4 class="mt-5 ind-page-subtitle">Signs and Symptoms of NEC</h4>
                        <p>
                            NEC can progress rapidly. Common warning signs include:
                        </p>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item">Abdominal swelling</li>
                                    <li class="list-group-item">Feeding intolerance</li>
                                    <li class="list-group-item">Bloody stools</li>
                                    <li class="list-group-item">Vomiting (especially green or yellow fluid)</li>
                                    <li class="list-group-item">Lethargy or lack of energy</li>
                                    <li class="list-group-item">Temperature instability</li>
                                    <li class="list-group-item">Severe infection or sepsis</li>
                                    <li class="list-group-item">Failure to gain weight</li>
                                </ul>
                            </div>
                        </div>

                        <h4 class="mt-5 ind-page-subtitle">Why Take Legal Action Now?</h4>
                        <ul class="list-group">
                            <li class="list-group-item">Thousands of families are already pursuing legal action</li>
                            <li class="list-group-item">Potential compensation for medical expenses, pain and suffering, and long-term care</li>
                            <li class="list-group-item">Holding formula manufacturers accountable for failing to warn parents</li>
                            <li class="list-group-item">Free and confidential case evaluations</li>
                        </ul>

                        <p class="mt-4">
                            If your premature baby developed NEC after being fed Similac® or Enfamil®, you may qualify to file a lawsuit. Our network connects families with experienced attorneys who work on a contingency fee basis—no fees unless you win.
                        </p>

                        <p class="lead">
                            <strong>Protect your child’s future. Request your free case review today.</strong>
                        </p>
                    </div>
                </div>

                {{-- Form --}}
                @include('components.mass-tort-form', ['prod' => 'NEC Baby Formula'])
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
