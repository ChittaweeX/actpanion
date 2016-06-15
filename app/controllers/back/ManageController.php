<?php
  /**
   *
   */
  class back_ManageController extends Controller
  {

  public function postCreateuser()
  {
    $inputs = Input::all();

    $userinfo = new Admininfo();
    $userinfo->admin_name = $inputs['name'];
    $userinfo->admin_email = $inputs['email'];
    $userinfo->save();
    $infoid = $userinfo->admin_id;

    $user = new User();
    $user->admin_id = $infoid;
    $user->user_name = $inputs['username'];
    $user->password = Hash::Make($inputs['password']);
    $user->save();
    return Redirect::to('admin/adminuser');

  }



  public function postAddcategoryactivities()
  {
    $inputs = Input::all();
    $category = new Activitiescategory();
    $category->category_name = $inputs['categoryname'];
    $category->save();
    return Redirect::to('admin/activitiescategory');
  }

  public function postAddactivities()
  {
    $inputs = Input::all();

    if (Input::hasFile('photo')) {
      $photo = Input::file('photo');
      $photoNewName = date('YmdHis').'.'.$photo->getClientOriginalExtension();
      $photo->move('image/trip',$photoNewName);
    }
    if (!empty($inputs['nameEng'])) {
      $activities = new Activities();
      $activities->act_nameEng = $inputs['nameEng'];
      $activities->act_nameThai = $inputs['nameThai'];
      $activities->category_id = $inputs['categoryid'];
      $activities->act_step = 1;
      $activities->save();
      $activitiesid = $activities->act_id;

      return Redirect::to("admin/activitiesinfo/$activitiesid");
    }else {
      return Redirect::to('admin/activitiesadd');
    }


  }

  public function postAddinfomationactivities()
  {
    $inputs = Input::all();
    $actid = $inputs['actid'];

    if (!empty($inputs['nameEng'])) {
      $activities = Activities::where('act_id','=',$actid)->first();
      $activities->act_nameEng = $inputs['nameEng'];
      $activities->act_nameThai = $inputs['nameThai'];
      $activities->act_area = $inputs['area'];
      if (!empty($inputs['openday1'])) {
        $activities->act_openday1 = $inputs['openday1'];
      }else {
        $activities->act_openday1 = 0;
      }
      if (!empty($inputs['openday2'])) {
        $activities->act_openday2 = $inputs['openday2'];
      }else {
        $activities->act_openday2 = 0;
      }
      if (!empty($inputs['openday3'])) {
        $activities->act_openday3 = $inputs['openday3'];
      }else {
        $activities->act_openday3 = 0;
      }
      if (!empty($inputs['openday4'])) {
        $activities->act_openday4 = $inputs['openday4'];
      }else {
        $activities->act_openday4 = 0;
      }
      if (!empty($inputs['openday5'])) {
        $activities->act_openday5 = $inputs['openday5'];
      }else {
        $activities->act_openday5 = 0;
      }
      if (!empty($inputs['openday6'])) {
        $activities->act_openday6 = $inputs['openday6'];
      }else {
        $activities->act_openday6 = 0;
      }
      if (!empty($inputs['openday7'])) {
        $activities->act_openday7 = $inputs['openday7'];
      }else {
        $activities->act_openday7 = 0;
      }
      if (!empty($inputs['openday8'])) {
        $activities->act_openday8 = $inputs['openday8'];
      }else {
        $activities->act_openday8 = 0;
      }
      $activities->act_opentime = $inputs['timeopen'];
      $activities->act_closetime = $inputs['timeclose'];
      $activities->act_getting = $inputs['getting'];
      $activities->act_map = $inputs['map'];
      $activities->act_about = $inputs['about'];
      $activities->category_id = $inputs['category'];
      $activities->save();
      $activitiesid = $activities->act_id;
      return Redirect::to("admin/activitiesinfo/$activitiesid");
    }
  }


/////     Time Session /////////////////
  public function postAddtimesession()
  {
    $inputs = Input::all();
    $actid = $inputs['activitiesid'];
    if (!empty($inputs['timesesion_open'])) {
      $activitiestime = new Activitiestimesession();
      $activitiestime->activities_id = $actid;
      $activitiestime->timesesion_open = $inputs['timesesion_open'];
      $activitiestime->timesesion_close = $inputs['timesesion_close'];
      $activitiestime->save();
      $activitiesid = $activitiestime->activities_id ;
      return Redirect::to("admin/activitiesinfo/$activitiesid");
    }
  }

  public function postUpdatetimesession()
  {
    $inputs = Input::all();
    $id = $inputs['id'];
    if (!empty($inputs['timesesion_open'])) {
      $timesession = Activitiestimesession::where('timesesion_id','=',$id)->first();
      $timesession->timesesion_open = $inputs['timesesion_open'];
      $timesession->timesesion_close = $inputs['timesesion_close'];
      $timesession->save();
      $activitiesid = $timesession->activities_id ;
      return Redirect::to("admin/activitiesinfo/$activitiesid");
    }
  }

  public function getDeletetimesession($id)
  {

    $timesession = Activitiestimesession::where('timesesion_id','=',$id)->first();
    $timesession->delete();
    $activitiesid = $timesession->activities_id ;
    return Redirect::to("admin/activitiesinfo/$activitiesid");

  }

/////    End Time Session /////////////////

/////   Ticketadvance  //////////////////
  public function postAddticketadvance()
  {
    $inputs = Input::all();
    $actid = $inputs['activitiesid'];
    if (!empty($inputs['Ticketadvanceday'])) {
      $activitiesticket = new Activitiesticketadvance();
      $activitiesticket->activities_id = $actid;
      $activitiesticket->ticket_day = $inputs['Ticketadvanceday'];
      $activitiesticket->ticket_type1 = $inputs['Ticketadvancetype1'];
      $activitiesticket->ticket_type2 = $inputs['Ticketadvancetype2'];
      $activitiesticket->ticket_time = $inputs['Ticketadvancetime'];
      $activitiesticket->save();
      $activitiesid = $activitiesticket->activities_id ;
      return Redirect::to("admin/activitiesinfo/$activitiesid");
    }
  }

  public function postUpdateticketadvance()
  {
    $inputs = Input::all();
    $id = $inputs['id'];
    if (!empty($inputs['Ticketadvanceday'])) {
      $activitiesticket = Activitiesticketadvance::where('ticket_id','=',$id)->first();
      $activitiesticket->ticket_day = $inputs['Ticketadvanceday'];
      $activitiesticket->ticket_type1 = $inputs['Ticketadvancetype1'];
      $activitiesticket->ticket_type2 = $inputs['Ticketadvancetype2'];
      $activitiesticket->ticket_time = $inputs['Ticketadvancetime'];
      $activitiesticket->save();
      $activitiesid = $activitiesticket->activities_id ;
      return Redirect::to("admin/activitiesinfo/$activitiesid");
    }
  }

  public function getDeleteticketadvance($id)
  {
    $activitiesticket = Activitiesticketadvance::where('ticket_id','=',$id)->first();
    $activitiesticket->Delete();
    $activitiesid = $activitiesticket->activities_id ;
    return Redirect::to("admin/activitiesinfo/$activitiesid");

  }
//////   End ticketadvance //////////////

/// Price /////////////
  public function postAddprice()
  {
    $inputs = Input::all();
    $actid = $inputs['activitiesid'];
    if (!empty($inputs['price_person'])) {
      $price = new Price();
      $price->activities_id = $actid;
      $price->price_person = $inputs['price_person'];
      $price->price_type = $inputs['price_type'];
      $price->price_totall = $inputs['price_totall'];
      $price->price_money = $inputs['price_money'];
      $price->price_define = $inputs['price_define'];
      $price->save();
      $activitiesid = $price->activities_id ;
      return Redirect::to("admin/activitiesinfo/$activitiesid");
    }
  }

  public function postUpdateprice()
  {
    $inputs = Input::all();
    $id = $inputs['id'];
    if (!empty($inputs['price_person'])) {
      $price = Price::where('price_id','=',$id)->first();
      $price->price_person = $inputs['price_person'];
      $price->price_type = $inputs['price_type'];
      $price->price_totall = $inputs['price_totall'];
      $price->price_money = $inputs['price_money'];
      $price->price_define = $inputs['price_define'];
      $price->save();
      $activitiesid = $price->activities_id ;
      return Redirect::to("admin/activitiesinfo/$activitiesid");
    }
  }

  public function getDeleteprice($id)
  {
      $price = Price::where('price_id','=',$id)->first();
      $price->delete();
      $activitiesid = $price->activities_id ;
      return Redirect::to("admin/activitiesinfo/$activitiesid");

  }
/// END Price /////////////

  public function postAddpayment()
  {
    $inputs = Input::all();
    $actid = $inputs['activitiesid'];
    if (!empty($inputs['bank_name'])) {
      $payment = new Activitiespayment();
      $payment->activities_id = $actid;
      $payment->bank_name = $inputs['bank_name'];
      $payment->bank_branch = $inputs['bank_branch'];
      $payment->account_number = $inputs['account_number'];
      $payment->account_name = $inputs['account_name'];
      $payment->account_type = $inputs['account_type'];
      $payment->save();
      $activitiesid = $payment->activities_id ;
      return Redirect::to("admin/activitiesinfo/$activitiesid");
    }
  }



  }

 ?>
