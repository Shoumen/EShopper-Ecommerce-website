@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                    <div class="col-md-8 card_header_title">
                        <h4><i class="fa fa-gg-circle"></i> All User Information</h4>
                    </div>
                    <div class="col-md-4 card_header_btn text-right">
                        <a href="{{url('admin/user/add')}}" class="btn btn-secondary card_btn"><i class="fa fa-plus-circle"></i> Add User</a>
                    </div>
                    <div class="clr"></div>
              </div>
            </div>
            <div class="card-body">
                @if(Session::has('success'))
                <script> swal({title: "Success!",text: "Successfuly User create!",icon: "success",timer: 5000});</script>
                @endif
              <table id="allTable" class="table table-bordered table-hover table-striped custom_table">
                @php
                $alluser=App\Models\User::where('status',1)->orderBy('id','DESC')->get();
                @endphp
                  <thead class="thead-dark">
                    <tr>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>User Role</th>
                      <th>Photo</th>
                      <th>Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($allUser as $data)
                    <tr>
                      <td>{{$data->name}}</td>
                      <td>{{$data->phone}}</td>
                      <td>{{$data->email}}</td>
                      <td>{{$data->userRole->role_name}}</td>
                      <td><img src="{{asset('uploads/'.$data->photo)}}" widh="40px" height="50px" alt="image"></td>
                       <td>
                          <a href="#"><i class="fa fa-plus-square fa-lg"></i></a>
                          <a href="#"><i class="fa fa-pencil-square fa-lg"></i></a>
                          <a href="#"><i class="fa fa-trash fa-lg"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-sm btn-dark">Print</a>
                <a href="#" class="btn btn-sm btn-info">Excel</a>
                <a href="#" class="btn btn-sm btn-secondary">CSV</a>
            </div>
          </div>
        </div>
    </div>
@endsection
