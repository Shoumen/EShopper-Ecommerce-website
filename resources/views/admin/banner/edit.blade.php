@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <form method="post" action="{{url('admin/banner/update')}}">
              @csrf
              <div class="card-header">
                <div class="row">
                      <div class="col-md-8 card_header_title">
                          <h4><i class="fa fa-gg-circle"></i> Update Banner Information</h4>
                      </div>
                      <div class="col-md-4 card_header_btn text-right">
                          <a href="{{url('admin/banner')}}" class="btn btn-secondary card_btn"><i class="fa fa-th"></i> All Banner</a>
                      </div>
                      <div class="clr"></div>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label col_form_label">Banner Title:</label>
                  <div class="col-sm-7">
                    <input type="hidden" class="" name="id" value="{{$data->ban_id}}">
                    <input type="hidden" class="" name="slug" value="{{$data->ban_slug}}">
                    <input type="text" class="form-control form_control" name="title" value="{{$data->ban_title}}">
                  </div>
                </div>
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label col_form_label">Banner Subtitle:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" name="subtitle" value="{{$data->ban_subtitle}}">
                  </div>
                </div>
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label col_form_label">Button:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" name="btn" value="{{$data->ban_btn}}">
                  </div>
                </div>
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label col_form_label">Button URL:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" name="url" value="{{$data->ban_url}}">
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
