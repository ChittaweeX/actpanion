@extends('backtemplate.main')
<!--Header Title -->
@section('title')
Member All
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
Members
@endsection

<!--Top navigation-->
@section('navigation')
  <li class="active"><a href="#"><i class="fa fa-users"></i> Member</a></li>
@endsection

<!--Main Content -->
@section('content')
  <!-- Default box -->
  <div class="box box-primary ">
    <div class="box-header with-border pull-right">

    </div>
    <div class="box-body">
      <strong>Manage Member</strong>
      <hr>
      <div class='table-responsive'>
        <table id="example1" class="table table-bordered ">
          <thead>
            <tr >
              <th class="text-primary">ID</th>
              <th class="text-primary">Name</th>
              <th class="text-primary">Email</th>
              <th class="text-primary">Created</th>
              <th class="text-primary">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($members as $member)
              <tr>
                <td>
                  {{ $member->mem_id }}
                </td>
                <td>
                  {{ $member->name }}
                </td>
                <td>
                  {{ $member->email }}
                </td>
                <td>
                  {{ $member->created_at }}
                </td>
                <td>
                  <a href="">
                  <button type="button" class="btn btn-sm btn-default btn-flat" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-globe"></i></button></a>
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
