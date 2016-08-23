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
        <div class="col-sm-8">
          <strong><h2>Infomation Details</h2></strong>
          <br>
          <br>
           <strong><h3 class="text-primary">Name</h3></strong>  {{$activitiesdata->act_nameEng}}
          <hr>
           <strong><h3 class="text-primary">NameThai</h3></strong>  {{$activitiesdata->act_nameThai}}
          <hr>
           <strong><h3 class="text-primary">Area</h3></strong> {{$activitiesdata->act_area}}
          <hr>
           <strong><h3 class="text-primary">Open Day</h3></strong>  {{$activitiesdata->act_openday1 == 1 ? 'Sunday' : ''}} {{$activitiesdata->act_openday2 == 1 ? 'Monday' : ''}}
          <hr>
          <strong><h3 class="text-primary">Time Open</h3></strong>  {{$activitiesdata->act_opentime}} - {{$activitiesdata->act_closetime}}
          <hr>
             <strong><h3 class="text-primary">Getting</h3></strong>
             <br>
            {{$activitiesdata->act_getting	}}
            <br>
             <strong><h3 class="text-primary">Map</h3></strong>
             <br>
             <iframe width="500" height="400" frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB_fAX67ruUpYLI5P4QRGvQrD9LvEem-Hc
    &q={{$activitiesdata->act_map}}" allowfullscreen>
</iframe>
             <br>
             <strong><h3 class="text-primary">About</h3></strong>{{$activitiesdata->act_about	}}
             <hr>
             <strong><h3 class="text-primary">TimeSession</h3></strong>
             @foreach ($timesessiondata as $time)
               <br>
                <strong>Time Open</strong> : {{$time->timesesion_open}} - {{$time->timesesion_close}}
             @endforeach
             <hr>
             <strong><h3 class="text-primary">TicketAdvanceBooking</h3></strong>
             @foreach ($tricketadvancedata as $tkv)
               <br>
                {{ $tkv->ticket_day }} {{ $tkv->ticket_type1 }} {{ $tkv->ticket_type2 }} {{ $tkv->ticket_time }}
             @endforeach
            <hr>
            <strong><h3 class="text-primary">Price</h3></strong>
            @foreach ($pricedata as $price)
              <br>
               {{ $price->price_person }} {{ $price->price_type }} {{ $price->price_totall }} {{ $price->price_money }}
               <br>
               {{ $price->price_define }}
            @endforeach
           <hr>
           <strong><h3 class="text-primary">Payment</h3></strong>
           @foreach ($paymentdata as $payment)
             <br>
              Bank Name {{ $payment->bank_name }}
              <br>
              Bank Branch {{ $payment->bank_branch }}
              <br>
              Account Number {{ $payment->account_number }}
              <br>
              Account Name {{ $payment->account_name }}
              <br>
              Account Type {{ $payment->account_type }}
              <hr>
           @endforeach

          <strong><h3 class="text-primary">Contact</h3></strong>
          @foreach ($contactdata as $contact)
            <br>
             Contact Name {{ $contact->contact_name }}
             <br>
             Contact Nickname {{ $contact->contact_nickname }}
             <br>
             Position {{ $contact->contact_position }}
             <br>
             Contact phone {{ $contact->contact_phone }}
             <br>
             Contact Email {{ $contact->contact_email }}
             <br>
             Orther {{ $contact->contact_email }}
             <hr>
          @endforeach


        </div>
        <div class="col-sm-4">
          <strong>Image</strong>
          <div class="row">
            <div class="col-sm-12">
              <img src="http://placehold.it/400x400" alt="" class="img-thumbnail"/>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-sm-4">
              <img src="http://placehold.it/400x400" alt="" class="img-thumbnail"/>
            </div>
            <div class="col-sm-4">
              <img src="http://placehold.it/400x400" alt="" class="img-thumbnail"/>
            </div>
            <div class="col-sm-4">
              <img src="http://placehold.it/400x400" alt="" class="img-thumbnail"/>
            </div>
          </div>
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
