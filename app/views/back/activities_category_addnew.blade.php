@extends('backtemplate.main')
<!--Header Title -->
@section('title')
Activities Group
@endsection

<!--Plugins CSS -->
@section('cssextent')

@endsection

<!--Customs CSS -->
@section('csscustom')

@endsection

<!--Page title-->
@section('pagetitle')
Activities Category
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
  <div class="box box-primary">
    <div class="box-header with-border pull-right">

    </div><form class="" action="{{ url('function/addcategoryactivities') }}" method="post">
    <div class="box-body">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="form-group">
              <label for="">Name</label>
              <input type="text" class="form-control" name="categoryname" placeholder="">
            </div>
        </div>
      </div>
    </div><!-- /.box-body -->
    <div class="box-footer text-center">
      <button type='submit' class='btn btn-success btn-flat'>Save</button>
      <a href="{{ URL::previous() }}"><button type='button' class='btn btn-warning btn-flat'>Back</button></a>
    </div><!-- /.box-footer-->
    </form>
  </div><!-- /.box -->



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
