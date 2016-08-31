@extends('fronttemplate.default')
@section('custom-css')

@endsection
@section('content')
  <div class='container '>
    <div class="page-header">

      <h3> <img src="{{ Session::get('actimage') }}" alt="" class="img-circle" height="40" width="40"/> {{ Session::get('actname') }} <strong>Profile</strong></h3>
      </div>
      <div class="row">
        <div class="col-sm-2">
          @include('fronttemplate.smallmenu')
        </div>
        <div class="col-sm-10">
          <div class="panel panel-primary">
            <form action="" method="post">
            <div class="panel-heading">
              <h3 class="panel-title">Edit Profile
              </h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="">FirstName</label>
                    <input type="text" class="form-control" id="" placeholder="" value="{{ $memberdata->member_fname }}">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="">LastName</label>
                    <input type="text" class="form-control" id="" placeholder="" value="{{ $memberdata->member_lname }}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" id="" placeholder="" >
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="">Password</label>
                    <button type="button" class="btn btn-default form-control">
                      Reset Password <i class="fa fa-refresh"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" id="" placeholder="" value="{{ $memberdata->member_email }}">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" id="" placeholder="" value="{{ $memberdata->member_tel }}">
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <button type="submit" class="btn btn-primary">
                Save
              </button>
              <button type="button" class="btn btn-default">
                Cancel
              </button>
            </div>
            </form>
          </div>
        </div>
      </div>





@endsection
@section('custom-js')

@endsection
