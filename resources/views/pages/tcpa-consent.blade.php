@extends('layouts.main')

@section('content')

<section class="services-header" style="background-image: url({{ asset('assets/img/tcpa-consent-page-bg.jpg') }}); background-size: cover; background-position: 50% center">
    <div class="container">
        <div class="section-title text-center w-100 mt-5 mb-5">
            <p class="text-white">TCPA Consent</p>
        </div>
    </div>
</section>

<section>
    <div class="container mt-4 mb-4">
        <h4 class="font-weight-bold">TCPA Consent</h4>
        <p class="mt-4 text-justify">
            Regardless of any past decisions to accept or decline telemarketing calls or SMS messages, you explicitly agree to receive communication from us. This consent extends to all matters concerning your lawsuit claim and about our services, through any provided telephone number, physical or electronic address, or any reachable location. You consent to communication via various methods, including SMS messages, calls with prerecorded or artificial voices, and automated calls and messages using auto telephone dialing or texting systems.
        </p>
        <p class="mt-4">
            Automated messages may be activated upon answering the telephone, regardless of whether you or someone else picks up the call. If we contact you, we may leave a message on your answering machine, voicemail, or send one via text. By providing your telephone numbers, you confirm that they are indeed your contact numbers, and you consent to receiving calls at each provided number. You agree to promptly inform us if you cease using any particular phone number. Charges from your cell/mobile telephone provider will apply according to your account type with them. Additionally, you consent to us contacting you via email, using any email address you have provided or may provide in the future. We reserve the right to listen to and/or record calls without prior notice, as allowed by applicable laws, such as for quality monitoring purposes.
        </p>
    </div>
</section>

@endsection
