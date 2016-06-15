<?php
  /**
   *
   */
  class back_PageController extends Controller
  {
    /* Dashboard */
    public function getDashboard()
    {
      return View::make('back.dashboard');
    }
    /* END Dashboard */

    /* AdminUser */
    public function getAdminuser()
    {
      $data = array('userdata' => Adminuser::all() , );
      return View::make('back.adminuser',$data);
    }
    public function getAdminadduser()
    {
      return View::make('back.adminuser_addnew');
    }
    /* END AdminUser */

    /* Activities */
    public function getActivities()
    {
      $data = array('activitiesdata' => Activities::all() , );
      return View::make('back.activities',$data);
    }
    public function getActivitiesadd()
    {
      $data = array('categorydata' => Activitiescategory::all() , );
      return View::make('back.activities_addnew',$data);
    }
    public function getActivitiesinfo($actid)
    {
      $data = array('activitiesdata' => Activities::where('act_id','=',$actid)->first(),
      'pricedata' => Price::where('activities_id','=',$actid)->get(),
      'tricketadvancedata' => Activitiesticketadvance::where('activities_id','=',$actid)->get(),
      'timesessiondata' => Activitiestimesession::where('activities_id','=',$actid)->get(),
      'paymentdata' => Activitiespayment::where('activities_id','=',$actid)->get(),
      'contactdata' => Activitiescontact::where('activities_id','=',$actid)->get(),
      'categorydata' => Activitiescategory::all(),
      );
      return View::make('back.activities_infomation',$data);
    }
    public function getActivitiespreview($actid)
    {
      $data = array('activitiesdata' => Activities::where('act_id','=',$actid)->first(),
      'pricedata' => Price::where('activities_id','=',$actid)->get(),
      'tricketadvancedata' => Activitiesticketadvance::where('activities_id','=',$actid)->get(),
      'timesessiondata' => Activitiestimesession::where('activities_id','=',$actid)->get(),
      'paymentdata' => Activitiespayment::where('activities_id','=',$actid)->get(),
      'contactdata' => Activitiescontact::where('activities_id','=',$actid)->get(),
      'categorydata' => Activitiescategory::all(),
      );
      return View::make('back.activities_preview',$data);
    }
    public function getActivitiescategory()
    {
      $data = array('groupdata' => Activitiescategory::all() , );
      return View::make('back.activities_category',$data);
    }
    public function getActivitiesaddcategory()
    {
      return View::make('back.activities_category_addnew');
    }
    /* END Activities */


  }


 ?>
