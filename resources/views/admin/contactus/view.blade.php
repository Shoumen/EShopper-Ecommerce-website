@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                    <div class="col-md-8 card_header_title">
                        <h4><i class="fa fa-gg-circle"></i> View Contact Message Details</h4>
                    </div>
                    <div class="col-md-4 card_header_btn text-right">
                        <a href="{{url('admin/contactus')}}" class="btn btn-secondary card_btn"><i class="fa fa-th"></i> All Message</a>
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
                            <td>Name</td>
                            <td>:</td>
                            <td>{{$data->conus_name}}</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>:</td>
                            <td>{{$data->conus_phone}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{$data->conus_email}}</td>
                        </tr>
                        <tr>
                            <td>Subject</td>
                            <td>:</td>
                            <td>{{$data->conus_sub}}</td>
                        </tr>
                        <tr>
                            <td>Message</td>
                            <td>:</td>
                            <td>{{$data->conus_mess}}</td>
                        </tr>
                        <tr>
                            <td>Time</td>
                            <td>:</td>
                            <td>{{$data->created_at->format('d-m-Y | h:i:s a')}}</td>
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
