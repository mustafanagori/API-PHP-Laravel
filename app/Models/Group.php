<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Member;
use App\http\controllers\IndexController;



class Group extends Model
{
    use HasFactory;
    protected $primaryKey = 'group_id';


    // one to may relation
    function member(){
        return $this->hasMany('App\Models\Member','group_id','group_id');
    }

}
