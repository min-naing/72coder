<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WorkRequest;
use App\Work;
class WorkController extends Controller
{
    public function allWork(){
        return view('work.home');
    }
    
    
    public function singleWork($work_type){
      
        return view('work.single_work',compact('work_type',$work_type));
    }
    
    public function addWork(WorkRequest $request){
        $work = new Work(array(
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'phone'=>$request->get('phone'),
            'address'=>$request->get('full_address'),
            'type'=>$request->get('work_type'),
            'experience'=>$request->get('experience')
        ));
        $work->save();
        return redirect()->back()->with('status','ေက်းဇူးတင္ပါတယ္။ ျပန္လည္ဆက္သြယ္ေပးပါ့မယ္။');
    }
}





