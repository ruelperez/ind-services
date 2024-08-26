@extends('layouts.main')

@section('content')
    @include('components.services-header', ['title' => $title, 'backgroundImgUrl' => asset('assets/img/masked-human.jpg')])
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <img class="img-ind" src="{{ asset('assets/img/ppe.jpg') }}" alt="">
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <p>Individuals who have been diagnosed with mesothelioma, a type of cancer primarily caused by
                        exposure to asbestos, or their family members, may have the option to pursue legal action
                        against the companies responsible for their asbestos exposure. In most cases, mesothelioma
                        lawsuits tend to result in settlements, often without the need for the client to go through a
                        court trial.</p>
                    <h5 class="mt-5 ind-page-subtitle">What Is a Mesothelioma Lawsuit?</h5>
                    <p>A mesothelioma lawsuit is a legal action initiated by individuals affected by mesothelioma, as
                        well as their family members, against companies that manufactured products containing asbestos,
                        which caused harm resulting in mesothelioma, lung cancer, or asbestosis.</p>
                    <p>Despite being aware of the dangers associated with asbestos, many manufacturers decided to
                        continue using it in their products. Furthermore, they concealed these risks from the
                        public.</p>
                    <p>Mesothelioma lawsuits serve as a means for countless innocent victims and their families to seek
                        justice by holding the responsible companies accountable for exposing them to asbestos and
                        causing their illness. It provides a legal avenue for seeking compensation and bringing
                        attention to the wrongdoing of these companies.</p>
                </div>
            </div>
            <h5 class="mt-5 ind-page-subtitle">Why File a Mesothelioma Lawsuit?</h5>
            <p>Filing a mesothelioma lawsuit presents an opportunity to take a stand and pursue essential financial
                compensation for you and your loved ones. It offers the reassurance of having the necessary financial
                resources to address the costs associated with your illness and ensure lasting financial stability for
                your family.</p>
            <p>
                <strong>Mesothelioma cancer lawsuits can help in the following ways:</strong>
            </p>
            <ul>
                <li>People diagnosed with mesothelioma focus on their health and treatment</li>
                <li>Families tackle the overwhelming cost of mesothelioma treatments or funeral expenses</li>
                <li>Hold manufacturers of asbestos-containing products accountable for their negligence</li>
                <li>Encourage others with asbestos-related illnesses to pursue justice for themselves</li>
            </ul>
            <p>By seeking the help of legal professionals to file a mesothelioma lawsuit, you can receive valuable
                assistance in accessing essential resources that can greatly improve your life. This becomes especially
                important when faced with burdensome medical bills and the emotional strain that comes with a cancer
                diagnosis.</p>
            @include('components.get-started-btn')
        </div>
    </section>
@endsection
