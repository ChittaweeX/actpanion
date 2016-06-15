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
            data-x="200"
            data-y="185"
            data-speed="1000"
            data-start="1800"
            data-easing="Power2.easeOut"
            data-endspeed="600"
            data-endeasing="Power3.easeIn"
            data-captionhidden="off"
            style="z-index:6;font-size:88px; color : #ffffff;"><strong>Plan you Activities</strong><br>
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
            style="z-index:6;">WE CAN HELP YOU PREPARE FOR A Travel

          </div>

        </li>
        <!-- END Slide 1 -->
        </ul>
        </div>
        <div id="slider-overlay"></div>
@endsection
@section('maincontent')
  <div class="container" id="home-page">

    <!-- START .tour-plan -->
    <form class="">
      <div class="row">
          <div class="col-md-10"><input type="text" class="form-control" placeholder="Where to go?" /></div>
          <div class="submit-btn col-md-2">
            <input type="submit" value="Search" />
          </div>
      </div>
    </form>
    <!-- END .tour-plan -->

    <h2 class="ft-heading text-upper">Activities</h2>

    <div class="carousel">
      <ul class="slides">
        <li>
          <div class="row">
            <div class="col-md-3">
              <div class="ft-item">
                <span class="ft-image">
                  <img src="http://placehold.it/270x137" alt="featured Scroller" />
                </span>
                <div class="ft-data">
                  <a class="ft-hotel text-upper" href="#">Hotel</a>
                  <a class="ft-plane text-upper" href="#">Air Ticket</a>
                  <a class="ft-tea text-upper" href="#">Break Fast</a>
                </div>
                <div class="ft-foot">
                  <h4 class="ft-title text-upper"><a href="#">Vancouver, BC</a></h4>
                  <span class="ft-offer text-upper">Starting From 250 $</span>
                </div>
                <div class="ft-foot-ex">
                  <span class="ft-date text-upper alignleft">28 December 2013</span>
                  <span class="ft-temp alignright">17&#730;c</span>
                </div>
              </div>

              <div class="ft-item">
                <span class="ft-image">
                  <img src="http://placehold.it/270x137" alt="featured Scroller" />
                </span>
                <div class="ft-data">
                  <a class="ft-hotel text-upper" href="#">Hotel</a>
                  <a class="ft-plane text-upper" href="#">Air Ticket</a>
                  <a class="ft-tea text-upper" href="#">Break Fast</a>
                </div>
                <div class="ft-foot">
                  <h4 class="ft-title text-upper"><a href="#">Colossium</a></h4>
                  <span class="ft-offer text-upper">Starting From 220 $</span>
                </div>
                <div class="ft-foot-ex">
                  <span class="ft-date text-upper alignleft">28 December 2013</span>
                  <span class="ft-temp alignright">17&#730;c</span>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="ft-item">
                <span class="ft-image">
                  <img src="http://placehold.it/270x137" alt="featured Scroller" />
                </span>
                <div class="ft-data">
                  <a class="ft-hotel text-upper" href="#">Hotel</a>
                  <a class="ft-plane text-upper" href="#">Air Ticket</a>
                  <a class="ft-tea text-upper" href="#">Break Fast</a>
                </div>
                <div class="ft-foot">
                  <h4 class="ft-title text-upper"><a href="#">Vancouver, BC</a></h4>
                  <span class="ft-offer text-upper">Starting From 250 $</span>
                </div>
                <div class="ft-foot-ex">
                  <span class="ft-date text-upper alignleft">28 December 2013</span>
                  <span class="ft-temp alignright">17&#730;c</span>
                </div>
              </div>

              <div class="ft-item">
                <span class="ft-image">
                  <img src="http://placehold.it/270x137" alt="featured Scroller" />
                </span>
                <div class="ft-data">
                  <a class="ft-hotel text-upper" href="#">Hotel</a>
                  <a class="ft-plane text-upper" href="#">Air Ticket</a>
                  <a class="ft-tea text-upper" href="#">Break Fast</a>
                </div>
                <div class="ft-foot">
                  <h4 class="ft-title text-upper"><a href="#">Colossium</a></h4>
                  <span class="ft-offer text-upper">Starting From 220 $</span>
                </div>
                <div class="ft-foot-ex">
                  <span class="ft-date text-upper alignleft">28 December 2013</span>
                  <span class="ft-temp alignright">17&#730;c</span>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="ft-item">
                <span class="ft-image">
                  <img src="http://placehold.it/270x137" alt="featured Scroller" />
                </span>
                <div class="ft-data">
                  <a class="ft-hotel text-upper" href="#">Hotel</a>
                  <a class="ft-plane text-upper" href="#">Air Ticket</a>
                  <a class="ft-tea text-upper" href="#">Break Fast</a>
                </div>
                <div class="ft-foot">
                  <h4 class="ft-title text-upper"><a href="#">Vancouver, BC</a></h4>
                  <span class="ft-offer text-upper">Starting From 250 $</span>
                </div>
                <div class="ft-foot-ex">
                  <span class="ft-date text-upper alignleft">28 December 2013</span>
                  <span class="ft-temp alignright">17&#730;c</span>
                </div>
              </div>

              <div class="ft-item">
                <span class="ft-image">
                  <img src="http://placehold.it/270x137" alt="featured Scroller" />
                </span>
                <div class="ft-data">
                  <a class="ft-hotel text-upper" href="#">Hotel</a>
                  <a class="ft-plane text-upper" href="#">Air Ticket</a>
                  <a class="ft-tea text-upper" href="#">Break Fast</a>
                </div>
                <div class="ft-foot">
                  <h4 class="ft-title text-upper"><a href="#">Colossium</a></h4>
                  <span class="ft-offer text-upper">Starting From 220 $</span>
                </div>
                <div class="ft-foot-ex">
                  <span class="ft-date text-upper alignleft">28 December 2013</span>
                  <span class="ft-temp alignright">17&#730;c</span>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="ft-item">
                <span class="ft-image">
                  <img src="http://placehold.it/270x137" alt="featured Scroller" />
                </span>
                <div class="ft-data">
                  <a class="ft-hotel text-upper" href="#">Hotel</a>
                  <a class="ft-plane text-upper" href="#">Air Ticket</a>
                  <a class="ft-tea text-upper" href="#">Break Fast</a>
                </div>
                <div class="ft-foot">
                  <h4 class="ft-title text-upper"><a href="#">Vancouver, BC</a></h4>
                  <span class="ft-offer text-upper">Starting From 250 $</span>
                </div>
                <div class="ft-foot-ex">
                  <span class="ft-date text-upper alignleft">28 December 2013</span>
                  <span class="ft-temp alignright">17&#730;c</span>
                </div>
              </div>

              <div class="ft-item">
                <span class="ft-image">
                  <img src="http://placehold.it/270x137" alt="featured Scroller" />
                </span>
                <div class="ft-data">
                  <a class="ft-hotel text-upper" href="#">Hotel</a>
                  <a class="ft-plane text-upper" href="#">Air Ticket</a>
                  <a class="ft-tea text-upper" href="#">Break Fast</a>
                </div>
                <div class="ft-foot">
                  <h4 class="ft-title text-upper"><a href="#">Colossium</a></h4>
                  <span class="ft-offer text-upper">Starting From 220 $</span>
                </div>
                <div class="ft-foot-ex">
                  <span class="ft-date text-upper alignleft">28 December 2013</span>
                  <span class="ft-temp alignright">17&#730;c</span>
                </div>
              </div>
            </div>
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
