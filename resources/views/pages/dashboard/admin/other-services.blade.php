@extends('layouts.app')

@section('content')
    <div class="page-header">
        <div class="page-title">
            <h4>CRM</h4>
            <h6>Manage your CRM</h6>
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
                        <th>Action</th>
                        <th>Product Type</th>
                        {{--                        <th>Date Injured</th>--}}
                        <th>Date</th>
                        <th>Call Time</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Zip Code</th>
                        <th>Address</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach (\App\Models\CaseRecord::latest()->get() as $case)
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                </label>
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
                                <a href="{{ url("case/view/$case->unique_url") }}" target="_blank" class="btn link" data-bs-toggle="tooltip" data-bs-placement="top" title="View Case">
                                    <i class="fa fa-file-alt text-primary text-success"></i>
                                </a>
                            </td>
                            <td>{{ $case->type }}</td>
                            {{--                            <td>{{ $case->is_attorney == 0 ? 'No' : 'Yes' }}</td>--}}
                            {{--                            <td>{{ $case->description }}</td>--}}
                            {{--                            <td>{{ $case->is_hospitalized == 0 ? 'No' : 'Yes' }}</td>--}}
                            {{--                            <td>{{ $case->date_injured }}</td>--}}
                            <td>{{ $case->updated_at->format('m-d-Y') }}</td>
                            <td>{{ $case->call_time }}</td>
                            <td>{{ $case->firstname }}</td>
                            <td>{{ $case->lastname }}</td>
                            <td>{{ $case->email }}</td>
                            <td>{{ $case->phone }}</td>
                            <td>{{ $case->zip_code }}</td>
                            <td>{{ $case->address }}</td>
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
        $('#OtherServicesPageItem').addClass('active');
    </script>
    <script src="{{ asset('js/cases.js') }}"></script>
@endpush
