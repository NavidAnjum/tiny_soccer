<?php
namespace App\Helpers;
use Auth;

class HelperService{
	public static function getView(string $viewName){
		return "backend.".strtolower(Auth::user()->type).".".$viewName;
	}
}