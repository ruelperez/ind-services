@extends('layouts.main')

@section('content')

    <section class="services-header" style="background-image: url({{ asset('assets/img/privacy-policy-page-bg.jpg') }}); background-size: cover; background-position: 50% center">
        <div class="container">
            <div class="section-title text-center w-100 mt-5 mb-5">
                <p class="text-white">Terms & Conditions</p>
            </div>
        </div>
    </section>

    <section>
        <div class="terms-container">
            <h1 class="text-center">Terms of Use</h1>
            <p><strong>Effective Date:</strong> June 18, 2025</p>
            <p>Welcome to IND Legal Services (“Site”, “we”, “us”, or “our”). By accessing or using our website, you agree to comply with and be bound by the following Terms of Use (“Terms”) and our <a href="{{ url('privacy-policy') }}">Privacy Policy</a>. If you do not agree with these Terms, please do not use this Site.</p>

            <h4>1. Purpose of the Site</h4>
            <p>IND Legal Services operates this Site to assist in the lead generation process for mass tort claims. We help connect individuals who believe they may have suffered harm from certain products, services, or situations with legal professionals or law firms offering free case evaluations.</p>

            <h4>2. Not Legal Advice</h4>
            <p>All content provided on this Site is for informational purposes only and should not be considered legal advice. Submitting your information to IND Legal Services does not create an attorney-client relationship. A formal attorney-client relationship will only be formed after a direct agreement is signed between you and a licensed attorney.</p>

            <h4>3. Eligibility</h4>
            <p>By using this Site, you confirm that you are:</p>
            <ul>
                <li>At least 18 years old</li>
                <li>A resident of the United States</li>
                <li>Providing information that is true, accurate, and complete to the best of your knowledge</li>
            </ul>

            <h4>4. Lead Submission and Information Sharing</h4>
            <p>By submitting your information through this Site, you:</p>
            <ul>
                <li>Authorize IND Legal Services to share your details with one or more licensed attorneys, law firms, or legal service providers for the purpose of reviewing and evaluating your potential claim</li>
                <li>Understand and agree that you may be contacted via phone, email, or SMS by our representatives or partner law firms (standard messaging rates may apply)</li>
                <li>Acknowledge that there is no guarantee your case will be accepted</li>
            </ul>

            <h4>5. No Guarantee of Legal Outcome</h4>
            <p>There is no promise or assurance that submitting your information will result in legal representation or financial compensation. Case acceptance is at the sole discretion of the legal professional reviewing your submission.</p>

            <h4>6. Third-Party Content and External Links</h4>
            <p>Our Site may contain links to third-party websites and content. IND Legal Services is not responsible for the availability, accuracy, or reliability of external websites or services, and inclusion does not imply endorsement.</p>

            <h4>7. Privacy</h4>
            <p>We take your privacy seriously. For details on how we collect, store, and share your personal information, please refer to our <a href="{{ url('privacy-policy') }}">Privacy Policy</a>.</p>

            <h4>8. Intellectual Property</h4>
            <p>All content on this Site—including but not limited to text, graphics, logos, and layout—is the property of IND Legal Services and is protected by copyright and trademark laws. Unauthorized reproduction or use is strictly prohibited.</p>

            <h4>9. Disclaimer of Warranties</h4>
            <p>The Site is provided on an “as-is” and “as-available” basis. IND Legal Services makes no warranties, either express or implied, including but not limited to the accuracy, completeness, or availability of the Site.</p>

            <h4>10. Limitation of Liability</h4>
            <p>IND Legal Services shall not be held liable for any indirect, incidental, or consequential damages resulting from the use or inability to use the Site or the information provided through it.</p>

            <h4>11. Indemnification</h4>
            <p>You agree to defend, indemnify, and hold harmless IND Legal Services, its owners, affiliates, employees, and partners from any and all claims, losses, liabilities, costs, and expenses (including attorney’s fees) arising from your use of the Site or your violation of these Terms.</p>

            <h4>12. Modifications to Terms</h4>
            <p>IND Legal Services reserves the right to change or update these Terms at any time. Your continued use of the Site after any changes signifies your acceptance of the updated Terms.</p>

            <h4>13. Contact Information</h4>
            <p>If you have any questions about these Terms, please contact us at:</p>
            <ul>
                <li><strong>IND Legal Services</strong></li>
                <li><strong>Email:</strong> info@ittslegalconsultation.com</li>
                <li><strong>Phone:</strong> (210) 272-9169</li>
            </ul>
        </div>
    </section>

    @include('partials._faq')
@endsection
@push('css')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fdfdfd;
            margin: 0;
            padding: 40px 20px;
            color: #333;
        }
        .terms-container {
            max-width: 1200px;
            margin: auto;
            padding: 40px 50px;
            background-color: #fff;
        }
        h2 {
            text-align: center;
            margin-bottom: 35px;
            font-size: 26px;
            color: #1a1a1a;
        }
        h5 {
            margin-top: 30px;
            font-size: 16px;
            color: #2c3e50;
        }
        p, ul {
            margin: 12px 0;
            line-height: 1.6;
        }
        ul {
            padding-left: 25px;
        }
    </style>
@endpush
