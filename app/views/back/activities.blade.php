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
  <li><a href="#"><i class="fa fa-picture-o"></i> Activities</a></li>
  <li class="active"><a href="#">Manage Activities</a></li>
@endsection

<!--Main Content -->
@section('content')
  <!-- Default box -->
  <div class="box box-primary ">
    <div class="box-header with-border pull-right">
      <button type='submit' class='btn btn-lg  btn-primary btn-flat' data-toggle="modal" data-target="#addAct"><i class="fa fa-plus"></i> Add Activities </button>
      <div class="modal fade" id="addAct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form  action="{{ url('function/addactivities') }}" method="post" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add New Activities</h4>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
        <div class="form-group">
          <label for="">Activities Name (ENG)</label>
          <div class="row">
            <div class="col-sm-12 ">
              <input type="text" class="form-control" name="nameEng" placeholder="" required="">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="">Activities Name (Thai)</label>
          <div class="row">
            <div class="col-sm-12">
              <input type="text" class="form-control" name="nameThai" placeholder="" required="">
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
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
  </form>
  </div>
</div>
    </div>
    <div class="box-body">
      <strong>Manage Activites</strong>
      <hr>
      <div class='table-responsive'>
        <table id="example1" class="table table-bordered ">
          <thead>
            <tr>
              <th class="text-primary">ID</th>
              <th class="text-primary">Name</th>
              <th class="text-primary">Name Thai</th>
              <th class="text-primary">Category</th>
              <th class="text-primary">Status</th>
              <th class="text-primary">Created</th>
              <th class="text-primary">Create By</th>
              <th class="text-primary">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($activitiesdata as $data)
              <tr>
                <td>{{ $data->act_id }}</td>
                <td>{{ $data->act_nameEng }}</td>
                <td>{{ $data->act_nameThai }}</td>
                <td>{{ $data->category_name }}</td>
                <td><span class="label label-success">Active</span></td>
                <td>{{ $data->created_at }}</td>
                <td>Manager</td>
                <td>
                  <a href="{{ url("admin/activitiesinfo/$data->act_id") }}">
                  <button type="button" class="btn btn-sm btn-default btn-flat" data-toggle="tooltip" data-placement="top" title="Manage This Activitie"><i class="fa fa-edit"></i></button></a>
                  <a href="">
                  <button type="button" class="btn btn-sm btn-default btn-flat" data-toggle="tooltip" data-placement="top" title="View On Page"><i class="fa fa-globe"></i></button></a>
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
