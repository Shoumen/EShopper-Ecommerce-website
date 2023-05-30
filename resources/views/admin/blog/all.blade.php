@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                    <div class="col-md-8 card_header_title">
                        <h4><i class="fa fa-gg-circle"></i> All Blog Information</h4>
                    </div>
                    <div class="col-md-4 card_header_btn text-right">
                        <a href="{{url('admin/blog/add')}}" class="btn btn-secondary card_btn"><i class="fa fa-plus-circle"></i> Add Blog</a>
                    </div>
                    <div class="clr"></div>
              </div>
            </div>
            <div class="card-body">
              <table id="allTable" class="table table-bordered table-hover table-striped custom_table">
                  <thead class="thead-dark">
                    <tr>
                      <th>Blog Title</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Creator</th>
                      <th>Upload</th>
                      
                      <th>Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <tr>
                      <td>...</td>
                      <td>,,,</td>
                      <td>//</td>
                      <td>?</td>
                      <td>?/</td>
                       <td>
                          <a href="#"><i class="fa fa-plus-square fa-lg"></i></a>
                          <a href="#"><i class="fa fa-pencil-square fa-lg"></i></a>
                          <a href="#"><i class="fa fa-trash fa-lg"></i></a>
                      </td>
                    </tr>
                    
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
