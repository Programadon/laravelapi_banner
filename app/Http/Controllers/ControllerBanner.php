<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BannerDB;
use Symfony\Component\HttpFoundation\Response;

class ControllerBanner extends Controller
{
	protected function listall(){
		return response()->json(BannerDB::all());
	}
	
	protected function create(Request $request){	
		try{
			BannerDB::create($request->all());
			
			return response()->json(201);
		}catch(\Throwable $e){
			return response()->json($e, 500);
		}
	}
	
	protected function read(BannerDB $bannerid){
		return response()->json($bannerid);	
	}
	
	protected function update(Request $request, BannerDB $bannerid){
		try{
			$bannerid->update($request->all());
			
			return response()->json([], 202);		
		}catch(\Throwable $e){
			return response()->json($e, 400);
		}       
	}
	
	protected function delete(BannerDB $bannerid){
		try{
			$bannerid->delete();
			
			return response()->json(204);
		}catch(\Throwable $e){
			return response()->json($e, 500);
		}  	
	}
}
