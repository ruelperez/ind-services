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
                </div>
                <div class="wordset">
                    <ul>
                        {{-- <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf">
                                <img src="{{ asset('admin/img/icons/pdf.svg') }}" alt="img">
                            </a>
                        </li> --}}
                        <li>
                            <a href="{{ url('func/export/cases') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Export to Excel">
                                <img src="{{ asset('admin/img/icons/excel.svg') }}" alt="img">
                            </a>
                        </li>
                        {{-- <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="print">
                                <img src="{{ asset('admin/img/icons/printer.svg') }}" alt="img">
                            </a>
                        </li> --}}
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
                <table class="table  datanew">
                    <thead>
                    <tr>
                        <th>
                            <label class="checkboxs">
                                <input type="checkbox">
                                <span class="checkmarks"></span>
                            </label>
                        </th>
                        <th>Status</th>
{{--                        <th>Status</th>--}}
                        <th>Action</th>
                        <th>Liability Type</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Zip Code</th>
                        <th>Depo-provera taken</th>
                        <th>Depo-provera use</th>
                        <th>Diagnosis</th>
                        <th>Has Attorney</th>
                        <th>Injury</th>
                        <th>Description</th>
                        <th>IP Address</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach (\App\Models\DepoRecord::latest()->get() as $case)
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
{{--                            <td>--}}
{{--                                <button type="button"--}}
{{--                                        class="btn btn-link text-decoration-none @if($case->share_url === NULL && $case->api_status === 0) text-warning @endif "--}}
{{--                                        title="Submit to API"--}}
{{--                                        data-bs-toggle="modal"--}}
{{--                                        data-bs-target="#submitModal-{{ $case->id }}"--}}
{{--                                        @if ($case->share_url === NULL && $case->api_status === 0)--}}
{{--                                            disabled--}}
{{--                                        @elseif ($case->share_url !== NULL && $case->api_status === 0)--}}

{{--                                        @elseif ($case->api_status === 1)--}}
{{--                                            disabled--}}
{{--                                        @endif--}}
{{--                                >--}}
{{--                                    @if($case->api_status === 1)--}}
{{--                                        <i class="fa-solid fa-envelope-circle-check"></i>--}}
{{--                                    @elseif($case->share_url !== NULL)--}}
{{--                                        <i class="fa-solid fa-paper-plane"></i>--}}
{{--                                    @else--}}
{{--                                        <i class="fa-solid fa-weight-hanging"></i>--}}
{{--                                    @endif--}}

{{--                                    @if ($case->api_status === 1)--}}
{{--                                        Sent--}}
{{--                                    @elseif($case->share_url !== NULL)--}}
{{--                                        Send--}}
{{--                                    @else--}}
{{--                                        Pending--}}
{{--                                    @endif--}}
{{--                                </button>--}}

{{--                                <!-- Unique Modal -->--}}
{{--                                <div class="modal fade" id="submitModal-{{ $case->id }}" tabindex="-1" aria-labelledby="submitModalLabel-{{ $case->id }}" aria-hidden="true">--}}
{{--                                    <div class="modal-dialog">--}}
{{--                                        <form action="{{ url('depo/api/submit') }}" method="POST">--}}
{{--                                            @csrf--}}
{{--                                            <input type="hidden" name="depo_id" value="{{ $case->id }}">--}}
{{--                                            <div class="modal-content">--}}
{{--                                                <div class="modal-header">--}}
{{--                                                    <h5 class="modal-title" id="submitModalLabel-{{ $case->id }}">Submit to API</h5>--}}
{{--                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                                                </div>--}}
{{--                                                <div class="modal-body">--}}
{{--                                                    Send the lead to the API with the last name <strong>"{{ $case->lastname }}"</strong>.--}}
{{--                                                </div>--}}
{{--                                                <div class="modal-footer flex-column align-items-stretch">--}}
{{--                                                    <p class="text-muted text-center mb-2">Are you sure you want to proceed?</p>--}}
{{--                                                    <div class="d-flex justify-content-between w-100">--}}
{{--                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>--}}
{{--                                                        <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </td>--}}
                            <td>
                                @if($case->api_status === 0)
                                    <p class="text-danger"><i class="fa-solid fa-circle-exclamation me-1"></i>API</p>
                                @elseif($case->has_redirect_url === 1)
                                <p class="text-success"><i class="fa-solid fa-circle-check me-1"></i>Approved</p>
                                @else
                                <p class="text-danger"><i class="fa-solid fa-circle-exclamation me-1"></i>Rejected</p>
                                @endif
                            </td>
                            <td>
                                <button type="button" class="btn btn-link text-decoration-none" id="setOngoingBtn" data-data='@json($case)' data-bs-toggle="tooltip" data-bs-placement="top" title="Claim Trusted Form Certificate" @if ($case->share_url !== NULL) disabled @endif>
                                    <i class="fa fa-certificate"></i>
                                    @if ($case->share_url !== NULL)
                                        Claimed
                                    @else
                                        Claim
                                    @endif
                                </button>
                                <a href="{{ url("depo-case/view/$case->unique_url") }}" target="_blank" class="btn link" data-bs-toggle="tooltip" data-bs-placement="top" title="View Case">
                                    <i class="fa fa-file-alt text-primary text-success"></i>
                                </a>
                            </td>
                            <td>{{ $case->type }}</td>
                            <td>{{ $case->firstname }}</td>
                            <td>{{ $case->lastname }}</td>
                            <td>{{ $case->email }}</td>
                            <td>{{ $case->phone }}</td>
                            <td>{{ $case->zip_code }}</td>
                            <td>{{ $case->depo_provera_taken }}</td>
                            <td>{{ $case->depo_provera_use }}</td>
                            <td>{{ $case->diagnosis }}</td>
                            <td>{{ $case->attorney}}</td>
                            <td>{{ $case->injury }}</td>
                            <td>{{ $case->description }}</td>
                            <td>{{ $case->user_ip}}</td>


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
@endsection

@push('js')
    <script>
        $('#DepoCasesPageItem').addClass('active');
    </script>
    <script src="{{ asset('js/depo-cases.js') }}"></script>
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
@endpush
