@extends('backtemplate.main')
<!--Header Title -->
@section('title')
Activities
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
Activities
@endsection

<!--Top navigation-->
@section('navigation')
  <li><a href="#"><i class="fa fa-picture-o"></i> Activities</a></li>
  <li class="active"><a href="#">Category</a></li>
@endsection

<!--Main Content -->
@section('content')
  <!-- Default box -->
  <div class="box box-primary ">
    <div class="box-header with-border pull-right">
      <button type='submit' class='btn btn-lg  btn-primary btn-flat' data-toggle="modal" data-target="#addCat"><i class="fa fa-plus"></i> Add Category </button>
      <div class="modal fade" id="addCat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form  action="{{ url('function/addactivitiestype') }}" method="post" enctype="multipart/form-data">
      <input type="hidden" name="adminid" value="">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add New Category</h4>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
        <div class="form-group">
          <label for="">Category Name (TH)</label>
          <div class="row">
            <div class="col-sm-12 ">
              <input type="text" class="form-control" name="typenameTH" placeholder="" required="">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="">Category Name (ENG)</label>
          <div class="row">
            <div class="col-sm-12 ">
              <input type="text" class="form-control" name="typenameEN" placeholder="" required="">
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
      <strong>Manage Category</strong>
      <hr>
      <div class='table-responsive'>
        <table id="example1" class="table table-bordered ">
          <thead>
            <tr >

              <th class="text-primary">NameTH</th>
              <th class="text-primary">NameEN</th>
              <th class="text-primary">Activities in</th>
              <th class="text-primary">Created</th>
              <th class="text-primary">Create By</th>
              <th class="text-primary">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($typedata as $type)
              <tr>
                <td>{{$type->act_type_name_th}}</td>
                <td>{{$type->act_type_name_en}}</td>
                <td>0</td>
                <td>{{$type->created_at	}}</td>
                <td>Manager</td>
                <td>
                  <button type="button" class="btn btn-sm btn-default btn-flat" data-toggle="modal" data-target="#editType"><i class="fa fa-edit"></i></button>
                  <a href="">
                  <button type="button" class="btn btn-sm btn-default btn-flat" data-toggle="tooltip" data-placement="top" title="View On Page"><i class="fa fa-globe"></i></button></a>
                </td>
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


@endsection
