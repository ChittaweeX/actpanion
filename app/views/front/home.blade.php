@extends('fronttemplate.default')
@section('custom-css')
  <link href="{{ url('assets/select2/select2.min.css') }}" rel="stylesheet" />
@endsection
@section('content')
  <!--   <div id="myCarousel" class="carousel slide" >
  <div class="carousel-inner">
          <div class="item active">
              <img src="{{ url('image/slider3.jpg') }}" alt="" class="img-responsive"/>
              <div class="carousel-caption">
              </div>
          </div>
      </div>

      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="icon-prev"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="icon-next"></span>
      </a>
  </div>
-->


  <!-- Page Content -->
  <div class="container">

      <!-- Marketing Icons Section -->

      <div class="row">
          <div class="col-lg-12">
              <h3 class="page-header">
                <span style="color: #84bbfc;">ACT</span>IVITIES SEARCH <i class="fa fa-search"></i>
              </h3>
          </div>
          <form  action="{{ url('activities') }}" method="post">
            <div class="col-lg-10 col-md-offset-1">
              <div class="form-group">
                <select class="js-example-basic-single form-control input-lg" name="name"  onchange="this.form.submit()">
                  @foreach($activitiesdata as $key => $actdatalist)
                    <option value="{{ $actdatalist->act_nameEng }}">{{ $actdatalist->act_nameEng }} , {{ $actdatalist->act_province }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </form>

      </div>
      <!-- /.row -->

      <!-- Portfolio Section -->
      <div class="row">
          <div class="col-lg-12">
              <h4 class="page-header">ACTIVITIES RECOMMEND <i class="fa fa-thumbs-o-up"></i></h4>
          </div>
          @foreach($activitiesdata as $key => $actdata)
            <div class="col-md-4 col-sm-6">
                <a href="{{ url("activities/$actdata->act_nameEng") }}">
                    <img class="img-responsive img-portfolio img-hover" src="{{ url("image/trip/cover/$actdata->act_coverimage") }}" alt="">
                    <div class="carousel-caption">
                      <span style="font-size: 20px;"><strong>{{ $actdata->act_nameEng }}</strong>
                      </span>
            </div>
                </a>
            </div>
          @endforeach
          <div class="col-lg-12 text-center">
              <button type="button" class="btn btn-primary">
                SEE MORE <i class="fa fa-plus"></i>
              </button>
          </div>
      </div>
      <!-- /.row -->

      <!-- Features Section -->
      <div class="row">
          <div class="col-lg-12">
              <h4 class="page-header">What is <span style="color: #84bbfc;">ACT</span>PANION?</h4>
          </div>
          <div class="col-md-6">
              <p>
                ACTPANION is your smart travel guide. We use our clever algorithms to peruse the web and crunch through millions of websites and reviews. The result: unique travel recommendations designed for you. Choose your favorite hotels, sights, activities and restaurants and add them to your bucket list. From there, book your favorites seamlessly through the app. All your bookings and saved places are now in one easy to find location. Download our guides to your smartphone for access to maps, local tips, bookings and personalized suggestions all without the internet!
              </p>
              <p>HOW TO USE</p>
              <ul>
                  <li>Login</li>
                  <li>Step 2</li>
                  <li>Step 3</li>
              </ul>
          </div>
          <div class="col-md-6">
              <img class="img-responsive" src="{{ url('image/main2.jpg') }}" alt="">
          </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      <div class="well">
          <div class="row">
              <div class="col-md-8">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
              </div>
              <div class="col-md-4">
                  <a class="btn btn-lg btn-default btn-block" href="#">Call Me</a>
              </div>
          </div>
      </div>

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
