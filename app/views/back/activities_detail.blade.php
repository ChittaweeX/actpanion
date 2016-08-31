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
Activities
@endsection

<!--Top navigation-->
@section('navigation')
  <li><a href="#">Activities</a></li>
  <li class="active">Detail</li>
@endsection

<!--Main Content -->
@section('content')
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">{{ $activitiesdata->act_name_en }} , {{ $activitiesdata->act_name_th }}</h3>
      <div class="box-tools pull-right">
        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      <div class="row">
        <form class="" action="{{ url('function/editactivities') }}" method="post">
          <input type="hidden" name="actid" value="{{$activitiesdata->act_id}}">
        <div class="col-md-6">
          <img src="{{url("image/activities/cover/$activitiesdata->act_cover_image")}}" alt="" class="img-responsive"/>
          <div class="form-group">
            <label for="">Chang Cover Image</label>
            <input type="file" class="form-control" name="coverimage" placeholder="">
          </div>
          <hr>
          <strong>Image Item</strong>
          <div class="form-group">
            <label for="">Add image</label>
            <input type="file" class="form-control" id="" placeholder="">
          </div>
          <hr>
          <strong>Price</strong>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="">Type</label>
            <div class="row">
              <div class="col-sm-12 ">
                <select class="form-control" name="type">
                  @foreach($typedata as $type)
                    <option value="{{ $type->act_type_id }}" @if($type->act_type_id == $activitiesdata->act_type)
                      selected=""
                    @endif>
                      {{ $type->act_type_name_th }}({{ $type->act_type_name_en }})
                    </option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for=""> Name(TH)</label>
            <div class="row">
              <div class="col-sm-12 ">
                <input type="text" class="form-control" name="nameTH" placeholder="" value="{{$activitiesdata->act_name_th}}">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for=""> Name(EN)</label>
            <div class="row">
              <div class="col-sm-12 ">
                <input type="text" class="form-control" name="nameEN" placeholder="" value="{{$activitiesdata->act_name_en}}">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for=""> info(EN)</label>
            <div class="row">
              <div class="col-sm-12 ">
                <textarea name="infoEN" rows="8" cols="40" class="form-control">{{$activitiesdata->act_info_en}}</textarea>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for=""> info(TH)</label>
            <div class="row">
              <div class="col-sm-12 ">
                <textarea name="infoTH" rows="8" cols="40" class="form-control">{{$activitiesdata->act_info_th}}</textarea>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for=""> Address (TH)</label>
            <div class="row">
              <div class="col-sm-12 ">
                <input type="text" class="form-control" name="addressTH" placeholder="" value="{{$activitiesdata->act_address_th}}">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for=""> Address (EN)</label>
            <div class="row">
              <div class="col-sm-12 ">
                <input type="text" class="form-control" name="addressEN" placeholder="" value="{{$activitiesdata->act_address_en}}">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for=""> Subdistrict</label>
            <div class="row">
              <div class="col-sm-12 ">
                <input type="text" class="form-control" name="subdistrict" placeholder="" value="{{$activitiesdata->act_subdistrict}}">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for=""> District</label>
            <div class="row">
              <div class="col-sm-12 ">
                <input type="text" class="form-control" name="district" placeholder="" value="{{$activitiesdata->act_district}}">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for=""> Province</label>
            <div class="row">
              <div class="col-sm-12 ">
                <input type="text" class="form-control" name="province" placeholder="" value="{{$activitiesdata->act_province}}">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for=""> Google MAP</label>
            <div class="row">
              <div class="col-sm-12 ">
                <input type="text" class="form-control" name="googlemap" placeholder="" value="{{$activitiesdata->act_location}}">
              </div>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">
              Save
            </button>
          </div>
        </div>
        </form>
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
