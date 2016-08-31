@extends('fronttemplate.default')
@section('custom-css')
  <link href="{{ url('assets/select2/select2.min.css') }}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{ url('assets/datedropper-master/datedropper.css') }}">
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
                    <option value="{{ $actdatalist->act_name_en }}">{{ $actdatalist->act_name_th }} ,{{ $actdatalist->act_name_en }} , {{ $actdatalist->act_province }}</option>
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
              <h3 class="page-header"><span style="color: #84bbfc;">ACT</span>IVITIES RECOMMEND <i class="fa fa-thumbs-o-up"></i></h3>
          </div>
          @foreach($activitiesdata as $key => $actdata)
            <div class="col-md-4 col-sm-6">
                <a href="{{ url("activities/$actdata->act_name_en") }}">
                    <img class="img-responsive img-portfolio img-hover" src="{{ url("image/activities/cover/$actdata->act_cover_image") }}" alt="">
                    <div class="carousel-caption">
                      <span style="font-size: 20px;"><strong>{{ $actdata->act_name_en }}</strong>
                      </span>
                    </div>
                </a>
            </div>
          @endforeach
          <div class="col-lg-12 col-md-12 text-center">
              <button type="button" class="btn btn-primary">
                SEE MORE <i class="fa fa-plus"></i>
              </button>
          </div>
      </div>
      <!-- /.row -->
      <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header"><span style="color: #84bbfc;">New</span> Party</h3>
            </div>

            <div class="col-sm-3 col-xs-12">
              <div class="panel panel-primary">
                <div class="panel-body text-center">
                  <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                  <br>
                  <p>
                  <strong>Name</strong> <i class="fa fa-group"></i> <span class="badge">10</span>
                  </p>
                  <p>
                    <img src="{{ Session::get('actimage') }}" alt="" height="20" width="20" class="img-circle"/> Chittawee Jongrian
                  </p>
                  <button type="button" class="btn btn-primary">
                    Join <i class="fa fa-plus"></i>
                  </button>
                </div>
              </div>
                <br>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="panel panel-primary">
                <div class="panel-body text-center">
                  <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                  <br>
                  <p>
                  <strong>Name</strong> <i class="fa fa-group"></i> <span class="badge">10</span>
                  </p>
                  <p>
                    <img src="{{ Session::get('actimage') }}" alt="" height="20" width="20" class="img-circle"/> Chittawee Jongrian
                  </p>
                  <button type="button" class="btn btn-primary">
                    Join <i class="fa fa-plus"></i>
                  </button>
                </div>
              </div>
                <br>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="panel panel-primary">
                <div class="panel-body text-center">
                  <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                  <br>
                  <p>
                  <strong>Name</strong> <i class="fa fa-group"></i> <span class="badge">10</span>
                  </p>
                  <p>
                    <img src="{{ Session::get('actimage') }}" alt="" height="20" width="20" class="img-circle"/> Chittawee Jongrian
                  </p>
                  <button type="button" class="btn btn-primary">
                    Join <i class="fa fa-plus"></i>
                  </button>
                </div>
              </div>
                <br>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="panel panel-primary">
                <div class="panel-body text-center">
                  <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                  <br>
                  <p>
                  <strong>Name</strong> <i class="fa fa-group"></i> <span class="badge">10</span>
                  </p>
                  <p>
                    <img src="{{ Session::get('actimage') }}" alt="" height="20" width="20" class="img-circle"/> Chittawee Jongrian
                  </p>
                  <button type="button" class="btn btn-primary">
                    Join <i class="fa fa-plus"></i>
                  </button>
                </div>
              </div>
                <br>
            </div>
            <div class="col-lg-12 col-md-12 text-center">
              @if(Session::has('authpass'))
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createdparty">
                  Create Your Party <i class="fa fa-plus"></i> <i class="fa fa-group"></i>
                </button>
              @else
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">
                  Create Your Party <i class="fa fa-plus"></i> <i class="fa fa-group"></i>
                </button>
              @endif



                <div class="modal fade" id="createdparty" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form class="" action="{{ url('functionfront/partyinsert') }}" method="post">
        <input type="hidden" name="leader_member_id" value="{{ Session::get('actmemid') }}">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">My Party <i class="fa fa-group"></i></h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" class="form-control" name="party_name" placeholder="">
        </div>
        <div class="form-group">
          <label for="">Start Date</label>
          <input type="text" class="form-control" id="startdate" name="party_sdate" placeholder="">
        </div>
        <div class="form-group">
          <label for="">End Date</label>
          <input type="text" class="form-control" id="enddate" name="party_edate" placeholder="">
        </div>
        <hr>
        <div class="form-group">
          <label for="">Public</label>
          <select class="form-control" name="party_privately">
            <option value="1" selected>
              ON
            </option>
            <option value="2">
              OFF
            </option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Secert Code</label>
          <input type="text" class="form-control" name="party_code" placeholder="">
          <p class="help-block">Help text here.</p>
        </div>
      </div>
      <div class="modal-footer ">
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
            </div>
        </div>
      <!-- Features Section -->
      <div class="row">
          <div class="col-lg-12">
              <h4 class="page-header">What is <span style="color: #84bbfc;">ACT</span>PANION?</h4>
          </div>
          <div class="col-md-6">
              <p>
                ACTPANION is your smart travel guide. We use our clever algorithms to peruse the web and crunch through millions of websites and reviews. The result: unique travel recommendations designed for you. Choose your favorite hotels, sights, activities and restaurants and add them to your bucket list. From there, book your favorites seamlessly through the app. All your bookings and saved places are now in one easy to find location. Download our guides to your smartphone for access to maps, local tips, bookings and personalized suggestions all without the internet!
              </p>
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
<script src="{{ url('assets/datedropper-master/datedropper.js') }}"></script>
<script>
$( "#startdate" ).dateDropper();
$( "#enddate" ).dateDropper();</script>
@endsection
