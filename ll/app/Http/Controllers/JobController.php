<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Car_brand;
use App\Car_model;
use App\Job;

class JobController extends Controller
{
    public function qoute_step1_view(){
    	$data['car_brands'] = Car_brand::all();
    	$data['car_models'] = Car_model::all();

    	return view('qoute.quotestep1')->With($data);
    }

    public function resume_view(){
    	return view('resume.index');
    }

    public function qoute_step1_post(Request $request){
    	
    	$data = $request->input();
       
    	$job = new Job($data);
      $job->insert_qoute1($data);
      
    	$result = $job->save();
    	if($result){
                                                    //->with('userjobs', $userjobs)
          $qoute2HTML = view('qoute.ajax_qoutestep2')->render();
          //return response()->json(array('success' => true, ));

         $dataz['car_brands'] = Car_brand::all();
         $dataz['car_models'] = Car_model::all();

          $qoute1HTML = view('qoute.ajax_qoutestep1')->with('qouteStepData', $data)->with($dataz)->render();

    	  return \Response::json(array('success' => true, 'response' => $result, 'qoute1HTML' => $qoute1HTML, 'qoute2HTML'=> $qoute2HTML), 200);
    	}else{
    	  return \Response::json(array('success' => false, 'response' => $result), 422);    		
    	}
    }

    public function qoute_step2_view(){
      return view('qoute.qoutestep2');
    }
}
