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
            <h1 class="text-upper ">Activities Details </h1>
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
        <!-- START .tour-plans -->
        <div class="tour-plans">
          <div class="plan-image">
            <img class="img-responsive" src="{{ url("image/trip/$activitiesdata->act_image") }}" alt="Vancouver, BC" />
            <div class="offer-box">
              <div class="offer-top">
                <span class="featured-cr text-upper">Thailand</span>
                <h2 class="featured-cy text-upper">{{ $activitiesdata->act_name }}</h2>
              </div>
              <div class="offer-bottom">
                <span class="featured-stf">Starting From </span>
                <span class="featured-spe">{{ $activitiesdata->act_price }} Bath</span>
              </div>
            </div>
          </div>
          <div class="featured-btm box-shadow1">
            <a class="ft-hotel text-upper" href="#">6 nights VIP/Luxurious Hotel</a>
            <a class="ft-plane text-upper" href="#">Return Air Ticket</a>
            <a class="ft-tea text-upper" href="#">Complimentary Break Fast</a>
          </div>

          <h2 class="text-upper">Tour Information</h2>
          <p>Amet turpis tristique, nec in aliquet dis amet, proin egestas in tempor, cras et dapibus, lectus pellentesque enim odio elementum eu tincidunt diam a et. Dapibus sed cum, aliquam cras egestas enim elit in mattis? Scelerisque, ultrices mid! Lorem. Scelerisque? Pid cras, mattis vel, porta, quis! Porttitor turpis cras, odio ultricies parturient pulvinar tempor, eu turpis enim dapibus diam tristique cursus egestas quis phasellus montes! Parturient porta purus quis scelerisque? Vel proin, ac odio cras penatibus magnis non? Aliquam elementum, dis? Elementum ac.</p>
          <a href="#" class="btn btn-primary btn-lg">Take This</a>
          </div>
        <!-- END .tour-plans -->

        <!-- START TABS -->
        <ul class="nav nav-tabs text-upper">
          <li class="active"><a href="#tourPlan" data-toggle="tab">Tour Plan</a></li>
          <li><a href="#flightSchedule" data-toggle="tab">Flight Schedule</a></li>
          <li><a href="#additionalInfo" data-toggle="tab">Additional Information</a></li>
        </ul>
        <!-- END TABS -->

        <!-- START TAB CONTENT -->
        <div class="tab-content gray box-shadow1 clearfix marb30">
          <!-- START TAB 1 -->
          <div class="tab-pane active" id="tourPlan">
            <ul class="plans-list list-unstyled">
              <li>
                <img class="img-responsive" src="http://placehold.it/216x98" alt="Day 1" />
                <div class="plan-info">
                  <h4 class="text-upper">Day 1</h4>
                  <p>Amet turpis tristique, nec in aliquet dis amet, proin egestas in tempor, cras et dapibus.</p>
                </div>
              </li>

              <li>
                <img class="img-responsive" src="http://placehold.it/216x98" alt="Day 2" />
                <div class="plan-info">
                  <h4 class="text-upper">Day 2</h4>
                  <p>Amet turpis tristique, nec in aliquet dis amet, proin egestas in tempor, cras et dapibus.</p>
                </div>
              </li>

              <li>
                <img class="img-responsive" src="http://placehold.it/216x98" alt="Day 3" />
                <div class="plan-info">
                  <h4 class="text-upper">Day 3</h4>
                  <p>Amet turpis tristique, nec in aliquet dis amet, proin egestas in tempor, cras et dapibus.</p>
                </div>
              </li>
            </ul>
          </div>
          <!-- END TAB 1 -->

          <!-- START TAB 2 -->
          <div class="tab-pane" id="flightSchedule">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>FLIGHT FROM</th>
                    <th>DESTINATION</th>
                    <th>DATE</th>
                    <th>DEPARTS</th>
                    <th>ARRIVES</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="dark-gray">
                    <td>Seattle</td>
                    <td>Paris</td>
                    <td>20 DEC 2013</td>
                    <td>10:00</td>
                    <td>12:00</td>
                  </tr>
                  <tr>
                    <td>Paris</td>
                    <td>Colosseum</td>
                    <td>21 DEC 2013</td>
                    <td>09:00</td>
                    <td>10:00</td>
                  </tr>
                  <tr class="dark-gray">
                    <td>Colosseum</td>
                    <td>London</td>
                    <td>22 DEC 2013</td>
                    <td>05:00</td>
                    <td>06:30</td>
                  </tr>
                  <tr>
                    <td>London</td>
                    <td>Verona</td>
                    <td>23 DEC 2013</td>
                    <td>08:15</td>
                    <td>09:30</td>
                  </tr>
                  <tr class="dark-gray">
                    <td>Verona</td>
                    <td>Seattle</td>
                    <td>24 DEC 2013</td>
                    <td>10:00</td>
                    <td>03:40</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END TAB 2 -->

          <!-- START TAB 3 -->
          <div class="tab-pane" id="additionalInfo">
            <div class="inside-pane">
              <p>Amet turpis tristique, nec in aliquet dis amet, proin egestas in tempor, cras et dapibus, lectus pellentesque enim odio elementum eu tincidunt diam a et. Dapibus sed cum, aliquam cras egestas enim elit in mattis? Scelerisque, ultrices mid! Lorem. Scelerisque? Pid cras, mattis vel, porta, quis! Porttitor turpis cras, odio ultricies parturient pulvinar tempor.</p>
              <p>eu turpis enim dapibus diam tristique cursus egestas quis phasellus montes! Parturient porta purus quis scelerisque? Vel proin, ac odio cras penatibus magnis non? Aliquam elementum, dis? Elementum ac.</p>
            </div>
          </div>
          <!-- END TAB 3 -->
        </div>
        <!-- END TAB CONTENT -->
      </div>
      <!-- END #page -->


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
