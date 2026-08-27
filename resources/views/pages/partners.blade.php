@extends('layouts.main')

@section('content')
    <div class="partners-page"> {{-- ========================= HERO ========================== --}}
        <section class="partners-hero">
            <div class="partners-hero-container">
                <div class="partners-hero-badge"> Trusted Network</div>
                <h1> Our Partners </h1>
                <p> We work with trusted partners to help connect individuals with information, services, and resources
                    related to their inquiries. </p></div>
        </section> {{-- ========================= MAIN CONTENT ========================== --}}
        <main class="partners-main"> {{-- INTRODUCTION --}}
            <section class="partners-section">
                <div class="partners-section-label"> Our Network</div>
                <h2> Connecting You With Trusted Resources </h2>
                <p class="partners-intro"> Depending on your request and eligibility, your information may be shared
                    with our trusted partner so they may contact you regarding your inquiry or related services. </p>
            </section> {{-- ========================= CURRENT PARTNER ========================== --}}
            <section class="partners-section">
                <div class="partners-section-label"> Current Partner</div>
                <h2> Our Trusted Partner </h2>
                <div class="partner-feature">
                    <div class="partner-header">

                        <div class="partner-logo">
                            <img
                                src="{{ asset('assets/img/lawlogic-logo.png') }}"
                                alt="LawLogic logo"
                            >
                        </div>

                        <div class="partner-title">
                            <h3>LawLogic</h3>

                            <div class="partner-status">
                                Current Partner
                            </div>
                        </div>

                    </div>
                    <p class="partner-description"> LawLogic is a legal lead generation and claimant services agency with more than 20 years of experience in the legal marketing industry. The company provides solutions designed to support the legal claimant process and help connect qualified claimants with appropriate legal service providers.

                        LawLogic offers a comprehensive workflow that may include affiliate screening, intake services, quality assurance, fraud detection, medical verification, and claimant delivery. The company also provides services and technology solutions intended to help improve claimant quality and support the legal intake process.

                        With experience across more than 50 different torts and legal campaigns, LawLogic primarily works within the mass tort and personal injury space. Its services support law firms and marketing companies by helping them manage and evaluate potential claimants and maintain quality throughout the intake and delivery process.

                        LawLogic also emphasizes compliance and fraud-prevention practices, utilizing processes and technology designed to support quality and verification throughout the claimant journey.  ￼

                        Website: Visit LawLogic

                        Depending on your inquiry, eligibility, and the consent you provide, LawLogic may receive your information or contact you regarding your request and potential legal or advocacy-related services. Your information will be handled in accordance with the applicable consent, privacy policies, and terms provided on our website.. </p>
                    <div class="partner-purpose"><strong> Why LawLogic May Contact You </strong> <span> If your inquiry or eligibility matches services offered through their legal or advocacy-related campaigns, LawLogic may contact you to provide additional information about available services or resources. </span>
                    </div>
                </div>
            </section> {{-- ========================= YOUR CONSENT ========================== --}}
            <section class="partners-section">
                <div class="partners-section-label"> Your Consent</div>
                <h2> How Your Information May Be Used </h2>
                <div class="consent-box"><p> By submitting a request through our website, you acknowledge and agree that
                        <strong>IND Legal Services</strong>, its network of lawyers, advocates, and the partner listed
                        on this page may contact you regarding your inquiry or related services, subject to the consent
                        and preferences you provide. </p>
                    <p> You may be contacted by phone, text message, or email, including through automated technology
                        where permitted by applicable law. </p>
                    <p> Consent to be contacted is not a condition of purchasing any goods or services. </p>
                    <div class="info-notice"> Please review our <a href="{{ url('legal-privacy-policy') }}">Privacy
                            Policy</a> and <a href="{{ url('terms-&-condition') }}">Terms Of Use</a> for more
                        information about how we collect, use, and share your information.
                    </div>
                </div>
            </section>
        </main>
    </div>
@endsection
@push('css')
    <style> .partners-page {
            font-family: 'Inter', sans-serif;
            background: #f8fafc;
            color: #111827;
            line-height: 1.7;
        }

        /* ========================= HERO ========================== */
        .partners-hero {
            background: linear-gradient(135deg, #eff6ff 0%, #ffffff 60%, #f8fafc 100%);
            border-bottom: 1px solid #e5e7eb;
        }

        .partners-hero-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 90px 24px 85px;
            text-align: center;
        }

        .partners-hero-badge {
            display: inline-flex;
            align-items: center;
            padding: 7px 14px;
            margin-bottom: 20px;
            border-radius: 999px;
            background: #dbeafe;
            color: #1d4ed8;
            font-size: 13px;
            font-weight: 600;
        }

        .partners-hero h1 {
            font-size: clamp(38px, 6vw, 58px);
            line-height: 1.1;
            letter-spacing: -2px;
            font-weight: 800;
            margin-bottom: 24px;
        }

        .partners-hero p {
            max-width: 760px;
            margin: 0 auto;
            font-size: 17px;
            color: #4b5563;
        }

        /* ========================= MAIN ========================== */
        .partners-main {
            max-width: 900px;
            margin: 0 auto;
            padding: 75px 24px;
        }

        .partners-section {
            margin-bottom: 65px;
        }

        .partners-section-label {
            color: #1d4ed8;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }

        .partners-section h2 {
            font-size: 32px;
            line-height: 1.2;
            letter-spacing: -0.8px;
            margin-bottom: 14px;
        }

        .partners-intro {
            color: #4b5563;
            max-width: 800px;
        }

        /* ========================= FEATURED PARTNER ========================== */
        .partner-feature {
            position: relative;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 35px rgba(15, 23, 42, 0.06);
            overflow: hidden;
        }

        .partner-feature::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: #1d4ed8;
        }

        .partner-header {
            display: flex;
            align-items: center;
            gap: 18px;
            margin-bottom: 25px;
        }

        .partner-logo {
            width: 72px;
            height: 72px;

            flex-shrink: 0;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 16px;

            background: #eff6ff;

            overflow: hidden;
        }


        .partner-title {
            flex: 1;
        }

        .partner-title h3 {
            font-size: 27px;
            line-height: 1.2;
            margin-bottom: 5px;
        }

        .partner-status {
            display: flex;
            align-items: center;

            font-size: 13px;
            font-weight: 600;

            color: #166534;
        }

        .partner-status::before {
            content: "";

            width: 7px;
            height: 7px;

            margin-right: 7px;

            border-radius: 50%;

            background: #22c55e;
        }

        .partner-description {
            color: #4b5563;
            font-size: 16px;
            margin-bottom: 25px;
        }

        .partner-purpose {
            padding: 20px 22px;
            background: #f8fafc;
            border-radius: 12px;
            border: 1px solid #eef2f7;
        }

        .partner-purpose strong {
            display: block;
            color: #111827;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .partner-purpose span {
            color: #6b7280;
            font-size: 14px;
        }

        /* ========================= CONSENT ========================== */
        .consent-box {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 20px;
            padding: 35px;
        }

        .consent-box p {
            color: #4b5563;
            margin-bottom: 18px;
        }

        .consent-box p:last-of-type {
            margin-bottom: 0;
        }

        .consent-box a {
            color: #1d4ed8;
            font-weight: 600;
            text-decoration: none;
        }

        .consent-box a:hover {
            text-decoration: underline;
        }

        /* ========================= NOTICE ========================== */
        .info-notice {
            margin-top: 28px;
            padding: 20px 22px;
            background: #f1f5f9;
            border-left: 4px solid #1d4ed8;
            border-radius: 8px;
            color: #4b5563;
            font-size: 14px;
        }

        /* ========================= MOBILE ========================== */
        @media (max-width: 768px) {
            .partners-hero-container {
                padding: 65px 20px 60px;
            }

            .partners-hero h1 {
                letter-spacing: -1px;
            }

            .partners-hero p {
                font-size: 15px;
            }

            .partners-main {
                padding: 55px 20px;
            }

            .partners-section {
                margin-bottom: 50px;
            }

            .partners-section h2 {
                font-size: 27px;
            }

            .partner-feature {
                padding: 28px 24px;
            }

            .partner-header {
                align-items: flex-start;
                gap: 18px;
            }

            .partner-logo img {
                width: 100%;
                height: 100%;

                object-fit: contain;
                padding: 8px;
            }

            .partner-title h3 {
                font-size: 27px;
                line-height: 1.2;
                margin: 0 0 5px;
            }

            .consent-box {
                padding: 25px;
            }
        }

        @media (max-width: 480px) {
            .partner-header {
                flex-direction: column;
            }

            .partner-feature {
                padding: 25px 20px;
            }
        } </style>
@endpush

