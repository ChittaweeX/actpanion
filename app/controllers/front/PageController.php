<?php
/**
 *
 */
class front_PageController extends Controller
{

  public function getHome()
  {
    //$data = array('activitiesdata' => Activities::all(), );
    //return View::make('front.home',$data);
    return View::make('index');
  }
  public function getActivitiesall()
  {
    $data = array('activitiesdata' => Activities::all(), );
    return View::make('front.activitiescategory',$data);
  }
  public function getBook($actid,$priceid)
  {
    $data = array('activitiesdata' => Activities::where('act_id','=',$actid)
    ->first(),
    'price' => Price::where('price_id','=',$priceid)->first(),
   );
    return View::make('front.booking',$data);
  }
  public function getMydashboard()
  {
    return View::make('front.mydashboard');
  }
  public function getMyprofile()
  {
    $memid = Session::get('actmemid');


    $data = array('memberdata' => Member::where('mem_id','=',$memid)->first(), );
    return View::make('front.myprofile',$data);
  }
  public function getActivities($name)
  {
    $activities = Activities::where('act_nameEng','=',$name)->first();
    $id = $activities->act_id ;
    $data = array('activitiesdata' => Activities::where('act_nameEng','=',$name)
    ->first(),
  'actrentdata' => Activities::where('category_id','=','1')->get(),
  'pricedata' => Price::where('activities_id','=',$id)->get(),
  'tricketadvancedata' => Activitiesticketadvance::where('activities_id','=',$id)->get(), );
    return View::make('front.activitiesitem',$data);
  }
  public function postActivities()
  {
    $inputs = Input::all();
    $name = $inputs['name'];
    $activities = Activities::where('act_nameEng','=',$name)->first();
    $id = $activities->act_id ;
    $data = array('activitiesdata' => Activities::where('act_nameEng','=',$name)
    ->first(),
  'actrentdata' => Activities::where('category_id','=','1')->limit(4)->offset(4)->get(),
  'pricedata' => Price::where('activities_id','=',$id)->get(),
  'tricketadvancedata' => Activitiesticketadvance::where('activities_id','=',$id)->get(), );
    return View::make('front.activitiesitem',$data);
  }
  public function getRegister()
  {
    return View::make('front.register');
  }
  public function getOrderconfirmation()
  {
    $data = array('activitiesdata' => Activities::all() , );
    return View::make('front.orderconfirmation',$data);
  }

}

 ?>
