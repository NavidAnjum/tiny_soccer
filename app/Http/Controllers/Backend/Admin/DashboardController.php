<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\HelperService;

class DashboardController extends Controller
{
    public function index(){
        return view(HelperService::getView("dashboard"));
    }
      //just for testing url
    public function additional(){
        return view(HelperService::getView("additional_code.additional"));
    }
}
