<?php
/**
 *
 */
class front_PageController extends Controller
{

  public function getHome()
  {
    $data = array('activitiesdata' => Activities::all() , );
    return View::make('front.home',$data);
  }
  public function getRegister()
  {
    return View::make('front.register');
  }
  public function getActivitiesdetails($id)
  {
    $data = array('activitiesdata' => Activities::where('act_id','=',$id)->first() , );
    return View::make('front.activitiesdetails',$data);
  }
  public function getOrderconfirmation()
  {
    $data = array('activitiesdata' => Activities::all() , );
    return View::make('front.orderconfirmation',$data);
  }

}

 ?>
