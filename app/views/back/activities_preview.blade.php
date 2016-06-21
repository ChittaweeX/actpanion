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
           <strong>Name</strong> : {{$activitiesdata->act_nameEng}}
          <br>
           <strong>NameThai</strong> : {{$activitiesdata->act_nameThai}}
          <br>
           <strong>Area</strong> : {{$activitiesdata->act_area}}
          <br>
           <strong>Open Day</strong> : {{$activitiesdata->act_openday1 == 1 ? 'Sunday' : ''}} {{$activitiesdata->act_openday2 == 1 ? 'Monday' : ''}}
           <br>
            <strong>Time Open</strong> : {{$activitiesdata->act_opentime}} - {{$activitiesdata->act_closetime}}
            <br>
            <hr>
             <strong>Getting</strong> :
             <br>
            {{$activitiesdata->act_getting	}}
            <br>
             <strong>Map</strong> :
             <br>
             <iframe width="500" height="400" frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB_fAX67ruUpYLI5P4QRGvQrD9LvEem-Hc
    &q={{$activitiesdata->act_map}}" allowfullscreen>
</iframe>
             <br>
             <strong>About</strong> : <br>{{$activitiesdata->act_about	}}

             <hr>
             <strong>Timesession</strong>
             @foreach ($timesessiondata as $time)
               <br>
                <strong>Time Open</strong> : {{$time->timesesion_open}} - {{$time->timesesion_close}}
             @endforeach
             <hr>
             <strong>Ticketadvance</strong>
             @foreach ($timesessiondata as $time)
               <br>
                <strong>Time Open</strong> : {{$time->timesesion_open}} - {{$time->timesesion_close}}
             @endforeach
        </div>
        <div class="col-sm-6">
          <img src="http://placehold.it/400x400" alt="" class="img-responsive"/>
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
