@extends('layouts.main')

@section('content')

<main id="main">
    <section class="gray-gradient-bg" style="margin-top: 75px">
        <div class="container">
            <div class="section-title text-center">
                <p>Contact Us</p>
            </div>
            <p class="text-center mb-5">
                Please inform us of any assistance we can provide.
            </p>
            <div class="row d-flex justify-content-center">
                <div class="col-sm-12 col-md-4 col-lg-4 pb-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="display-4 bx bx-phone mb-3 text-ind-blue"></i>
                            <p><strong>BY PHONE</strong></p>
                            <hr>
                            <div class="mt-5 mb-5">
                                <p>6784511436 Ext. 102</p>
                                <p>6784511655 Ext. 104</p>
                                <p>6784511248 Ext. 106</p>
                                <p>6784511840 Ext. 105</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 pb-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="display-4 bx bx-file mb-3 text-ind-blue"></i>
                            <p><strong>START A NEW CASE</strong></p>
                            <hr>
                            <p class="mt-5 mb-5">Just send us your questions or concerns by starting a new case and we will give you the help that you need.</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ url('get-help') }}" class="btn btn-primary d-grid">
                                <strong>START HERE</strong>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 pb-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="display-4 bx bx-chat mb-3 text-ind-blue"></i>
                            <p><strong>LIVE CHAT</strong></p>
                            <hr>
                            <p class="mt-5 mb-5">Chat with a member of our in-house team.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" id="startChatBtn" class="btn btn-primary d-grid">
                                <strong>START CHAT</strong>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials._faq')
</main>

@endsection

@push('js')
    <script>
        (function () {
            var tidioScript = document.createElement('script');
            tidioScript.type = 'text/javascript';
            tidioScript.async = true;
            tidioScript.src = '//code.tidio.co/62bfidlxjjfsw8w0pvg3wxf4rm61zxhc.js';
            document.getElementsByTagName('head')[0].appendChild(tidioScript);
        })();


        function openTidioChat() {
        if (typeof tidioChatApi !== 'undefined') {
            tidioChatApi.open();
        }
        }

        document.getElementById('startChatBtn').addEventListener('click', function() {
            openTidioChat();
        });

    </script>
@endpush
