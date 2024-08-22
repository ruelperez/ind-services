@extends('layouts.main')

@section('content')
@include('components.services-header', ['title' => 'AFFF Firefighting Foam Lawsuit', 'backgroundImgUrl' => asset('assets/img/fire-foam.jpg')])
<section>
    <div class="container">
        <div id="ff-lawsuit">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <img class="img-ind mb-3" src="{{ asset('assets/img/firefighter.jpg') }}" alt="">
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <p>If you developed cancer due to exposure to the hazardous chemicals in firefighting foam, it is important to seek immediate assistance to understand your legal options. You might have the right to receive financial compensation from the manufacturer for the harm you have endured. We can assess your situation and connect you with a lawyer who can represent you. It is crucial to pursue justice for your distressing diagnosis and the resulting financial burdens.</p>
                    <p>We possess the expertise and resources to link you with a skilled and dedicated attorney who can handle the legal aspects of your case while you focus on your treatment. You won't have to face this traumatic period alone; a caring legal team will be by your side, offering the necessary support and guidance.</p>
                    <p>Firefighting foam has been effective in combating fires, but unfortunately, it contains harmful substances that have been linked to an increased risk of certain cancers, such as pancreatic, kidney, and testicular cancer. The manufacturing companies were aware of these dangers but neglected to inform users about the potential adverse effects. You have the opportunity to file a lawsuit against them and seek rightful and comprehensive compensation.</p>
                    <h4 class="mt-5 ind-page-subtitle">What Is Firefighting Foam?</h4>
                    <p>AFFF, also known as aqueous film-forming foam, is a type of foam primarily utilized by firefighters to suppress fires. It was introduced in the 1960s and has gained significant popularity in industries dealing with highly combustible substances. This foam operates by forming a layer of aqueous film that effectively covers and puts out fires caused by petroleum and jet fuel.</p>
                    <p>The most common places people use AFF are:</p>
                    <div class="row">
                        <div class="col-sm-12 col-md-5 col-lg-5">
                            <ul class="list-group">
                                <li class="list-group-item">Fire stations</li>
                                <li class="list-group-item">Chemical plants</li>
                                <li class="list-group-item">Military facilities</li>
                                <li class="list-group-item">Aviation operations</li>
                                <li class="list-group-item">Highway emergency response</li>
                                <li class="list-group-item">Oil refineries</li>
                                <li class="list-group-item">Merchant operations, such as offshore plants and oil tankers</li>
                                <li class="list-group-item">Flammable liquid storage and processing facilities</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('components.get-help-btn')
    </div>
</section>
@endsection
