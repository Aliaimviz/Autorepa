<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'id','brand_id', 'model_id', 'licence_plate', 'construc_year', 'km_reading', 'cust_cmt', 'engine_no', 'num_plate', 
        'created_at','updated_at'
    ];

    public function insert_qoute1($data){
		
    	$this->brand_id = $data["brand_id"];
    	$this->model_id = $data["model_id"];
    	$this->licence_plate = $data["licence_plate"];
    	$this->construc_year = $data["construc_year"];
    	$this->km_reading = $data["km_reading"];
    	$this->cust_cmt = $data["cust_cmt"];
    	$this->engine_no = $data["engine_no"];
    	$this->num_plate = $data["num_plate"];

    	if($this->save()){
    		return 1;
    	}else{
    		return 0;
    	}
    }
}
