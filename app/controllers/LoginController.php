<?php
/**
 *
 */
class LoginController extends Controller
{

   public function getIndex()
   {
    return View::make('back.login');
   }

   public function postChecklogin()
   {
     $inputs = Input::all();

     $checkUser = array(
       'user_name' => $inputs['username'],
       'password' => $inputs['password']
     );
     if(Auth::attempt($checkUser)){
          $id = Auth::id();
        // $user = Employee::where('emp_ID','=',$id)->first();
         //Session::put('empid', $user->emp_ID);
       return Redirect::to('admin/dashboard')->with('loginsuccess', 'value');
     }else{
       return Redirect::back()->with('loginerror', 'value') ;
     }

   }

   public function getLogout()
     {
       Auth::logout();
       Session::flush();
       return Redirect::to('/');
     }




}

 ?>
