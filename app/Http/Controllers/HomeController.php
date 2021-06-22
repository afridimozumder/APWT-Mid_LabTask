<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
        public function index(Request $req){
            // check session or cookie
            //return view('home.index')->with('id', '123');
            // return view('home.index')
            //         ->withId('123')
            //         ->withName('alamin');
            //return view('home.index', ['id'=>123, 'name'=>'alamin']);
    
            $id = '890';
            $name = $req->session()->get('name');
            $type = $req->session()->get('type');

            if($type=='admin'){
                return view('admin.home', compact('id', 'name'));
            }
            elseif($type=='customer'){
                return view('customer.home', compact('id', 'name'));
            }
            elseif($type=='accountant'){
                return view('accountant.home', compact('id', 'name'));
            }
            elseif($type=='sales'){
                return view('salesMarketing.home', compact('id', 'name'));
            }
            else{
                echo "Invalid User Type!";
            }

        }
}
