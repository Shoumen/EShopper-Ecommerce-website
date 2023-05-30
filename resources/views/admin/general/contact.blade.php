@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <form method="post" action="{{url('admin/general/contact/update')}}" enctype="multipart/form-data">
              @csrf
              <div class="card-header">
                <div class="row">
                      <div class="col-md-8 card_header_title">
                          <h4><i class="fa fa-gg-circle"></i> Contact Information</h4>
                      </div>
                      <div class="col-md-4 card_header_btn text-right">
                          <a href="{{url('admin/general/social')}}" class="btn btn-secondary card_btn"><i class="fa fa-th"></i> Social Media</a>
                      </div>
                      <div class="clr"></div>
                </div>
              </div>
              <div class="card-body">
                @if(Session::has('success'))
                    <script>
                      swal({title: "Success!",text: "Successfully updated contact information!",icon: "success",timer: 5000});
                    </script>
                @endif
                @if(Session::has('error'))
                    <script>
                      swal({title: "Opps!",text: "Contact information update failed!",icon: "error",timer: 5000});
                    </script>
                @endif
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-mobile"></i></div>
                      </div>
                      <input type="text" class="form-control" name="phone1" value="{{$conInfo->cont_phone1}}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-mobile"></i></div>
                      </div>
                      <input type="text" class="form-control" name="phone2" value="{{$conInfo->cont_phone2}}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-mobile"></i></div>
                      </div>
                      <input type="text" class="form-control" name="phone3" value="{{$conInfo->cont_phone3}}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-mobile"></i></div>
                      </div>
                      <input type="text" class="form-control" name="phone4" value="{{$conInfo->cont_phone4}}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                      </div>
                      <input type="text" class="form-control" name="email1" value="{{$conInfo->cont_email1}}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                      </div>
                      <input type="text" class="form-control" name="email2" value="{{$conInfo->cont_email2}}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                      </div>
                      <input type="text" class="form-control" name="email3" value="{{$conInfo->cont_email3}}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                      </div>
                      <input type="text" class="form-control" name="email4" value="{{$conInfo->cont_email4}}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-home"></i></div>
                      </div>
                      <textarea rows="1" class="form-control" name="add1">{{$conInfo->cont_add1}}</textarea>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-home"></i></div>
                      </div>
                      <textarea rows="1" class="form-control" name="add2">{{$conInfo->cont_add2}}</textarea>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-home"></i></div>
                      </div>
                      <textarea rows="1" class="form-control" name="add3">{{$conInfo->cont_add3}}</textarea>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-home"></i></div>
                      </div>
                      <textarea rows="1" class="form-control" name="add4">{{$conInfo->cont_add4}}</textarea>
                    </div>
                  </div>

                </div>
              </div>
              <div class="card-footer text-center card_footer_btn">
                  <button type="submit" class="btn">UPDATE</button>
              </div>
            </form>
          </div>
        </div>
    </div>
@endsection
