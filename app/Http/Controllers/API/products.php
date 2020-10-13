<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\dbusers;

class products extends Controller
{
    //
    function save(Request $req)
    {
        $dbusers=new dbusers;
        $dbusers->name=$req->name;
        $dbusers->email=$req->email;
        $dbusers->password=$req->password;
        

        if($dbusers->save()){
            return"Details Has been Saved";
        }
    }
}
