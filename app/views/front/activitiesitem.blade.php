@extends('fronttemplate.default')
@section('custom-css')
<style>
  .google-maps {
      position: relative;
      padding-bottom: 75%; // This is the aspect ratio
      height: 0;
      overflow: hidden;
  }
  .google-maps iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100% !important;
      height: 100% !important;
  }
  a.list-group-item:hover,
a.list-group-item:focus {

	text-decoration: none;
	background-color: #84bbfc;
	border-top:2px solid #f5f5f5;
}
</style>

  <link href="{{ url('assets/select2/select2.min.css') }}" rel="stylesheet" />
@endsection
@section('content')
  <div class='container '>
  <!-- Page Heading/Breadcrumbs -->
  <div class="row">
      <div class="col-lg-12">
          <h3 class="page-header">
            {{ $activitiesdata->act_nameEng }} , {{ $activitiesdata->act_province }}
          </h3>
      </div>
  </div>
  <!-- /.row -->

  <!-- Portfolio Item Row -->
  <div class="row">

      <div class="col-md-6 pull-right">
        <img class="img-responsive" src="{{ url("image/trip/cover/$activitiesdata->act_coverimage") }}" alt="">
      </div>

      <div class="col-md-6">
          <h4><strong><span style="color: #84bbfc;">ACT</span>IVITES Description</strong></h4>
          <p>{{ $activitiesdata->act_about }}</p>
          <p>
            <strong>Open - Close</strong>
            <br>
             {{ date("g:i a", strtotime("$activitiesdata->act_opentime"))  }} -  {{ date("g:i a", strtotime("$activitiesdata->act_closetime")) }}
          </p>
          <p>
            <strong>Ticket Advance Booking</strong>
            <br>
            @foreach($tricketadvancedata as $trickav)
              {{ $trickav->ticket_day }} {{ $trickav->ticket_type1 }} {{ $trickav->ticket_type2 }} {{ date("g:i a", strtotime("$trickav->ticket_time"))  }}
              <br>
            @endforeach

          </p>
          <br>
          <a  class="btn btn-success" data-toggle="modal" data-target="#map"><i class="fa fa-map-marker"></i> MAP</a>
          <!-- Modal -->
<div class="modal fade" id="map" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Drirection MAP</h4>
      </div>
      <div class="modal-body">
        <div class="google-maps">
        <iframe width="560" height="400" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB_fAX67ruUpYLI5P4QRGvQrD9LvEem-Hc
&q={{$activitiesdata->act_map}}" allowfullscreen>
</iframe>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
          <a href="#" class="btn btn-default"><i class="fa fa-bus"></i> Shuttle Schedule</a>
          <br>
          <br>
          <h2 class="text-success">
            <strong>Booking</strong>
          </h2>
          <div class="list-group">
            @foreach($pricedata as $key => $price)
              <a href="{{ url("/book/$activitiesdata->act_id/$price->price_id") }}" class="list-group-item " >
                <h4 class="list-group-item-heading"><strong>{{ $price->price_type }} {{$price->price_totall}} {{ $price->price_money }}/{{ $price->price_person }} person</strong></h4>
                <p class="list-group-item-text">{{ $price->price_define }}</p>
                <button type="button" class="btn btn-primary btn-sm">
                  Booking
                </button>
              </a>
            @endforeach
          </div>
      </div>

  </div>
  <!-- /.row -->

  <!-- Related Projects Row -->
  <div class="row">

      <div class="col-lg-12">
          <h4 class="page-header">Related <span style="color: #84bbfc;">ACT</span>IVITES</h4>
      </div>

      @foreach($actrentdata as $related)
        <div class="col-sm-3 col-xs-6" style="padding-bottom: 20px;">
            <a href="{{ url("activities/$related->act_nameEng") }}">
                <img class="img-responsive img-hover img-related" src="{{ url("image/trip/cover/$related->act_coverimage") }}" alt="">
                <div class="carousel-caption">
                  <span style="font-size: 16px;"><strong>{{ $related->act_nameEng }}</strong>
                  </span>
        </div>
            </a>
        </div>
      @endforeach




  </div>
  <hr>

@endsection
@section('custom-js')
<script src="{{ url('assets/select2/select2.min.js') }}"></script>
<script type="text/javascript">
$(".js-example-basic-single").select2({
  placeholder: "Select Activities",
  allowClear: true
});
</script>
<!-- Script to Activate the Carousel -->
<script>
$('.carousel').carousel({
    interval: 5000 //changes the speed
})
</script>
@endsection
