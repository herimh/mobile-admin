<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Entities\MenuGroup;
use App\User;

class MenuGroupController extends Controller
{
    public function listForClient(){
        return MenuGroup::where('visible_for', 'client')->with('menuItems')->get();
    }

    public function listForPartner($userId)
    {
        $user = User::find($userId);

        if($user && ($user->hasRole('mobile_partner')|| $user->hasRole('super_admin'))){
            return MenuGroup::with('menuItems')->get();
        }

        return $this->listForClient();
    }

}
