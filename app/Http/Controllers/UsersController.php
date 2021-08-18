<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function create(Request $request){

        DB::table('users')->insert([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
        ]);

        echo "User $request->firstName $request->lastName is created successfully!";

    }

    public function getAllUsers(){
        $users = DB::table('users')->get() ;
        echo "Check fetch all";
        return $users;
    }

    public function getUserbyId($id){

        $user = DB::table('users')->where('id', $id)->first();
        return $user;
    }

    public function deleteUser($id){
        DB::table('users')->where('id',$id)->delete();

        echo "Users $id is deleted successfully!";

    }



}
