@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Users</h4>
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($result as $users)
              <tr class="table-primary">
                <td>{{ $users->name }}</td>
                <td>{{ $users->email }}</td>
                <td>
                  <a class="btn btn-danger btn-sm" href="{{ url('profile/'.$users->id) }}">View</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection