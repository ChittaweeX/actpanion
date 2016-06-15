@extends('backtemplate.main')
<!--Header Title -->
@section('title')
Addnew AdminUser
@endsection

<!--Plugins CSS -->
@section('cssextent')

@endsection

<!--Customs CSS -->
@section('csscustom')

@endsection

<!--Page title-->
@section('pagetitle')
Addnew
@endsection

<!--Top navigation-->
@section('navigation')
  <li><a href="#"><i class="fa fa-user"></i>AdminUsers</a></li>
  <li class="active"><a href="#">Addnew</a></li>
@endsection

<!--Main Content -->
@section('content')
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
    </div>
    <div class="box-body">
      <strong>Add User</strong>
      <hr>
      <div class="row">
        <div class="col-sm-6">
          <form action="{{ url('function/createuser') }}" method="post">
            <div class="form-group">
              <label for="">Username</label>
              <input type="text" class="form-control" name="username" placeholder="">
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" class="form-control" name="password" placeholder="">
            </div>
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="text" class="form-control" name="email" placeholder="">
            </div>
            <div class="form-group">
              <button type='submit' class='btn btn-lg btn-success btn-flat'>Save</button>
            </div>
          </form>
        </div>
      </div>

    </div><!-- /.box-body -->
    <div class="box-footer text-right">
      <a href="{{ URL::previous() }}"><button type='button' class='btn btn-warning btn-flat'>Back</button></a>
    </div><!-- /.box-footer-->
  </div><!-- /.box -->
@endsection

<!--Plugins JS -->
@section('jsextent')

@endsection

<!--Customs JS -->
@section('jscustom')

@endsection


<!--Control alert box -->
@section('alertcontrol')

@endsection
