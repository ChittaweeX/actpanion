@extends('fronttemplate.default')
@section('custom-css')
  <link rel="stylesheet" type="text/css" href="{{ url('assets/datedropper-master/datedropper.css') }}">
@endsection
@section('content')
  <div class='container '>
    <div class="row">
      <div class="col-lg-12">
            <h4 class="page-header">Booking Details <i class="fa fa-bag"></i></h4>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  การจองอย่างปลอดภัยของท่านเริ่มต้นที่นี่ - ใช้เวลาเพียง 2 นาทีเท่านั้น!
</div>

          <div class="panel panel-default">
            <div class="panel-body">
              <div class="col-md-4">
                <img class="img-responsive" src="{{ url("image/trip/cover/$activitiesdata->act_coverimage") }}" alt="">
              </div>
              <div class="col-md-8">
                <a href="{{ url("activities/$activitiesdata->act_nameEng") }}" target="_blank">{{ $activitiesdata->act_nameEng }} , {{ $activitiesdata->act_province }}</a>
                <p>
                  <br>
                  Booking Date : <input class="form-control" type="text" id="departure" autofocus="autofocus"/>
                  <p class="help-block">*Click for Select Booking Date.</p>
                </p>
                <p>
                  Service :
                </p>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="panel panel-primary">
            <div class="panel-body">
              <div class="row">
                <div class="col-md-5">
                  {{ $price->price_type }} {{$price->price_totall}} {{ $price->price_money }} /Person
                </div>
                <div class="col-md-3">
                  <input class="form-control input-group-sm" type="number" name="name" value="1">
                </div>
                <div class="col-md-4">
                  THB {{ $price->price_totall }}
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <div class="row">
                <div class="col-md-8">
                  Total
                </div>
                <div class="col-md-4 text-success">
                  THB {{ $price->price_totall }}
                </div>
                  <div class="col-md-12">
                    <small>รวม: เซอร์วิสชาร์จ 10%, ภาษีโรงแรม 7%, ภาษีท้องถิ่น 1%</small>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Your Infomation</h3>
            </div>
            <div class="panel-body">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">First Name</label>
                  <input type="text" class="form-control" id="" placeholder="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Last Name</label>
                  <input type="text" class="form-control" id="" placeholder="">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" class="form-control" id="" placeholder="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Tel.</label>
                  <input type="text" class="form-control" id="" placeholder="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Province.</label>
                  <input type="text" class="form-control" id="" placeholder="">
                </div>
              </div>
              <div class="col-md-12">
                <a href="{{ url('/fbauth/booking') }}" class="btn btn-primary btn-block">
                  <i class="fa fa-facebook-square"></i>    Login with Facebook
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>





@endsection
@section('custom-js')
  <script src="{{ url('assets/datedropper-master/datedropper.js') }}"></script>
  <script>$( "#departure" ).dateDropper();</script>
@endsection
