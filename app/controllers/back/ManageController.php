<?php
  /**
   *
   */
  class back_ManageController extends Controller
  {

  public function postAddnewadmin()    //// create New Admin
  {
    $inputs = Input::all();
    if (Input::hasFile('image')) {
      $photo = Input::file('image');
      $photoNewName = date('YmdHis').'.'.$photo->getClientOriginalExtension();
      $photo->move('image/back/admin',$photoNewName);
    }else {
      $photoNewName = "adminuser.png";
    }
    $admin = new AdminUser();
    $admin->admin_type = $inputs['type'];
    $admin->admin_name = $inputs['name'];
    $admin->username = $inputs['username'];
    $admin->password = Hash::make($inputs['password']);
    $admin->admin_info = $inputs['info'];
    $admin->admin_email = $inputs['email'];
    $admin->admin_logip = Request::getClientIp();
    $admin->admin_image = $photoNewName;
    $admin->save();

    return Redirect::to('admin/adminuser');

  }

  public function postAddactivitiestype()
  {
    $inputs = Input::all();
    if (!empty($inputs['typenameEN'])) {
      $type = new ActivitiesType();
      $type->act_type_name_th = $inputs['typenameTH'];
      $type->act_type_name_en = $inputs['typenameEN'];
      $type->act_type_createby = $inputs['adminid'];
      $type->save();
      return Redirect::to('admin/activitiestype')->with('added', 'value');
    }else {
      return Redirect::to('admin/activitiestype')->with('error01', 'value');
    }

  }

  public function postUpdatecategory()
  {
    $inputs = Input::all();
    $id = $inputs['categoryId'];
    if (!empty($inputs['CatnameEng'])) {
      $category = Activitiescategory::where('category_id','=',$id)->first();
      $category->category_name = $inputs['CatnameEng'];
      $category->save();
      return Redirect::to('admin/activitiescategory')->with('updated', 'value');
    }else {
      return Redirect::to('admin/activitiescategory')->with('error01', 'value');
    }

  }

  public function getDeletecategory($id)
  {
    $category = Activitiescategory::where('category_id','=',$id)->first();
    $category->delete();
    return Redirect::to('admin/activitiescategory')->with('deleted', 'value');
  }


  public function postAddactivities()
  {
    $inputs = Input::all();
    if (Input::hasFile('photo')) {
      $photo = Input::file('photo');
      $photoNewName = date('YmdHis').'.'.$photo->getClientOriginalExtension();
      $photo->move('image/activities/cover',$photoNewName);
    }else{
      $photoNewName = "empty";
    }
    if (!empty($inputs['nameEN'])) {
      $activities = new Activities();
      $activities->act_type = $inputs['type'];
      $activities->act_name_th = $inputs['nameTH'];
      $activities->act_name_en = $inputs['nameEN'];
      $activities->act_info_th = $inputs['infoEN'];
      $activities->act_info_en = $inputs['infoTH'];
      $activities->act_location = $inputs['googlemap'];
      $activities->act_address_th = $inputs['addressTH'];
      $activities->act_address_en = $inputs['addressEN'];
      $activities->act_subdistrict = $inputs['subdistrict'];
      $activities->act_district = $inputs['district'];
      $activities->act_province = $inputs['province'];
      $activities->act_cover_image = $photoNewName;
      $activities->save();


      return Redirect::to("admin/activities")->with('added', 'value');
    }else {
      return Redirect::to('admin/activities')->with('error01', 'value');
    }
  }
  public function postEditactivities()
  {

    $inputs = Input::all();
    $id = $inputs['actid'];
    $activities = Activities::where('act_id','=',$id)->first();
    if (Input::hasFile('coverimage')) {
      File::delete("image/activities/cover/$activities->act_cover_image");
      $photo = Input::file('coverimage');
      $photoNewName = date('YmdHis').'.'.$photo->getClientOriginalExtension();
      $photo->move('image/activities/cover',$photoNewName);
      $activities->act_cover_image = $photoNewName;
    }else{

    }
  
    if (!empty($inputs['nameEN'])) {
      $activities->act_type = $inputs['type'];
      $activities->act_name_th = $inputs['nameTH'];
      $activities->act_name_en = $inputs['nameEN'];
      $activities->act_info_th = $inputs['infoTH'];
      $activities->act_info_en = $inputs['infoEN'];
      $activities->act_location = $inputs['googlemap'];
      $activities->act_address_th = $inputs['addressTH'];
      $activities->act_address_en = $inputs['addressEN'];
      $activities->act_subdistrict = $inputs['subdistrict'];
      $activities->act_district = $inputs['district'];
      $activities->act_province = $inputs['province'];
      $activities->save();
      return Redirect::to("admin/activitiesdetail/$id")->with('added', 'value');
    }else {
      return Redirect::to("admin/activitiesdetail/$id")->with('error01', 'value');
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
      $price->price_pack = $inputs['price_pack'];
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

/// Payment ///////////////
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

  public function postUpdatepayment()
  {
    $inputs = Input::all();
    $id = $inputs['id'];
    if (!empty($inputs['bank_name'])) {
      $payment1 = Activitiespayment::where('payment_id','=',$id)->first();
      $payment1->bank_name = $inputs['bank_name'];
      $payment1->bank_branch = $inputs['bank_branch'];
      $payment1->account_number = $inputs['account_number'];
      $payment1->account_name = $inputs['account_name'];
      $payment1->account_type = $inputs['account_type'];
      $payment1->save();
      $activitiesid = $payment1->activities_id ;
      return Redirect::to("admin/activitiesinfo/$activitiesid");
    }
  }

  public function getDeletepayment($id)
  {
      $payment1 = Activitiespayment::where('payment_id','=',$id)->first();
      $payment1->delete();
      $activitiesid = $payment1->activities_id ;
      return Redirect::to("admin/activitiesinfo/$activitiesid");

  }

/// END Payment ///////////////
/// Contact //////////////
public function postAddcontact()
{
  $inputs = Input::all();
  $actid = $inputs['activitiesid'];
  if (!empty($inputs['contact_name'])) {
    $contact = new Activitiescontact();
    $contact->activities_id = $actid;
    $contact->contact_name = $inputs['contact_name'];
    $contact->contact_nickname = $inputs['contact_nickname'];
    $contact->contact_position = $inputs['contact_position'];
    $contact->contact_phone = $inputs['contact_phone'];
    $contact->contact_email = $inputs['contact_email'];
    $contact->contact_orther = $inputs['contact_orther'];
    $contact->save();
    $activitiesid = $contact->activities_id ;
    return Redirect::to("admin/activitiesinfo/$activitiesid");
  }
}
public function postUpdatecontact()
{
  $inputs = Input::all();
  $id = $inputs['id'];
  if (!empty($inputs['contact_name'])) {
    $contact = Activitiescontact::where('contact_id','=',$id)->first();
    $contact->contact_name = $inputs['contact_name'];
    $contact->contact_nickname = $inputs['contact_nickname'];
    $contact->contact_position = $inputs['contact_position'];
    $contact->contact_phone = $inputs['contact_phone'];
    $contact->contact_email = $inputs['contact_email'];
    $contact->contact_orther = $inputs['contact_orther'];
    $contact->save();
    $activitiesid = $contact->activities_id ;
    return Redirect::to("admin/activitiesinfo/$activitiesid");
  }
}

public function getDeletecontact($id)
{
    $contact = Activitiescontact::where('contact_id','=',$id)->first();
    $contact->delete();
    $activitiesid = $contact->activities_id ;
    return Redirect::to("admin/activitiesinfo/$activitiesid");

}

/// END Contact //////////////
public function postImage()
{
  $inputs = Input::all();
  $activitiesid = $inputs['actid'];
  // getting all of the post data
    $files = Input::file('images');
    // Making counting of uploaded images
    $file_count = count($files);
    // start count how many uploaded
    $uploadcount = 0;
    foreach($files as $file) {
      $rules = array('file' => 'required'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
      $validator = Validator::make(array('file'=> $file), $rules);
      if($validator->passes()){
        $destinationPath = 'image/product';
        $filename = date('YmdHis').$uploadcount.'.'.$file->getClientOriginalExtension();
        $upload_success = $file->move($destinationPath, $filename);
        $image = new Activitiesimage();
        $image->act_id = $inputs['actid'];
        $image->img_url = $filename;
        $image->save();
        $uploadcount ++;
      }
    }
    if($uploadcount == $file_count){
      Session::flash('success', 'Upload successfully');
      return Redirect::to("admin/activitiesinfo/$activitiesid");
    }
    else {
      return Redirect::to("admin/activitiesinfo/$activitiesid")->withInput()->withErrors($validator);
    }
  }

  public function getDeleteact($id)
  {
    $activities = Activities::where('act_id','=',$id)->first();
    File::delete("image/trip/cover/$activities->act_coverimage");
    $activities->delete();
    return Redirect::to("admin/activities");
  }

  }

 ?>
