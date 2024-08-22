@extends('layouts.main')

@section('content')
<main id="main">
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="col-md-6">
                <h2 class="mb-4 mt-2 font-weight-bolder text-left"><span class="text-ind-blue">{{ $title }}</span></h2>
                </div>
            </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <p>
                                <strong>Type of Product Liability</strong> <br>
                                {{ $case->type }}
                            </p>
                            <p>
                                <strong>Is an attorney helping you with your case?</strong> <br>
                                {{ $case->is_attorney == 0 ? 'No' : 'Yes' }}
                            </p>
                            <p>
                                <strong>Case Description</strong> <br>
                                {{ $case->description }}
                            </p>
                            <p>
                                <strong>Were you hospitalized or received treatment?</strong> <br>
                                {{ $case->is_hospitalized == 0 ? 'No' : 'Yes' }}
                            </p>
                            <p>
                                <strong>Year of Injury</strong> <br>
                                {{ $case->date_injured }}
                            </p>
                            <p>
                                <strong>Best Time to Call</strong> <br>
                                {{ $case->call_time }}
                            </p>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <p>
                                <strong>First Name</strong> <br>
                                {{  $case->firstname  }}
                            </p>
                            <p>
                                <strong>Last Name</strong> <br>
                               {{ $case->lastname }}
                            </p>
                            <p>
                                <strong>Phone</strong> <br>
                                {{ $case->phone }}
                            </p>
                            <p>
                                <strong>Email</strong> <br>
                                {{ $case->email }}
                            </p>
                            <p>
                                <strong>ZIP Code</strong> <br>
                                {{ $case->zip_code }}
                            </p>
                            <p>
                                <strong>Address</strong> <br>
                                {{ $case->address }}
                            </p>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <p>
                                <strong>Trusted Form Certificate</strong> <br>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" value="{{ $case->share_url }}">
                                    <a href={{ $case->share_url }} target="_blank" class="btn btn-primary input-group-btn">View Certificate</a>
                                </div>
                            </p>
                            <img class="img-ind" src="{{ asset('assets/img/case.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
