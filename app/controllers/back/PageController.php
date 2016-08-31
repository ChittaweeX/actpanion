<?php
  /**
   *
   */
  class back_PageController extends Controller
  {
    /* Dashboard */
    public function getDashboard() // dashboard
    {
      return View::make('back.dashboard');
    }
    /* END Dashboard */

    /* AdminUser */
    public function getAdminuser() // Adminpage
    {
      $data = array('typedata' => AdminType::all() ,
      'admindata' => AdminUser::all() );
      return View::make('back.adminuser',$data);
    }
    /* END AdminUser */

    /* Activities */
    public function getActivities()
    {
    $data = array('activitiesdata' => Activities::all() ,
    'typedata' => ActivitiesType::all() );
      return View::make('back.activities_manage',$data);
    }
    public function getActivitiesdetail($id)
    {
    $data = array('activitiesdata' => Activities::where('act_id','=',$id)->first() ,
    'typedata' => ActivitiesType::all() );
      return View::make('back.activities_detail',$data);
    }
    // Type
    public function getActivitiestype()
    {
      $data = array('typedata' => ActivitiesType::all() , );
      return View::make('back.activities_category',$data);
    }

    public function getMember()
    {
      $data = array('members' => Member::all() , );
      return View::make('back.member',$data);
    }

  }


 ?>
