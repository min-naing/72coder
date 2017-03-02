<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{


    public function activity() {
        return view('activity.home');
    }

    public function tutorial() {

        /*$channelId = "UChzbX1JAYV5Lm79Zx_p9NfQ";
        $maxResults = 10;
        $API_key = "AIzaSyCfv6BLoV9MNMPHV67roBmiLxdos2PBaVs";


        $video_list = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelId.'&maxResults='.$maxResults.'&key='.$API_key.''));*/

        return view('tutorials.home');
    }

    public function service($title = null) {


        return view('service.' . $title);
    }

}
