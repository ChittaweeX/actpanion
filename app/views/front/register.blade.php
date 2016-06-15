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
            <h1 class="text-upper">Register</h1>
          </section>


        </div>
      </div>
    </div>
  </div>
@endsection
@section('maincontent')
  <div class="container">
    <!-- START #page -->
    <div id="page">

      <!-- START #contactForm -->
      <section id="signup-form">
        <h2 class="ft-heading text-upper">Account Detail</h2>
        <form action="" method="post">
          <fieldset>
            <ul class="formFields list-unstyled">
              <li class="row">
                <div class="col-md-6">
                  <label>Name <span class="required small">(Required)</span></label>
                  <input type="text" class="form-control" name="name" value="" />
                </div>
                <div class="col-md-6">
                  <label>Email <span class="required small">(Required)</span></label>
                  <input type="text" class="form-control" name="email" value="" />
                </div>
              </li>

              <li class="row">
                <div class="col-md-6">
                  <label>Password <span class="required small">(Required)</span></label>
                  <input type="text" class="form-control" name="name" value="" />
                </div>
                <div class="col-md-6">
                  <label>Confirm Password <span class="required small">(Required)</span></label>
                  <input type="text" class="form-control" name="email" value="" />
                </div>
              </li>

              <li class="row">
                <div class="col-md-12">
                  <label>Password Strength</label>
                  <span class="strength-container">
                    <span class="strength-plain fill"></span>
                    <span class="strength-plain fill"></span>
                    <span class="strength-plain"></span>
                    <span class="strength-plain"></span>
                    <span class="strength-plain"></span>
                  </span>
                </div>
              </li>

              <li class="row">
                <div class="col-md-12">
                  <label>Role</label>
                  <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                  </select>
                </div>
              </li>
              <li class="row">
                <div class="col-md-12">
                  <input type="submit" class="btn btn-primary btn-lg text-upper" name="submit" value="Register" />
                  <span class="required small">*Your email will never published.</span>
                </div>
              </li>
            </ul>
          </fieldset>
        </form>
      </section>
      <!-- END #contactForm -->
    </div>
    <!-- END #page -->
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
