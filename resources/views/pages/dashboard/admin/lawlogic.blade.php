@extends('layouts.app')

@section('content')
    <div class="page-header">
        <div class="page-title">
            <h4>Cases List</h4>
            <h6>Manage your Cases</h6>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-top">
                <div class="search-set">
                    <div class="search-path">
                        <a class="btn btn-filter" id="filter_search">
                            <img src="{{ asset('admin/img/icons/filter.svg') }}" alt="img">
                            <span>
                            <img src="{{ asset('admin/img/icons/closes.svg') }}" alt="img">
                        </span>
                        </a>
                    </div>
                    <div class="search-input">
                        <a class="btn btn-searchset">
                            <img src="{{ asset('admin/img/icons/search-white.svg') }}" alt="img">
                        </a>
                    </div>
                    {{--                    <div class=" d-flex gap-3 ms-3">--}}
                    {{--                        <i id="editBtn" class="fa-solid fa-pen-to-square d-none text-primary" style="font-size: 17px; cursor: pointer"></i>--}}
                    {{--                        <i id="deleteBtn" class="fa-solid fa-trash d-none text-danger" style="font-size: 17px; cursor: pointer"></i>--}}
                    {{--                    </div>--}}
                </div>

                <div class="wordset">
                    <ul>
                        {{-- <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf">
                                <img src="{{ asset('admin/img/icons/pdf.svg') }}" alt="img">
                            </a>
                        </li> --}}
                        {{--                        <li>--}}
                        {{--                            <a href="{{ url('func/export/cases') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Export to Excel">--}}
                        {{--                                <img src="{{ asset('admin/img/icons/excel.svg') }}" alt="img">--}}
                        {{--                            </a>--}}
                        {{--                        </li>--}}
                        {{-- <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="print">
                                <img src="{{ asset('admin/img/icons/printer.svg') }}" alt="img">
                            </a>
                        </li> --}}
                        <a href="{{ url('/dashboard/admin/check-lead') }}" target="_blank">
                            <i class="fa-solid fa-arrows-spin"></i> Check lead eligibility
                        </a>
                    </ul>
                </div>

            </div>
            <div class="card" id="filter_inputs">
                <div class="card-body pb-0">
                    <div class="row">
                        <div class="col-lg-2 col-sm-6 col-12">
                            <div class="form-group">
                                <input type="text" placeholder="Enter User Name">
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-12">
                            <div class="form-group">
                                <input type="text" placeholder="Enter Phone">
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-12">
                            <div class="form-group">
                                <input type="text" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-12">
                            <div class="form-group">
                                <select class="select">
                                    <option>Disable</option>
                                    <option>Enable</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                            <div class="form-group">
                                <a class="btn btn-filters ms-auto">
                                    <img src="{{ asset('admin/img/icons/search-whites.svg') }}" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table datanew">
                    <thead>
                    <tr>
                        <th>
                            <label class="checkboxs">
                                <input type="checkbox">
                                <span class="checkmarks"></span>
                            </label>
                        </th>
                        <th>API</th>
                        <th>Action</th>
                        <th>Liability Type</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zip Code</th>
                        <th>IP Address</th>
                        <th>Lead ID</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach (\App\Models\LawlogicLead::latest()->get() as $case)
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox"
                                           class="case-checkbox"
                                           value="{{ $case->id }}">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>

                            <td>
                                <button type="button"
                                        class="btn btn-link text-decoration-none @if($case->api_status === 0) text-warning @endif"
                                        title="Submit to API"
                                        data-bs-toggle="modal"
                                        data-bs-target="#submitModal-{{ $case->id }}"
                                        @if ($case->api_status === 0)

                                        @else
                                            disabled
                                    @endif
                                >
                                    @if($case->api_status === 1)
                                        <i class="fa-solid fa-envelope-circle-check me-1"></i>Sent
                                    @else
                                        Pending
                                    @endif
                                </button>

                                <div class="modal fade"
                                     id="submitModal-{{ $case->id }}"
                                     tabindex="-1"
                                     aria-labelledby="submitModalLabel-{{ $case->id }}"
                                     aria-hidden="true">

                                    <div class="modal-dialog">

                                        <form action="{{ url('lawlogic/api/submit') }}" method="POST">
                                            @csrf

                                            <input type="hidden"
                                                   name="lawlogic_id"
                                                   value="{{ $case->id }}">

                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <h5 class="modal-title"
                                                        id="submitModalLabel-{{ $case->id }}">
                                                        Submit to API
                                                    </h5>

                                                    <button type="button"
                                                            class="btn-close"
                                                            data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    Send the lead to the API with the last name
                                                    <strong>"{{ $case->last_name }}"</strong>.
                                                </div>

                                                <div class="modal-footer flex-column align-items-stretch">

                                                    <p class="text-muted text-center mb-2">
                                                        Are you sure you want to proceed?
                                                    </p>

                                                    <div class="d-flex justify-content-between w-100">
                                                        <button type="button"
                                                                class="btn btn-secondary"
                                                                data-bs-dismiss="modal">
                                                            Cancel
                                                        </button>

                                                        <button type="submit"
                                                                class="btn btn-primary">
                                                            Submit
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <button type="button"
                                        class="btn btn-link text-decoration-none"
                                        id="setOngoingBtn"
                                        data-data='@json($case)'
                                        data-bs-toggle="tooltip"
                                        data-bs-placement="top"
                                        title="Claim Trusted Form Certificate"
                                        @if ($case->share_url !== NULL) disabled @endif>

                                    <i class="fa fa-certificate"></i>

                                    @if ($case->share_url !== NULL)
                                        Claimed
                                    @else
                                        Claim
                                    @endif
                                </button>

                                <a href="{{ url("lawlogic-case/view/$case->unique_url") }}"
                                   target="_blank"
                                   class="btn link"
                                   data-bs-toggle="tooltip"
                                   data-bs-placement="top"
                                   title="View Case">

                                    <i class="fa fa-file-alt text-primary text-success"></i>
                                </a>
                            </td>

                            <td>{{ $case->type }}</td>
                            <td>{{ $case->first_name }}</td>
                            <td>{{ $case->last_name }}</td>
                            <td>{{ $case->phone }}</td>
                            <td>{{ $case->email }}</td>
                            <td>{{ $case->city }}</td>
                            <td>{{ $case->state }}</td>
                            <td>{{ $case->zip }}</td>
                            <td>{{ $case->ip_address }}</td>
                            <td>
                                @if ($case->lead_id != 0)
                                    {{ $case->lead_id }}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="setOngoingModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <form id="setOngoingForm" class="modal-content pb-0">
                <div class="modal-header">
                    <h5 class="modal-title">Claim Certificate</h5>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="certificateLinkInput">
                            <button type="button" class="btn btn-primary btn-group" id="claimBtn">Claim</button>
                        </div>
                    </div>
                    <div class="form-group" id="shareUrlSection" style="display: none">
                        <div class="alert alert-info text-wrap text-break">
                            Congratulations! Your certificate has been claimed. To share the certificate kindly go to this link (<a href="#" target="_blank" id="linkBtn"><span id="linkText"></span></a>) and copy the "Share URL" from the "Claim History" tab and paste it to the field below.
                            Make sure you are logged in to Active Prospect Website.
                        </div>
                        <label>Pase the Share URL here:</label>
                        <input type="text" class="form-control" name="share_url" id="share_url">
                        <input type="hidden" name="id">
                        @csrf
                        <button type="submit" class="btn btn-primary mt-3" id="submitBtn">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Lead Modal -->
    <div class="modal fade" id="editCaseModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form id="editCaseForm" class="modal-content">
                @csrf
                <input type="hidden" name="id" id="edit_id">

                <div class="modal-header">
                    <h5 class="modal-title">Edit Lead</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label>First Name</label>
                            <input type="text" name="first_name" id="edit_first_name" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Last Name</label>
                            <input type="text" name="last_name" id="edit_last_name" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Email</label>
                            <input type="email" name="email" id="edit_email" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Phone</label>
                            <input type="text" name="phone" id="edit_phone" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label>Address</label>
                            <input type="text" name="address" id="edit_address" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>City</label>
                            <input type="text" name="city" id="edit_city" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label>State</label>
                            <input type="text" name="state" id="edit_state" maxlength="2" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label>Zip</label>
                            <input type="text" name="zip" id="edit_zip" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Attorney</label>
                            <input type="text" name="attorney" id="edit_attorney" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>IP Address</label>
                            <input type="text" name="user_ip" id="edit_user_ip" class="form-control" readonly>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>


@endsection

@push('js')
    <script>
        @if(session()->has('api_status'))
        Swal.fire({
            icon: @json(session('api_status') === 'ACCEPTED' ? 'success' : 'error'),
            title: @json(session('api_status')),
            html: `
        <div style="text-align:left">
            <b>Campaign:</b> ${@json(session('campaign') ?? 'N/A')} <br>
            <b>Lead ID:</b> ${@json(session('api_lead_id') ?? 'N/A')} <br>
            ${@json(session('api_message'))}
        </div>
    `
        });
        @endif
    </script>
    <script>
        $('#LawlogicCasesPageItem').addClass('active');
    </script>
    <script src="{{ asset('js/lawlogic-cases.js') }}"></script>
    <script>
        @if (session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('success') }}'
        });
        @elseif (session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '{{ session('error') }}'
        });
        @endif
    </script>

    <script>
        $(document).on('change', '.case-checkbox, thead input[type="checkbox"]', function () {
            let checkedCount = $('.case-checkbox:checked').length;

            if (checkedCount === 0) {
                // Hide both
                $('#editBtn').addClass('d-none');
                $('#deleteBtn').addClass('d-none');
            } else if (checkedCount === 1) {
                // Show both
                $('#editBtn').removeClass('d-none');
                $('#deleteBtn').removeClass('d-none');
            } else {
                // More than 1 → Only delete
                $('#editBtn').addClass('d-none');
                $('#deleteBtn').removeClass('d-none');
            }
        });
    </script>


    <script>
        // DELETE
        $('#deleteBtn').on('click', function () {
            let ids = $('.case-checkbox:checked').map(function(){ return this.value; }).get();

            if (ids.length === 0) return;

            Swal.fire({
                title: "Are you sure?",
                text: "You are about to delete " + ids.length + " lead(s).",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete",
                cancelButtonText: "No, cancel"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ url('depo-case/delete') }}",
                        method: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            ids: ids
                        },
                        success: function (res) {
                            Swal.fire("Deleted!", res.message, "success")
                                .then(() => location.reload());
                        },
                        error: function () {
                            Swal.fire("Error", "Failed to delete leads.", "error");
                        }
                    });
                }
            });
        });

        // EDIT
        $('#editBtn').on('click', function () {
            let id = $('.case-checkbox:checked').val();

            $.ajax({
                url: "{{ url('depo-case/get') }}/" + id,
                method: "GET",
                success: function (data) {
                    $('#edit_id').val(data.id);
                    $('#edit_first_name').val(data.first_name);
                    $('#edit_last_name').val(data.last_name);
                    $('#edit_email').val(data.email);
                    $('#edit_phone').val(data.phone);
                    $('#edit_address').val(data.address);
                    $('#edit_city').val(data.city);
                    $('#edit_state').val(data.state);
                    $('#edit_zip').val(data.zip);
                    $('#edit_attorney').val(data.attorney);
                    $('#edit_user_ip').val(data.user_ip);

                    $('#editCaseModal').modal('show');
                }
            });
        });

        // SAVE EDIT
        $('#editCaseForm').on('submit', function (e) {
            e.preventDefault();

            $.ajax({
                url: "{{ url('depo-case/update') }}",
                method: "POST",
                data: $(this).serialize(),
                success: function (res) {
                    $('#editCaseModal').modal('hide');
                    Swal.fire("Success", res.message, "success")
                        .then(() => location.reload());
                },
                error: function () {
                    Swal.fire("Error", "Failed to update case.", "error");
                }
            });
        });

    </script>
@endpush
