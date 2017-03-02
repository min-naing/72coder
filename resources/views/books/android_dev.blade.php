@extends('layout.master')

@section('title', 'Android Development Book')

@section('styles')
    <link rel="stylesheet" href="{{ asset('custom.css') }}">
@stop


<!--  Breadcrumb -->
@section('breadcrumb')

    <div class="breadcrumb-holder white-bg">
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/books') }}">Books</a></li>
                    <li>Android Development Book</li>
                </ul>
            </div>
        </div>
    </div>

@stop

<!--  End Breadcrumb -->

@section('content')

    <main class="main-content">

        <!-- Shop Detail -->
        <div class="product-grid-holder">
            <div class="container">

                <!-- Single Product Detail -->
                <div class="single-product-detail">
                    <div class="row">

                        <!-- Product Thumnbnail -->
                        <div class="col-lg-4 col-md-5">
                            <div class="product-thumnbnail">
                                <ul class="product-slider">
                                    <li>
                                        <img src="{{ asset('images/books/android_app_dev_cover.png') }}" alt="">
                                        <a class="expand" href="#"><i class="fa fa-expand"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Product Thumnbnail -->

                        <!-- Product Detail -->
                        <div class="col-lg-8 col-md-7">
                            <div class="single-product-detail">
                                <span class="availability">Availability :<strong>Stock<i class="fa fa-check-circle"></i></strong></span>
                                <h3>Android Application Development Book</h3>

                                <div class="book-info-list">
                                    <ul>
                                        <li><span>Number of Pages: </span>250</li>
                                        <li><span>Video Lessons: </span>250 (DVD 4 ခ်ပ္ သက္ဆိုင္ရာ IDE အပါအ၀င္)</li>
                                        <li><span>Price: </span> 20000 kyats</li>
                                    </ul>
                                </div>

                                <p></p>

                                <h4>Overview</h4>
<p class="myanmar">လူငယ္တိုင္းအေတာ္မ်ားမ်ားမွာ Programmer တစ္ေယာက္ျဖစ္ခ်င္တဲ့ စိတ္ထားမ်ိဳး အၿမဲတမ္း ေပၚတတ္ပါတယ္။ ဒါေပမယ့္ ဘယ္က စေလ့လာရမလဲ မသိဘူး။ အခ်ိန္နဲ႔ ေငြတတ္ႏုိင္သူေတြအတြက္ေတာ့ သင္တန္းေတြ =  ေက်ာင္းေတြတက္ႏုိင္ပါတယ္။ ဒါေပမယ့္ အမ်ားစုဆီကို သင္ခန္းစာေတြတိုက္ရိုက္ေရာက္ၿပီး အေကာင္းဆံုး အသံုးခ်အဆင့္ထိ တတ္ေျမာက္သြားေစႏုိင္မယ့္ Resources ေတြကိုေတာ့ အလြယ္တကူ ရွာရမလြယ္ပါဘူး။ လက္ေတြ႕နဲ႔ ဆက္စပ္မႈမရွိတဲ့ သင္ခန္းစာေတြကို လုပ္ရင္းနဲ႔ပဲ Programing  ဘာသာရပ္ကိုစိတ္ကုန္လာတတ္ပါတယ္။ ဒီစာအုပ္မွာေတာ့ Android Developer ျဖစ္လိုတဲ့ လူတိုင္း အတြက္ အေကာင္းဆံုး သင္ခန္းစာေတြကို အေျခခံက်တဲ့အခ်က္ေတြကေန အဆင့္ျမင့္ level အထိ တစ္ဆင့္စီ ဗြီဒီယို သင္ခန္းစာ အေနနဲ႔ ရွင္းလင္းတင္ျပထားပါတယ္။ <a href="javascript: void(0);" style="display: inline; text-decoration: underline;" data-target="#android-dev" data-toggle="collapse"><i class="fa fa-arrow-right"></i> read more </a></p>

                                <div id="android-dev" class="collapse">

<p class="myanmar">Android Programming အတြက္လုိအပ္တဲ့ Resources ေတြအားလံုးကို တစ္ေနရာတည္းမွာ စံုလင္စြာေလ့လာႏုိင္ေအာင္ သင္ၾကားေပးထားတဲ့ စာအုပ္ျဖစ္သလို ကိုယ္ပိုင္ ကိုယ့္အားကိုယ္ကိုး ေလ့လာ ႏုိင္ေအာင္ စီစဥ္ေပးထားတဲ့သင္ခန္းစာေတြျဖစ္လို႔ ေလ့လာသူတိုင္းအတြက္ အဆင္ေျပေစမွာ ျဖစ္ပါတယ္။</p>
<p class="myanmar">ဒီစာအုပ္မွာ Application Development ကိုသာမန္ Develop လုပ္ႏုိင္ရံု နားလည္ေအာင္ သင္ျပထားတာမဟုတ္ပါဘူး။ ျပည္တြင္းျပည္ပ ကုမၸဏီေတြမွာလည္း  Develop လုပ္ႏုိင္ရံုအဆင့္နဲ႔ ဆို အလုပ္ခန္႔အပ္ျခင္း မရွိပါဘူး။ သာမန္အဆင့္ Develop လုပ္ႏုိင္ရံုအဆင့္ဆိုရင္ Android Framework အေၾကာင္းနားမလည္တဲ့အတြက္ တည္္ေဆာက္တဲ့ Application ေတြမွာ မသိလို႔မွားတဲ့ အမွားေတြ အမ်ားႀကီး ရွိပါတယ္။ ဒါေၾကာင့္ ဒီီစာအုပ္နဲ႔ Video သင္ခန္းစာေတြမွာ Application  Develop လုပ္ႏုိင္တဲ့အဆင့္ ေလာက္သာလွ်င္ သင္ၾကားေပးျခင္းမဟုတ္ပဲ Android Framework ကိုပါ နားလည္ ေအာင္ရွင္းျပထားပါတယ္။ Framework တစ္ခုကိုသံုးတုိင္း အဲဒီ Framework ကို အေသးစိတ္ နားလည္ ေအာင္ရွင္းျပ ထားတာပါ။ တစ္ကယ္ကၽြမ္းက်င္ရင္ Application တစ္ခုကိုၾကည့္တာနဲ႔ ဘယ္အခ်က္ မွားေနတယ္။ ဘယ္ေနရာ အလုပ္လုပ္ပံု မမွန္ဘူးဆိုတာကို ဆံုးျဖတ္ႏုိင္မွာပါ။ ဒီလို ကၽြမ္းက်င္သြားရင္ ဘယ္မွာ အလုပ္ လုပ္လုပ္ အဆင့္ျမင့္ Developer အေနနဲ႔ ၀င္ေငြေကာင္းေကာင္း ရႏုိင္မွာျဖစ္သလို ကိုယ္ပိုင္ Application ေရးၿပီး ရပ္တည္ရာမွာလည္း ကမၻာ့အဆင့္မီ Application ေရးႏုိင္မွာျဖစ္လို႔ ၀င္ေငြေကာင္းေကာင္း ရႏုိင္ပါတယ္။</p>
 <p class="myanmar">စာအုပ္ထဲနဲ႔ Video သင္ခန္းစာထဲမွာ သင္ခန္းစာေပါင္း၂၅၀ ကိုသင္ၾကားေပးထားပါတယ္။ သင္ခန္းစာ ၇၀ ေလာက္အထိက Layout Design, UI Components ေတြနဲ႔ Project Structure ကို ေကာင္းေကာင္းနား လည္ၿပီး Style, Layout, Theme နဲ႔ Custom Drawable တို႔ကို Google Developer ေတြ ေရးတဲ့အတိုင္း (သတ္မွတ္ထားတဲ့အတိုင္း) ေရးႏုိင္ေအာင္ သင္ျပထားတာပါ။ ေနာက္ပိုင္း သင္ခန္းစာေတြ ကေတာ့ Android ကိုတည္ေဆာက္ထားတဲ့ အဓိက Components ေလးမ်ိဳးျဖစ္တဲ့ Activity, BroadCast Receiver, Content Provider နဲ႔ Service တို႔ကို နားလည္ေအာင္ သင္ျပေပးထားၿပီး Fragment, Input Method Famework, Process & Thread, AsynTask, Handler တို႔ အျပင္ Material Design အတြက္ Naviagtion Drawer (new Style), Toolbar, Recycler View, Network & Thread (Volley Libs) နဲ႔ Floating Button တို႔ကိုပါ သင္ျပေပးထားပါတယ္။</p>
<p class="myanmar">ဒီစာအုပ္နဲ႔ Video သင္ခန္းစာေတြအျပင္ codedomania.com ကေန ဆက္လက္ သင္ၾကားေပးမယ့္ သင္ခန္းစာေတြ က Android 2D Game Series, Android 3D Game Series, Android Keyboard Development Series, Android Font Rendering Series နဲ႔ အျခား Network အသံုးျပဳ Projects ေတြကိုပါသင္ၾကားေပးမွာပါ။ စာအုပ္နဲ႔အတူပါတဲ့ သင္ခန္းစာ ၂၅၀ က သင္ခန္းစာ အကုန္မဟုတ္ေသးပါဘူး။ Codedomania.com ၀က္ဆိုက္ကေန ေနာက္ထပ္ သင္ခန္းစာ ၂၅၀ ကိုထပ္ၿပီး Support ေပးသြားမွာပါ။ Codedomania.com ကေန Support ေပးမယ့္ သင္ခန္းစာ ၂၅၀ ရယ္ ဒီစာအုပ္နဲ႔အတူပါတဲ့ သင္ခန္းစာ ၂၅၀ ရယ္ပိုင္ရင္ေတာ့ Android ကို ေကာင္းေကာင္း ကၽြမ္းက်င္သြားမယ္ဆိုတာ အာမခံပါတယ္။</p>
                                    <h4 class="myanmar">Android Development ရဲ႕အားသာခ်က္ ႏွင့္ အားနည္းခ်က္မ်ား</h4>
<p class="myanmar">Android Development စာအုပ္မွာ အားနည္းခ်က္နဲ႔ အားသာခ်က္ေတြရွိပါတယ္။ တစ္ကယ္ေလ့လာသူအေနနဲ႔ မည္သူမဆို ႏွစ္သက္မယ္ဆိုတာေတာ့ ကၽြန္ေတာ္ အာမခံပါတယ္။</p>
                                    <h4 class="myanmar">အားနည္းခ်က္မ်ား</h4>
<p class="myanmar">Android Development စာအုပ္က ျပည့္စံုမႈမရွိပါဘူး။ ျပည့္စံုေအာင္ေရးရင္ စာမ်က္ႏွာ ၃၅၀၀ ေလာက္ေရးရပါမယ္။ ဒါကို ကၽြန္ေတာ္က စာမ်က္ ႏွာ ၈၅၀ ေလာက္နဲ႔ ျဖစ္ေအာင္ခ်ံဳ႕ေရးထားတာပါ၊ ဒီလို စာမ်က္ႏွာ  ၈၅၀ ေရးထားတယ္ဆိုေပမယ့္ စာအုပ္လဲ အဆင္သင့္ျဖစ္ေရာ ထုတ္လုပ္သူမရွိဘူးျဖစ္ေနတယ္။ မိတ္ေဆြအေတာ္မ်ားမ်ားကို အကူအညီေတာင္းေပမယ့္ အဆင္မေျပခဲ့ဘူး၊ ဒါနဲ႔ ကိုယ့္ဘာသာထုတ္ရမယ့္ အဆင့္ထိေရာက္သြားေတာ့တယ္၊ ကၽြန္ေတာ္ရြာကေန မႏၱေလးဆင္းလာၿပီး စာပံုႏွိပ္တုိက္နဲ႔တုိင္ပင္တယ္၊ ေနာက္ဆံုး တတ္ႏုိင္တဲ့ပမာဏကိုတြက္ေတာ့ စာမ်က္ႏွာ ၃၀၀ နဲ႔ ၃၅၀ ၀န္းက်င္ပဲရမယ္တဲ့၊ ဒီေတာ့ အရင္ေရးထားတာေတြအားလံုးကို အဆံုးထိခ်ံဳ႕ပစ္ရတယ္။ ဒါက စာအုပ္ရဲ႕အားနည္းခ်က္</p>
                                    <h4 class="myanmar">အားသာခ်က္မ်ား</h4>
<p class="myanmar">အဲဒီလို မျပည့္စံုတဲ့ စာအုပ္တစ္အုပ္ကိုဘာလို႔ထုတ္လဲ ဟုတ္ပါတယ္ စာအုပ္အေနနဲ႔ေတာ့ မျပည့္စံုပါဘူး၊ ဒါေပမယ့္ စာအုပ္နဲ႔ Video သင္ခန္းစာပါ တြဲၿပီးေလ့လာၾကည့္ပါ၊ အံ့ၾသစရာေကာင္းတဲ့  တိုးတက္္မႈကို ေတြ႕ရပါမယ္၊ အျပင္က ဆရာတစ္ေယာက္ ေရးျပရင္း ရွင္းျပေနတဲ့ ပံုစံအတိုင္း Video Record လုပ္ၿပီးေရးျပ ရွင္းျပထားတာပါ၊ ထိုင္ၾကည့္ရံုနဲ႔တင္ ရွင္းၿပီးနားလည္သြားေအာင္ သင္ၾကားေပးထားတာပါ၊ ဒီေတာ့ အားနည္းခ်က္ လံုး၀မရွိပါဘူး၊ ဒီအျပင္ သင္ၾကားတဲ့သင္ခန္းစာေတြအားလံုးက တစ္ခါမွ ျမန္မာ ျပည္တြင္းမွာ မသင္ၾကားဘူးတဲ့ပံုစံနဲ႔ သင္ခန္းစာေတြပါ၊ ဒီစာအုပ္နဲ႔ Video မွာ ရွင္းလင္းထားတဲ့ သင္ခန္းစာေတြက လက္ေတြ႕တတ္ေျမာက္မႈကို ရည္ရြယ္ပါတယ္၊ သင္ခန္းစာေတြကလည္း အခ်က္အလက္ေလးအခ်ိဳ႕ကို ႏွဴးရံု ႏွပ္ရံု သင္ေပး ထားတာ မဟုတ္ပါဘူး၊ သင္ခန္းစာတစ္ခုကိုစတိုင္းမွာ အရင္ဆံုး အဲဒီ သင္ခန္းစာနဲ႔ ပတ္သက္တဲ့ Theory သေဘာတရားကို Power point Animation အသံုးျပဳၿပီး ရင္းႏွီးကၽြမ္း၀င္သြားေအာင္ သင္ၾကားေပးပါတယ္၊ ၿပီးမွ လက္ေတြ႕ Program စေရးပါတယ္။</p>
                                    <h4 class="myanmar">အာမခံခ်က္</h4>
<p class="myanmar">ဒီစာအုပ္နဲ႔ ဗြီဒီယို သင္ခန္းစာအပါအ၀င္ Codedomania.com ကေန Support လုပ္တဲ့ Video သင္ခန္းစာေတြကို ပိုင္ႏုိင္ရင္ Android Development အေၾကာင္း ေကာင္းေကာင္းနားလည္သြားမယ္၊ ပညာရွင္အဆင့္ ရပ္တည္ႏုိင္ၿပီး Android Application ေတြကို လြယ္ကူစြာ ေရးႏုိင္မယ္၊ Application ေရးႏုိင္ရံုမဟုတ္ပဲ Android Framework ကိုပါ နားလည္သြားမွာျဖစ္တဲ့အတြက္ ျပည္တြင္းျပည္ပ အလုပ္အကိုင္ေတြမွာ နည္းနည္းမွ မ်က္ႏွာမငယ္ရပဲ အဆင့္ျမင့္ျမင့္ အလုပ္လုပ္ကိုင္ႏုိင္မွာျဖစ္ပါတယ္။</p>
                                    <h4 class="myanmar">ေစ်းႏႈန္း</h4>
<p class="myanmar">စာအုပ္တန္ဖိုးက ၂၀၀၀၀ က်ပ္ပါ၊ ဒီစာအုပ္နဲ႔တြဲၿပီး Support ေပးတဲ့ Project ေတြထဲမွာ Waiferkolar နဲ႔ ဆရာ Cracky Shine တို႔ ျပင္ပ Projects ေတြမွာ လက္ေတြ႕ေရးခဲ့တဲ့ Applications ေတြကိုလည္း ျပန္ေရးျပထားပါတယ္၊ Project တစ္ခုခ်င္းစီက လက္ေတြ႕ေလာကမွာ 7 သိန္းကေန ၆၅ သိန္း အထိတန္ဖိုး ရွိပါတယ္၊ လက္ေတြ႕သိခ်င္ရင္ Mobile Manager နဲ႔ Sale Manager Application တို႔ကို ၾကည့္ႏုိင္ပါတယ္၊ Waiferkolar နဲ႔ Cracky Shine တို႔ေရးခဲ့တဲ့ Sale Manager Software က ျပင္ပမွာ Software တစ္ခုကို 12 သိန္းနဲ႔ ေရာင္းပါတယ္၊ လက္ရွိ ျမန္မာႏုိင္ငံက ဆုိင္ေပါင္းမ်ားစြာအသံုးျပဳေနၾကပါၿပီ၊ ဒီေတာ့ ေျပာခ်င္တာက စာအုပ္တန္ေၾကးက 20000 ပါ၊ တစ္ ကယ္ႀကိဳးစားသူအတြက္  Project တစ္ခုကို လိုက္ေရးႏုိင္ရင္ အနည္းဆံုး 7 သိန္းကေန ၆၅ သိန္းရပါတယ္၊ ဒါက ျပည္တြင္းေစ်းပါ။</p>
                                    <h4 class="myanmar">သတိေပးခ်က္</h4>
<p class="myanmar">စာအုပ္ကေတာ့ အထက္မွာေျပာခဲ့တဲ့အတုင္း ခ်ံဳ႕ရင္း ခ်ံဳ႕ရင္း နဲ႔ စာမ်က္ႏွာ ၃၀၀ ေက်ာ္ပဲ က်န္ပါတယ္၊ ဒီေတာ့ စာအုပ္သီးသန္႔ အထူးျပဳေလ့လာရင္ေတာ့ လံုး၀ အဆင္ေျပမွာမဟုတ္ပါဘူး၊ နားလည္ဖို႔လဲ အေတာ္ကို ခက္ခဲပါတယ္၊ ဒီစာအုပ္ရဲ႕ အႏွစ္သာရက ဗြီဒီယို သင္ခန္းစာမွာပါ၊ ဒီေတာ့ Video သင္ခန္းစာေတြကို အဓိက ထားၿပီးေလ့လာပါ၊ Video သင္ခန္းစာကို ေကာင္းေကာင္းနားလည္သြားမွ စာအုပ္ဖတ္လို႔ရပါမယ္၊ စာအုပ္က အဓိက အခ်က္ေတြကို စုထားတဲ့ မွတ္စုတစ္ခုအျဖစ္ေလာက္ပဲရွိလို႔ပါ၊ စာအုပ္နဲ႔တြဲတဲ့ Video သင္ခန္းစာ ၂၅၀ နဲ႔ Codedomania.com က Support ေပးတဲ့ သင္ခန္းစာ ၂၅၀ အားလံုးေပါင္း ၅၀၀ ကိုကၽြမ္းက်င္ရင္ သင္ Android Developer အျဖစ္ရပ္တည္ႏုိင္ပါၿပီ၊ ဒါက စကားအျဖစ္ ေျပာတာမဟုတ္ပါဘူး၊ ကၽြမ္းက်င္ရဲ႕နဲ႔ မျဖစ္ဖူးဆိုရင္ စာအုပ္ဖိုး ျပန္ေလ်ာ္ေပးသြားမွာပါ။</p>
                                    <h4 class="myanmar">အေထာက္အပံ့</h4>
<p class="myanmar">Video သင္ခန္းစာေတြကို လက္ေတြ႕ေလ့လာရာမွာ အခက္အခဲေတြအမ်ားႀကီးေတြ႕ရပါတယ္၊ အခက္အခဲေတြ႕ရင္ Codedomania.com ၀က္ဆိုက္ရဲ႕ Help စာမ်က္ႏွာမွာသြားၿပီး မိမိေတြ႕ရွိတဲ့အခက္အခဲနဲ႔ ပတ္သက္တဲ့ Video သင္ခန္းစာကို ၾကည့္ရႈ ေျဖရွင္းႏုိင္ပါတယ္၊ ေျဖရွင္းလို႔မွ မရရင္ေတာ့ Waiferkolar နဲ႔ Cracky Shine တို႔က Teamviewer သံုးၿပီး အခက္အခဲရွိသူရဲ႔ ကြန္ပ်ဴတာထဲထိ၀င္ေရာက္ၿပီးျပင္ေပးပါတယ္။ အခက္အခဲ အသစ္ေတြကိုလဲ Help message ေတြအျဖစ္ပို႔ေပးႏုိင္ပါတယ္။</p>

                                </div>

                                <div class="form-holder add-review">
                                    @if (Session::has('success'))
                                        <p class="alert alert-success">{{ Session::get('success') }}</p>
                                    @endif

                                    @if(Session::has('error'))
                                        <p class="alert alert-danger">{{ Session::get('error') }}</p>
                                    @endif

                                    @if(count($errors) > 0)
                                        <div class="alert alert-danger" role="alert">
                                            Error:<ul>
                                                @foreach($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                        @if(Auth::check())
                                    <h5>Order to Buy Book</h5>
                                    <h6><span class="theme-color">အနီးဆံုး ကားဂိတ္သို႔ အေရာက္ ပို႔ေဆာင္မွာ ျဖစ္တဲ့အတြက္ ပို႔ေဆာင္ရမည့္ ေနရာ တိတိက်က် ျဖည့္စြက္ပါ။</span></h6>

                                    <form class="sending-form" method="post" action="{{ route('books.order', ['android_dev']) }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="row">
                                            {{--<div class="col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control" required="required" placeholder="Full name" name="name" value="{{ old('name') }}">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>--}}

                                            {{--<div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" required="required" placeholder="Email" name="email" value="{{ old('email') }}">
                                                    <i class="fa fa-envelope"></i>
                                                </div>
                                            </div>--}}

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control" required="required" placeholder="Phone" name="phone" value="{{ old('phone') }}">
                                                    <i class="fa fa-phone"></i>
                                                </div>
                                            </div>

                                            <div class="quantity-box col-sm-6">
                                                <label>Qty :</label>
                                                <div class="sp-quantity">
                                                    <div class="sp-minus fff"><a class="ddd minus" data-multi="-1">-</a></div>
                                                    <div class="sp-input">
                                                        <input type="text" class="quntity-input" name="qty" value="1" />
                                                    </div>
                                                    <div class="sp-plus fff"><a class="ddd plus" data-multi="1">+</a></div>
                                                </div>
                                            </div>


                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" required="required" rows="3" placeholder="Full Address..." name="full_address">{{ old('full_address') }}</textarea>
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <button type="submit" class="btn-1 shadow-0 sm">submit</button>
                                            </div>
                                        </div>
                                    </form>
                                            @else
                                            <a class="btn btn-link" href="{{ url('/login') }}">Please Login to Order Android App Development Book</a>
                                    @endif
                                </div>

                            </div>
                        </div>
                        <!-- Product Detail -->

                    </div>
                </div>
                <!-- Single Product Detail -->

            </div>
        </div>
        <!-- Shop Detail -->

    </main>

@stop

@section('scripts')
    <script>
        $(function() {

            $("#android-dev").on("show.bs.collapse", function(){
                $(".fa-arrow-right").parent().css('display', 'none');
            });

        });
    </script>

    @stop
