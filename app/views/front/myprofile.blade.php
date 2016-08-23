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
          <div class="list-group">
  <a href="{{ url('mydashboard') }}" class="list-group-item ">
    <i class="fa fa-suitcase"></i> My Activities <span class="badge">0</span>
  </a>
  <a href="{{ url('myprofile')}}" class="list-group-item active"><i class="fa fa-user"></i> Profile
  </a>
  <a href="#" class="list-group-item"><i class="fa fa-money"></i> Payment
  </a>
</div>
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
                    <input type="text" class="form-control" id="" placeholder="" value="{{ $memberdata->mem_fname }}">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="">LastName</label>
                    <input type="text" class="form-control" id="" placeholder="" value="{{ $memberdata->mem_lname }}">
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
                    <input type="text" class="form-control" id="" placeholder="" value="{{ $memberdata->mem_email }}">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" id="" placeholder="" value="{{ $memberdata->mem_tel }}">
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
