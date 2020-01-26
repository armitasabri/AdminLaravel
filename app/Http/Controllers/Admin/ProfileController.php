<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Notifications\RoutesNotifications;

class ProfileController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(){
      $this->middleware('auth');
      }

      public function profile(){
        
        // var_dump( $user);die;
        return view('home1');
    }


    
    public function profile2(){
        
        
        return view('admin.profile2');
    }

    
    public function charts1(){
        
        
        return view('admin.chartjs');
    }
}
