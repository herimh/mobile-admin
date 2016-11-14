<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Entities\MenuGroup;

class MenuGroupController extends Controller
{
    public function listForClient(){
        return MenuGroup::where('visible_for', 'client')->with('menuItems')->get();
    }

    public function listForPartner(){
        return MenuGroup::with('menuItems')->get();
    }

}
