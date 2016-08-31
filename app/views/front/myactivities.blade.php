@extends('fronttemplate.default')
@section('custom-css')

@endsection
@section('content')
  <div class='container '>
    <div class="page-header">
      <h3> <img src="{{ Session::get('actimage') }}" alt="" class="img-circle" height="40" width="40"/> {{ Session::get('actname') }} <strong>Activities</strong></h3>
    </div>
    <div class="row">
      <div class="col-sm-2">
        @include('fronttemplate.smallmenu')
      </div>
      <div class="col-sm-10">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">My Activities</h3>
          </div>
          <div class="panel-body">

            <div class='table-responsive'>
              <table class='table  table-hover '>
                <thead>
                  <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Manage</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
          <div class="panel-footer">

          </div>
        </div>
      </div>
    </div>


@endsection
@section('custom-js')

@endsection
