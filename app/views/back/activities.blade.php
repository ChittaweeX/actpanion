@extends('backtemplate.main')
<!--Header Title -->
@section('title')
Activites
@endsection

<!--Plugins CSS -->
@section('cssextent')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ url('assets/backend/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

<!--Customs CSS -->
@section('csscustom')

@endsection

<!--Page title-->
@section('pagetitle')
Activites
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
  <div class="box box-primary ">
    <div class="box-header with-border pull-right">
      <a href="{{ url('admin/activitiesadd') }}"><button type='submit' class='btn btn-sm  btn-primary btn-flat'><i class="fa fa-plus"></i> Add Activities </button></a>
      <a href="{{ url('admin/activitiescategory') }}"><button type='submit' class='btn btn-sm btn-info btn-flat'>Activities Category </button></a>
    </div>
    <div class="box-body">
      <strong>Activites Table</strong>
      <hr>
      <div class='table-responsive'>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($activitiesdata as $data)
              <tr>
                <td>{{ $data->act_id }}</td>
                <td>{{ $data->act_nameEng }}</td>
                <td>
                  <a href="{{ url("admin/activitiesinfo/$data->act_id") }}">
                  <button type="button" class="btn btn-primary btn-flat"><i class="fa fa-search"></i></button></a>

                <button type="button" class="btn btn-danger btn-flat"><i class="fa fa-trash-o"></i></button></td>
              </tr>
            @endforeach




          </tbody>
        </table>

      </div>
    </div><!-- /.box-body -->
    <div class="box-footer text-right">
      <a href="{{ URL::previous() }}"><button type='button' class='btn btn-warning btn-flat'>Back</button></a>
    </div><!-- /.box-footer-->
  </div><!-- /.box -->
@endsection

<!--Plugins JS -->
@section('jsextent')
  <!-- DataTables -->
  <script src="{{ url('assets/backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ url('assets/backend/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
@endsection

<!--Customs JS -->
@section('jscustom')
  <script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
  </script>
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
