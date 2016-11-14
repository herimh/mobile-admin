<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Entities\MenuGroup;
use App\Models\Entities\Video;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MenuGroupController extends Controller
{
    public function listForClient(){
        return MenuGroup::where('visible_for', 'client')->with('menuItems')->get();
    }

    public function listAll(){
        return MenuGroup::all()->with('menuItems')->get();
    }

}
