@extends('fronttemplate.default')
@section('title')
Home
@endsection
@section('description')

@endsection
@section('keywords')

@endsection
@section('customcss')
<link rel="stylesheet" href="{{ url('assets/css/flexslider.css') }} " type="text/css" media="screen" />
<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="{{ url('assets/js/rs-plugin/css/settings.css') }}" media="all" />
@endsection
@section('slider')
  <div id="header-banner">
    <div class="banner-overlay">
      <div class="container">
        <div class="row">
          <section class="col-sm-6">
            <h1 class="text-upper">Order Confirmation</h1>
          </section>


        </div>
      </div>
    </div>
  </div>
@endsection
@section('maincontent')
  <div class="container">
    <div class="row">
      <!-- START #page -->
      <div id="page" class="col-md-12">

        <!-- START #contactForm -->
        <section id="order-confirmation">
          <div class="booking gray clearfix marb30 box-shadow1">
            <div class="selected-deal">
              <h2 class="marb20">Selected Deal</h2>
              <div class="row">
                @foreach($activitiesdata as $data)
                  <div class="col-sm-12">
                    <div class="ft-item">
                      <span class="ft-image">
                        <img src="{{ url("image/trip/$data->act_image") }}" alt="featured Scroller"  />
                      </span>
                      <div class="ft-data">
                        <a class="ft-hotel text-upper" href="#">Hotel</a>
                        <a class="ft-plane text-upper" href="#">Air Ticket</a>
                        <a class="ft-tea text-upper" href="#">Break Fast</a>
                      </div>
                      <div class="ft-foot">
                        <h4 class="ft-title text-upper"><a href="#">{{ $data->act_name }}</a></h4>
                        <span class="ft-offer text-upper">PRICE {{ $data->act_price }} bath</span>
                      </div>
                    </div>
                    <p>
                      &nbsp;
                    </p>
                  </div>

                @endforeach
              </div>

            </div>
            <div class="booking-status">
              <h2 class="marb20">Order Confirmation</h2>
              <h3 class="marb20">Total xxxx Bath</h3>
              <p class="marb20">Congratulation!<br>Your order for the selected Deal has been confirmed.</p>
              <a class="btn btn-default btn-md text-upper">Edit Detail <i class="fa fa-edit"></i></a>
              <a class="btn btn-default btn-md text-upper">Confirm <i class="fa fa-check"></i></a>
            </div>
          </div>

        </section>
        <!-- END #contactForm -->
      </div>
      <!-- END #page -->

      <!-- START #sidebar -->

      <!-- END #sidebar -->
    </div>
    <!-- END .row -->
  </div>


@endsection


@section('customjs')
  <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
  <script type="text/javascript" src="{{ url('assets/js/rs-plugin/js/jquery.plugins.min.js') }} "></script>
  <script type="text/javascript" src="{{ url('assets/js/rs-plugin/js/jquery.revolution.min.js') }} "></script>


  <script type="text/javascript">
  $(document).ready(function() {
    // revolution slider
    revapi = $("#content-slider").revolution({
      delay: 15000,
      startwidth: 1170,
      startheight: 920,
      hideThumbs: 20,
      fullWidth: "on",
      fullScreen: "off",
      fullScreenOffsetContainer: "",
      navigationVOffset: 320
    });

    // initilize datepicker
    $(".date-picker").datepicker();
  });


    $(window).load(function(){
      $('.carousel').flexslider({
    animation: "fade",
    animationLoop: true,
    controlNav: false,
      maxItems: 1,
    pausePlay: false,
    mousewheel:true,
    start: function(slider){
      $('body').removeClass('loading');
    }
      });
    });


  </script>
  <script>
  $(document).ready(function(){
    $("#adults").minimalect({ theme: "bubble", placeholder: "Select" });
    $("#kids").minimalect({ theme: "bubble", placeholder: "Select" });
  });
  </script><!--- SELECT BOX -->
@endsection
