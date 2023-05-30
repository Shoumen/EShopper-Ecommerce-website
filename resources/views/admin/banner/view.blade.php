@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                    <div class="col-md-8 card_header_title">
                        <h4><i class="fa fa-gg-circle"></i> View Banner Information</h4>
                    </div>
                    <div class="col-md-4 card_header_btn text-right">
                        <a href="{{url('admin/banner')}}" class="btn btn-secondary card_btn"><i class="fa fa-th"></i> All Banner</a>
                    </div>
                    <div class="clr"></div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                    <table class="table table-bordered table-striped table-hover view_table">
                        <tr>
                            <td>Banner Title</td>
                            <td>:</td>
                            <td>{{$data->ban_title}}</td>
                        </tr>
                        <tr>
                            <td>Banner Subtitle</td>
                            <td>:</td>
                            <td>{{$data->ban_subtitle}}</td>
                        </tr>
                        <tr>
                            <td>Banner Button</td>
                            <td>:</td>
                            <td>{{$data->ban_btn}}</td>
                        </tr>
                        <tr>
                            <td>Banner URL</td>
                            <td>:</td>
                            <td>{{$data->ban_url}}</td>
                        </tr>
                    </table>
                  </div>
                  <div class="col-md-1"></div>
              </div>
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
