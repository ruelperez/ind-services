@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow rounded-4">
                    <div class="card-body p-4">
                        <h2 class="text-center mb-4 text-primary fw-bold">Depo-Provera Lead Form</h2>

                        @if(session('success'))
                            <div class="alert alert-success text-center">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('depo.submit') }}" method="POST" novalidate>
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label class="form-label">First Name</label>
                                    <input type="text" name="first_name" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Depo-Provera Taken?</label>
                                <select name="taken" class="form-select" required>
                                    <option value="" selected disabled>Select option</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">How long did you use it?</label>
                                <select name="use_duration" class="form-select" required>
                                    <option value="" selected disabled>Select duration</option>
                                    <option value="Less than 1 year">Less than 1 year</option>
                                    <option value="1 to 3 years">1 to 3 years</option>
                                    <option value="3 or more years">3 or more years</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Injury (e.g., Brain Meningioma)</label>
                                <input type="text" name="injury" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Diagnosis Confirmed?</label>
                                <select name="diagnosis" class="form-select" required>
                                    <option value="" selected disabled>Select option</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Describe Your Condition</label>
                                <textarea name="description" class="form-control" rows="4" required placeholder="Briefly describe your situation..."></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Do you have an attorney?</label>
                                <select name="attorney" class="form-select" required>
                                    <option value="" selected disabled>Select option</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Trusted Form Cert URL</label>
                                <input type="url" name="trusted_form_cert_id" class="form-control" required placeholder="https://cert.trustedform.com/..." />
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold">
                                Submit Form
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    @if(session()->has('swal'))
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                Swal.fire({
                    title: @json(session('swal.title')),
                    text: @json(session('swal.message')),
                    icon: @json(session('swal.type')),
                    confirmButtonText: "OK",
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ url('/dashboard/admin/depo-provera-form') }}";
                    }
                });
            });
        </script>
    @endif

    @if(session()->has('swalData'))
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                Swal.fire({
                    title: @json(session('swalData.slug') ?? 'Notice'),
                    text: @json(session('swalData.message') ?? 'Something happened.'),
                    icon: @json((session('swalData.code') ?? 500) == 200 ? 'success' : 'error'),
                    confirmButtonText: "OK",
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ url('/dashboard/admin/depo-provera-form') }}";
                    }
                });
            });
        </script>
    @endif
@endpush
