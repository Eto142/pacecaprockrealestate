@extends('layouts.admin')

@section('content')
<div class="main-panel">
<div class="content-wrapper">
@if (session('status'))
<div class="alert alert-success" role="alert">
 {{ session('status') }}
</div>
 @endif
@if ($errors->any())
<div class="alert alert-danger" role="alert">
  <ul class="mb-0">
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

 <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Credit {{$userProfile->name}}'s Account</h4>
                  <p class="card-description">
                    This adds a credit to the user's earnings, which increases their available balance.
                  </p>
                  <form method="post" action="{{ route('admin.user.credit.store') }}">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $userProfile->id }}">

                    <div class="form-group">
                      <label>User</label>
                      <input type="text" class="form-control" value="{{ $userProfile->name }} ({{ $userProfile->email }})" readonly>
                    </div>
                    <div class="form-group">
                      <label for="plan_name">Description</label>
                      <input type="text" class="form-control" name="plan_name" id="plan_name" value="{{ old('plan_name') }}" placeholder="e.g. Bonus, Manual credit" required>
                    </div>
                    <div class="form-group">
                      <label for="amount">Amount ($)</label>
                      <input type="number" step="0.01" min="0.01" class="form-control" name="amount" id="amount" value="{{ old('amount') }}" placeholder="Amount" required>
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Credit Account</button>
                    <a href="{{ route('admin.user.profile', $userProfile->id) }}" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
</div>
</div>
</div>

@endsection
