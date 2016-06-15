@extends('backtemplate.main')
<!--Header Title -->
@section('title')
AdminUser
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
AdminUsers
@endsection

<!--Top navigation-->
@section('navigation')
  <li class="active"><a href=""><i class="fa fa-user"></i>AdminUsers</a></li>

@endsection

<!--Main Content -->
@section('content')
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border pull-right">
      <a href="{{ url('admin/adminadduser') }}"><button type='submit' class='btn btn-sm  btn-primary btn-flat'>Add User </button></a>
      <button type='submit' class='btn btn-sm btn-info btn-flat'>Group User </button>
    </div>
    <div class="box-body">
      <strong>Admin Table</strong>
      <hr>
      <div class='table-responsive'>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>UserName</th>
              <th>Created_at</th>
              <th>Login_IP</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($userdata as $data )
              <tr>
                <td>1</td>
                <td>{{ $data->user_name }}</td>
                <td>{{ $data->created_at }}</td>
                <td>0.0.0.0</td>
                <td><span class="label label-default">Offline</span></td>
                <td><button type="button" class="btn btn-primary btn-flat"><i class="fa fa-edit"></i></button>
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
