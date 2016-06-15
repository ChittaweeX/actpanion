@extends('backtemplate.main')
<!--Header Title -->
@section('title')
Default
@endsection

<!--Plugins CSS -->
@section('cssextent')

<link href="{{ url('assets/backend/plugins/clockpicker/clockpicker.css') }}" rel="stylesheet">
@endsection

<!--Customs CSS -->
@section('csscustom')

@endsection

<!--Page title-->
@section('pagetitle')
Activities Infomation
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
    <div class="box-header with-border">
    </div>
      <div class="box-body">
        <div class="row">
          <div class="col-sm-12">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs pull-left">
                <li class="active"><a href="#tab_1" data-toggle="tab"><strong>General information</strong></a></li>
                <li><a href="#tab_2" data-toggle="tab"><strong>Time Session</strong></a></li>
                <li><a href="#tab_3" data-toggle="tab"><strong>Ticket</strong></a></li>
                <li><a href="#tab_4" data-toggle="tab"><strong>Price</strong></a></li>
                <li><a href="#tab_5" data-toggle="tab"><strong>Shuttle</strong></a></li>
                <li><a href="#tab_6" data-toggle="tab"><strong>Image</strong></a></li>
                <li><a href="#tab_7" data-toggle="tab"><strong>Payment</strong></a></li>
                <li><a href="#tab_8" data-toggle="tab"><strong>Contact</strong></a></li>
                <li><a href="#" ><i class="fa fa-trash-o text-danger"></i> DElETE </a></li>
                <li><a href="#" ><i class="fa fa-search text-primary"></i> Preview </a></li>

              </ul>
              <div class="tab-content">

                <div class="tab-pane active" id="tab_1">
                  <form class="" action="{{ url('function/addinfomationactivities') }}" method="post">
                    <input type="hidden" name="actid" value="{{ $activitiesdata->act_id }}">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">Activities Name Eng</label>
                        <input type="text" class="form-control" name="nameEng" value="{{ $activitiesdata->act_nameEng }}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">Activities Name Thai</label>
                        <input type="text" class="form-control" name="nameThai" value="{{ $activitiesdata->act_nameThai }}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">Area</label>
                        <textarea name="area" class="form-control" rows="8" cols="40">{{ $activitiesdata->act_area }}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="">Map</label>
                        <input type="text" name="map" class="form-control" value="{{ $activitiesdata->act_map }}">
                      </div>
                      <div class="form-group">
                        <label for="">Category</label>
                        <select class="form-control" name="category">
                          @foreach ($categorydata as $category)
                            <option value="{{ $category->category_id }}" {{ $activitiesdata->category_id == $category->category_id ? 'selected' : '' }}>
                              {{ $category->category_name }}
                            </option>
                          @endforeach
                        </select>
                      </div>
                      <label for="">Open On</label>
                      <div class="form-group">
                        <div class='checkbox-inline'>
                          <label>
                            <input type='checkbox' name='openday1' value='1' {{ $activitiesdata->act_openday1 == 1 ? 'checked' : '' }} >
                            Sunday
                          </label>
                        </div>
                        <div class='checkbox-inline'>
                          <label>
                            <input type='checkbox' name='openday2' value='1' {{ $activitiesdata->act_openday2 == 1 ? 'checked' : '' }}>
                            Monday
                          </label>
                        </div>
                        <div class='checkbox-inline'>
                          <label>
                            <input type='checkbox' name='openday3' value='1' {{ $activitiesdata->act_openday3 == 1 ? 'checked' : '' }}>
                            Tuesday
                          </label>
                        </div>
                        <div class='checkbox-inline'>
                          <label>
                            <input type='checkbox' name='openday4' value='1' {{ $activitiesdata->act_openday4 == 1 ? 'checked' : '' }}>
                            Wednesday
                          </label>
                        </div>
                        <div class='checkbox-inline'>
                          <label>
                            <input type='checkbox' name='openday5' value='1' {{ $activitiesdata->act_openday5 == 1 ? 'checked' : '' }}>
                            Thursday
                          </label>
                        </div>
                        <div class='checkbox-inline'>
                          <label>
                            <input type='checkbox' name='openday6' value='1' {{ $activitiesdata->act_openday6 == 1 ? 'checked' : '' }}>
                            Friday
                          </label>
                        </div>
                        <br>
                        <div class='checkbox-inline'>
                          <label>
                            <input type='checkbox' name='openday7' value='1' {{ $activitiesdata->act_openday7 == 1 ? 'checked' : '' }}>
                            Saturday
                          </label>
                        </div>
                        <div class='checkbox-inline'>
                          <label>
                            <input type='checkbox' name='openday8' value='1' {{ $activitiesdata->act_openday8 == 1 ? 'checked' : '' }}>
                            Everyday
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">Getting here</label>
                        <textarea name="getting" rows="8" cols="40" class="form-control">{{ $activitiesdata->act_getting }}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="">About</label>
                        <textarea name="about" rows="10" cols="40" class="form-control">{{ $activitiesdata->act_about }}</textarea>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">Time Open - Close</label>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="input-group clockpicker" data-autoclose="true">
                                      <input type="time" class="form-control" value="{{ $activitiesdata->act_opentime }}" name="timeopen"  required placeholder="Open">
                                      <span class="input-group-addon">
                                          <span class="fa fa-clock-o"></span>
                                      </span>
                                  </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="input-group clockpicker" data-autoclose="true">
                                      <input type="time" class="form-control" value="{{ $activitiesdata->act_closetime }}" name="timeclose"  required placeholder="Close">
                                      <span class="input-group-addon">
                                          <span class="fa fa-clock-o"></span>
                                      </span>
                                  </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="text-center">
                        <a href="{{ url('admin/activities')}}">
                          <button type="button" class="btn btn-lg btn-default">
                            Close
                          </button></a>
                        <button type="submit" class="btn btn-lg btn-primary">
                          Save
                        </button>
                      </div><!-- /.box-footer-->
                    </div>
                  </div>
                  </form>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <br>
                        <label for="">Time Session  </label>
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#TimeSession">
                          <i class="fa fa-plus"></i>
                        </button>
                          @foreach ($timesessiondata as $timedata)
                            <div class="row">
                              <br>
                              <div class="col-sm-4">
                                <input type="time" class="form-control"  value="{{ $timedata->timesesion_open }}" disabled placeholder="">
                              </div>
                              <div class="col-sm-4">
                                <input type="time" class="form-control"  value="{{ $timedata->timesesion_close }}" disabled >
                              </div>
                              <div class="col-sm-4">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#timeEdit{{$timedata->timesesion_id}}">
                                  <i class="fa fa-edit"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="timeEdit{{$timedata->timesesion_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <form class="" action="{{ url('function/updatetimesession') }}" method="post">
                                        <input type="hidden" name="id" value="{{$timedata->timesesion_id}}">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Edit</h4>
                                      </div>
                                      <div class="modal-body">
                                        <div class="row">
                                          <div class="col-sm-6">
                                              <div class="input-group clockpicker" data-autoclose="true">
                                                        <input type="time" class="form-control" value="{{ $timedata->timesesion_open }}" name="timesesion_open"  required placeholder="Open">
                                                        <span class="input-group-addon">
                                                            <span class="fa fa-clock-o"></span>
                                                        </span>
                                                    </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="input-group clockpicker" data-autoclose="true">
                                                      <input type="time" class="form-control" value="{{ $timedata->timesesion_close }}" name="timesesion_close"  required placeholder="Open">
                                                      <span class="input-group-addon">
                                                          <span class="fa fa-clock-o"></span>
                                                      </span>
                                                  </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                        <a href="{{ url("function/deletetimesession/$timedata->timesesion_id") }}">
                                          <button type="button" class="btn btn-danger">Delete</button>
                                        </a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </form>
                                  </div>
                                </div>
                              </div>

                            </div>
                          @endforeach
                      </div>
                    </div>
                  </div>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <br>
                        <label for="">Ticket Advance Booking   </label>
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#TicketAdvance">
                          <i class="fa fa-plus"></i>
                        </button>
                        @foreach ($tricketadvancedata as $tricketdata)
                          <div class="row">
                            <br>
                            <div class="col-sm-2">
                              <input type="number" class="form-control"  value="{{ $tricketdata->ticket_day }}" placeholder="" disabled="">
                            </div>
                            <div class="col-sm-2">
                              <input type="text" class="form-control"  value="{{ $tricketdata->ticket_type1 }}"  disabled="">
                            </div>
                            <div class="col-sm-2">
                              <input type="text" class="form-control"  value="{{ $tricketdata->ticket_type2 }}"  disabled="">
                            </div>
                            <div class="col-sm-2">
                              <input type="time" class="form-control"  value="{{ $tricketdata->ticket_time }}" placeholder="" disabled="">
                            </div>
                            <div class="col-sm-2">
                              <a href="#" data-toggle="modal" data-target="#Tricket{{$tricketdata->ticket_id}}">
                                <button type="button" class="btn btn-warning">
                                  <i class="fa fa-edit"></i>
                                </button>
                              </a>
                            </div>
                          </div>

                          <div class="modal fade" id="Tricket{{$tricketdata->ticket_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <form class="" action="{{ url('function/updateticketadvance') }}" method="post">
                                  <input type="hidden" name="id" value="{{$tricketdata->ticket_id}}">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="myModalLabel">Edit</h4>
                                </div>
                                <div class="modal-body">
                                  <div class="row">
                                    <br>
                                    <div class="col-sm-2">
                                      <input type="number" class="form-control" name="Ticketadvanceday" value="{{ $tricketdata->ticket_day }}" placeholder="" >
                                    </div>
                                    <div class="col-sm-3">
                                      <input type="text" class="form-control" name="Ticketadvancetype1" value="{{ $tricketdata->ticket_type1 }}"  >
                                    </div>
                                    <div class="col-sm-3">
                                      <input type="text" class="form-control" name="Ticketadvancetype2" value="{{ $tricketdata->ticket_type2 }}"  >
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="input-group clockpicker" data-autoclose="true">
                                                <input type="time" class="form-control" value="{{ $tricketdata->ticket_time }}" name="Ticketadvancetime"  required placeholder="Open" >
                                                <span class="input-group-addon">
                                                    <span class="fa fa-clock-o"></span>
                                                </span>
                                            </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                  <a href="{{ url("function/deleteticketadvance/$tricketdata->ticket_id") }}">
                                    <button type="button" class="btn btn-danger">Delete</button>
                                  </a>
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </form>
                            </div>
                          </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab_4">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <br>
                        <label for="">Price </label> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Price">
                          <i class="fa fa-plus"></i>
                        </button>
                        @foreach ($pricedata as $price)
                          <div class="row">
                            <br>
                            <div class="col-sm-3">
                              <input type="text" class="form-control"   value="{{ $price->price_person }}" disabled="">
                            </div>
                            <div class="col-sm-3">
                              <input type="text" class="form-control"  value="{{ $price->price_type }}" disabled="">
                            </div>
                            <div class="col-sm-3">
                              <input type="text" class="form-control"  value="{{ $price->price_totall }}" disabled="">
                            </div>
                            <div class="col-sm-1">
                              <input type="text" class="form-control"  value="{{ $price->price_money }}" disabled="">
                            </div>
                            <div class="col-sm-1">
                              <a href="#" data-toggle="modal" data-target="#Price{{$price->price_id}}" >
                                <button type="button" class="btn btn-warning">
                                  <i class="fa fa-edit"></i>
                                </button>
                              </a>
                            </div>
                            <div class="col-sm-12">
                              <div class="form-group">
                                <label for="">Define</label>
                                <textarea name="define" rows="8" cols="40" class="form-control" disabled="">{{ $price->price_define }}</textarea>
                              </div>
                            </div>
                          </div>

                          <div class="modal fade" id="Price{{$price->price_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <form class="" action="{{ url('function/updateprice') }}" method="post">
                                  <input type="hidden" name="id" value="{{$price->price_id}}">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="myModalLabel">Edit</h4>
                                </div>
                                <div class="modal-body">
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <input type="number" class="form-control" name="price_person" value="{{$price->price_person}}" placeholder="">
                                    </div>
                                    <div class="col-sm-3">
                                      <input type="text" class="form-control" name="price_type" value="{{$price->price_type}}" placeholder="Type" >
                                    </div>
                                    <div class="col-sm-3">
                                      <input type="text" class="form-control" name="price_totall" value="{{$price->price_totall}}" placeholder="" >
                                    </div>
                                    <div class="col-sm-3">
                                      <input type="text" class="form-control" name="price_money" value="{{$price->price_money}}" placeholder="">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <div class="form-group">
                                        <label for="">Define</label>
                                        <textarea name="price_define" rows="8" cols="40" class="form-control">{{$price->price_define}}</textarea>
                                      </div>
                                    </div>

                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                  <a href="{{ url("function/deleteprice/$price->price_id") }}">
                                    <button type="button" class="btn btn-danger">Delete</button>
                                  </a>
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </form>
                            </div>
                          </div>
                        @endforeach
                        <br>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="tab-pane" id="tab_5">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <br>
                        <label for="">Shuttle</label>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ShuttleSchedule">
                          <i class="fa fa-plus"></i>
                        </button>
                        <div class="row">
                          <br>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" name="shuttle_price"  value="{{ $activitiesdata->act_shuttle_price }}" placeholder="Price">
                          </div>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" name="shuttle_currency" value="{{ $activitiesdata->act_shuttle_currency }}" placeholder="Currency">
                          </div>
                          <div class="col-sm-3">
                            <input type="number" class="form-control" name="shuttle_person" value="{{ $activitiesdata->act_shuttle_person }}" placeholder="Person">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <br>
                      <div class="form-group">
                        <label for="">Shuttle Advance booking</label>
                        <div class="row">
                          <br>
                          <div class="col-sm-3">
                            <input type="number" class="form-control" name="shuttle_advance_person"  value="{{ $activitiesdata->act_shuttle_advance_person }}" placeholder="">
                          </div>
                          <div class="col-sm-3">
                            <input type="text" class="form-control"  value="" placeholder="Day" disabled="">
                          </div>
                          <div class="col-sm-3">
                            <input type="text" class="form-control"  value="" placeholder="Before" disabled="">
                          </div>
                          <div class="col-sm-3">
                            <input type="time" class="form-control"  name="shuttle_advance_time"  value="{{ $activitiesdata->act_shuttle_advance_time }}" placeholder="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">Shuttle Schedule</label>
                      </div>
                    </div>
                  </div>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_6">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">Image</label>
                        <div class="row">
                          @for ($i = 0; $i < 6; $i++)
                            <div class="col-sm-4">
                              <br>
                              <img src="http://placehold.it/350x150" alt="" class="img-thumbnail" />
                            </div>

                          @endfor
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_7">
                  <div class="row">

                      <div class="col-sm-6">
                        <div class="form-group">
                          <br>
                          <label for="">Payment Details </label> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Payment">
                            <i class="fa fa-plus"></i>
                          </button>
                          <br>
                        </div>
                      </div>

                  </div>
                  <div class="row">
                    @foreach ($paymentdata as $payment)
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="">Bank Name</label>
                          <input type="text" class="form-control" name="bank_name" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="">Bank Branch</label>
                          <input type="text" class="form-control" name="bank_branch" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="">Account Number</label>
                          <input type="text" class="form-control" name="account_number" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="">Account Name</label>
                          <input type="text" class="form-control" name="account_name" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="">Account Type</label>
                          <input type="text" class="form-control" name="account_type" placeholder="">
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_8">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="">Contact Details </label> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Payment">
                            <i class="fa fa-plus"></i>
                          </button>
                          <br>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- /.tab-pane -->
              </div><!-- /.tab-content -->
            </div><!-- nav-tabs-custom -->
          </div>
        </div>
      </div><!-- /.box-body -->
    </form>
  </div><!-- /.box -->

  <!-- /Modal  -->
  <div class="modal fade" id="TimeSession" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form class="" action="{{ url('function/addtimesession') }}" method="post">
      <input type="hidden" name="activitiesid" value="{{ $activitiesdata->act_id }}">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">TimeSession</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6">
            <div class="input-group clockpicker" data-autoclose="true">
                      <input type="text" class="form-control" value="" name="timesesion_open"  required placeholder="Open">
                      <span class="input-group-addon">
                          <span class="fa fa-clock-o"></span>
                      </span>
                  </div>
          </div>
          <div class="col-sm-6">
            <div class="input-group clockpicker" data-autoclose="true">
                      <input type="text" class="form-control" value="" name="timesesion_close"  required placeholder="Close">
                      <span class="input-group-addon">
                          <span class="fa fa-clock-o"></span>
                      </span>
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


<div class="modal fade" id="TicketAdvance" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <form class="" action="{{ url('function/addticketadvance') }}" method="post">
    <input type="hidden" name="activitiesid" value="{{ $activitiesdata->act_id }}">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel">TicketAdvanceBooking</h4>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-sm-2">
          <input type="number" class="form-control" name="Ticketadvanceday"  >
        </div>
        <div class="col-sm-3">
          <input type="text" class="form-control"  name="Ticketadvancetype1"  value="" placeholder="" >
        </div>
        <div class="col-sm-3">
          <input type="text" class="form-control"  name="Ticketadvancetype2" value="" placeholder="" >
        </div>
        <div class="col-sm-3">
          <div class="input-group clockpicker" data-autoclose="true">
                    <input type="time" class="form-control" value="" name="Ticketadvancetime"  required placeholder="Close">
                    <span class="input-group-addon">
                        <span class="fa fa-clock-o"></span>
                    </span>
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

<div class="modal fade" id="Price" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <form class="" action="{{ url('function/addprice') }}" method="post">
    <input type="hidden" name="activitiesid" value="{{ $activitiesdata->act_id }}">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel">Price</h4>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-sm-3">
          <input type="number" class="form-control" name="price_person" value="" placeholder="">
        </div>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="price_type" value="" placeholder="Type" >
        </div>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="price_totall" value="" placeholder="" >
        </div>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="price_money" value="THB" placeholder="">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="form-group">
            <label for="">Define</label>
            <textarea name="price_define" rows="8" cols="40" class="form-control"></textarea>
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

<div class="modal fade" id="Payment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <form class="" action="{{ url('function/addpayment') }}" method="post">
    <input type="hidden" name="activitiesid" value="{{ $activitiesdata->act_id }}">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel">Payment Details</h4>
    </div>
    <div class="modal-body">
      <div class="form-group">
        <label for="">Bank Name</label>
        <input type="text" class="form-control" name="bank_name" placeholder="">
      </div>
      <div class="form-group">
        <label for="">Bank Branch</label>
        <input type="text" class="form-control" name="bank_branch" placeholder="">
      </div>
      <div class="form-group">
        <label for="">Account Number</label>
        <input type="text" class="form-control" name="account_number" placeholder="">
      </div>
      <div class="form-group">
        <label for="">Account Name</label>
        <input type="text" class="form-control" name="account_name" placeholder="">
      </div>
      <div class="form-group">
        <label for="">Account Type</label>
        <input type="text" class="form-control" name="account_type" placeholder="">
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</div>
</div>


@endsection

<!--Plugins JS -->
@section('jsextent')
<script src="{{ url('assets/backend/plugins/clockpicker/clockpicker.js') }} "></script>
@endsection

<!--Customs JS -->
@section('jscustom')
  <script>
      $(document).ready(function(){

        $('.clockpicker').clockpicker();

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
