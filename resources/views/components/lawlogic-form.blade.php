<div class="col-md-5 mb-4 mb-md-0 order-1 order-md-2">
    {{-- Free Consultation Banner --}}
    <div class="text-center mb-3">
                        <span class="badge bg-success fs-5 px-4 py-2 shadow-sm">
                            FREE CONSULTATION
                        </span>
    </div>
    <div class="card border-0 shadow-sm" style="background-color: #f1f1f1">
        <div class="px-4 py-3" style="background-color: #DCDCDC;">
            <p class="text-dark text-center mb-0">
                <b>Have you been affected by a Product or Service?</b>
            </p>
        </div>
        <div class="card-body p-4 rounded">
            <form id="getHelpForm" style="color: #000000; scroll-margin-top: 300px;">
                <div class="form-group mb-4">
                    <label class="mb-2 text-muted">Type of Product Liability</label>
                    <select name="type" class="form-control">
                        <option value="{{$prod}}">{{$prod}}</option>
                    </select>
                </div>
                {{-- Campaign key --}}
                <input type="hidden" name="key" value="d998222c-7a18-11f0-8b51-fa163eff53f0">

                {{-- Campaign code --}}
                <input type="hidden" name="code" value="SSDICalls">


                <div class="form-group mb-4">
                    <label class="mb-2 text-muted">First Name</label>
                    <input type="text" name="first_name" class="form-control">
                </div>

                <div class="form-group mb-4">
                    <label class="mb-2 text-muted">Last Name</label>
                    <input type="text" name="last_name" class="form-control">
                </div>

                <div class="form-group mb-4">
                    <label class="mb-2 text-muted">Phone</label>
                    <input type="text" name="phone" class="form-control">
                </div>

                <div class="form-group mb-4">
                    <label class="mb-2 text-muted">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="form-group mb-4">
                    <label class="mb-2 text-muted">Is an attorney representing you?</label>
                    <select name="attorney" class="form-control">
                        <option value="">-- select --</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="form-group mb-4">
                    <label class="mb-2 text-muted">Are you currently receiving disability benefits?</label>
                    <select name="benefit_status" class="form-control">
                        <option value="">-- select --</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="form-group mb-4">
                    <label class="mb-2 text-muted">Are you between 50 and 63 years old?</label>
                    <select name="between_50_and_63" class="form-control">
                        <option value="">-- select --</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="form-group mb-4">
                    <label class="mb-2 text-muted">Do you have a work history?</label>
                    <select name="work_history" class="form-control">
                        <option value="">-- select --</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="form-group mb-4">
                    <label class="mb-2 text-muted">Do you have a medical condition?</label>
                    <select name="medical_condition" class="form-control">
                        <option value="">-- select --</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="form-group mb-4">
                    <label class="mb-2 text-muted">Address</label>
                    <input type="text" name="address" class="form-control">
                </div>

                <div class="form-group mb-4">
                    <label class="mb-2 text-muted">City</label>
                    <input type="text" name="city" class="form-control">
                </div>

                <div class="form-group mb-4">
                    <label class="mb-2 text-muted">State</label>
                    <input type="text" name="state" class="form-control" maxlength="2">
                </div>

                <div class="form-group mb-4">
                    <label class="mb-2 text-muted">ZIP Code</label>
                    <input type="text" name="zip" class="form-control" maxlength="5">
                </div>

                {{-- IP Address --}}
                <input type="hidden" name="ip_address" value="{{ request()->ip() }}">

                {{-- TrustedForm Certificate URL --}}
                <input type="hidden" name="trusted_form_cert_url" value="">

                {{-- Sub ID 2 --}}
                <input type="hidden" name="sub_id2" value="IND">

                {{-- Special Route --}}
                <input type="hidden" name="special_route" value="Yes">

                <div class="form-group mb-4">
                    <div class="form-check">
                        <h6>Consent to Contact.</h6>

                        <input class="form-check-input"
                               type="checkbox"
                               name="terms"
                               value="1">

                        <label class="form-check-label text-small text-muted"
                               style="text-align: justify;">
                            I agree and consent to be contacted regarding my inquiry.
                            By checking this box and submitting this form, I expressly agree to the
                            <a href="{{ url('terms-&-condition') }}">Terms Of Use</a>
                            and
                            <a href="{{ url('legal-privacy-policy') }}">Privacy Policy</a>,
                            authorizing IND Legal Services, its network of lawyers, advocates,
                            and LawLogic, along with their marketing partners, to contact me
                            by phone, text, or email regarding my request or related services.
                            This may include marketing calls and text messages using automated
                            dialing systems, artificial, pre-recorded, or robotic voice technology,
                            and interactive AI, where permitted by applicable law. Standard messaging
                            rates may apply. I consent to be contacted even if my number is on a
                            Do Not Call list. I understand that my consent is not a condition of
                            receiving any service.
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    @csrf

                    <button type="submit" class="btn btn-primary w-100">
                        Submit
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
