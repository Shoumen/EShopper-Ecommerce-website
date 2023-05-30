@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <form method="post" action="{{url('admin/general/basic/update')}}" enctype="multipart/form-data">
              @csrf
              <div class="card-header">
                <div class="row">
                      <div class="col-md-8 card_header_title">
                          <h4><i class="fa fa-gg-circle"></i> Basic Information</h4>
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
                      swal({title: "Success!",text: "Successfully updated basic information!",icon: "success",timer: 5000});
                    </script>
                @endif
                @if(Session::has('error'))
                    <script>
                      swal({title: "Opps!",text: "Basic Information update failed!",icon: "error",timer: 5000});
                    </script>
                @endif
                <div class="form-group row custom_form_group{{$errors->has('title')? ' has-error':''}}">
                  <label class="col-sm-3 col-form-label col_form_label">Title:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" name="title" value="{{$basic->basic_title}}">
                    @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                  </div>
                </div>
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label col_form_label">Subtitle:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" name="subtitle" value="{{$basic->basic_subtitle}}">
                  </div>
                </div>
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label col_form_label">Details:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" name="details" value="{{$basic->basic_details}}">
                  </div>
                </div>
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label col_form_label">Logo:</label>
                  <div class="col-sm-4">
                    <input id="logo" type="file" name="logo" onchange="previewLogo()">
                  </div>
                  <div class="col-sm-3">
                    <img src="{{asset('uploads/'.$basic->basic_logo)}}" class=" img-thumbnail img-fluid upload_logo" alt="Image preview...">
                  </div>
                </div>
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label col_form_label">Favicon:</label>
                  <div class="col-sm-4">
                    <input id="favicon" type="file" name="favicon" onchange="previewFavicon()">
                  </div>
                  <div class="col-sm-2">
                    <img src="{{asset('uploads/'.$basic->basic_favicon)}}" class=" img-thumbnail img-fluid upload_favicon" alt="Image preview...">
                  </div>
                </div>
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label col_form_label">Footer-Logo:</label>
                  <div class="col-sm-4">
                    <input type="file" id="flogo" name="flogo" onchange="previewFlogo()">
                  </div>
                  <div class="col-sm-2">
                    <img src="{{asset('uploads/'.$basic->basic_flogo)}}" class=" img-thumbnail img-fluid upload_flogo" alt="Image preview...">
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
