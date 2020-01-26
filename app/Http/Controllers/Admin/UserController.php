<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Notifications\RoutesNotifications;

class UserController extends Controller
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


    public function index()
    {
        $users=User::all();
        return view('Admin.users.index')->with('users',$users);
    }

    public function index1()
    {
        
        return view('Admin.users.index1');
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user,$id)
    {   
        $id=User::find($id);
        return view('Admin.users.edit')->with('user',$id);
   
    }
    public function updated(Request $request, User $user,$id)
    {   
        $user=User::find($id);
        $user->name=$request->get('name');
        $user->email=$request->get('email');  
        $user->password=$request->get('password');
        $user->save();
        return redirect('getusers');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user,$id)
    {
     
        $user=User::find($id)->delete();
        return redirect('getusers');
    }

    public function alluserdatatabels(){
        $users=User::all();
        return DataTables()->of($users)->make(true); // mitone userhaye maro json kone befreste vase ajax to viwe
    }

    
}
