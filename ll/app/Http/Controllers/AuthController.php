<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Auth;
use App\Garage;

class AuthController extends Controller
{
    //

    //Signup View
    public function signupView(){
       //Auth::logout();
       //dd(Auth::check());
    	return view('auth.signup');
    }

    //Login view
    public function loginView(){
    	return view('auth.login');
    }

    //Signup Post
    public function register(Request $request){

    	/*$this->validate($request,[
                'title' => 'required|string',
                'firstName' => 'required|string|min:3|max:35',
                'lastName' => 'required|string|min:3|max:35',
                'birthDate' => 'required|date|',
                'email' => 'required|string|email|max:255|unique:users',
                'language' => 'required|string',
                'userName' => 'required|min:5|string',
                'password' => 'required|string|min:6|confirmed',
            ]);
        */
    
    	$user = User::create([
                'title' => $request->title,
                'first_name' => $request->firstName,
                'last_name' => $request->lastName,
                'birth_date' => $request->birthDate,
                'email' => $request->email,
                'user_address' => $request->email,
                'language' => $request->language,
                'username' => $request->userName,
                'password' => \Hash::make($request->password),
            ]);  

    	$user->attachRole($request->user_type);

        if($user){
          
          if($request->user_type == 1){
              $garage = Garage::create([
                          'user_id' => $user->id,
                        ]);
             return \Response::json(array('success' => true, 'msg' => 'Successfully Registered', 'role' => 1), 200);              
          }else{
             return \Response::json(array('success' => true, 'msg' => 'Successfully Registered', 'role' => 2), 200);            
          }

        }else{
             return \Response::json(array('success' => false, 'msg' => 'Couldnot be Registered'), 422); 
        }

    	return Redirect('login');
    }

    public function login_post(Request $request){

          // $this->validate($request, [
          //     'email' => 'required|email',
          //     'password' => 'required',
          // ]);
            // return $request->input();

          if(Auth::attempt(['email' => $request->email, 'password' => $request->password ] )) {
            Auth::login(Auth::user(), true);
            /*
            if(Auth::user()->is_approved == 0){
              $responseText = '<div class="alert alert-danger"> <p>Sorry! User you are not Approved By Admin </p></div>';
                return \Response::json(array('success' => false, 'responseText' => $responseText), 400);
            }
            */
              // Authentication passed...
              $username = Auth::user()->username;
              $responseText = $username;
             return \Response::json(array('success' => true, 'responseText' => $responseText), 200);

          }else{
              $responseText = '<div class="alert alert-danger"> <p>Error! Invalid Email or Password </p></div>';
              return \Response::json(array('success' => false, 'responseText' => $responseText), 422);

          }
    }

    public function logout(){
      Auth::logout();
      return redirect()->route('home');
    }
}
