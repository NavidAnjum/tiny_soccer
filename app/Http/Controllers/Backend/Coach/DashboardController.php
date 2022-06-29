<?php

namespace App\Http\Controllers\Backend\Coach;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\HelperService;

class DashboardController extends Controller
{
    public function index(){
        return view(HelperService::getView("dashboard"));
    }
}
