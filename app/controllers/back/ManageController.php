<?php
  /**
   *
   */
  class back_ManageController extends Controller
  {

  public function postAddnewadmin()    //// create New Admin
  {
    $input = Input::all();
    if (Input::hasFile('image')) {
      $photo = Input::file('image');
      $photoNewName = date('YmdHis').'.'.$photo->getClientOriginalExtension();
      $photo->move('image/back/admin',$photoNewName);
    }else {
      $photoNewName = "adminuser.png";
    }
    $admin = new AdminUser();
    $admin->admin_type = $input['type'];
    $admin->admin_name = $input['name'];
    $admin->username = $input['username'];
    $admin->password = Hash::make($input['password']);
    $admin->admin_info = $input['info'];
    $admin->admin_email = $input['email'];
    $admin->admin_logip = Request::getClientIp();
    $admin->admin_image = $photoNewName;
    $admin->save();

    return Redirect::to('admin/adminuser');

  }

  public function postAddactivitiestype()
  {
    $input = Input::all();
    if (!empty($input['typenameEN'])) {
      $type = new ActivitiesType();
      $type->act_type_name_th = $input['typenameTH'];
      $type->act_type_name_en = $input['typenameEN'];
      $type->act_type_createby = $input['adminid'];
      $type->save();
      return Redirect::to('admin/activitiestype')->with('added', 'value');
    }else {
      return Redirect::to('admin/activitiestype')->with('error01', 'value');
    }

  }

  public function postUpdatecategory()
  {
    $input = Input::all();
    $id = $input['categoryId'];
    if (!empty($input['CatnameEng'])) {
      $category = Activitiescategory::where('category_id','=',$id)->first();
      $category->category_name = $input['CatnameEng'];
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
    $input = Input::all();
    if (Input::hasFile('photo')) {
      $photo = Input::file('photo');
      $photoNewName = date('YmdHis').'.'.$photo->getClientOriginalExtension();
      $photo->move('image/activities/cover',$photoNewName);
    }else{
      $photoNewName = "empty";
    }
    if (!empty($input['nameEN'])) {
      $activities = new Activities();
      $activities->act_type = $input['type'];
      $activities->act_name_th = $input['nameTH'];
      $activities->act_name_en = $input['nameEN'];
      $activities->act_info_th = $input['infoEN'];
      $activities->act_info_en = $input['infoTH'];
      $activities->act_location = $input['googlemap'];
      $activities->act_address_th = $input['addressTH'];
      $activities->act_address_en = $input['addressEN'];
      $activities->act_subdistrict = $input['subdistrict'];
      $activities->act_district = $input['district'];
      $activities->act_province = $input['province'];
      $activities->act_cover_image = $photoNewName;
      $activities->save();


      return Redirect::to("admin/activities")->with('added', 'value');
    }else {
      return Redirect::to('admin/activities')->with('error01', 'value');
    }
  }
  public function postEditactivities()
  {

    $input = Input::all();
    $id = $input['actid'];
    $activities = Activities::where('act_id','=',$id)->first();
    if (Input::hasFile('coverimage')) {
      File::delete("image/activities/cover/$activities->act_cover_image");
      $photo = Input::file('coverimage');
      $photoNewName = date('YmdHis').'.'.$photo->getClientOriginalExtension();
      $photo->move('image/activities/cover',$photoNewName);
      $activities->act_cover_image = $photoNewName;
    }else{

    }

    if (!empty($input['nameEN'])) {
      $activities->act_type = $input['type'];
      $activities->act_name_th = $input['nameTH'];
      $activities->act_name_en = $input['nameEN'];
      $activities->act_info_th = $input['infoTH'];
      $activities->act_info_en = $input['infoEN'];
      $activities->act_location = $input['googlemap'];
      $activities->act_address_th = $input['addressTH'];
      $activities->act_address_en = $input['addressEN'];
      $activities->act_subdistrict = $input['subdistrict'];
      $activities->act_district = $input['district'];
      $activities->act_province = $input['province'];
      $activities->save();
      return Redirect::to("admin/activitiesdetail/$id")->with('added', 'value');
    }else {
      return Redirect::to("admin/activitiesdetail/$id")->with('error01', 'value');
    }
  }

/////     Time Session /////////////////
  public function postAddtimesession()
  {
    $input = Input::all();
    $actid = $input['activitiesid'];
    if (!empty($input['timesesion_open'])) {
      $activitiestime = new Activitiestimesession();
      $activitiestime->activities_id = $actid;
      $activitiestime->timesesion_open = $input['timesesion_open'];
      $activitiestime->timesesion_close = $input['timesesion_close'];
      $activitiestime->save();
      $activitiesid = $activitiestime->activities_id ;
      return Redirect::to("admin/activitiesinfo/$activitiesid");
    }
  }

  public function postUpdatetimesession()
  {
    $input = Input::all();
    $id = $input['id'];
    if (!empty($input['timesesion_open'])) {
      $timesession = Activitiestimesession::where('timesesion_id','=',$id)->first();
      $timesession->timesesion_open = $input['timesesion_open'];
      $timesession->timesesion_close = $input['timesesion_close'];
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
    $input = Input::all();
    $actid = $input['activitiesid'];
    if (!empty($input['Ticketadvanceday'])) {
      $activitiesticket = new Activitiesticketadvance();
      $activitiesticket->activities_id = $actid;
      $activitiesticket->ticket_day = $input['Ticketadvanceday'];
      $activitiesticket->ticket_type1 = $input['Ticketadvancetype1'];
      $activitiesticket->ticket_type2 = $input['Ticketadvancetype2'];
      $activitiesticket->ticket_time = $input['Ticketadvancetime'];
      $activitiesticket->save();
      $activitiesid = $activitiesticket->activities_id ;
      return Redirect::to("admin/activitiesinfo/$activitiesid");
    }
  }

  public function postUpdateticketadvance()
  {
    $input = Input::all();
    $id = $input['id'];
    if (!empty($input['Ticketadvanceday'])) {
      $activitiesticket = Activitiesticketadvance::where('ticket_id','=',$id)->first();
      $activitiesticket->ticket_day = $input['Ticketadvanceday'];
      $activitiesticket->ticket_type1 = $input['Ticketadvancetype1'];
      $activitiesticket->ticket_type2 = $input['Ticketadvancetype2'];
      $activitiesticket->ticket_time = $input['Ticketadvancetime'];
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
    $input = Input::all();
    $actid = $input['activitiesid'];
    if (!empty($input['price_person'])) {
      $price = new Price();
      $price->activities_id = $actid;
      $price->price_person = $input['price_person'];
      $price->price_type = $input['price_type'];
      $price->price_totall = $input['price_totall'];
      $price->price_money = $input['price_money'];
      $price->price_define = $input['price_define'];
      $price->price_pack = $input['price_pack'];
      $price->save();
      $activitiesid = $price->activities_id ;
      return Redirect::to("admin/activitiesinfo/$activitiesid");
    }
  }

  public function postUpdateprice()
  {
    $input = Input::all();
    $id = $input['id'];
    if (!empty($input['price_person'])) {
      $price = Price::where('price_id','=',$id)->first();
      $price->price_person = $input['price_person'];
      $price->price_type = $input['price_type'];
      $price->price_totall = $input['price_totall'];
      $price->price_money = $input['price_money'];
      $price->price_define = $input['price_define'];
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
    $input = Input::all();
    $actid = $input['activitiesid'];
    if (!empty($input['bank_name'])) {
      $payment = new Activitiespayment();
      $payment->activities_id = $actid;
      $payment->bank_name = $input['bank_name'];
      $payment->bank_branch = $input['bank_branch'];
      $payment->account_number = $input['account_number'];
      $payment->account_name = $input['account_name'];
      $payment->account_type = $input['account_type'];
      $payment->save();
      $activitiesid = $payment->activities_id ;
      return Redirect::to("admin/activitiesinfo/$activitiesid");
    }
  }

  public function postUpdatepayment()
  {
    $input = Input::all();
    $id = $input['id'];
    if (!empty($input['bank_name'])) {
      $payment1 = Activitiespayment::where('payment_id','=',$id)->first();
      $payment1->bank_name = $input['bank_name'];
      $payment1->bank_branch = $input['bank_branch'];
      $payment1->account_number = $input['account_number'];
      $payment1->account_name = $input['account_name'];
      $payment1->account_type = $input['account_type'];
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
  $input = Input::all();
  $actid = $input['activitiesid'];
  if (!empty($input['contact_name'])) {
    $contact = new Activitiescontact();
    $contact->activities_id = $actid;
    $contact->contact_name = $input['contact_name'];
    $contact->contact_nickname = $input['contact_nickname'];
    $contact->contact_position = $input['contact_position'];
    $contact->contact_phone = $input['contact_phone'];
    $contact->contact_email = $input['contact_email'];
    $contact->contact_orther = $input['contact_orther'];
    $contact->save();
    $activitiesid = $contact->activities_id ;
    return Redirect::to("admin/activitiesinfo/$activitiesid");
  }
}
public function postUpdatecontact()
{
  $input = Input::all();
  $id = $input['id'];
  if (!empty($input['contact_name'])) {
    $contact = Activitiescontact::where('contact_id','=',$id)->first();
    $contact->contact_name = $input['contact_name'];
    $contact->contact_nickname = $input['contact_nickname'];
    $contact->contact_position = $input['contact_position'];
    $contact->contact_phone = $input['contact_phone'];
    $contact->contact_email = $input['contact_email'];
    $contact->contact_orther = $input['contact_orther'];
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
  $input = Input::all();
  $activitiesid = $input['actid'];
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
        $image->act_id = $input['actid'];
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
