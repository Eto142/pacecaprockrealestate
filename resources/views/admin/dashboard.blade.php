@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-12">
        <h1 class="page-header-title">Dashboard Overview</h1>
    </div>
</div>

<!-- Welcome Card -->
<div class="row mb-4">
    <div class="col-12">
        <div class="card bg-white">
            <div class="card-body d-flex align-items-center justify-content-between p-4">
                <div>
                    <h4 class="mb-1">Welcome back, {{ Auth::guard('admin')->user()->name }}! 👋</h4>
                    <p class="text-muted mb-0">Here's what's happening with your platform today.</p>
                </div>
                <div class="d-none d-md-block">
                    <span class="text-muted text-small">{{ date('l, F j, Y') }}</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Statistics Cards -->
<div class="row">
    <!-- Total Users -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card stats-card primary h-100">
            <div class="card-body">
                <div class="text-xs text-uppercase mb-1">Total Users</div>
                <div class="h5 mb-0">{{ \App\Models\User::count() }}</div>
                <i class="mdi mdi-account-group"></i>
            </div>
        </div>
    </div>

    <!-- Active Deposits -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card stats-card success h-100">
            <div class="card-body">
                <div class="text-xs text-uppercase mb-1">Countries</div>
                <div class="h5 mb-0">{{ \App\Models\Country::count() }}</div>
                <i class="mdi mdi-earth"></i>
            </div>
        </div>
    </div>

    <!-- Total Properties -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card stats-card secondary h-100">
            <div class="card-body">
                <div class="text-xs text-uppercase mb-1">Properties</div>
                <div class="h5 mb-0">{{ \App\Models\House::count() }}</div>
                <i class="mdi mdi-home-city"></i>
            </div>
        </div>
    </div>

    <!-- Administrators -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card stats-card danger h-100">
            <div class="card-body">
                <div class="text-xs text-uppercase mb-1">Admins</div>
                <div class="h5 mb-0">{{ \App\Models\Admin::count() }}</div>
                <i class="mdi mdi-shield-account"></i>
            </div>
        </div>
    </div>
</div>

<!-- Recent Activity / Tables (Placeholder for future expansion) -->
<div class="row mt-4">
    <div class="col-lg-8 mb-4">
        <div class="card h-100">
            <div class="card-header bg-transparent d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold">Recent Registrations</h6>
                <a href="{{ url('/home') }}" class="btn btn-sm btn-primary">View All</a>
            </div>
            <div class="card-body px-0 pt-0">
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(\App\Models\User::latest()->take(5)->get() as $user)
                            <tr>
                                <td class="font-weight-bold">{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->format('M d, Y') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 mb-4">
        <div class="card h-100">
            <div class="card-header bg-transparent">
                <h6 class="m-0 font-weight-bold">System Status</h6>
            </div>
            <div class="card-body">
                <!-- Simple status indicators -->
                <div class="mb-4">
                    <div class="d-flex justify-content-between mb-1">
                        <span class="text-muted">Server Uptime</span>
                        <span class="text-success font-weight-bold">99.9%</span>
                    </div>
                    <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 99.9%"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="d-flex justify-content-between mb-1">
                        <span class="text-muted">Database Status</span>
                        <span class="text-success font-weight-bold">Healthy</span>
                    </div>
                    <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="d-flex justify-content-between mb-1">
                        <span class="text-muted">Storage Usage</span>
                        <span class="text-warning font-weight-bold">45%</span>
                    </div>
                    <div class="progress" style="height: 5px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 45%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection