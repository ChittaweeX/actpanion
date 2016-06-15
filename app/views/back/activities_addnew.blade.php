@extends('backtemplate.main')
<!--Header Title -->
@section('title')
Activities ADD
@endsection

<!--Plugins CSS -->
@section('cssextent')

@endsection

<!--Customs CSS -->
@section('csscustom')

@endsection

<!--Page title-->
@section('pagetitle')
Activities Create
@endsection

<!--Top navigation-->
@section('navigation')
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li><a href="#">Examples</a></li>
  <li class="active">Blank page</li>
@endsection

<!--Main Content -->
@section('content')
  <!-- Default box -->
  <div class="row">
    <div class="col-sm-12">
      <div class="box box-primary ">
        <div class="box-header with-border pull-right">

        </div>
        <form  action="{{ url('function/addactivities') }}" method="post" enctype="multipart/form-data">
        <div class="box-body">
          <div class="row">
              <div class="col-md-6 col-md-offset-3">
              <div class="form-group">
                <label for="">Activities Name (ENG)</label>
                <div class="row">
                  <div class="col-sm-12 ">
                    <input type="text" class="form-control" name="nameEng" placeholder="">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="">Activities Name (Thai)</label>
                <div class="row">
                  <div class="col-sm-12">
                    <input type="text" class="form-control" name="nameThai" placeholder="">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="">Category</label>
                <div class="row">
                  <div class="col-sm-12">
                    <select class="form-control" name="categoryid">
                      @foreach ($categorydata as $cat)
                        <option value="{{ $cat->category_id }}">
                          {{ $cat->category_name }}
                        </option>
                      @endforeach

                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.box-body -->
        <div class="box-footer text-center">
          <a href="{{ URL::previous() }}"><button type='button' class='btn btn-warning btn-flat'>Back</button></a>
          <button type='submit' class='btn btn-success btn-flat'>Next <i class="fa fa-arrow-circle-right"></i></button>
        </div><!-- /.box-footer-->
        </form>
      </div><!-- /.box -->
    </div>
  </div>

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
