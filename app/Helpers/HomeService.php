<?php
namespace App\Helpers;
use App\Providers\RouteServiceProvider;
use Auth;


class HomeService
{
    public static function resolveHome(){
        $userType = Auth::user()->type; 

        switch ($userType) {
          case config("constants.USER_TYPES")['ADMIN']:
            return RouteServiceProvider::ADMIN_DASHBOARD;
            break;
          case config("constants.USER_TYPES")['COACH']:
            return RouteServiceProvider::COACH_DASHBOARD;
            break;
          case config("constants.USER_TYPES")['PARENT']:
            return RouteServiceProvider::PARENT_DASHBOARD;
            break; 
          default:
            return 'no_home';
          break;
        }
    }
}