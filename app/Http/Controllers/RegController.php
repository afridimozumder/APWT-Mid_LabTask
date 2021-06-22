<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegController extends Controller
{
    public function index(){
        return view('reg.index');
    }


    public function registration(Request $req){

        DB::table('users')->insert(
            [
            'userId' => '6', 
            'name' =>  $req->name,
            'password' => $req->password,
            'type' => 'customer',
            'email' => $req->email
            ]
        );

        return redirect('/login');
    }
}
