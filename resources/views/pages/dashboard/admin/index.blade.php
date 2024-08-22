@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-3 col-sm-6 col-12 d-flex">
        <div class="dash-count das3">
            <div class="dash-counts">
                <h4>{{ count(App\Models\User::where('role', 'Admin')->get()) }}</h4>
                <h5>Admins</h5>
            </div>
            <div class="dash-imgs">
                <i data-feather="file-text"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12 d-flex">
        <div class="dash-count">
            <div class="dash-counts">
                <h4>{{ count(\App\Models\CaseRecord::where('status','Pending')->get()) }}</h4>
                <h5>Pending Cases</h5>
            </div>
            <div class="dash-imgs">
                <i data-feather="user"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12 d-flex">
        <div class="dash-count das1">
            <div class="dash-counts">
                <h4>{{ count(\App\Models\CaseRecord::where('status','Ongoing')->get()) }}</h4>
                <h5>Ongoing Cases</h5>
            </div>
            <div class="dash-imgs">
                <i data-feather="user-check"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12 d-flex">
        <div class="dash-count das2">
            <div class="dash-counts">
                <h4>{{ count(\App\Models\CaseRecord::where('status','Solved')->get()) }}</h4>
                <h5>Solved Cases</h5>
            </div>
            <div class="dash-imgs">
                <i data-feather="file-text"></i>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Pending Cases</h5>
            </div>
            <div class="table-responsive">
                <table class="table table-striped w-100">
                    <thead>
                        <th class="text-center">Case #</th>
                        <th class="text-center">First Name</th>
                        <th class="text-center">Last Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center"></th>
                    </thead>
                    <tbody>
                        @foreach (\App\Models\CaseRecord::where('status','Pending')->latest()->limit(5)->get() as $case)
                            <tr>
                                <td class="text-center">Case#{{ $case->id }}</td>
                                <td class="text-center">{{ $case->firstname }}</td>
                                <td class="text-center">{{ $case->lastname }}</td>
                                <td class="text-center">{{ $case->email }}</td>
                                <td class="text-center">{{ $case->phone }}</td>
                                <td class="text-center">
                                    <a href="{{ url("case/view/$case->unique_url") }}" target="_blank" class="btn link">
                                        <i class="fa fa-file-alt text-primary"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        @if (count(App\Models\CaseRecord::where('status', 'Pending')->get()) == 0)
                            <tr>
                                <td class="text-center" colspan="6">
                                    no pending cases
                                </td>
                            </tr>
                        @endif
                        <tr>
                            <td class="text-center" colspan="6">
                                <a href="{{ url('dashboard/admin/cases') }}" class="text-primary">View All Cases</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Ongoing Cases</h5>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-responsive w-100">
                    <thead>
                        <th class="text-center">Case #</th>
                        <th class="text-center">First Name</th>
                        <th class="text-center">Last Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center"></th>
                    </thead>
                    <tbody>
                    @foreach (\App\Models\CaseRecord::where('status','Ongoing')->latest()->limit(5)->get() as $case)
                        <tr>
                            <td class="text-center">Case#{{ $case->id }}</td>
                            <td class="text-center">{{ $case->firstname }}</td>
                            <td class="text-center">{{ $case->lastname }}</td>
                            <td class="text-center">{{ $case->email }}</td>
                            <td class="text-center">{{ $case->phone }}</td>
                            <td class="text-center">
                                 <a href="{{ url("case/view/$case->unique_url") }}" target="_blank" class="btn link">
                                    <i class="fa fa-file-alt text-primary"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    @if (count(App\Models\CaseRecord::where('status', 'Ongoing')->get()) == 0)
                        <tr>
                            <td class="text-center" colspan="6">
                                no ongoing cases
                            </td>
                        </tr>
                    @endif
                    <tr>
                        <td class="text-center" colspan="6">
                            <a href="{{ url('dashboard/admin/cases') }}" class="text-primary">View All Cases</a>
                        </td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script>
        $('#dashboardPageItem').addClass('active');
    </script>
@endpush
