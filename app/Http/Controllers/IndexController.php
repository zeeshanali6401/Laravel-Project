<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\group;

class IndexController extends Controller
{
    public function index(){
        echo "<pre>";
        print_r(Member::with('group')->get()->toArray());
    }
    public function group(){
        echo "<pre>";

        print_r(Group::all()->toArray());
    }
}

