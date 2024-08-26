@extends('layouts.main')

@section('content')
    @include('components.services-header', ['title' => $title, 'backgroundImgUrl' => asset('assets/img/services/mass-tort/nec-baby-formula.jpg')])
    <section>
        <div class="container">
            <div id="baby-formula-nec">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <img class="img-ind mb-3" src="{{ asset('assets/img/mother.jpg') }}" alt="">
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <p>Many parents turn to baby formula as a way to provide extra nourishment to premature and
                            low-weight babies. Some parents fully rely on formula if the mother has had trouble nursing
                            and is not able to provide their child with adequate breast milk. When parents turn to baby
                            formula, they deserve access to formula that is guaranteed to be safe for their
                            newborns.</p>
                        <p>Unfortunately, some formulas have recently been shown to be unsafe for consumption. High
                            calorie, bovine milk-based baby formula products sold by Similac and Enfamil have been
                            linked to necrotizing enterocolitis, or NEC, a deadly illness that can cause inflammation
                            and necrosis (tissue death) in the intestines.</p>
                        <p>Similac is manufactured by Abbott Laboratories, while Mead Johnson & Company manufactures
                            Enfamil. Neither manufacturer disclosed the possible risks associated with consuming their
                            products on the product labels.</p>
                        <p>The baby formula NEC lawsuits allege that newborns who consumed Enfamil and Similac baby
                            formula products later developed NEC and other gastrointestinal conditions, including gut
                            rot and dead bowel. The lawsuits claim that the manufacturers of Similac and Enfamil failed
                            to warn parents of the dangers their cow’s milk-based products posed to newborns.</p>
                        <p>If you purchased Similac or Enfamil baby formula products for your newborn and your newborn
                            later developed NEC or other gastrointestinal issues, then you could qualify for a baby
                            formula NEC lawsuit and be entitled to recover compensation for financial and non-financial
                            damages that resulted from your infant’s condition.</p>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <h4 class="ind-page-subtitle">What is NEC?</h4>
                        <p>Necrotizing enterocolitis (NEC) is a gastrointestinal condition primarily observed in
                            premature newborns. It involves inflammation in the intestinal tissue, leading to tissue
                            death. The inflammation associated with NEC can also result in the formation of perforations
                            or holes in the intestinal tract, which allows bacteria to leak into the abdominal cavity.
                            Among premature newborns, NEC is the most prevalent type of gastrointestinal condition,
                            affecting approximately 1 in every 2,000-4,000 infants.</p>
                        <p>NEC primarily affects infants who are born with a weight of less than 4.5 pounds. These
                            infants constitute the majority of NEC cases. The onset of NEC typically occurs rapidly,
                            usually within a few weeks after birth. Newborns are particularly susceptible to developing
                            NEC due to the underdeveloped state of their intestines and bowels at the early stages of
                            life.</p>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <img class="img-ind" src="{{ asset('assets/img/nec-baby.jpg') }}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <p>Symptoms of NEC in newborns include:</p>
                        <ul class="list-group">
                            <li class="list-group-item">Abdominal pain and swelling</li>
                            <li class="list-group-item">Alterations in heart rate and blood pressure</li>
                            <li class="list-group-item">Fluctuations in body temperature</li>
                            <li class="list-group-item">Changes in breathing patterns</li>
                            <li class="list-group-item">Diarrhea</li>
                            <li class="list-group-item">Bloody stools</li>
                            <li class="list-group-item">Green or yellow vomit</li>
                            <li class="list-group-item">Refusal to eat</li>
                            <li class="list-group-item">Lethargy</li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <p>NEC can also cause other health conditions to develop, including:</p>
                        <ul class="list-group">
                            <li class="list-group-item">Sepsis</li>
                            <li class="list-group-item">Peritonitis</li>
                            <li class="list-group-item">Short bowel syndrome</li>
                            <li class="list-group-item">Intestinal strictures</li>
                            <li class="list-group-item">Intestinal blockage</li>
                            <li class="list-group-item">Scarring in the intestinal tract</li>
                            <li class="list-group-item">Malabsorption in the intestines</li>
                        </ul>
                    </div>
                </div>
                <p class="mt-5">While certain cases of necrotizing enterocolitis (NEC) can be managed with medication,
                    severe cases often necessitate surgical intervention. However, surgery poses significant risks,
                    particularly for premature babies due to their underdeveloped bodies. Surgical procedures can
                    potentially lead to permanent injuries in newborns. In some instances, infants may lose a
                    substantial portion of their intestinal tract, requiring a bowel transplant to sustain their lives.
                    It is crucial to consider the potential dangers and complications associated with surgery,
                    particularly in the context of the fragile health condition of premature infants affected by
                    NEC.</p>
                <h5 class="mt-5 ind-page-subtitle">You may qualify to file a baby formula NEC lawsuit if you fit the
                    following criteria:</h5>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <ul class="list-group list-group-numbered">
                            <li class="list-group-item">Your child was born prematurely</li>
                            <li class="list-group-item">The child’s mother did not provide breast milk</li>
                            <li class="list-group-item">Your child consumed formula or milk fortifier prior to their
                                diagnosis
                            </li>
                            <li class="list-group-item">Your child has been diagnosed with NEC, gut rot, or dead bowel
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @include('components.get-started-btn')
        </div>
    </section>
    @include('partials._faq')
@endsection
