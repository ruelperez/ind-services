@extends('layouts.main')

@section('content')
<section style="background-image: url('{{ asset('assets/img/call-center.jpg') }}'); background-size: cover">
    <div class="container">
        <div class="section-title">
            <p class="ind-page-subtitle text-white">Congratulations! Your Exclusive Offer Awaits</p>
        </div>
        <div class="card border-0 shadow-sm transparent-card" style="border-radius: 0px;">
            <div class="text-center mt-4">
                <h5>Our team looks forward to contact you. Please fill out the form promptly.</h5>
                <h6><i><b>(Put "na" if not applicable)</b></i></h6>
            </div>
            <div class="card-body p-5">
                <form id="getHelpForm" style="color: #000000">
                    <div class="row">
                        <div class="col-sm-12 col-lg-3">
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Type of Product Liability</label>
                                <select name="type" class="form-control">
                                    <option value="">-- select --</option>
                                    <option value="Home Security">Home Security</option>
                                    <option value="TV Services">TV Services</option>
{{--                                    <option value="Camp Lejune Water Contamination">Camp Lejune Water Contamination</option>--}}
{{--                                    <option value="Firefighting Foam">Firefighting Foam</option>--}}
{{--                                    <option value="NEC Baby Formula">NEC Baby Formula</option>--}}
{{--                                    <option value="Zantac">Zantac</option>--}}
{{--                                    <option value="Talcum Powder">Talcum Powder</option>--}}
{{--                                    <option value="Paraquat">Paraquat</option>--}}
{{--                                    <option value="Roundup">Roundup</option>--}}
{{--                                    <option value="CPAP">CPAP</option>--}}
{{--                                    <option value="Mesothelioma">Mesothelioma</option>--}}
{{--                                    <option value="Other">Other</option>--}}
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-2">First Name</label>
                                <input type="text" name="firstname" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-2">Last Name</label>
                                <input type="text" name="lastname" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-2">Phone</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-2">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-2">Zip Code</label>
                                <input type="text" name="zip_code" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-2">Address</label>
                                <textarea name="address" class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-2">Best time to call</label>
                                <select name="call_time" class="form-control">
                                    <option value="">-- select --</option>
                                    <option value="Morning">Morning</option>
                                    <option value="Afternoon">Afternoon</option>
                                    <option value="Evening">Evening</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="terms" value="1">
                                    <label class="form-check-label text-small" for="flexCheckDefault" style="text-align: justify; color: #00000 !important">
                                        By clicking the button above, I provide my electronic signature hereby agreeing to this website's <a href="{{ url('privacy-policy') }}">PRIVACY POLICY</a>, <a href="{{ url('tcpa-consent') }}">TCPA Consent</a> & <a href="{{ url('privacy-disclaimer') }}">Privacy Disclaimer</a> and expressly consent to receive marketing and telemarketing contact, including calls to my cellular phone, via automatic telephone dialing system, emails, and/or text messages from this website and trusted partners, attorneys or their agents regarding services indicated in this website. I will receive contact even if I previosuly registered on a state or federal do not contact list. I understand that my consent to receive communications in this manner is not required as a condition of purchasing any goods or services. My telephone company may impose charges for these contacts.
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="d-grid">
                                    @csrf
                                    <button type="submit" class="btn bg-ind-blue btn-lg" style="border-radius: 0px">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
{{--@include('partials._faq')--}}
@endsection

@push('js')
    <script src="{{ asset('js/get-help.js') }}?v{{ \Illuminate\Support\Str::random() }}"></script>
@endpush
