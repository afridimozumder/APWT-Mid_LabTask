<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Validator;
use App\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function verify(Request $req){


        $result = DB::table('Users')
                        ->where('email', $req->email)
                        ->where('password', $req->password)
                        ->first();
        if(count((array)$result) > 0){

            $req->session()->put('name', $result->name);
            $req->session()->put('type', $result->type);
            //set session or cookie

            return redirect('/home');
        }else{
            
            $req->session()->flash('msg', 'Invalid username or password!');
            return redirect('/login');
            //return view('login.index');
        }
        
    }
}