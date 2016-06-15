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
  <!-- START #main-slider -->
  <div id="main-slider">
    <div id="content-slider">
      <ul>
        <!-- START Slide 1 -->
        <li data-transition="fade" data-slotamount="5" data-masterspeed="700">
          <img src="{{ url('image/slide-image-demo.jpg') }}" alt="Slider Image 1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />

          <!-- LAYER NR. 2 -->
          <div class="caption caption-gray sfr stl slider-heading text-upper "
            data-x="400"
            data-y="185"
            data-speed="1000"
            data-start="1800"
            data-easing="Power2.easeOut"
            data-endspeed="600"
            data-endeasing="Power3.easeIn"
            data-captionhidden="off"
            style="z-index:6;font-size:48px; "><strong>Plan you trip</strong><br>
            <p class="text-center">

              <a href="" class="btn btn-blue btn-lg btn-block" style="color : #ffffff;">
                <strong>Let's start <i class="fa fa-spinner fa-pulse"></i></strong>
              </a>
            </p>
          </div>

          <!-- LAYER NR. 3 -->
          <div class="caption caption-black sfb stb headline text-upper visible-lg"
            data-x="420"
            data-y="320"
            data-speed="600"
            data-start="1500"
            data-easing="Power4.easeOut"
            data-endspeed="500"
            data-endeasing="Power3.easeIn"
            data-captionhidden="off"
            style="z-index:6;">WE CAN HELP YOU PREPARE FOR A TRIP

          </div>

        </li>
        <!-- END Slide 1 -->
        </ul>
        </div>
@endsection
@section('maincontent')
  <div class="container" id="home-page">
    <form class="plan-tour">
      <div class="plan-banner"><span>PLAN YOUR</span><h4>DREAM <span>TOUR</span></h4></div>
      <div class="top-fields">
        <div class="input-field col-md-3"><input type="text" placeholder="1. Where to go?" /></div>
        <div class="input-field col-md-3"><input type="text" placeholder="2. What to do?" /></div>
        <div class="input-field col-md-6 schedule">
          <input type="text" class="date-picker" value="" placeholder="3. From When?" data-date="11-12-2012" data-date-format="dd-mm-yyyy" />
          <i class="calendar-icon"></i>
          <input type="text" class="date-picker" value="" placeholder="4. Till When?" data-date="12-12-2012" data-date-format="dd-mm-yyyy" />
        </div>
      </div>
      <div class="bottom-fields">
        <div class="input-field select col-md-3">
          <label>5. With Adults</label>
          <select id="adults">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
          </select>
        </div>
        <div class="input-field select col-md-3">
          <label>6. With Kids</label>
          <select id="kids">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
          </select>
        </div>
        <div class="input-field col-md-4">
          <label>6. Including</label>
          <label><input class="input-cb" type="checkbox" name="inc_hotel" value="1" checked="checked" /> Hotel</label>
          <label><input class="input-cb" type="checkbox" name="inc_flight" value="1" checked="checked" /> Flight</label>
          <label><input class="input-cb" type="checkbox" name="inc_car" value="1" /> Car</label>
        </div>
        <div class="submit-btn col-md-2">
          <input type="submit" value="Search" />
        </div>
      </div>
    </form>
    <!-- START .tour-plan -->
      <div class="row">
        <!-- START TABS -->
        <!-- END TABS -->

        <!-- START TAB CONTENT -->
        <div class="tab-content gray box-shadow1 clearfix marb30">

          <!-- START TAB 1 -->

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

    <!-- END .tour-plan -->

    <h2 class="ft-heading text-upper"><span style="color: #59aeff;">ACTIVITIES</span> IN This time </h2>
    <div class="carousel">
      <ul class="slides">
        <li>
          <div class="row">
            @foreach($activitiesdata as $data)
              <a href="{{ url("page/activitiesdetails/$data->act_id") }}">
                <div class="col-md-3">
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
                </div>
              </a>
            @endforeach
          </div>
        </li>
      </ul>
    </div>




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
