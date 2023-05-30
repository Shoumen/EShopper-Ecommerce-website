@extends('layouts.admin')
@section('content')
   <div class="row">

        <div class="col-md-12">


          <div class="card">
            <form method="post" action="{{url('admin/user/submit')}}" enctype="multipart/form-data">
              @csrf
              <div class="row">
                      <div class="col-md-8 card_header_title">
                          <h4><i class="fa fa-gg-circle"></i> User Registration</h4>
                      </div>


                      <div class="col-md-4 card_header_btn text-right">
                          <a href="{{url('admin/user')}}" class="btn btn-secondary card_btn"><i class="fa fa-th"></i> All User</a>
                      </div>


                      <div class="clr"></div>
                </div>
              </div>
              <div class="card-body">
                @if(Session::has('error'))
                <script> swal({title: "Opps!",text: "Failed User Registration!",icon: "error",timer: 5000});</script>
                @endif

                <div class="form-group row custom_form_group {{$errors->has('name')? ' has-error':''}}">
                  <label class="col-sm-3 col-form-label col_form_label">Name:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" name="name" value="{{old('name')}}">
                      @if($errors->has('name'))
                      <span class="invalid-feedback" role="alart">
                        <strong>{{$errors->First('name')}}</strong>
                       </span>
                       @endif
                  </div>
                </div>
                <div class="form-group row custom_form_group {{$errors->has('name')? ' has-error':''}}">
                  <label class="col-sm-3 col-form-label col_form_label">Phone Number:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" name="phone" value="{{old('phone')}}">
                      @if($errors->has('phone'))
                      <span class="invalid-feedback" role="alart">
                        <strong>{{$errors->First('phone')}}</strong>
                       </span>
                       @endif
                  </div>
                </div>
                <div class="form-group row custom_form_group {{$errors->has('name')? ' has-error':''}}">
                  <label class="col-sm-3 col-form-label col_form_label">Email Address:</label>
                  <div class="col-sm-7">
                    <input type="email" class="form-control form_control" name="email" value="{{old('email')}}">
                    @if($errors->has('email'))
                    <span class="invalid-feedback" role="alart">
                      <strong>{{$errors->First('email')}}</strong>
                     </span>
                     @endif
                  </div>
                </div>
                <div class="form-group row custom_form_group {{$errors->has('name')? ' has-error':''}}">
                  <label class="col-sm-3 col-form-label col_form_label">Password:</label>
                  <div class="col-sm-7">
                    <input type="password" class="form-control form_control" name="password">
                    @if($errors->has('password'))
                    <span class="invalid-feedback" role="alart">
                      <strong>{{$errors->First('password')}}</strong>
                     </span>
                     @endif
                  </div>
                </div>
                <div class="form-group row custom_form_group {{$errors->has('name')? ' has-error':''}}">
                  <label class="col-sm-3 col-form-label col_form_label">Confirm-Password:</label>
                  <div class="col-sm-7">
                    <input type="password" class="form-control form_control" name="password_confirmation">

                  </div>
                </div>
                <div class="form-group row custom_form_group{{$errors->has('name')? ' has-error':''}}">
                <label class="col-sm-3 col-form-label col_form_label">User Role:</label>
                <div class="col-sm-4">
                  <select class="form-control form_control" name="role_id">
                      <option value="">Select User Role</option>
                      @php
                        $allRole=App\Models\Role::where('role_status',1)->orderBy('role_id','ASC')->get();
                      @endphp
                      @foreach($allRole as $urole)
                      <option value="{{$urole->role_id}}">{{$urole->role_name}}</option>
                      @endforeach
                  </select>
                  @if ($errors->has('role_id'))
                      <span class="invalid-feedback" role_id="alert">
                          <strong>{{ $errors->first('role_id') }}</strong>
                      </span>
                  @endif
                </div>
                </div>
                <div class="form-group row custom_form_group {{$errors->has('name')? ' has-error':''}}">
                  <label class="col-sm-3 col-form-label col_form_label">Photo:</label>
                    <div class="col-sm-3">
                          <input type="file" class="" name="pic" onchange="previewFile()">
                          <img src="{{asset('contents/admin')}}/images/avatar.png" class=" img-thumbnail img-fluid upload_image" alt="Image preview...">
                    </div>
                </div>
              </div>
              <div class="card-footer text-center card_footer_btn">
                  <button type="submit" class="btn">REGISTRATION</button>
              </div>
            </form>
          </div>
        </div>
    </div>
@endsection
