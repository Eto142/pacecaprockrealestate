@extends('layouts.admin')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
<div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Users</h4>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            Full Name
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>

                      @foreach($result  as $users)
                      <tr class="table-primary">
                             <td>{{$users->name}}</td>
                             <td>{{$users->email}}</td>
                      <td>
                    <a type="submit" class="btn btn-danger" href="{{url('profile/'.$users->id)}}">View</a>
                        </td>
                     </tr>
                    @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>
</div>
@endsection