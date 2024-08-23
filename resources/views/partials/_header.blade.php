<!-- ======= Header ======= -->
<header id="header" class="fixed-top shadow">
    <div class="heading-top">
        <div class="container">
            {{-- <p>
                <strong> <i class="ri-phone-line"></i> CONTACT: 469-775-9358 Ext. 102</strong>
                @if (auth()->check())
                |
                <a href="{{ url('dashboard/admin/index') }}" class="text-primary">
                    <strong>DASHBOARD</strong>
                </a>
                @endif
            </p> --}}
        </div>
    </div>
    <div style="padding: 20px 0;">
        <div class="container d-flex align-items-center">

        <a href="{{ url('/') }}" class="me-auto">
            <img src="{{ asset('assets/img/logo-banner.png?v3') }}" alt="" style="width: 200px; height: auto;">
        </a>

        <nav id="navbar" class="navbar">
        <ul>
            <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
{{--                    <li><a href="{{ url('services/mass-tort/camp-lejune-water-contamination-lawsuit') }}">Camp Lejune Water Contamination Lawsuit</a></li>--}}
{{--                    <li><a href="{{ url('services/mass-tort/firefighting-foam-lawsuit') }}">AFFF Firefighting Foam Lawsuit</a></li>--}}
{{--                    <li><a href="{{ url('services/mass-tort/nec-baby-formula-lawsuit') }}">NEC Baby Formula Lawsuit</a></li>--}}
{{--                    <li><a href="{{ url('services/mass-tort/zantac-lawsuit') }}">Zantac Lawsuit</a></li>--}}
{{--                    <li><a href="{{ url('services/mass-tort/talcum-powder-lawsuit') }}">Talcum Powder Lawsuit</a></li>--}}
{{--                    <li><a href="{{ url('services/mass-tort/paraquat-lawsuit') }}">Paraquat Lawsuit</a></li>--}}
{{--                    <li><a href="{{ url('services/mass-tort/roundup-lawsuit') }}">Roundup Lawsuit</a></li>--}}
{{--                    <li><a href="{{ url('services/mass-tort/cpap-lawsuit') }}">CPAP Lawsuit</a></li>--}}
{{--                    <li><a href="{{ url('services/mass-tort/mesothelioma-lawsuit') }}">Mesothelioma Lawsuit</a></li>--}}
{{--                    <li><a href="{{ url('services/mass-tort/rideshare-lawsuit') }}">Rideshare Lawsuit</a></li>--}}
                    <li><a href="{{ url('services/mass-tort/home-security') }}">Home Security</a></li>
                    <li><a href="{{ url('other-services') }}">Other Services</a></li>
                </ul>
            </li>
            <li><a href="{{ asset('/about') }}">About Us</a></li>
            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
            <li><a href="{{ url('/get-help') }}" class="getstarted">Get Help Now</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
    </div>
</header><!-- End Header -->
