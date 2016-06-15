@extends('backtemplate.main')
<!--Header Title -->
@section('title')
Default
@endsection

<!--Plugins CSS -->
@section('cssextent')

@endsection

<!--Customs CSS -->
@section('csscustom')

@endsection

<!--Page title-->
@section('pagetitle')
Preview
@endsection

<!--Top navigation-->
@section('navigation')
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li><a href="#">Examples</a></li>
  <li class="active">Blank page</li>
@endsection

<!--Main Content -->
@section('content')
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">View Activities</h3>
      <div class="box-tools pull-right">
        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      <div class="row">
        <div class="col-sm-6">
          <strong>Infomation Details</strong>
          <br>
          <br>
          Activitie Name : {{$activitiesdata->act_nameEng}}
          <br>
          Activitie NameThai : {{$activitiesdata->act_nameThai}}
        </div>
        <div class="col-sm-6">
          <img src="http://placehold.it/350x150" alt="" class="img-responsive"/>
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
  @if(Session::has('loginerror'))
    <script>
      $(document).ready(function() {

          $(window).load(function(){
                     swal({
             title: "Login Error!",
             text: "Username หรือ Password ของคุณไม่ถูกต้อง กรุณาลองอีกครั้ง",
             type: "warning",
             confirmButtonText: "Try again!"
         });
                   });

        });
    </script>
  @endif
@endsection