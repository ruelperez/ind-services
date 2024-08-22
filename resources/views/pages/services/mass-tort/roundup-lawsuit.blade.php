@extends('layouts.main')

@section('content')
@include('components.services-header', ['title' => $title, 'backgroundImgUrl' => asset('assets/img/roundup.jpg')])
<section>
    <div class="container">
        <div id="roundup">
            <p>If you have developed cancer as a result of exposure to the chemicals in Roundup, you may be eligible to file a lawsuit against Monsanto. Glyphosate, one of the main ingredients in the pesticide, has been linked to an increased risk of various types of cancer, including hairy cell leukemia and non-Hodgkin's lymphoma (NHL). Studies have indicated a correlation between glyphosate exposure and a higher incidence of NHL and other serious medical conditions. Seeking justice is your right, and IND Legal Services is available to assist you in your legal journey.</p>
            <p>Manufacturers have a responsibility to ensure the safety of their consumers by testing their products and meeting quality standards. When there is a potential for harm, adequate warning labels should be provided to inform consumers of the associated risks. Despite being aware of the potential cancer-causing properties of Roundup with prolonged or long-term exposure, Monsanto falsely marketed it as a safe herbicide. Their negligence in this matter should be held accountable for the harm caused to individuals like yourself.</p>
            <h5 class="mt-5 ind-page-subtitle">
                What is Roundup?
            </h5>
            <p>Roundup, introduced by Monsanto in the 1970s, quickly became a popular herbicide choice for a wide range of users, including gardeners, farmers, agricultural workers, and maintenance workers. One of its active ingredients is glyphosate, a non-selective herbicide that effectively kills plants.</p>
            <p>Being non-selective means that glyphosate can kill various plants without discrimination. Once applied, the leaves of the targeted plants absorb the chemical, which then spreads to the roots and throughout the plant. This disrupts the plant's ability to produce necessary proteins for growth, eventually leading to its demise.</p>
            <p>In 2000, Monsanto's patent for using glyphosate in Roundup expired, paving the way for other companies to produce and market similar herbicides. By 2015, there were over 750 glyphosate-based herbicides available in the United States. These products are typically sold in liquid form, although some companies offer glyphosate in salt and acid variations. Glyphosate can be used on plants, vegetable crops, fruits, and more.</p>
            <p>The International Agency for Research on Cancer (IARC) conducted a comprehensive review of the evidence regarding the potential cancer-causing effects of glyphosate exposure. Based on the available information, the IARC classified glyphosate as probably carcinogenic to humans. They found sufficient evidence to demonstrate that pure glyphosate could cause cancer in animals, and limited evidence suggesting that it may also cause cancer in humans. Additionally, strong evidence indicated that both pure glyphosate and glyphosate formulations can cause genotoxicity, or damage to genetic material.</p>
            <h5 class="mt-5 ind-page-subtitle">Groups at Risk of Cancer from Roundup</h5>
            <p>Frequent users of Roundup, who are consistently exposed to the toxic chemical glyphosate, face an increased risk of developing certain types of cancer. Among the individuals who are most commonly exposed to glyphosate are:</p>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <ul class="list-group mt-3">
                        <li class="list-group-item">Groundskeepers</li>
                        <li class="list-group-item">Farmers</li>
                        <li class="list-group-item">Pesticide and herbicide applicators</li>
                        <li class="list-group-item">Professional gardeners</li>
                        <li class="list-group-item">Landscapers</li>
                        <li class="list-group-item">Agricultural workers</li>
                    </ul>
                </div>
            </div>
        </div>
        @include('components.get-help-btn')
    </div>
</section>
@endsection
