@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                    <div class="col-md-8 card_header_title">
                        <h4><i class="fa fa-gg-circle"></i> All Contact Message</h4>
                    </div>
                    <div class="col-md-4 card_header_btn text-right">
                        <a href="#" class="btn btn-secondary card_btn"><i class="fa fa-plus-circle"></i> Link</a>
                    </div>
                    <div class="clr"></div>
              </div>
            </div>
            <div class="card-body">
              @if(Session::has('success'))
                  <script>
                    swal({title: "Success!",text: "Successfully delete conatct message!",icon: "success",timer: 5000});
                  </script>
              @endif
              @if(Session::has('error'))
                  <script>
                    swal({title: "Opps!",text: "Failed delete action!",icon: "error",timer: 5000});
                  </script>
              @endif
              <table id="allTable"class="table table-bordered table-hover table-striped custom_table">
                  <thead class="thead-dark">
                    <tr>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Subject</th>
                      <th>Message</th>
                      <th>Time</th>
                      <th>Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($all as $data)
                    <tr>
                      <td>{{$data->conus_name}}</td>
                      <td>{{$data->conus_phone}}</td>
                      <td>{{$data->conus_email}}</td>
                      <td>{{Str::limit($data->conus_sub,10)}}</td>
                      <td>{{Str::limit($data->conus_mess,20)}}</td>
                      <td>{{$data->created_at->format('d M Y | h:i:s a')}}</td>
                      <td>
                          <a href="{{url('admin/contactus/view/'.$data->conus_slug)}}"><i class="fa fa-plus-square fa-lg"></i></a>
                          <a href="#" id="softDelete" data-toggle="modal" data-target="#softDelModal" data-id="{{$data->conus_id}}"><i class="fa fa-trash fa-lg"></i></a>
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
<!--delete modal start -->
<div class="modal fade" id="softDelModal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <form method="post" action="{{url('admin/contactus/softdel')}}">
          @csrf
          <div class="modal-content">
              <div class="modal-header bg-danger">
                  <h5 class="modal-title text-white" id="smallmodalLabel"><strong>Confirm Message</strong></h5>
              </div>
              <div class="modal-body modal_card">
                  Are you want to sure delete this data?
                  <input type="hidden" id="modal_id" name="modal_id"/>
              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Confirm</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              </div>
          </div>
        </form>
    </div>
</div>
@endsection
