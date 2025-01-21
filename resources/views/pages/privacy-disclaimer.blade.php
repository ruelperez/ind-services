@extends('layouts.main')

@section('content')

<section class="services-header" style="background-image: url({{ asset('assets/img/privacy-disclaimer-page-bg.jpg') }}); background-size: cover; background-position: 50% center">
    <div class="container">
        <div class="section-title text-center w-100 mt-5 mb-5">
            <p class="text-white">Privacy Disclaimer</p>
        </div>
    </div>
</section>

<section>
    <div class="container mt-4 mb-4">
        <h4 class="font-weight-bold">1. Disclaimer</h4>
        <p class="mt-4 text-justify">
            Thank you for visiting our website. We trust that you have found it beneficial. We have dedicated considerable time to provide a wealth of information, particularly for victims. This includes resources tailored for individuals with claims that we may not typically handle, such as personal injury claims.
        </p>
        <p class="mt-4">
            We strive to offer user-friendly information on our website, avoiding excessive "lawyer speak." However, please pardon us if this disclaimer deviates slightly from that approach. While it may be a bit straightforward, it's crucial for clarity and transparency.
        </p>
        <p class="mt-4">
            Please note that this website is intended solely for informational purposes and should not be construed as legal or medical advice or counsel.
        </p>
        <p class="mt-4">
            Visitors to this site should refrain from taking action solely based on the content provided and instead seek appropriate legal or professional advice tailored to their specific circumstances and the laws applicable in their state or jurisdiction. The information presented on this website is general in nature and may not represent a comprehensive statement of the law on a given subject. It may also not reflect the most current legal developments or the law applicable in the visitor's particular state or jurisdiction. Additionally, while we strive to provide general guidelines on this website, there are often exceptions to these rules, which may not always be explicitly stated.
        </p>
        <p class="mt-4">
            If you have a particular need or inquiry, we encourage you to consult with your own attorney or seek legal advice from Independent Services, whether through this website or other means. The creation or maintenance of this website by Independent Services does not establish a lawyer-client relationship with any individual, firm, corporation, or other entity visiting or accessing the materials contained within this site.
        </p>
        <p class="mt-4">
            We believe that in the past five years, we haven't taken on any pro bono cases that weren't related to personal injury. Additionally, it's essential to note that our firm would not represent anyone if this website were found to be non-compliant with the applicable rules of any state (which we don't believe to be the case) where a potential client may be located.
        </p>
    </div>
    <div class="container mt-5">
        <h4 class="font-weight-bold">2. Disclosures</h4>
        <p class="mt-4 text-justify">
            We do not claim that the quality of legal services to be provided is superior to the quality of legal services performed by other attorneys.
        </p>
        <p class="mt-4">
            The decision to hire a lawyer is significant and should not be made solely based on advertisements. This website is not designed as an advertisement or solicitation. The material contained within Independent Services' website, https://ind.claims, is for general informational purposes only and does not constitute legal advice or solicitation of legal services. The transmission of information from this site is not intended to establish, and its receipt does not create, an attorney-client relationship between Independent Services and the reader or visitor. Should any information on this website fail to fully comply with regulations in any jurisdiction, this law firm will not accept representation based on that information.
        </p>
        <p class="mt-4">
            In certain jurisdictions, this website may be deemed as advertising. We have taken great care to adhere to all known legal and ethical standards in the creation of this website. It is not our intention to solicit representation from clients solely based on their review of any sections of this website that may not comply with legal or ethical requirements in their jurisdiction.
        </p>
        <p class="mt-4">
            Independent Services has crafted the following privacy statements to underscore our commitment to transparent disclosure and accurately convey our utilization of your personally identifiable information. Our website employs online forms for visitors to request information or consultations from Independent Services. When you complete one of these online contact forms, you may be prompted to furnish certain personal details, such as your name, address, email, and phone number. Upon submission, your message is automatically directed to an Independent Services Intake Specialist or legal assistant, and your contact details are stored in a database. This information will be utilized exclusively by Independent Services and solely to reach out to you as per your specific request.
        </p>
        <p class="mt-4">
            Nothing within this website is meant to draw comparisons between our services and those of any other law firm or lawyer, nor does it imply specialization or certification by any organization.
        </p>
    </div>
</section>

{{--@include('partials._faq')--}}
@endsection
