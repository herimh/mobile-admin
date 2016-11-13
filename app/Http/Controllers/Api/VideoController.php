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

}
