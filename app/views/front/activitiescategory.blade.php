@extends('fronttemplate.default')
@section('custom-css')

@endsection
@section('content')
  <div class='container '>
    <div class="row">

        <div class="col-lg-12">
            <h4 class="page-header">ACTIVITIES <i class="fa fa-thumbs-o-up"></i></h4>
        </div>
        <div class="col-md-12 pull-right">
        @foreach($activitiesdata as $key => $actdata)
          <div class="col-md-4 col-sm-6">
              <a href="{{ url("activities/$actdata->act_nameEng") }}">
                  <img class="img-responsive img-portfolio img-hover" src="{{ url("image/trip/cover/$actdata->act_coverimage") }}" alt="">
                  <div class="carousel-caption">
                    <span style="font-size: 18px;"><strong>{{ $actdata->act_nameEng }}</strong>
                    </span>
          </div>
              </a>
          </div>
        @endforeach
      </div>
    </div>





@endsection
@section('custom-js')

@endsection
