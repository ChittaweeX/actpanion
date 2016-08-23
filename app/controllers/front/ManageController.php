<?php
  /**
   *
   */
  class front_ManageController extends Controller
  {
    public function postNewregister()
    {
      $inputs = Input::all();
      $member = new Member();
      $member->name = $inputs['name'];
      $member->email = $inputs['email'];
      $member->password = $inputs['password'];
      $member->save();
      return Redirect::to('page/home');
    }
  }

?>
