@extends('layouts.main')

@section('content')
    @include('components.services-header', ['title' => $title, 'backgroundImgUrl' => asset('assets/img/herbicide.jpg')])
    <section>
        <div class="container">
            <div class="" id="paraquat">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <img class="img-ind" src="{{ asset('assets/img/pesticides.jpg') }}" alt="">
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <p>If you have received a diagnosis of Parkinson's disease or have experienced other negative
                            health effects due to exposure to the herbicide paraquat (Gramoxone), you may have the right
                            to seek compensation from the manufacturer. Obtaining the full compensation you deserve can
                            be a complex process, especially when holding a large chemical manufacturer accountable.
                            However, with the guidance of a skilled attorney specializing in Paraquat injuries, you can
                            take assertive measures to pursue the rightful compensation owed to you.</p>
                        <p>Paraquat is an extremely toxic herbicide that has been banned in multiple countries due to
                            its hazardous properties. Even skin exposure to this chemical can result in paraquat
                            poisoning, while ingestion or inhalation can be highly poisonous.</p>
                        <p>In recent years, concerns have grown regarding the potential link between paraquat and
                            Parkinson's disease. According to a study conducted by the National Institutes of Health
                            (NIH), individuals who use paraquat are 2.5 times more likely to develop Parkinson's disease
                            compared to those who do not use it. Agricultural workers, in particular, are at heightened
                            risk of experiencing the harmful effects associated with this herbicide.</p>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <h4 class="ind-page-subtitle">What Is Paraquat?</h4>
                        <p>Paraquat is a widely used herbicide that has been in use since 1961 and is currently
                            authorized for use in numerous countries worldwide. It is commonly known by its brand name,
                            Gramoxone, and is manufactured by Syngenta, an agricultural chemical company based in
                            Switzerland.</p>
                        <p>This herbicide finds application in controlling the growth of grass and weeds on various
                            crops, including soybeans, corn, apples, artichokes, garlic, strawberries, sweet potatoes,
                            and cotton. Its mechanism of action involves damaging the cell membranes of plants, leading
                            to their dehydration and eventual death within a few hours of application.</p>
                        <p>Typically available in liquid form, paraquat is categorized as a "restricted use" substance
                            by the Environmental Protection Agency (EPA). Since 1997, a license has been required for
                            its use as an herbicide in the United States, and it is limited to large-scale industrial
                            agriculture. To distinguish it from beverages or other liquids, paraquat is often dyed with
                            a blue color and given a strong odor.</p>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <img class="img-ind" src="{{ asset('assets/img/pesticide2.jpg') }}" alt="">
                    </div>
                </div>
                <h4 class="mt-5 ind-page-subtitle">How Is Paraquat Dangerous?</h4>
                <p>Paraquat is highly toxic to both plants and animals, particularly when present in high concentrations
                    and with prolonged exposure. In humans, it can cause severe damage to various soft tissues,
                    including the lining of the mouth, esophagus, trachea, stomach, intestines, lungs, liver, and
                    kidneys. Inhalation and ingestion are the main routes of exposure.</p>
                <p>Long-term exposure to paraquat can result in significant harm to the bronchial passages and lungs,
                    leading to a condition known as "paraquat lung." It can also contribute to pulmonary fibrosis or
                    respiratory failure.</p>
                <p>One of the most concerning aspects of paraquat as an herbicide is the lack of a known antidote.
                    Individuals at the highest risk of developing health issues due to paraquat exposure are those
                    working in the agricultural and farming industries.</p>
                <p>Most incidents involving paraquat occur due to accidental or intentional ingestion. Swallowing
                    concentrated amounts of paraquat leads to a rapid reaction, primarily affecting the gastrointestinal
                    tract. Within minutes, symptoms such as mouth and esophageal swelling, severe abdominal pain,
                    nausea, vomiting, and diarrhea can occur.</p>
                <p>Even a small quantity of paraquat ingestion can lead to organ failure within days or weeks. If a
                    significant amount is ingested and the victim survives the initial response, severe damage and
                    scarring of lung tissue are likely to follow. Additionally, exposure to open cuts or wounds on the
                    skin or contact with the eyes can result in severe side effects.</p>
                <p class="mt-5">The lethal dose of paraquat in humans is approximately one to two teaspoons in a 30
                    percent concentration. Paraquat may also contribute to the development of the following
                    conditions:</p>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <ul class="list-group">
                            <li class="list-group-item">Skin irritation</li>
                            <li class="list-group-item">Nail shedding</li>
                            <li class="list-group-item">Nosebleeds</li>
                            <li class="list-group-item">Mouth ulcers</li>
                            <li class="list-group-item">Confusion</li>
                            <li class="list-group-item">Coma</li>
                            <li class="list-group-item">Gastrointestinal bleeding</li>
                            <li class="list-group-item">Fast heart rate</li>
                            <li class="list-group-item">Seizures</li>
                            <li class="list-group-item">Difficulty breathing</li>
                            <li class="list-group-item">Respiratory failure</li>
                            <li class="list-group-item">Pulmonary edema</li>
                            <li class="list-group-item">Esophageal burns or scarring</li>
                            <li class="list-group-item">Heart failure</li>
                            <li class="list-group-item">Liver failure</li>
                            <li class="list-group-item">Kidney failure</li>
                            <li class="list-group-item">Ocular damage</li>
                        </ul>
                    </div>
                </div>
            </div>
            @include('components.get-started-btn')
        </div>
    </section>
@endsection
