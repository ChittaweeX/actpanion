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
      <button type='button' class='btn btn-sm  btn-primary btn-flat' data-toggle="modal" data-target="#addAdmin">Add User </button>
      <div class="modal fade" id="addAdmin" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="">ADD NEW ADMIN</h4>
            </div>
            <div class="modal-body">
              <form class="" action="{{ url('function/addnewadmin') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="">Type</label>
                  <select name="type" class="form-control">
                    @foreach($typedata as $type)
                      <option value="{{ $type->type_id }}">
                        {{ $type->type_name }}
                      </option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="">
                </div>
                <div class="form-group">
                  <label for="">Username</label>
                  <input type="text" class="form-control" name="username" placeholder="">
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="">
                </div>
                <div class="form-group">
                  <label for="">Info</label>
                  <textarea name="info" rows="8" cols="40" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="">
                </div>
                <div class="form-group">
                  <label for="">Image</label>
                  <input type="file" class="form-control" name="image" placeholder="">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add</button>
              </form>
            </div>
          </div>
        </div>
      </div>
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
              <th>Email</th>
              <th>Created_at</th>
              <th>Login_IP</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($admindata as $data )
              <tr>
                <td>{{ $data->admin_id }}</td>
                <td>{{ $data->admin_name }}</td>
                <td>{{ $data->admin_email }}</td>
                <td>{{ $data->created_at }}</td>
                <td>{{ $data->admin_logip }}</td>
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
