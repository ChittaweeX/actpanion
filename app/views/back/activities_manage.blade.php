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
  <li class="active"><a href="#">Manage</a></li>
@endsection

<!--Main Content -->
@section('content')
  <!-- Default box -->
  <div class="box box-primary ">
    <div class="box-header with-border pull-right">
      <button type='submit' class='btn btn-lg  btn-primary btn-flat' data-toggle="modal" data-target="#addCat"><i class="fa fa-plus"></i> Add Activies </button>
      <div class="modal fade" id="addCat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <form  action="{{ url('function/addactivities') }}" method="post" enctype="multipart/form-data">
      <input type="hidden" name="adminid" value="">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Activities</h4>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
            <label for="">Type</label>
            <div class="row">
              <div class="col-sm-12 ">
                <select class="form-control" name="type">
                  @foreach($typedata as $type)
                    <option value="{{ $type->act_type_id }}">
                      {{ $type->act_type_name_th }}({{ $type->act_type_name_en }})
                    </option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
        <div class="form-group">
          <label for=""> Name(TH)</label>
          <div class="row">
            <div class="col-sm-12 ">
              <input type="text" class="form-control" name="nameTH" placeholder="" required="">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for=""> Name(EN)</label>
          <div class="row">
            <div class="col-sm-12 ">
              <input type="text" class="form-control" name="nameEN" placeholder="" required="">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for=""> info(EN)</label>
          <div class="row">
            <div class="col-sm-12 ">
              <textarea name="infoEN" rows="8" cols="40" class="form-control"></textarea>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for=""> info(TH)</label>
          <div class="row">
            <div class="col-sm-12 ">
              <textarea name="infoTH" rows="8" cols="40" class="form-control"></textarea>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for=""> Address (TH)</label>
          <div class="row">
            <div class="col-sm-12 ">
              <input type="text" class="form-control" name="addressTH" placeholder="" required="">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for=""> Address (EN)</label>
          <div class="row">
            <div class="col-sm-12 ">
              <input type="text" class="form-control" name="addressEN" placeholder="" required="">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for=""> Subdistrict</label>
          <div class="row">
            <div class="col-sm-12 ">
              <input type="text" class="form-control" name="subdistrict" placeholder="" required="">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for=""> District</label>
          <div class="row">
            <div class="col-sm-12 ">
              <input type="text" class="form-control" name="district" placeholder="" required="">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for=""> Province</label>
          <div class="row">
            <div class="col-sm-12 ">
              <input type="text" class="form-control" name="province" placeholder="" required="">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for=""> Google MAP</label>
          <div class="row">
            <div class="col-sm-12 ">
              <input type="text" class="form-control" name="googlemap" placeholder="" >
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for=""> Image</label>
          <div class="row">
            <div class="col-sm-12 ">
              <input type="file" class="form-control" name="photo" placeholder="" >
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
      <strong>Manage Activities</strong>
      <hr>
      <div class='table-responsive'>
        <table id="example1" class="table table-bordered ">
          <thead>
            <tr>
              <th class="text-primary">ID</th>
              <th class="text-primary">Type</th>
              <th class="text-primary">Name</th>
              <th class="text-primary">Create BY</th>
              <th class="text-primary">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($activitiesdata as $act)
              <tr>
                <td>{{$act->act_id}}</td>
                <td>{{$act->act_type}}</td>
                <td>{{$act->act_name_th}}({{$act->act_name_en}})</td>
                <td>Manager</td>
                <td>
                  <a href="{{url("admin/activitiesdetail/$act->act_id")}}">
                    <button type="button" class="btn btn-sm btn-default btn-flat" data-toggle="modal" data-target="#editType"><i class="fa fa-edit"></i></button>
                  </a>
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
