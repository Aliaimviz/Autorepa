<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Garage;
use Auth;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();

 	    if($user->hasRole('G')){
 	    	$garage_row  = Garage::where('user_id', Auth::user()->id)->first();
 	    	return view('profile.garage.index')->with('garage_row', $garage_row);
 		}else{
 	    	return view('profile.garage.index');

 		}
    	
    }

    public function editProfile_index(){
    	$garage_row  = Garage::where('user_id', Auth::user()->id)->first();
    	

 		return view('profile.garage.editprofile')->with('garage_row', $garage_row);
    }

    public function editProfile_post(Request $request){
    	
    	if($request->ajax()){
	    	$result = Garage::where('user_id', Auth::user()->id)->update( ['name' => $request->input('gar_name'),  'location' => $request->input('gar_loc'),
	    	 					'description' => $request->input('gar_desc') ]);
	    	
	    	if($result){
	    		return \Response::json(array('success' => true, 'response' => $result), 200);
	    	}else{
	    		return \Response::json(array('success' => false, 'response' => $result), 422);
	    	}    	    

    	}else{
    	  return \Response::json(array('success' => false), 422);
    	}
    
    }
}
