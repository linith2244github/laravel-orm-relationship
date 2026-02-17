<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // $users = User::orderBy("id", "DESC")->with(['profile', 'posts'])->get();
        $users = User::orderBy('id', 'desc')->with(['profile', 'posts'])
                        ->whereHas('profile', function($table){
                            $table->where('id',1);
                        })->first();

        return $users;

        // $users = User::orderBy("id", "DESC")->with("profile")->whereHas('profile', function($table){
        //     $table->where('id', 2);
        // })->get();
        // return $users;
    }

}
