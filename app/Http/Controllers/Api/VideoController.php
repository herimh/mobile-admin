<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Entities\Video;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class VideoController extends Controller
{
    public function index(){
        $videos = Video::where('active', 1)->get();

        return $videos;
    }

    public function showByMenuItem($menuItem){
        return Video::where('menu_item_id', $menuItem)->orderBy('order', 'ASC')->get();
    }

}
