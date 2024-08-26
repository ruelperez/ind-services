@extends('layouts.main')

@section('content')
    @include('components.services-header', ['title' => $title, 'backgroundImgUrl' => asset('assets/img/cpap.jpg')])
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <img class="img-ind" src="{{ asset('assets/img/cpap2.jpg') }}" alt="">
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <p>If you have utilized a Philips sleep apnea device for a duration of six months or more and have
                        received a diagnosis of:</p>
                    <ol>
                        <li>a respiratory condition (e.g., pulmonary fibrosis),</li>
                        <li>lung damage,</li>
                        <li>or cancer,</li>
                    </ol>
                    <p>you may potentially be eligible for substantial financial compensation.</p>
                </div>
            </div>
            <p class="mt-3">If you are considering filing a claim or lawsuit for injuries resulting from a recalled CPAP
                device, it is crucial to take action before June 14, 2023, as time may be running out. This date marks
                two years since Philips initially announced the CPAP recall, which could potentially trigger the start
                of the statute of limitations period for CPAP injury claims. If you reside in a state with a two-year
                statute of limitations, it may be too late to file or register a claim after this two-year anniversary.
                However, there are exceptions, such as the discovery rule, that might extend the filing deadline for
                certain victims. Nevertheless, it is always advisable to initiate a claim as early as possible to avoid
                any potential defense arguments that the deadline for filing a lawsuit has passed.</p>
            <h5 class="ind-page-subtitle mt-5">CPAP and BiPAP Machines</h5>
            <p>Sleep apnea is a prevalent condition where an individual experiences shallow breathing or temporary
                pauses in breathing during sleep. This can lead to various health issues, including headaches, fatigue,
                as well as more serious conditions such as hypertension, heart attack, and stroke.</p>
            <p>CPAP therapy, which stands for Continuous Positive Airway Pressure, is the widely accepted and standard
                method of treating sleep apnea. This therapy involves the use of a machine that delivers a continuous
                flow of positive airflow through a mask placed over the nose and mouth of the individual.</p>
            <p>CPAP therapy relies on maintaining a consistent positive air pressure to prevent the airway from
                collapsing during sleep. It utilizes a mask placed over the nose and mouth to deliver the airflow. There
                are other types of sleep apnea machines available, including BiPAP and APAP machines.</p>
            <p>CPAP treatment is highly effective in keeping the airway open and assisting patients with breathing. It
                is considered the most successful treatment for sleep apnea, surpassing even surgical interventions.
                CPAP machines have been shown to significantly reduce sleep apnea in the majority of patients, as
                measured by the apnea/hypopnea index.</p>
            <p>Due to the increasing demand for CPAP machines in recent years, particularly fueled by the COVID-19
                pandemic, the market for these devices has seen significant growth. Philips, for example, generated $6
                billion in revenue from CPAP sales in 2020.</p>
            <p>While CPAP machines generally perform as intended and are a standard treatment option for obstructive
                sleep apnea, the recent safety recall by Philips has led to a surge of lawsuits filed by users who claim
                to have experienced adverse health effects due to defective machines. A class-action lawsuit has been
                formed to consolidate these product liability claims related to the CPAP recall. For affected
                individuals, participating in the multidistrict litigation (MDL) class action provides a relatively
                streamlined avenue for filing a CPAP lawsuit.</p>
            <h5 class="mt-5 ind-page-subtitle">Philips DreamStation CPAP Machines</h5>
            <p>Philips is a prominent medical device and equipment company known for manufacturing various sleep apnea
                machines, including CPAP and BiPAP devices. Their primary range of CPAP machines is marketed under the
                brand name "DreamStation." This product line encompasses the original DreamStation CPAP machine as well
                as the compact travel-sized version called DreamStation Go. These machines have proven to be highly
                profitable for medical device companies.</p>
            <p>One notable feature of Philips' DreamStation CPAP and BiPAP machines is the utilization of a specialized
                type of polyester polyurethane foam known as PE-PUR. This foam is incorporated into the devices to
                reduce sound and provide noise abatement, allowing the DreamStation CPAP machines to operate more
                quietly.</p>
            <h5 class="mt-5 ind-page-subtitle">Safety Recall of DreamStation CPAP Machines</h5>
            <p>On June 14, 2021, Philips made a public announcement regarding a widespread safety recall of 14 models of
                CPAP and BiPAP breathing machines, including their DreamStation line.</p>
            <p>According to Philips, the CPAP recall was initiated due to the identification of a potential issue with
                the PE-PUR sound foam used in these machines. It was discovered that the foam could deteriorate over
                time, posing a risk of being inhaled or ingested by users. The PE-PUR foam contains volatile organic
                compounds (VOCs) that are known to be carcinogenic and toxic to internal organs.</p>
            <p>One of the critical concerns with the PE-PUR foam is its susceptibility to degradation when exposed to
                various factors such as heat, sunlight, moisture, microbial/fungal attack, and even oxygen. Therefore,
                if a CPAP machine was exposed to high humidity or temperatures, the risk of foam breakdown and
                associated health hazards may increase.</p>
            <p>In most personal injury lawsuits, defendants typically deny any product defects. However, in this case,
                Philips Respironics openly acknowledges that inhalation or ingestion of the PE-PUR foam by CPAP machine
                users could lead to severe, and potentially life-threatening, respiratory system damage.</p>
            <p>In an announcement titled "Clinical information for physicians," Philips outlines the following health
                risks associated with the inhalation or ingestion of PE-PUR foam:</p>
            <ul>
                <li>Irritation and airway inflammation (particularly acute in patients with underlying lung or
                    cardiopulmonary conditions)
                </li>
                <li>Headaches and dizziness</li>
                <li>Chest pressure and sinus infection</li>
                <li>Toxic and “carcinogenic effects”</li>
                <li>Damage to the kidney, liver, and other organs</li>
            </ul>
            <h5 class="mt-5 ind-page-subtitle">Philips CPAP Lawsuit</h5>
            <p>The safety recall of the DreamStation and other CPAP devices has led to the filing of lawsuits by CPAP
                lawyers on behalf of individuals who have experienced negative health effects from using these devices.
                It is expected that more CPAP recall lawsuits will emerge due to evidence suggesting that Philips was
                fully aware of the health risks and defects associated with the PE-PUR foam but failed to provide
                sufficient warning to consumers.</p>
            <p>The CPAP lawsuits argue that the recalled machines contain sound abatement foam made of polyester-based
                polyurethane, which has the potential to degrade or release gases under certain circumstances. These
                circumstances include cleaning the machines with ozone or exposing them to high humidity and high
                temperatures.</p>
            <p>These conditions place CPAP users at risk of various health issues, including inflammatory responses,
                headaches, asthma, damage to vital organs, and toxic carcinogenic effects that may lead to cancer.</p>
            @include('components.get-started-btn')
        </div>
    </section>
@endsection
