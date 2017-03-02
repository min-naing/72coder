<?php

namespace App\Http\Controllers;

use App\PageView;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index(Request $request) {

        $ip=$request->ip();
        $route_name='index';
        $this->visitorCounter($route_name, $ip);

        return view('home');

    }

    public function visitorCounter($page, $ip_address){
        $date=date("D/M/Y");

        $find_page=PageView::where('ip_address','=',$ip_address)->get();

        if($find_page and $find_page->count()==1){
            $total_view=PageView::where('ip_address','=',$ip_address)->get();
            $total_view= $total_view[0]->total_view;
            PageView::where('ip_address','=',$ip_address)->update(['total_view'=>$total_view+1]);
        }else{
            $page_view=new PageView(array(
                'pageName'=>$page,
                'ip_address'=>$ip_address,
                'total_view'=>1,
                'date'=>$date

            ));
            $page_view->save();
        }

    }

}
