<?php

namespace App\Http\Controllers;

use App\Http\Requests\BooksFormRequest;
use App\Http\Requests\WishFormRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;
use App\Books;
use App\Wish;
use App\PageView;
use Session;

class BooksController extends Controller
{

    public function visitorCounter($page,$ip_address){
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
    
     public function home(Request $request){
        $ip=$request->ip();
        $route_name='index';
        $this->visitorCounter($route_name,$ip);  
        return view('index');
    }
    

    public function index()
    {
        return view('books.home');
    }

    public function androidHackBook(){
        return view('books.android_hack');
    }
    public function androidDevelopment(){
        return view('books.android_dev');
    }

    public function laravelBook(){
        return view('books.laravel');
    }

    public function shop($bookType){

        return redirect()->back()->withBookType($bookType);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    /*To store Book Buyer Information*/
    public function order(BooksFormRequest $request, $bookType = null){

        $slug=uniqid();
        $books=new Books(array(
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'phone'=>$request->get('phone'),
            'qty'=> $request->get('qty'),
            'full_address'=>$request->get('full_address'),
            'ip_address'=>request()->ip(),
            'book'=>$bookType,
            'slug'=>$slug

        ));

        if( $books->save() ) {
            Session::flash('success', 'Your message has been sent Successfully. We will call back soon.');
        } else {
            Session::flash('error', 'Something went wrong');
        }
        
		return redirect()->back();
    }
    /*To store Shopper Information*/
	
	
	
    /*To view Shopper Information*/
	public function userInfo(){
	   $userInfo = Books::all();
		foreach($userInfo as $fo){
			return $fo->book;
		}
        return view('books.user_information', ['userInfo'=>$userInfo]);
	}
    
    public function wish(WishFormRequest $request){

       //$email = $request->get('email');
      
        //if(Books::where('email','=',$email)->first()){
        $wish=new Wish(array(
            'name' => $request->get('name'),
            'email'=>$request->get('email'),
            'wishes'=>$request->get('wishes')
        ));
        if( $wish->save() ) {
            return redirect()->back()->with('status', 'အားေပးမွုကိုေက်းဇူးတင္ပါတယ္။မၾကာခင္ 72Coder အဖြဲ႔သားမ်ားမွ ေတာင္းဆိုမွုမ်ားကို ေဆာင္ရြက္ေပးသြားပါ့မယ္။');
        } else {
            return redirect()->back()->with('error', 'Something went wrong.');
        }

        /*} else {
            return redirect()->back()->with('status', 'Order မွာပီးသားသူမ်ားသာေတာင္းဆိုနိုင္ပါတယ္။ ေက်းဇူးတင္ပါတယ္');
        }*/
       
    }
	
}





































