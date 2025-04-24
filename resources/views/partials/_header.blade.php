<!-- ======= Header ======= -->
<header id="header" class="fixed-top shadow">
    <div class="heading-top border">
        <div class="container">
{{--            --}}{{-- <p>--}}
{{--                <strong> <i class="ri-phone-line"></i> CONTACT: 469-775-9358 Ext. 102</strong>--}}
{{--                @if (auth()->check())--}}
{{--                |--}}
{{--                <a href="{{ url('dashboard/admin/index') }}" class="text-primary">--}}
{{--                    <strong>DASHBOARD</strong>--}}
{{--                </a>--}}
{{--                @endif--}}
{{--            </p> --}}
        </div>
    </div>
    <div style="padding: 20px;">
        <div class="container d-flex align-items-center">
            <a href="{{ url('/') }}" class="me-auto">
                <img src="{{ asset('assets/img/logo-banner.png?v3') }}" alt="" style="width: 200px; height: auto;">
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('services/roofing-&-window') }}">Try Our Trip</a></li>
                            <li><a href="{{ url('services/debt-settlement') }}">Debt Settlement</a></li>
                            <li><a href="{{ url('services/roofing-&-window') }}">Roofing & Window Services</a></li>
                            <li><a href="{{ url('services/home-security') }}">Home Security</a></li>
                            <li><a href="{{ url('services/tv-services') }}">TV Services</a></li>
                            <li><a href="{{ url('other-services') }}">Other Services</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ asset('/about') }}">About Us</a></li>
                    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                    <li><a href="{{ url('/get-started') }}" class="getstarted">Get Started</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </div>
</header><!-- End Header -->
