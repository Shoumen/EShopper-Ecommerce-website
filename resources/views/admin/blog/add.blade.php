@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <form method="post" action="{{route('admin.blog.submit')}}">
              @csrf
              <div class="card-header">
                <div class="row">
                      <div class="col-md-8 card_header_title">
                          <h4><i class="fa fa-gg-circle"></i> Upload Blog Information</h4>
                      </div>
                      <div class="col-md-4 card_header_btn text-right">
                          <a href="{{url('admin/blog')}}" class="btn btn-secondary card_btn"><i class="fa fa-th"></i> All Blog</a>
                      </div>
                      <div class="clr"></div>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label col_form_label">Blog Title:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" name="title">
                  </div>
                </div>
                
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label col_form_label">Blog URL:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" name="url">
                  </div>
                </div>
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label col_form_label">Blog Description:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" name="detail">
                  </div>
                </div>
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label col_form_label">Photo:</label>
                    <div class="col-sm-3">
                          <input type="file" class="" name="pic" onchange="previewFile()">
                          <img src="{{asset('contents/admin')}}/images/avatar.png" class=" img-thumbnail img-fluid upload_image" alt="Image preview...">
                    </div>
                </div>
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label col_form_label">cover photo:</label>
                  <div class="col-sm-4">
                    <input id="logo" type="file" name="cover" onchange="previewcover()">
                  </div>
                  <div class="col-sm-3">
                    <img src="{{asset('contents/admin')}}/images/avatar.png" class=" img-thumbnail img-fluid upload_cover" alt="Image preview...">
                  </div>
                </div>
              </div>
              <div class="card-footer text-center card_footer_btn">
                  <button type="submit" class="btn">UPLOAD</button>
              </div>
            </form>
          </div>
        </div>
    </div>
@endsection
