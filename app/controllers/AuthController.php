<?php

  /**
   *
   */
  class AuthController extends Controller
  {
    public function getFacebookLogin($auth=NULL)
    {
      if($auth == 'auth'){

          try{
             Hybrid_Endpoint::process();
          }
          catch (Exception $e){
            return Redirect::to('fbauth');
          }
          return;
      }
      $oauth = new Hybrid_Auth(app_path(). '/config/fb_auth.php');
      $provider = $oauth->authenticate('Facebook');
      $profile = $provider->getUserProfile();
      $memcheck = Member::where('mem_key','=',$profile->identifier)->first();
      if (count($memcheck)) {
        $memid = $memcheck->mem_id;
        Session::put('authpass', '1');
        Session::put('actname',$memcheck->mem_fname.' '.$memcheck->mem_lname);
        Session::put('actimage',$profile->photoURL);
        Session::put('actmemid',$memid);
        return Redirect::to('/');
        //return var_dump($profile).'<a href="logoutfb">LOG OUT</a>';
      }else{
        $member = new Member;
        $member->mem_key = $profile->identifier;
        $member->mem_fname = $profile->firstName;
        $member->mem_lname = $profile->lastName;
        $member->mem_email = $profile->email;
        if ($profile->phone != NULL ) {
        $member->mem_tel = $profile->phone;
        }
        $member->save();
        $memid = $member->mem_id;

        Session::put('authpass', '1');
        Session::put('actname',$profile->firstName.' '.$profile->lastName);
        Session::put('actimage',$profile->photoURL);
        Session::put('actmemid',$memid);
        return Redirect::to('/');
        //return var_dump($profile).'<a href="logoutfb">LOG OUT</a>';
      }

      /*
      Session::put('authpass', '1');
      Session::put('actname',$profile->displayName);
      Session::put('actimage',$profile->photoURL);
      Session::put('actemail',$profile->email);
      return Redirect::to('/');
      */
      //return View::make('front.myactivities',$data);

    }

    public function getLoggedOut()
    {
      Session::flush();
      $fauth = new Hybrid_Auth(app_path(). '/config/fb_auth.php');
      $fauth->logoutAllProviders();
      return Redirect::to('/');
    }
  }


?>
