@extends('layouts.main')

@section('content')
    <main id="main">
        <section id="hero" class="d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="col-md-6">
                    <h2 class="mb-4 mt-2 font-weight-bolder text-left">
                        <span class="text-ind-blue">{{ $title }}</span>
                    </h2>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            {{-- Column 1: Personal Info --}}
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <p>
                                    <strong>Type of Legal Problem</strong>
                                    <br>
                                    {{ $case->type }}
                                </p>

                                <p>
                                    <strong>First Name</strong>
                                    <br>
                                    {{ $case->first_name }}
                                </p>

                                <p>
                                    <strong>Last Name</strong>
                                    <br>
                                    {{ $case->last_name }}
                                </p>

                                <p>
                                    <strong>Phone</strong>
                                    <br>
                                    {{ $case->phone }}
                                </p>

                                <p>
                                    <strong>Email</strong>
                                    <br>
                                    {{ $case->email }}
                                </p>
                            </div>

                            {{-- Column 2: SSDI / Address Info --}}
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <p>
                                    <strong>Attorney Representation</strong>
                                    <br>
                                    {{ $case->attorney }}
                                </p>

                                <p>
                                    <strong>Benefit Status</strong>
                                    <br>
                                    {{ $case->benefit_status }}
                                </p>

                                <p>
                                    <strong>Between 50 and 63</strong>
                                    <br>
                                    {{ $case->between_50_and_63 }}
                                </p>

                                <p>
                                    <strong>Work History</strong>
                                    <br>
                                    {{ $case->work_history }}
                                </p>

                                <p>
                                    <strong>Medical Condition</strong>
                                    <br>
                                    {{ $case->medical_condition }}
                                </p>
                            </div>

                            {{-- Column 3: Address / Trusted Form --}}
                            <div class="col-sm-12 col-md-4 col-lg-4">

                                <p>
                                    <strong>Address</strong>
                                    <br>
                                    {{ $case->address }}
                                </p>

                                <p>
                                    <strong>City</strong>
                                    <br>
                                    {{ $case->city }}
                                </p>

                                <p>
                                    <strong>State</strong>
                                    <br>
                                    {{ $case->state }}
                                </p>

                                <p>
                                    <strong>ZIP Code</strong>
                                    <br>
                                    {{ $case->zip }}
                                </p>

                                <p>
                                    <strong>IP Address</strong>
                                    <br>
                                    {{ $case->ip_address }}
                                </p>

                                <p>
                                    <strong>Trusted Form Certificate</strong>
                                    <br>
                                </p>

                                <div class="input-group mb-3">
                                    <input type="text"
                                           class="form-control"
                                           value="{{ $case->share_url }}"
                                           readonly>

                                    <a href="{{ $case->share_url }}"
                                       target="_blank"
                                       class="btn btn-primary input-group-btn">
                                        View Certificate
                                    </a>
                                </div>

                                <img class="img-ind"
                                     src="{{ asset('assets/img/case.jpg') }}"
                                     alt="">

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
