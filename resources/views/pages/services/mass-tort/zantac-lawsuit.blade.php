@extends('layouts.main')

@section('content')
@include('components.services-header', ['title' => $title, 'backgroundImgUrl' => asset('assets/img/medicine.jpg')])
<section>
    <div class="container">
        <div id="zantac-lawsuit">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <img class="img-ind" src="{{ asset('assets/img/woman-ga.jpg') }}" alt="">
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <p>If you have taken Zantac or ranitidine and subsequently developed cancer, you may have the right to seek compensation from the manufacturer of the medication. Engaging the services of an experienced Zantac attorney can help you take appropriate legal action and pursue the justice you deserve. Holding the drug company accountable for the harm they have caused is your entitlement. The financial burdens resulting from your diagnosis and medical care should not be shouldered by you alone.</p>
                    <p>Zantac (ranitidine) is a commonly used medication for alleviating symptoms associated with various throat and stomach conditions, including ulcers, heartburn, and gastroesophageal reflux disease (GERD).</p>
                    <p>Regrettably, research has revealed a concerning connection between this widely-used drug and different forms of cancer. Numerous studies have demonstrated that many batches of ranitidine contained a carcinogen called NDMA (N-Nitrosodimethylamine). Lawsuits argue that the manufacturer was aware of the cancer risk associated with the drug but deliberately chose not to inform the public.</p>
                    <p>Pharmaceutical companies are responsible for providing consumers with safe medications that are free from defects. If there are known risks, they are obligated to include adequate warning labels to notify the public about the potential harm associated with using the drug.</p>
                    <p>Claims have been made against the various manufacturers of Zantac and ranitidine, asserting that they were aware of the dangers posed by NDMA and the potential risk of developing cancer but failed to provide sufficient warnings when producing these drugs for consumption. When drug manufacturers neglect their duty to protect consumers, they should be held financially accountable for the harm they have caused.</p>
                    <p>Note: It is important to consult with a legal professional specializing in Zantac or ranitidine lawsuits to discuss your specific situation and determine the best course of action.</p>
                </div>
            </div>
            <h4 class="mt-5 ind-page-subtitle">
                What is Zantac?
            </h4>
            <p>In the unfortunate event that you have lost a loved one to cancer and believe that Zantac played a role, you may be eligible for compensation through a wrongful death claim. Your lawyer can carefully assess the details of your case to determine the available options for you to pursue.</p>
            <div class="row mt-3 mb-3">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p>Common Side Effects of Zantac</p>
                    <ul class="list-group mb-3">
                        <li class="list-group-item">Vitamin B-12 deficiency</li>
                        <li class="list-group-item">Nervous system disorders</li>
                        <li class="list-group-item">Increased risk of pneumonia</li>
                        <li class="list-group-item">Hair loss</li>
                        <li class="list-group-item">Rapid or irregular heartbeat</li>
                        <li class="list-group-item">Low blood platelet levels</li>
                        <li class="list-group-item">Skin rashes</li>
                        <li class="list-group-item">Liver failure</li>
                        <li class="list-group-item">Jaundice</li>
                        <li class="list-group-item">Hepatitis</li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p>In many cases, the user could develop cancer. The most common cancers reported by Zantac users are:</p>
                    <ul class="list-group">
                        <li class="list-group-item">Pancreatic cancer</li>
                        <li class="list-group-item">Brain cancer</li>
                        <li class="list-group-item">Bladder cancer</li>
                        <li class="list-group-item">Prostate cancer</li>
                        <li class="list-group-item">Thyroid cancer</li>
                        <li class="list-group-item">Kidney cancer</li>
                        <li class="list-group-item">Breast cancer</li>
                        <li class="list-group-item">vEsophageal cancer</li>
                        <li class="list-group-item">Liver cancer</li>
                        <li class="list-group-item">Stomach cancer</li>
                        <li class="list-group-item">Lung cancer (in non-smokers)</li>
                        <li class="list-group-item">Throat cancer</li>
                    </ul>
                </div>
            </div>
            <p>If you’re suffering from any of these cancers or another medical condition possibly linked to NDMA in Zantac, you should speak to a lawyer immediately.</p>
            <p>If you lost a loved one to cancer and believe Zantac is to blame, you might be entitled to compensation from a wrongful death claim. Your lawyer can review the facts of your case to determine your options.</p>
        </div>
        @include('components.get-help-btn')
    </div>
</section>
@endsection
