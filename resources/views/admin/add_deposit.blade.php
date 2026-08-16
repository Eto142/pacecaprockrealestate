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
                  <h4 class="card-title">Add a Deposit for {{$userProfile->name}}</h4>
                  <p class="card-description">
                    Records an already-approved deposit against the user's account.
                  </p>
                  <form method="post" action="{{ route('admin.user.deposit.store') }}">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $userProfile->id }}">

                    <div class="form-group">
                      <label>User</label>
                      <input type="text" class="form-control" value="{{ $userProfile->name }} ({{ $userProfile->email }})" readonly>
                    </div>
                    <div class="form-group">
                      <label for="payment_method">Payment Method</label>
                      <select class="form-control" name="payment_method" id="payment_method" required>
                        <option value="Bitcoin">Bitcoin</option>
                        <option value="USDT(Trc20)">USDT (Trc20)</option>
                        <option value="USDC">USDC</option>
                        <option value="Ethereum">Ethereum</option>
                        <option value="Bank">Bank</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="amount">Amount ($)</label>
                      <input type="number" step="0.01" min="0.01" class="form-control" name="amount" id="amount" value="{{ old('amount') }}" placeholder="Amount" required>
                    </div>
                    <div class="form-group">
                      <label for="deposit_date">Deposit Date</label>
                      <input type="date" class="form-control" name="deposit_date" id="deposit_date" value="{{ old('deposit_date') }}">
                      <small class="text-muted">Leave blank to use today.</small>
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Add Deposit</button>
                    <a href="{{ route('admin.user.profile', $userProfile->id) }}" class="btn btn-light">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
</div>
</div>
</div>

@endsection
