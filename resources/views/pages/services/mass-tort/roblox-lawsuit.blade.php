@extends('layouts.main')

@section('content')
    @include('components.mass-tort-header', [
        'title' => 'Roblox Lawsuit',
        'backgroundImgUrl' => asset('assets/img/roblox-bg.jpg')
    ])

    <section class="py-5">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row">
                {{-- Content --}}
                <div class="col-md-7 mb-4 mb-md-0 order-2 order-md-1">
                    <div class="pe-md-4">
                        <div class="mb-3 text-center">
                            <img class="img-ind mx-auto d-block" src="{{ asset('assets/img/roblox-img.jpg') }}" alt="Roblox Lawsuit">
                        </div>
                        <p>
                            Roblox, one of the largest online gaming platforms in the world, has faced growing legal scrutiny over allegations involving unsafe content, addictive practices, and the exploitation of children. Parents and guardians have raised concerns that the company failed to adequately protect young users, leading to lawsuits seeking accountability and justice.
                        </p>
                        <p>
                            The lawsuits allege that children were exposed to inappropriate content, encouraged to spend large sums of money on in-game purchases, and subjected to online risks due to insufficient safety measures. These issues have sparked national conversations about the responsibility of gaming companies in safeguarding minors.
                        </p>
                        <p>
                            As Roblox continues to expand, millions of children and teens log on daily. The legal claims emphasize that without stronger protections, young users may continue to face harm—financially, emotionally, and socially.
                        </p>

                        <h4 class="mt-5 ind-page-subtitle">What Is the Roblox Lawsuit About?</h4>
                        <p>
                            The Roblox lawsuit is a legal action brought by parents, guardians, and consumer advocates against Roblox Corporation. Plaintiffs claim the company failed to implement adequate safeguards and knowingly profited from practices that put children at risk.
                        </p>
                        <p>
                            The lawsuits seek compensation for families and stronger regulations to hold the platform accountable for alleged negligence and exploitation.
                        </p>

                        <h4 class="mt-5 ind-page-subtitle">Key Allegations in the Roblox Lawsuit</h4>
                        <p>
                            Common claims raised in the lawsuits include:
                        </p>
                        <ul class="list-group">
                            <li class="list-group-item">Exposure of children to inappropriate or harmful content</li>
                            <li class="list-group-item">Encouraging excessive in-game spending by minors</li>
                            <li class="list-group-item">Failure to protect young users from online predators</li>
                            <li class="list-group-item">Insufficient parental controls and monitoring tools</li>
                            <li class="list-group-item">Addictive gameplay mechanics targeting children</li>
                            <li class="list-group-item">Negligent moderation of games and user interactions</li>
                        </ul>

                        <h4 class="mt-5 ind-page-subtitle">Potential Impact on Children</h4>
                        <p>
                            Families involved in the lawsuits report a variety of harms their children experienced while using Roblox. Some of the most common include:
                        </p>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item">Emotional distress from unsafe interactions</li>
                                    <li class="list-group-item">Financial loss from large in-game purchases</li>
                                    <li class="list-group-item">Exposure to explicit or violent material</li>
                                    <li class="list-group-item">Increased screen addiction and social withdrawal</li>
                                    <li class="list-group-item">Mental health impacts such as anxiety or depression</li>
                                </ul>
                            </div>
                        </div>

                        <h4 class="mt-5 ind-page-subtitle">Why Take Legal Action Now?</h4>
                        <ul class="list-group">
                            <li class="list-group-item">Statutes of limitations limit the time to file</li>
                            <li class="list-group-item">Evidence of harmful experiences can fade over time</li>
                            <li class="list-group-item">Families may be entitled to financial compensation</li>
                            <li class="list-group-item">Legal action can push for stronger child protections online</li>
                            <li class="list-group-item">Free, confidential consultations available</li>
                        </ul>

                        <p class="mt-4">
                            If your child was harmed while playing Roblox, you may have the right to pursue legal action. Our network can connect you with attorneys experienced in consumer protection and online safety cases—working on a contingency fee basis, meaning you pay nothing unless they win.
                        </p>

                        <p class="lead">
                            <strong>Protect your child’s future. Request a free case review today.</strong>
                        </p>
                    </div>
                </div>

                {{-- Form --}}
                @include('components.mass-tort-form', ['prod' => 'Roblox Lawsuit'])
            </div>
        </div>

        {{-- Mobile CTA --}}
        @include('components.sign-up-btn')
    </section>
@endsection

@push('css')
    <style>
        .fixed-bottom-btn-mobile {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1050;
        }
    </style>
@endpush

@push('js')
    <script src="{{ asset('js/get-help.js') }}?v{{ \Illuminate\Support\Str::random() }}"></script>
@endpush
