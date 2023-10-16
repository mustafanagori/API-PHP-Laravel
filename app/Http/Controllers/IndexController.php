<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Member;
use App\Models\Group;

class IndexController extends Controller
{
    public function index(){

    // one to one example
    
        //take out all member
    //return Member::all();
        // take out only member group  1 for member id 1
    //return Member::find(2)->getGroup;
        // take out member and along with its group
    // return Member::with('group')->get();



        // one to many example
    return Member::with('group')->get();
    }
    // one to many relation
    public function group(){
        return Group::with('member')->get();
    }

}
