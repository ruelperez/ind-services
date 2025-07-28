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

                <div class="form-group mb-4">
                    <label class="mb-2 text-muted">Is an attorney helping you with your case?</label>
                    <select name="is_attorney" class="form-control">
                        <option value="">-- select --</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>

                <div class="form-group mb-4">
                    <label class="mb-2 text-muted">Describe your case</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>

                <div class="form-group mb-4">
                    <label class="mb-2 text-muted">Were you hospitalized or received treatment?</label>
                    <select name="is_hospitalized" class="form-control">
                        <option value="">-- select --</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>

                <div class="form-group mb-4">
                    <label class="mb-2 text-muted">Year of Injury (DD/MM/YYYY)</label>
                    <input type="text" name="date_injured" class="form-control" placeholder="DD/MM/YYYY" maxlength="10">
                </div>

                <div class="form-group mb-4">
                    <label class="mb-2 text-muted">Best time to call</label>
                    <select name="call_time" class="form-control">
                        <option value="">-- select --</option>
                        <option value="Morning">Morning</option>
                        <option value="Afternoon">Afternoon</option>
                        <option value="Evening">Evening</option>
                    </select>
                </div>

                <div class="form-group mb-4">
                    <label class="mb-2 text-muted">First Name</label>
                    <input type="text" name="firstname" class="form-control">
                </div>

                <div class="form-group mb-4">
                    <label class="mb-2 text-muted">Last Name</label>
                    <input type="text" name="lastname" class="form-control">
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
                    <label class="mb-2 text-muted">Zip Code</label>
                    <input type="text" name="zip_code" class="form-control">
                </div>

                <div class="form-group mb-4">
                    <label class="mb-2 text-muted">Address</label>
                    <textarea name="address" class="form-control"></textarea>
                </div>

                <div class="form-group mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="terms" value="1">
                        <label class="form-check-label text-small text-muted" style="text-align: justify;">
                            By submitting "Yes", you provide your electronic signature and agree to be called at the number provided
                            above by PLM about our services, which may include auto dialers and pre-recorded voice, even if your
                            telephone number is currently listed on any state, federal or corporate Do Not Call registry. Your consent
                            is not required to purchase any goods or services. You also agree to the <a href="{{ url('terms-&-condition') }}">Terms Of Use</a>
                            (including arbitration) and <a href="{{ url('legal-privacy-policy') }}">Privacy Policy</a>. Message and data rates may apply. Message frequency varies.
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
