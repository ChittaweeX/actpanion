<?php
  /**
   *
   */
  class front_ManageController extends Controller
  {
    public function postNewregister()
    {
      $input = Input::all();
      $member = new Member();
      $member->name = $input['name'];
      $member->email = $input['email'];
      $member->password = $input['password'];
      $member->save();
      return Redirect::to('page/home');
    }

    public function postInsertParty(){
      $input = Input::all();
      $party = new Party();
      $party->party_name = $input['party_name'];
      $party->party_privately = $input['party_privately'];
      $party->party_code = $input['party_code'];
      $party->leader_member_id = $input['leader_member_id'];
      $party->party_sdate = $input['party_sdate'];
      $party->party_edate = $input['party_edate'];
    }
  }

?>
