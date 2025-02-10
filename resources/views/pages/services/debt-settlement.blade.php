@extends('layouts.main')

@section('content')
    @include('components.header.roofing-window', ['title' => $title, 'backgroundImgUrl' => asset('assets/img/loan-cover.jpg')])
    <section>
        <div class="container">
            <h2 class="mb-4 mt-4">Financial Freedom Starts Here!</h2>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <img class="img-ind" src="{{ asset('assets/img/loan.jpg') }}" alt="">
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 mt-2">
                    <p>Life is full of surprises, and sometimes you need extra cash to handle unexpected expenses, pay off mounting debt, or
                        finally make that big purchase you’ve been planning. Whether it’s an emergency medical bill, home repairs, or just getting back on
                        track financially, we’re here to help. </p>
                    <p>Our loan process is simple, fast, and stress-free, so you can focus on what matters most—without
                        worrying about complicated paperwork or long waiting times. With flexible repayment options and competitive rates, we make borrowing
                        easier and more accessible for everyone.</p>
                </div>
            </div>
            <h5 class="mt-5 ind-page-subtitle">
                How It Works
            </h5>
            <div style="margin-left: 12px;">
                <p>
                <ul style="list-style-type: square;">
                    <li> Apply in Minutes – Fill out our quick and secure online application.
                    </li>
                    <li>Instant Decision – Get approved without long waiting times.
                    </li>
                    <li>Receive Your Funds – Money is deposited directly into your account!
                    </li>
                </ul>
                </p>
            </div>
            <h5 class="mt-5 ind-page-subtitle">
                Why Choose Us
            </h5>
            <div style="margin-left: 12px;">
                <p>
                <ul style="list-style-type: square;">
                    <li>Trusted Lender – Helping thousands of people get the funds they need.
                    </li>
                    <li>Quick & Simple Process – No long paperwork or waiting periods.
                    </li>
                    <li>Flexible Loan Amounts – Borrow as much or as little as you need.
                    </li>
                    <li>Safe & Secure – Your information is 100% protected.
                    </li>
                </ul>
                </p>
            </div>
            <h4 class="mb-2 mt-4">Take the First Step Toward Financial Freedom</h4>
            <p>Don't let financial stress hold you back—secure your future today. Whether it’s for unexpected expenses, debt consolidation, or a major purchase, we’re here to help. Explore our flexible loan options and apply now for a fast, hassle-free borrowing experience!</p>
            @include('components.get-started-btn')
        </div>
    </section>
@endsection
