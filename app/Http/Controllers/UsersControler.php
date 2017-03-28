<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileEditReques;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Sodium\compare;

class UsersControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = Profile::findOrFail(5);

         $users = $user->user->id;
   return      $users = User::findOrfail($users);

      //  $user = $user->id;
     //   $profile =

   //    echo $profile = DB::table('profiles')->where('role', '=', 'admin' )->id;
//        foreach ($profile as $profile){
//            $users = DB::table('users')->where('profile_id', '=', $profile )->get();
//            echo $users;
//        }

     //  $profile = profile::;
   //return     $profile->user->name;
       // return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileEditReques $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::findOrFail($id);
        $profile = Profile::findOrFail($user->profile_id);


      return view('users.edit',compact('user','profile'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileEditReques $request, $id)
    {
        //
//$request->all();
         $user = User::findOrFail($id);
        $profile= Profile::findOrFail($user->profile_id);


            $input = $request->all();
            $input['password'] = bcrypt($request->password);


         $user ->update($input);
         $profile ->update($input);
           return $input;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}