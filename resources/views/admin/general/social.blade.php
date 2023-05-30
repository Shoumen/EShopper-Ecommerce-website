@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <form method="post" action="{{url('admin/general/social/update')}}" enctype="multipart/form-data">
              @csrf
              <div class="card-header">
                <div class="row">
                      <div class="col-md-8 card_header_title">
                          <h4><i class="fa fa-gg-circle"></i> Social Media Information</h4>
                      </div>
                      <div class="col-md-4 card_header_btn text-right">
                          <a href="{{url('admin/general/contact')}}" class="btn btn-secondary card_btn"><i class="fa fa-th"></i> Contact Information</a>
                      </div>
                      <div class="clr"></div>
                </div>
              </div>
              <div class="card-body">
                @if(Session::has('success'))
                    <script>
                      swal({title: "Success!",text: "Successfully updated social media information!",icon: "success",timer: 5000});
                    </script>
                @endif
                @if(Session::has('error'))
                    <script>
                      swal({title: "Opps!",text: "Social media Information update failed!",icon: "error",timer: 5000});
                    </script>
                @endif
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-facebook-square"></i></div>
                      </div>
                      <input type="text" class="form-control" name="facebook" value="{{$social->sm_facebook}}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-twitter-square"></i></div>
                      </div>
                      <input type="text" class="form-control" name="twitter" value="{{$social->sm_twitter}}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-linkedin-square"></i></div>
                      </div>
                      <input type="text" class="form-control" name="linkedin" value="{{$social->sm_linkedin}}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-instagram"></i></div>
                      </div>
                      <input type="text" class="form-control" name="instagram" value="{{$social->sm_instagram}}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-pinterest-square"></i></div>
                      </div>
                      <input type="text" class="form-control" name="pinterest" value="{{$social->sm_pinterest}}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-google"></i></div>
                      </div>
                      <input type="text" class="form-control" name="google" value="{{$social->sm_google}}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-youtube-square"></i></div>
                      </div>
                      <input type="text" class="form-control" name="youtube" value="{{$social->sm_youtube}}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-skype"></i></div>
                      </div>
                      <input type="text" class="form-control" name="skype" value="{{$social->sm_skype}}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-behance-square"></i></div>
                      </div>
                      <input type="text" class="form-control" name="behance" value="{{$social->sm_behance}}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-dribbble"></i></div>
                      </div>
                      <input type="text" class="form-control" name="dribbble" value="{{$social->sm_dribbble}}">
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
