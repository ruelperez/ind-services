@extends('layouts.main')

@section('content')
    @include('components.mass-tort-header', [
        'title' => 'Motor Vehicle Accident Lawsuit',
        'backgroundImgUrl' => asset('assets/img/accident.jpg')
    ])

    <section class="py-5">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row">
                {{-- Content --}}
                <div class="col-md-7 mb-4 mb-md-0 order-2 order-md-1">
                    <div class="pe-md-4">
                        <div class="mb-3 text-center">
                            <img class="img-ind mx-auto d-block" src="{{ asset('assets/img/car.jpg') }}" alt="Talcum Powder">
                        </div>
                        <p>
                            If you or a loved one has been injured in a motor vehicle accident due to another driver’s negligence, you may be entitled to seek compensation. Recovering damages can be a complex process, but with the guidance of an experienced attorney, you can take strong action toward justice and financial recovery.
                        </p>
                        <p>
                            Car, truck, and motorcycle accidents can result in devastating physical, emotional, and financial consequences. Even minor crashes can lead to costly medical bills, while severe accidents may cause life-changing injuries or even wrongful death.
                        </p>
                        <p>
                            According to the National Highway Traffic Safety Administration (NHTSA), millions of people are injured each year in motor vehicle accidents in the United States, with distracted, reckless, or impaired driving being leading causes.
                        </p>

                        <h4 class="mt-5 ind-page-subtitle">What Is a Motor Vehicle Accident Lawsuit?</h4>
                        <p>
                            A motor vehicle accident lawsuit is a legal action filed by individuals who have suffered injuries or damages due to the negligence of another driver, company, or other responsible party. These lawsuits can help victims recover compensation for medical expenses, lost wages, pain and suffering, and property damage.
                        </p>
                        <p>
                            Whether it involves a car, truck, motorcycle, rideshare vehicle, or commercial transport, victims have the right to hold negligent parties accountable.
                        </p>

                        <h4 class="mt-5 ind-page-subtitle">How Do Motor Vehicle Accidents Happen?</h4>
                        <p>
                            Accidents can occur in many ways, but most are preventable. Common causes include:
                        </p>
                        <ul class="list-group">
                            <li class="list-group-item">Distracted driving (texting, phone use)</li>
                            <li class="list-group-item">Driving under the influence of alcohol or drugs</li>
                            <li class="list-group-item">Reckless or aggressive driving</li>
                            <li class="list-group-item">Speeding</li>
                            <li class="list-group-item">Fatigued driving</li>
                            <li class="list-group-item">Mechanical failures or defective auto parts</li>
                            <li class="list-group-item">Poorly maintained roads</li>
                        </ul>

                        <h4 class="mt-5 ind-page-subtitle">Common Injuries After a Crash</h4>
                        <p>
                            Injuries from motor vehicle accidents can vary widely in severity. Some of the most common include:
                        </p>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item">Whiplash and neck injuries</li>
                                    <li class="list-group-item">Broken bones and fractures</li>
                                    <li class="list-group-item">Traumatic brain injuries (TBI)</li>
                                    <li class="list-group-item">Spinal cord injuries</li>
                                    <li class="list-group-item">Internal bleeding or organ damage</li>
                                    <li class="list-group-item">Severe burns or lacerations</li>
                                    <li class="list-group-item">Post-traumatic stress disorder (PTSD)</li>
                                    <li class="list-group-item">Paralysis</li>
                                    <li class="list-group-item">Wrongful death</li>
                                </ul>
                            </div>
                        </div>

                        <h4 class="mt-5 ind-page-subtitle">Why Take Legal Action Now?</h4>
                        <ul class="list-group">
                            <li class="list-group-item">Statutes of limitations restrict the time you have to file</li>
                            <li class="list-group-item">Evidence and witness testimony can fade over time</li>
                            <li class="list-group-item">Compensation may cover medical bills, lost wages, and pain and suffering</li>
                            <li class="list-group-item">Free and confidential legal consultations available</li>
                        </ul>

                        <p class="mt-4">
                            If you or someone you love has been seriously injured in a motor vehicle accident, do not wait. Our network connects you with attorneys who work on a contingency fee basis—meaning you pay nothing unless they win your case.
                        </p>

                        <p class="lead">
                            <strong>Get the justice and compensation you deserve. Request your free case review today.</strong>
                        </p>
                    </div>
                </div>

                {{-- Form --}}
                @include('components.mass-tort-form', ['prod' => 'Motor Vehicle Accident'])
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
