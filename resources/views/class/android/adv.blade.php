@extends('layout.master')

@section('title', 'Android Advanced Development Class')

@section('styles')

    <link rel="stylesheet" href="{{ asset('custom.css') }}">

@stop

@section('inner_banner')
    <div class="parallax-window inner-banner tc-padding overlay-dark" data-parallax="scroll" data-image-src="{{ asset('images/inner-banner/banner.jpg') }}">
        <div class="container">
            <div class="inner-page-heading style-2 h-white">
                <h2>Android Advanced Development Class</h2>
                <p></p>
            </div>
        </div>
    </div>
@stop

@section('breadcrumb')

    <div class="breadcrumb-holder white-bg">
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/class') }}">Class</a></li>
                    <li>Android Advanced Development</li>
                </ul>
            </div>
        </div>
    </div>

@stop

@section('content')

    <main class="main-content">

        <!-- Web Development Class -->

        <div class="main-heading-holder">
            <div class="main-heading style-1">
                <h2>Android <span class="theme-color"> Advanced </span>Development Class</h2>
            </div>
        </div>
        <div class="tc-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">

                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">သင္ၾကားေပးသြားမည့္ သင္ခန္းစာ အေၾကာင္း</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                        <div class="clearfix"></div>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body pad-20 pad-top-15">
                                        <h5 class="burmese pad-15">Android Advanced Developer တစ္ေယာက္ျဖစ္ဖို႔ လိုအပ္သည့္ အရည္အခ်င္းမ်ား</h5>
                                        <ul class="burmese pad-15 list-disc pad-40 pad-bot-20">
                                            <li class="pad-15">Process, Multi Threading, AsynTask</li>
                                            <li class="pad-15">2D Game Development & 3D Game Intro</li>
                                            <li class="pad-15">Android Keyboard Development</li>
                                            <li class="pad-15">Root Access & System App</li>
                                            <li class="pad-15">Server Socket ႏွင့္ HTTPURL Class မ်ား တည္ေဆာက္၍ Server-Client မ်ား Data Rendering လုပ္ျခင္း JSON Parssing & XML parsing</li>
                                            <li class="pad-15">Application Uploading & Making Money</li>
                                        </ul>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i>  အဆင့္ျမင့္ Background Process မ်ားအား ထဲထဲဝင္ဝင္ နားလည္ေစရန္ Process, Multi Threading ႏွင့္ AsynTask တို႔အေၾကာင္းေလ့လာသြားရမည္၊ ML ဘာသာရပ္ကိုပါ အသံုးခ်နည္း တြဲဖက္သင္ၾကားေပးသြားမည့္အျပင္ Android Framework သာ နားလည္ကၽြမ္းက်င္ရံုတင္မဟုတ္ဘဲ Android Internal ကိုပါ သေဘာေပါက္ေအာင္ ထည့္သြင္းရွင္း လင္းသင္ၾကားေပးသြားမည္ျဖစ္သည္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> Game Developer တစ္ေယာက္ျဖစ္ဖို႔အတြက္ လိုအပ္သည့္ Game Concepts မ်ားျဖစ္ေသာ Texture Rendering လုပ္ျခင္း၊ SpriteBatch Memory allocation လုပ္ျခင္း Render လုပ္ျခင္း၊ Bitmap Font Rendering လုပ္ျခင္း dispose လုပ္ျခင္း Pixmap rendering လုပ္ျခင္း၊ TextureAtlas မ်ား ဖန္တီးျခင္း Rendring လုပ္ျခင္း OrthographicCamera Camera အား Vector2, Vector3 တို႔ႏွင့္တြဲဖက္၍ အေသးစိတ္အသံုးျပဳျခင္း၊ Game Applicaiton အတြက္ Sound & Music ဖန္တီးျခင္း အသံုးျပဳျခင္း၊ Stage တစ္ခုလံုးအား Rendering လုပ္ျခင္း Actor မ်ားတည္ေဆာက္ အသံုးျပဳျခင္း၊ GameStageManager ကဲ့သို႔ေသာ Abastract Library တည္ေဆာက္ျခင္း animation ဖန္တီးျခင္း Overlap 2D အသံုးျပဳျခင္း တို႔ကို အဆင့္ျမင့္ျမင့္ ေလ့လာသြားရမွာျဖစ္ၿပီး၊ လက္ေတြ႔ Project အေနနဲ႔ ေရာင္းခ်ႏိုင္သည့္ အဆင့္ရွိသည့္ Game Project ႏွစ္ခုကိုတည္ေဆာက္ သြားရမွာျဖစ္ပါတယ္၊ တက္ေျမာက္မႈ အာမခံ၍ သင္ၾကားေပးသြားမွာလည္းျဖစ္ပါတယ္၊ 3D Game Developer ကို Vertices, Sharder Rendering လုပ္ပံု Animation မ်ား ဖန္တီးပံုအဆင့္မ်ားအထိသာေလ့လာသြားရမွာျဖစ္ပါတယ္္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> Root Application မ်ားတည္ေဆာက္၍ ျမန္မာစာထည့္သြင္းျခင္း၊ System Applicaiton မ်ား ဖန္တီးကာ စိတ္ႀကိဳက္ AOSP project အားခိုင္းေစျခင္း၊ System လုပ္ငန္းစဥ္ မ်ားအား Application မွ စိတ္ႀကိဳက္ လုပ္ကိုင္ၾကည့္ျခင္း၊ Andorid Debug Bridge Protocol အား အသံုးခ်၍ Android ADB Server သို႔ ဖုန္းမွေကာ ကြန္ျပဴတာမွပါ adb commands မ်ား လွမ္းပို႔၍ System လုပ္ငန္းစဥ္မ်ားအား လုပ္ကိုင္ျခင္း၊ ျမန္မာစာထည့္သြင္းျခင္း တို႔ကိုပါေလ့လာသြားရမွာျဖစ္ပါတယ္္္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> Server-Socket applications မ်ားဖန္တီး၍ ဖုန္းမွ ကြန္ျပဴတာသို႔ လုပ္ငန္းစဥ္မ်ား ခိုင္းေစျခင္း၊ HTTP URLconnection အသံုးျပဳ၍ Mobile မွ server သို႔ Data Request မ်ားေတာင္းကာ Return Data မ်ားအား Rendering လုပ္ျခင္း ကိုေလ့လာသြားရမွာျဖစ္ၿပီးေတာ့ လက္ေတြ႔အေနနဲ႔ Clinet Side အတြက္ Java, Server Side အတြက္ PHP သံုး၍ API အေနနဲ႔ JSON ဘာသာရပ္အား အသံုးျပဳကာ လက္ေတြ႔ Android Registration System တစ္ခုကို Develop လုပ္သြားရမွာျဖစ္ပါတယ္။ ထို႔ျပင္ မတူညီသည့္ Programming ဘာသာရပ္မ်ားကိုအသံုးျပဳသည့္အခါ JSON API အား ၾကားခံဘာသာရပ္အျဖစ္သံုးကာ Data Rendering ျပဳလုပ္ျခင္း၊ JSON ႏွင့္ XML Parasing တို႔အေၾကာင္း အေသးစိတ္ေလ့လာျခင္း၊</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> Input Method Framework အားေလ့လာ၍ Fragment မ်ားအသံုးျပဳကာ အဆင့္ျမင့္ Android Keyboard System တစ္ခုတည္ေဆာက္ျခင္းကိုလဲ အဆင့္ျမင့္ျမင့္ ေလ့လာသြားရမွာျဖစ္ၿပီး လက္ေတြ႔ PlayStore မွာ တင္ၿပီး Product အျဖစ္ထုတ္ႏိုင္သည့္ အဆင့္အထိေလ့လာသြားရမွာျဖစ္ပါတယ္္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> Applicaiton တည္ေဆာက္ၿပီးသြားရင္ Developer Account ဖြင့္ၿပီး Application ကို Playstore မွာ တင္နည္း၊ Free Product အျဖစ္ထုတ္မည့္ Applicaiton ကို ဝင္ေငြရေအာင္ Admods အသံုးျပဳ၍ ေၾကျငာထည့္သြင္းျခင္း ကိုလည္း အေသးစိတ္ သင္ၾကားသြားေပးမွာျဖစ္ပါတယ္္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> Android Development သင္ရိုး အမ်ားစုကို Google က Support ေပးထားတဲ့ APIs ေတြအေပၚမူတည္ၿပီးတည္ေဆာက္ထားၾကတာပါ၊ ဒီေတာ့ Brighter Myanmar က သင္မယ့္ Android သင္ရိုးကလည္း Android APIs ေတြကို အမွီျပဳၿပီး ထို APIs ေတြထဲမွာ ပါ၀င္တဲ့ components တစ္ခုခ်င္းစီကို ေက်ာင္းသားေတြ စိတ္၀င္စားေအာင္ နားလည္သေဘာေပါက္ လြယ္ေအာင္ Component တစ္ခုစီအတြက္ Target ထားတဲ့ Application အေသးေလးေတြဖန္တီးၿပီး သင္ၾကားေပးတဲ့ စနစ္ပါပဲ၊ function တစ္ခု (သို႔) တစ္ခုထက္ပိုၿပီးပါ၀င္တဲ့ Applications ေပါင္း ၁၀၀ ေက်ာ္ကို သင္တန္းခ်ိန္ေကာ လက္ေတြ႔သင္တန္းကာလမွာပါ တည္ေဆာက္ေလ့လာသြားရမွာ ျဖစ္ပါတယ္၊ ဒါေပမယ့္ Brighter Myanmar က သင္ၾကားမယ့္ Android Development မွာ ထူးျခားျပီး သာမန္ထက္ ေကာင္းမြန္ေစတဲ့စနစ္ေတြလဲ ပါ၀င္ပါတယ္၊ သာမန္ စနစ္မွာ သင္ၾကားတဲ့သင္ခန္းစာေတြက Google က Android Version အလိုက္ Support ေပးထားတဲ့ APIs ေတြပါ၀င္မွာျဖစ္ပါတယ္၊ ထူးျခားတာကဘာလဲ၊ မတူညီတဲ့ ျခားနားခ်က္ကို သိဖို႔ အတြက္ ေက်းဇူးျပဳၿပီး ေအာက္က အခ်က္ေတြကိုေသခ်ာ ဖတ္ေစခ်င္ပါတယ္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> Android Background Processing အား အေသးစိတ္နားလည္ေစျခင္း<br>ဥပမာ သင္တည္ေဆာက္တဲ့ Application က function အျပည့္အစံုပါတဲ့ Application ျဖစ္သည္ျဖစ္ေစ မျဖစ္သည္ျဖစ္ေစ အမွားအယြင္းမရွိတည္ေဆာက္ထားရင္ အဲ့ဒီ့ Application ကို Run တဲ့အခ်ိန္မွာ Android ဖုန္းထဲမွာ ထည့္သြင္းၿပီး အလိုေလွ်ာက္ Run ေပးမွာပါ၊ ပံုမွန္အားျဖင့္ တည္ေဆာက္လိုက္တဲ့ Application ကုိ Run လို႔ရျခင္းဆိုတာ ေအာင္ျမင္မႈျဖစ္ေပမယ့္ ေနာက္က Processing ကို အတိအက် နားလည္တယ္လို႔ေတာ့ မေျပာႏိုင္ပါဘူး၊ ေရးထားတဲ့ project ကို apk ဖိုင္ျဖစ္ေအာင္ ဘယ္ပံုဘယ္နည္းတည္ေဆာက္လဲ၊ ထို apk ဖိုင္ကို ဘယ္နည္းနဲ႔ Android Phone ထဲကို ေရာက္ေအာင္ ထည့္သြင္းသြားတာလဲ ဆိုတာ သတိမထားမိရင္ သာမန္လုပ္ငန္းစဥ္ျဖစ္ေပမယ့္ သတိထားၿပီးရွင္းျပတဲ့သူရွိရင္ေတာ့ အေတာ့္ကို စိတ္၀င္စားစရာေကာင္းလွပါတယ္၊ ဒီ့အတြက္ Brighter Myanmar သင္တန္းက ေက်ာင္းသားေတြပထမဆံုးတည္ေဆာက္တဲ့ Application တစ္ခုကို Android ဖုန္းမွာ Install လုပ္ၿပီဆိုတာနဲ႔ Apk ဖုိင္တည္ေဆာက္တဲ့ processing ၊ ရလာတဲ့ apk ဖိုင္ကို Android Debug Bridge အားအသံုးျပဳၿပီး Android ဖုန္းက adbd နဲ႔ ခ်ိတ္ဆက္ကာ sdcard ထဲရွိ temp ဖိုင္ထဲသို႔ data transfer လုပ္နည္း၊ application ကို shell user အေနနဲ႔ adb command အသံုးျပဳကာ install လုပ္နည္း၊ အသံုးျပဳသြားတဲ့ Media Transfer Protocol ၊ အျခား အသံုးျပဳႏိုင္ေသးတဲ့ HTTP protocol, PTP protocol တို႔အေၾကာင္း စသျဖင့္ ျဖစ္စဥ္တစ္ခု ဘာေၾကာင့္ ဘယ္လို အဆင့္ဆင့္ ျဖစ္သြားလည္းဆိုတာကို သာမန္နားလည္ရံုတင္မဟုတ္ဘဲ အေသးစိတ္သေဘာေပါက္ေအာင္ရွင္းျပေပးပါတယ္၊ သင္ၾကားတဲ့ သင္ခန္းစာတိုင္းကို အရင္ဆံုး Code မေရးခင္ Theory သေဘာတရားကို နားလည္ေအာင္ PowerPoint Animation အသံုးျပဳ၍ ဆင့္ကဲျဖစ္စဥ္မ်ားအား ရွင္းျပျခင္း၊ သင္တန္းအတြင္းရွင္းျပစဥ္မွာ နားလည္ေပမယ့္ သင္တန္းၿပီးလို႔ အိမ္ျပန္ေရာက္ရင္ ဘယ္က အစျပန္ေဖာ္ရမလဲ ဆိုတာ မသိတဲ့ ျပႆနာမ်ိဳးမျဖစ္ေစဖို႔အတြက္ သင္ၾကားသမွ် သင္ခန္းစာတိုင္းအတြက္ Video သင္ခန္းစာမ်ား လုပ္ထားၿပီး ကိုယ္ပိုင္ Self Study ျပန္လုပ္တဲ့အခါ ထိုင္ၾကည့္ရံုနဲ႔ နားလည္သြားေအာင္ ကူညီေပးထားပါတယ္၊ ေန႔စဥ္သင္ခန္းစာေတြအတြက္ Paper Work ကိုလဲ ထုတ္ေ၀ေပးသြားမွာျဖစ္ပါတယ္၊ သာမန္တတ္ေျမာက္ရံုတင္မဟုတ္ဘဲ နီးစပ္ရာ အသိုင္းအ၀ိုင္းကို ျပန္သင္ေပးရင္ျဖစ္ေစ သင္တန္း ျပန္ဖြင့္လိုရင္ျဖစ္ေစ လိုအပ္မယ့္ Data ေတြအားလံုး အျပည့္အစံုျဖစ္ေအာင္ ေထာက္ပံ့သြားမွာျဖစ္ပါတယ္၊ Background Processing ကို နားလည္တတ္ေျမာက္ျခင္းက Android Developer ခ်င္းတူေတာင္ Application ေရးရံုတင္မဟုတ္ဘဲ မိမိလုပ္ေနတဲ့လုပ္ငန္းစဥ္ရဲ့ ဆင့္ကဲ ျဖစ္စဥ္ေတြကို နားလည္ထားတဲ့အတြက္ လုပ္ငန္းခြင္မွာ အျခား Developers ေတြထက္ပိုၿပီး အဆင့္ျမင့္ေစမွာပါ၊ ဒီလိုပဲ Application ကို Install လုပ္တဲ့အခါ မေအာင္ျမင္တာတို႔ Application စပြင့္တာနဲ႔ Crash ျဖစ္တာတို႔လို ျပႆနာမ်ိဳးကို ကုဒ္ဘယ္အစိတ္အပိုင္းက ျပႆနာျဖစ္ေစတာလဲကို Logcat အသံုးျပဳၿပီး tracking လိုက္တဲ့အခါ ကုဒ္ကိုမၾကည့္ပဲ ဘယ္ Component မွာ အမွားျဖစ္လဲ ဆိုတဲ့ ျပႆနာကို ခ်က္ခ်င္း သိႏိုင္သြားမွာပါ။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> Android Event Driving System အားနားလည္ျခင္း<br>Android ရဲ႕ Hardware Button ေတြျဖစ္တဲ့ Power Button, Up Arrow Button, Down Arrow Button (သို႔) Software user Interface Button ကိုႏွိပ္ရင္ျဖစ္ေစ အျခား UI components ေတြကို Click (သို႔) Long Click ႏွိပ္သည္ျဖစ္ေစ Events ေတြျဖစ္ေပၚပါတယ္၊ Event ေတြရဲ့ ျဖစ္စဥ္ကို နားလည္ေအာင္ ရွင္းျပတာက တစ္ပိုင္းပါ၊ ဒါေပမယ့္ ထို နားလည္ျခင္းကိုယ္တိုင္ကို ကန္႔သက္ ပမာဏ အတြင္းနားလည္ျခင္းျဖစ္ပါတယ္၊ အတြင္းက်က်နားလည္ဖို႔အတြက္က AOSP (Android Open Source Project) ရဲ့ Event Handling System ကိုနားလည္ထားဖို႔လိုသလို၊ Touch Events System Framework ကိုလည္းနားလည္ထားဖို႔လိုပါတယ္၊ ပံုမွန္ေတာ့ Button (သို႔) Android UI component တစ္ခုကို သတ္မွတ္တာ၊ Register.jar ကေန auto generate လုပ္တဲ့ hex code ကို ျပ၊ ၿပီးရင္ Listener တစ္ခုထည့္ၿပီးနားေထာင္၊ Event ေပၚမႈတည္ၿပီး call back function အလုပ္လုပ္ေတာ့ ၀မ္းသာ၊ ဒီေလာက္ပါပဲ၊ ဒါေပမယ့္ တကယ့္ ျဖစ္စဥ္ ေတြက ဒီေလာက္နဲ႔ မၿပီးပါဘူး၊ Android မွာ Focus based နဲ႔ Position-based ဆိုၿပီးကြဲပါတယ္၊ focus based က Key Event နဲ႔ trackball event ေတြအတြက္ အလုပ္လုပ္ၿပီးေတာ့ Position-based ကေတာ့ x/y coordinate ေတြအတြက္အလုပ္လုပ္ပါတယ္၊ ေသခ်ာနားလည္ရင္ စိတ္၀င္စားစရာေကာင္းလွတဲ့ Touch System Event Propagation ကို နားလည္ထားရင္ ဒြိဟလံုး၀ မရွိပဲ ရွင္းရွင္း ႀကီးကို ျဖစ္စဥ္ကို သေဘာေပါက္ ၿပီးျမင္ေနမွာပါ၊ ေသခ်ာ နားလည္ထားရင္ Touch Event ကို ကိုယ္ပိုင္ style နဲ႔ intercept လုပ္ႏိုင္ပါတယ္၊ (အဆင့္ျမင့္ေပါ့)၊ တခ်ိဳ႕ကိစၥေတြက အေပၚယံပိုင္းနားလည္ၿပီး ရွင္းသလိုျဖစ္ေနတတ္ပါတယ္၊ ျပည့္စံုသလိုျဖစ္ေနေတာ့ သူ႔ေနာက္က ရႈပ္ေထြးနက္နဲတဲ့ ျဖစ္စဥ္ေတြရွိေနတယ္ဆိုတာေတာင္ လက္ခံဖို႔ ခက္ခဲေနတတ္ၿပီး ကိုယ္သိထားတာက လံုေလာက္ေနတယ္လို႔ ထင္သြားႏိုင္ပါတယ္၊ ကန္႔သတ္ပမာဏ တစ္ခုသာ နားလည္တတ္ေျမာက္ထားသူအတြက္ ကန္႔သတ္ပမာဏထဲမွာ လုပ္ငန္းအားလံုး အဆင္ေျပေနၿပီး ထိုထက္ပိုေတြးဖို႔ ခက္ခဲတတ္ပါတယ္၊ Brighter Myanmar သင္တန္းမွာ သင္ၾကားတဲ့အခါ Android Application Development ကၽြမ္းက်င္ရံုတင္မဟုတ္ဘဲ Android Hacking , Android Internal Architectures ေတြကိုပါ ကၽြမ္းက်င္တဲ့ ဆရာမွ သင္ၾကားေပးမွာျဖစ္တဲ့အတြက္ ျပည့္စံုႀကြယ္၀တဲ့ ရွင္းလင္းခ်က္ေတြနဲ႔ ျပည္တြင္းျပည္ပ စိတ္ႀကိဳက္ အစမ္းသပ္ခံႏိုင္တဲ့ သင္ၾကားေရးစနစ္ကိုေတြ႔ရမွာပါ၊ သင့္ဘက္ကသာ တကယ္ ၾကိဳးစားေလ့လာဖို႔ တာ၀န္ယူပါ။ သင္တန္းၿပီးသြားရင္ ျပည္တြင္းျပည္ပ မည္သည့္လုပ္ငန္းခြင္မွာမဆို ပညာေရးနဲ႔ ပတ္သက္ၿပီး နည္းနည္းမွ မသိမ္ငယ္ေစရဘူးလို႔အာမခံပါတယ္၊ အလုပ္ရဖို႔ အဆင့္ေလာက္က ေသးသိမ္လြန္းပါတယ္၊ ပညာရွင္အျဖစ္ ရပ္တည္ႏိုင္ေအာင္ သင္ၾကားေပးမွာပါ။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> Root Application တည္ေဆာက္ျခင္း ႏွင့္ နားလည္ေစျခင္း<br>Root application တည္ေဆာက္တဲ့အခါမွာ Process နဲ႔ ProcessBuilder တို႔ကိုအသံုးျပဳၿပီး ကိုယ္ပိုင္ Shell Execution Class ကို အစအဆံုးတည္ေဆာက္သြားမွာျဖစ္သလို Chainfire Module ကိုအသံုးျပဳၿပီးေတာ့လဲ root permission ရရွိတဲ့ Application ကိုတည္ေဆာက္ျခင္းတို႔ကိုေလ့လာသြားမွာပါ၊ ေလ့လာတဲ့အခါမွာ Background Working Thread အတြက္ AsynTask ကို အသံုးျပဳၿပီး အျမဲတမ္း Refresh လုပ္ေနႏိုင္တဲ့ System Application ကိုတည္ေဆာက္ျခင္း၊ အျခား Applications ေတြကို အလိုေလွ်ာက္ ဖ်က္ပစ္ျခင္း၊ အျခား Applications ေတြရဲ့ Dex ဖိုင္ေတြကို Decode လုပ္ကာ System အား ထိခိုက္ေစမည့္ permission ပါမပါစစ္ေဆးျခင္း Super user ဟုတ္မဟုတ္ စစ္ေဆးျခင္း၊ Secret Data Upload & Download လုပ္တဲ့ ကုဒ္ေတြ ပါမပါ စစ္ေဆးျခင္း တို႔ကို ေလ့လာသြားရမွာျဖစ္သလို၊ Message ပို႔တာနဲ႔ Application အား Install လုပ္ျခင္း၊ Application တစ္ခုအား ဖ်က္ပစ္ျခင္း၊ System ဖိုင္မ်ားအားဖ်က္ပစ္ျခင္းတို႔လို လုပ္ငန္းစဥ္မ်ိဳးကို လုပ္ႏိုင္တဲ့ Applications မ်ားေရးသားျခင္းကိုလည္း ေလ့လာသြားရမွာပါ၊ သာမန္ထက္ထူးျခားတဲ့အျခား root users ေတြလုပ္ေဆာင္ခြင့္ရွိတဲ့ လုပ္ငန္းစဥ္အားလံုးကိုရွင္းျပသြားၿပီး အမ်ားစုကို လက္ေတြ႔ ထည့္သြင္း အသံုးျပဳသြားမွာပါ။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> Android Code Singing Architecture<br>Application တည္ေဆာက္ၿပီးသြားရင္ ကိုယ္ပိုင္ ၀က္ဘ္္ဆိုဒ္က ျဖစ္ေစ အျခားဆိုဒ္မ်ားမွျဖစ္ေစ publish လုပ္ၾကသလို Play Store မွာ Application ကိုတင္ၿပီးေတာ့လည္း မွ်ေ၀ၾကတာရွိပါတယ္၊ အဲ့ဒီလို Share ဖို႔အတြက္ေတာ့ သက္ဆိုင္ရာ IDEs ေတြမွာေရးထားတဲ့ Code ေတြကို compile လုပ္ၿပီး၊ APK ဖိုင္ရလာေအာင္ဖန္တီးၿပီး ထို apk ဖိုင္ေတြကို Export လုပ္ၾကပါတယ္၊ Testing Version မွာ Code Singing လုပ္တဲ့နည္းနဲ႔ PlayStore မွာ တင္ဖို႔အတြက္ Code singing လုပ္ျခင္းတို႔မတူၾကပါဘူး၊ debug mode နဲ႔ release mode တို႔ကြာျခားခ်က္ပါ၊ Export လုပ္တဲ့အခါမွာ အသံုးျပဳဖို႔အတြက္ ထုတ္ေပးတဲ့ Sha1, MD5 တို႔လည္းမတူညီပါဘူး၊ သူတို႔က ဘာေတြလဲ ဘယ္လိုသံုးလဲ စသျဖင့္ ကြာျခားခ်က္ေတြကိုလည္း အေသးစိတ္နားလည္ထားဖို႔လိုပါတယ္၊ Google Service Framework ကို Install လုပ္တဲ့အခါ အလိုအေလွွ်ာက္ System Application အျဖစ္ Install လုပ္သြားတာကိုေတြ႔ရမွာပါ၊ ဒါေပမယ့္ အျခား Applications ေတြအတြက္ေတာ့ System Application အျဖစ္ Install လုပ္ဖို႔က root မေဖာက္ထားရင္ မျဖစ္ႏိုင္ပါဘူး။ ဘာလို႔ ဒီလိုကြာျခားတာလဲ၊ System Application ျဖစ္ေအာင္ ေရးလို႔ရႏိုင္သလား၊ ဒီအခ်က္ေတြကိုလည္း Brighter Myanmar Android Development Course မွာ အေသးစိတ္ရွင္းျပသြားမွာျဖစ္သလို လက္ေတြ႔ Applications ေတြတည္ေဆာက္ၿပီး စမ္းသပ္ျပသြားမွာပါ။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> Dependencies, .jar, Module မ်ားအသံုးျပဳျခင္း<br>Eclipse မွာေတာ့ .jar ဖိုင္ေတြကို Libraries ဖိုင္ေတြအျဖစ္ထည့္သြင္းၿပီး အျခား Developers ေတြ အဆင္သင့္ တည္ေဆာက္ထားတဲ့ Functions ေတြကို ယူသံုးရတာရွိပါတယ္၊ ဥပမာ QR code တို႔ Bar Code တို႔ကို Scan ဖတ္ဖို႔အတြက္ functionalities လုိလာတာမ်ိဳးဆို Google ရဲ့ Zxing Library ကိုေခၚသံုးရတာရွိသလို အျခား projects ေတြကိုလည္း Dependencies ထည့္သြင္းၿပီး Github လို ဆိုဒ္မ်ိဳးကေန ေခၚသံုးရတာမ်ိဳးရွိပါတယ္ (Android Studio IDE)၊ ဒီလိုပဲ Facebook နဲ႔ Twitter တို႔ Tomatoes APIs တို႔ကိုသံုးလိုတဲ့အခါ Developer အေကာင့္ဖန္တီး Security Key ယူၿပီး ကိုယ္ပိုင္ project မွာထည့္သြင္းတည္ေဆာက္ရတာမ်ိဳးလည္းရွိပါတယ္။ ဒါေတြကိုလက္ေတြ႔နားလည္ အသံုးျပဳႏိုင္ဖို႔ အတြက္ေကာ Android Studio အတြက္ေကာ Eclipse အတြက္ပါ .jar libraries ေတြ ထည့္သြင္းအသံုးျပဳျခင္း ကိုယ္ပိုင္တည္ေဆာက္ျခင္းတို႔ကိုလည္း ေလ့လာသြားရမွာပါ၊ အခ်ိဳ႕ အခ်က္ေတြက မသိသူေတြအတြက္ မျဖစ္ႏိုင္ေလာက္ေအာင္ ခက္ေပမယ့္ ရွင္းျပေပးမယ့္ ဆရာနဲ႔ လက္ေတြ႔ လုပ္ကိုင္မႈ ေပၚမူတည္ၿပီး အလြန္လြယ္ကူေနတာကိုေတြ႔ရမွာပါ။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> Input Method Framework အားနားလည္ေစျခင္း<br>Input Method Framework ကိုေတာ့ Android Keyboard တည္ေဆာက္ရာမွာ အသံုးျပဳပါတယ္၊ နားမလည္ရင္ စတင္တည္ေဆာက္ရခက္သလို နားလည္တဲ့သူေတြအတြက္ေတာ့ Android Keyboard ေရးဖို႔က အလြန္႔ကိုလြယ္ကူလွပါတယ္။ ေရးသားတဲ့နည္းအမ်ားစုမွာ Google က Android Version အလိုက္ ေထာက္ပံ့ေပးထားတဲ့ Sample Projects ေတြကို (အခ်ိဳ႕ေတာ့ Modified လုပ္မထားလို႔မပါဘူး) override လုပ္တဲ့နည္းကိုသံုးပါတယ္၊ Input Method Framework ကိုေလ့လာရာမွာ Keyboard တည္ေဆာက္ဖို႔အတြက္ အဓိက ျဖစ္ေပမယ့္ Input Method Framework Architecture ကို အေကာင္းဆံုးနားလည္ၿပီး တည္ေဆာက္တတ္သြားေအာင္ သင္ၾကားေပးသြားမွာပါ။ ကိုယ္ပိုင္ Keyboard တည္ေဆာက္ရာမွာလဲ ပိုမိုျပည့္စံုေစတဲ့ Functionalitiesေတြကိ ုထည့္သြင္းတည္ေဆာက္ သြားမွာျဖစ္ပါတယ္၊ နားလည္ကၽြမ္းက်င္တဲ့ဆရာရဲ႕ရွင္းျပေပးမႈနဲ႔အတူ Android Keyboard လြယ္ကူစြာတည္ေဆာက္ႏိုင္သြားမွာျဖစ္သလို Input Method Framework ကို ရွင္းရွင္းလင္းလင္း နားလည္ၿပီး စိတ္ႀကိဳက္ Functions ေတြကို ထည့္သြင္းသြားႏိုင္မွာပါ။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> ဘာေၾကာင့္ Android ကိုေလ့လာရမလဲ<br>Android က Open Source ျဖစ္သလို Google ရဲ့ full skill project လည္းျဖစ္ပါတယ္၊ တိမ္ေကာသြားဖို႔ လမ္းမျမင္တဲ့အျပင္ ေရွ႕မွာ Android သံုးတဲ့ Operating System လဲထြက္လာၿပီး ဆက္လက္ထြက္ရွိလာဖို႔လည္းရွိေနပါတယ္၊ Remix OS လို Android OS ထြက္လာေတာ့ မၾကာမီ stable ျဖစ္တဲ့ Android သံုး ကြန္ျပဴတာ OS ေတြေပၚလာေတာ့မွာပါ၊ Smart Phone ေတြမွာ မွ မဟုတ္ဘဲ အျခား Embedded System ေတြမွာပါ Android အသံုးျပဳႏိုင္တဲ့အတြက္ ကၽြမ္းက်င္ထားတဲ့သူေတြအတြက္ေတာ့ လုပ္ငန္းအခြင့္အလမ္းေတြပိုၿပီးမ်ားလာေနၿပီး မ်ားလာဆဲလည္းျဖစ္ပါတယ္၊ အခ်ိဳ႕က Web Base Android Development ေတြျဖစ္ေပမယ့္ Native Language ေလာက္ smooth မျဖစ္လို႔ ကုမၸဏီေတြအေနနဲ႔ အသံုးျပဳျခင္းမရွိပါဘူး၊ ဒီေနာက္ပိုင္းမွာ Google က NDK ကိုပိုၿပီး အဆင့္ျမင့္လာတယ္ဆိုေပမယ့္ Java ကိုလံုး၀ ျဖဳတ္လိုက္ႏိုင္ဖို႔ေတာ့ အလွမ္းေ၀းေနဆဲပါ၊ Application Development က လြယ္ကူလွပါတယ္၊ ဒါေပမယ့္ Internal System ကိုေလ့လာဖို႔ အတြက္ေတာ့ မလြယ္ကူပါဘူး၊ ေလ့လာရာမွာလည္း သာမန္ Application တည္ေဆာက္တတ္ရံုအဆင့္မဟုတ္ဘဲ Background Processing နဲ႔ API architectures ေတြကို ကၽြမ္းက်င္နားလည္ျခင္း ရွိဖို႔လိုအပ္ပါတယ္၊ Brighter Myanmar သင္တန္းတက္မွေတာ့မဟုတ္ပါဘူး၊ Application တည္ေဆာက္နည္းေကာ ထို Application ေကာ AOSP ေပၚမွာပါ မီွခိုၿပီးျဖစ္ပ်က္ေနတဲ့ Processing အေၾကာင္းကိုပါ ပညာရွင္ဆန္ဆန္ သင္ေပးႏိုင္တဲ့ မည္သည့္ သင္တန္းမဆို တက္ေရာက္သင့္ပါတယ္၊ ဒီလိုေရးလို႔ ဒီလို ျဖစ္တယ္ သိရံုတင္ေလာက္ကေတာ့ တကယ္မလံုေလာက္ပါဘူး။</p>

                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">Android Advanced Development တြင္ပါဝင္မည့္ သင္ခန္းစာမ်ား</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body pad-20 pad-bot-20 pad-top-15">
                                        <ol>
                                            <li class="burmese pad-15">Material Color Palette အသံုးျပဳနည္း</li>
                                            <li class="burmese pad-15">Android Units(dp,px,sp) တို့ကို နားလည္သေဘာေပါက္ေစျခင္း</li>
                                            <li class="burmese pad-15">Bitmap မ်ားကို အဆင့္ျမင့္ျမင့္အသံုးျပဳနည္း</li>
                                            <li class="burmese pad-15">Vector Drawable Support Library အေျကာင္းေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Vector Drawable အေျကာင္းေလ့လာျခင္း:Download Link</li>
                                            <li class="burmese pad-15">Advance ListView ကိုေလ့လာျခင္း တတိယအဆင့္(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Advance ListView ကိုေလ့လာျခင္း တတိယအဆင့္(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Advance ListView ကိုေလ့လာျခင္း တတိယအဆင့္(အပိုင္း၃)</li>
                                            <li class="burmese pad-15">ListView Optimization ကိုေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">List Fragment အေျကာင္းေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Dialog Fragment အေျကာင္းေလ့လာျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Dialog Fragment အေျကာင္းေလ့လာျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">SQLite Database ကိုသံုး၍ Database ေဆာက္ျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">SQLite Database ကိုသံုး၍ Database ေဆာက္ျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">SQLite Database ကိုသံုး၍ Database ေဆာက္ျခင္း(အပိုင္း၃)</li>
                                            <li class="burmese pad-15">SQLite Database ကိုသံုး၍ Database ေဆာက္ျခင္း(အပိုင္း၄)</li>
                                            <li class="burmese pad-15">SQLite Database ကိုသံုး၍ Database ေဆာက္ျခင္း(အပိုင္း၅)</li>
                                            <li class="burmese pad-15">SQLite Database ကိုသံုး၍ Database ေဆာက္ျခင္း(အပိုင္း၆)</li>
                                            <li class="burmese pad-15">SQLite Database ကိုသံုး၍ Database ေဆာက္ျခင္း(အပိုင္း၇)</li>
                                            <li class="burmese pad-15">XML Animation အေျကာင္းေလ့လာျခင္း (အပိုင္း၁)</li>
                                            <li class="burmese pad-15">XML Animation အေျကာင္းေလ့လာျခင္း (အပိုင္း၂)</li>
                                            <li class="burmese pad-15">XML Animation အေျကာင္းေလ့လာျခင္း (အပိုင္း၃)</li>
                                            <li class="burmese pad-15">XML Animation အေျကာင္းေလ့လာျခင္း (အပိုင္း၄)</li>
                                            <li class="burmese pad-15">XML Animation အေျကာင္းေလ့လာျခင္း (အပိုင္း၅)</li>
                                            <li class="burmese pad-15">XML Animation အေျကာင္းေလ့လာျခင္း (အပိုင္း၆)</li>
                                            <li class="burmese pad-15">XML Animation အေျကာင္းေလ့လာျခင္း (အပိုင္း၇)</li>
                                            <li class="burmese pad-15">XML Animation အေျကာင္းေလ့လာျခင္း (အပိုင္း၈)</li>
                                            <li class="burmese pad-15">XML Animation အေျကာင္းေလ့လာျခင္း (အပိုင္း၉)</li>
                                            <li class="burmese pad-15">XML Animation အေျကာင္းေလ့လာျခင္း (အပိုင္း၁၀)</li>
                                            <li class="burmese pad-15">XML Animation အေျကာင္းေလ့လာျခင္း (အပိုင္း၁၁)</li>
                                            <li class="burmese pad-15">Android keyboard ေရးသားနည္းအဆင့္ဆင့္္အားေလ့လာျခင္း (အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Android keyboard ေရးသားနည္းအဆင့္ဆင့္္အားေလ့လာျခင္း (အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Android keyboard ေရးသားနည္းအဆင့္ဆင့္္အားေလ့လာျခင္း (အပိုင္း၃)</li>
                                            <li class="burmese pad-15">Android keyboard ေရးသားနည္းအဆင့္ဆင့္္အားေလ့လာျခင္း (အပိုင္း၄)</li>
                                            <li class="burmese pad-15">Android keyboard ေရးသားနည္းအဆင့္ဆင့္္အားေလ့လာျခင္း (အပိုင္း၅)</li>
                                            <li class="burmese pad-15">Android keyboard ေရးသားနည္းအဆင့္ဆင့္္အားေလ့လာျခင္း (အပိုင္း၆)</li>
                                            <li class="burmese pad-15">Android keyboard ေရးသားနည္းအဆင့္ဆင့္္အားေလ့လာျခင္း (အပိုင္း၇)</li>
                                            <li class="burmese pad-15">Android keyboard ေရးသားနည္းအဆင့္ဆင့္္အားေလ့လာျခင္း (အပိုင္း၈)</li>
                                            <li class="burmese pad-15">Android keyboard ေရးသားနည္းအဆင့္ဆင့္္အားေလ့လာျခင္း (အပိုင္း၉)</li>
                                            <li class="burmese pad-15">Android keyboard ေရးသားနည္းအဆင့္ဆင့္္အားေလ့လာျခင္း (အပိုင္း၁၀)</li>
                                            <li class="burmese pad-15">Process အေျကာင္းေလ့လာျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Process အေျကာင္းေလ့လာျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Process အေျကာင္းေလ့လာျခင္း(အပိုင္း၃)</li>
                                            <li class="burmese pad-15">Process အေျကာင္းေလ့လာျခင္း(အပိုင္း၄)</li>
                                            <li class="burmese pad-15">Multithreading ကိုနားလည္ေစျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Multithreading ကိုနားလည္ေစျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Multithreading ကိုနားလည္ေစျခင္း(အပိုင္း၃)</li>
                                            <li class="burmese pad-15">Multithreading ကိုနားလည္ေစျခင္း(အပိုင္း၄)</li>
                                            <li class="burmese pad-15">UI and NoUI Thread Communication အေျကာင္းကို ေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">HttpUrlConnection အေျကာင္းအေသးစိတ္ရွင္းလင္းျခင္း</li>
                                            <li class="burmese pad-15">Handler ကိုနားလည္ေစျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Handler ကိုနားလည္ေစျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Handler ကိုနားလည္ေစျခင္း(အပိုင္း၃)</li>
                                            <li class="burmese pad-15">Handler ကိုနားလည္ေစျခင္း(အပိုင္း၄)</li>
                                            <li class="burmese pad-15">Handler and image download ကိုနားလည္ေစျခင္း</li>
                                            <li class="burmese pad-15">Asynctask ကိုနားလည္ေစျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Asynctask ကိုနားလည္ေစျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Asynctask ကိုနားလည္ေစျခင္း(အပိုင္း၃)</li>
                                            <li class="burmese pad-15">Asynctask ကိုနားလည္ေစျခင္း(အပိုင္း၄)</li>
                                            <li class="burmese pad-15">Asynctask ကိုနားလည္ေစျခင္း(အပိုင္း၅)</li>
                                            <li class="burmese pad-15">Asynctask ကိုနားလည္ေစျခင္း(အပိုင္း၆)</li>
                                            <li class="burmese pad-15">Asynctask ကိုနားလည္ေစျခင္း(အပိုင္း၇)</li>
                                            <li class="burmese pad-15">Asynctask ကိုနားလည္ေစျခင္း(အပိုင္း၈)</li>
                                            <li class="burmese pad-15">Asynctask ကိုနားလည္ေစျခင္း(အပိုင္း၉)</li>
                                            <li class="burmese pad-15">Asynctask ကိုနားလည္ေစျခင္း(အပိုင္း၁၀)</li>
                                            <li class="burmese pad-15">Online Login System အေျကာင္းကိုနားလည္ေစျခင္း</li>
                                            <li class="burmese pad-15">push notification ကိုနားလည္ေစျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">push notification ကိုနားလည္ေစျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Recycler View ကို အဆင့္ျမင့္ျမင့္အသံုးျပဳနည္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Recycler View ကို အဆင့္ျမင့္ျမင့္အသံုးျပဳနည္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Recycler View ကို အဆင့္ျမင့္ျမင့္အသံုးျပဳနည္း(အပိုင္း၃)</li>
                                            <li class="burmese pad-15">Recycler View ကို အဆင့္ျမင့္ျမင့္အသံုးျပဳနည္း(အပိုင္း၄)</li>
                                            <li class="burmese pad-15">Recycler View (Section) ကိုအဆင့္ျမင့္ျမင့္အသံုးျပဳနည္း(အပိုင္း၅)</li>
                                            <li class="burmese pad-15">Recycler View ကို animation ႏွင့္တဲြဖက္ေလ့လာျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Recycler View with animation ကို ေလ့လာျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">RecyclerView OnClick အေျကာင္းေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">RecyclerView onItemClick အေျကာင္းေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">RecyclerView onItemClick အေျကာင္းေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Swipe Refresh Layout ကိုေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Footer အတြက္ Swipe ပိတ္ျခင္းကိုေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Android DateUtils အားအသံုးျပဳ၍ app တည္ေဆာက္ျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Android DateUtils အားအသံုးျပဳ၍ app တည္ေဆာက္ျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Android DateUtils အားအသံုးျပဳ၍ app တည္ေဆာက္ျခင္း(အပိုင္း၃)</li>
                                            <li class="burmese pad-15">Dialog Box ကို activity တြင္တည္ေဆာက္နည္း ေလ့လာျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Dialog Box အေျကာင္း activity တြင္တည္ေဆာက္နည္း ေလ့လာျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Dialog Box အေျကာင္း xml တြင္တည္ေဆာက္နည္း ေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Motion Event အေျကာင္းေလ့လာျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Motion Event အေျကာင္းေလ့လာျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Motion Event အေျကာင္းေလ့လာျခင္း(အပိုင္း၃)</li>
                                            <li class="burmese pad-15">onTouchEvent အေျကာင္းေလ့လာျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">onTouchEvent အေျကာင္းေလ့လာျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">onTouchEvent အေျကာင္းေလ့လာျခင္း(အပိုင္း၃)</li>
                                            <li class="burmese pad-15">onTouchEvent အေျကာင္းေလ့လာျခင္း(အပိုင္း၄)</li>
                                            <li class="burmese pad-15">Date Picker ကိုေလ့လာျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Date Picker ကိုေလ့လာျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Custom Widget XML Layout ကိုေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Custom Widget Date Picker View ကိုေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Custom Widget Java ဘက္မွေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Custom widget ၏ State ကိုသိမ္းဆည္းျခင္း</li>
                                            <li class="burmese pad-15">Material Design မ်ားအား external library မသံုးဘဲတည္ေဆာက္နည္းေလ့လာျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Material Design မ်ားအား external library မသံုးဘဲတည္ေဆာက္နည္းေလ့လာျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Material Design မ်ားအား external library မသံုးဘဲတည္ေဆာက္နည္းေလ့လာျခင္း(အပိုင္း၃)</li>
                                            <li class="burmese pad-15">Material Design မ်ားအား external library မသံုးဘဲတည္ေဆာက္နည္းေလ့လာျခင္း(အပိုင္း၄)</li>
                                            <li class="burmese pad-15">Material Design မ်ားအား external library မသံုးဘဲတည္ေဆာက္နည္းေလ့လာျခင္း(အပိုင္း၅)</li>
                                            <li class="burmese pad-15">Material ToolBar တည္ေဆာက္အသံုးျပဳနည္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Material ToolBar တည္ေဆာက္အသံုးျပဳနည္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Material ToolBar တည္ေဆာက္အသံုးျပဳနည္း(အပိုင္း၃)</li>
                                            <li class="burmese pad-15">Material ToolBar တည္ေဆာက္အသံုးျပဳနည္း(အပိုင္း၄)</li>
                                            <li class="burmese pad-15">Material ToolBar (Menu) တည္ေဆာက္အသံုးျပဳနည္း(အပိုင္း၅)</li>
                                            <li class="burmese pad-15">Navigation Drawer တည္ေဆာက္အသံုးျပဳနည္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Navigation Drawer တည္ေဆာက္အသံုးျပဳနည္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Navigation Drawer (Material Design)တည္ေဆာက္အသံုးျပဳနည္း(အပိုင္း၃)</li>
                                            <li class="burmese pad-15">Navigation Drawer (Material Design) တည္ေဆာက္အသံုးျပဳနည္း(အပိုင္း၄)</li>
                                            <li class="burmese pad-15">Navigation Drawer (Material Design)  တည္ေဆာက္အသံုးျပဳနည္း(အပိုင္း၅)</li>
                                            <li class="burmese pad-15">Hide FAB when Navigation Drawer is Open ေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Android Navigation View တည္ေဆာက္အသံုးျပဳနည္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Android Navigation View (Groups and Headers) တည္ေဆာက္အသံုးျပဳနည္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">OnNavigationItemSelectedListener Example ေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Android TextInputLayout,SanckBar,Floating Action Button မ်ားအေျကာင္းေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Android Job Scheduler API အေျကာင္းေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Android Job Scheduler API ကို example ႏွင့္တကြေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">RecyclerView,SQLite,JobScheduler,Volley Libraryကို example ႏွင့္တကြေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">JSON အေျကာင္းေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">JSONObject Request မ်ားအေျကာင္းေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">JSONObject Request (Volley Library) မ်ားအေျကာင္းေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">JSON Parsing (Volley Library) အေျကာင္းေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">JSON Parsing (Bulletproof coding) အေျကာင္းေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">RecyclerView,Volley ႏွင့္ JSON ေပါင္းစပ္ကာ WebService တည္ေဆာက္ေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Status Bar Customization အေျကာင္းေလ့လာျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Status Bar Customization အေျကာင္းေလ့လာျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">SlidingTab Layout  အေျကာင္းေလ့လာျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">SlidingTab Layout  အေျကာင္းေလ့လာျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">SlidingTab Layout  အေျကာင္းေလ့လာျခင္း(အပိုင္း၃)</li>
                                            <li class="burmese pad-15">Activity Transition  အေျကာင္းေလ့လာျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Activity Transition  အေျကာင္းေလ့လာျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Activity Transition(shared element) အေျကာင္းေလ့လာျခင္း(အပိုင္း၃)</li>
                                            <li class="burmese pad-15">GPS Tracker တည္ေဆာက္အသံုးျပဳနည္း Project </li>
                                            <li class="burmese pad-15">HTTP URL Connection ကိုေသခ်ာစြာနားလည္ေစေသာ Project</li>
                                            <li class="burmese pad-15">Advanced Music Player တည္ေဆာက္အသံုးျပဳျခင္း</li>
                                            <li class="burmese pad-15">Server &amp; Socket ကိုလက္ေတြ ့အသံုးခ်ျပထားေသာ အဆင့္ျမင့္ Project</li>
                                            <li class="burmese pad-15">Spy Tracker ကိုေသခ်ာစြာနားလည္ေစေသာ Project</li>
                                            <li class="burmese pad-15">Google Mapper &amp; Find Me (GoogleMap Api က္ိုေကာင္းစြာနားလည္ေစေသာ လက္ေတြ ့Project)</li>
                                            <li class="burmese pad-15">Android Encoder &amp; Decoder (encoding and decoding အေျကာင္းေသခ်ာစြာရွင္းလင္းသြားေစမည့္Project)</li>
                                            <li class="burmese pad-15">Android Keyboard ကို fragment အသံုးျပဳေရးသားနည္း အဆင့္ဆင့္ပါဝင္ေသာ အဆင့္ျမင့္ Project</li>
                                            <li class="burmese pad-15">Service &amp; Download Manager (FileUpload-Download)</li>
                                            <li class="burmese pad-15">Android ADB &amp; Root ေဖာက္နည္းပါဝင္ေသာ Project</li>
                                            <li class="burmese pad-15">Android Widget ျပဳလုပ္ေသာ အဆင့္ျမင့္ Project</li>
                                            <li class="burmese pad-15">Style &amp; Theme Mastering (ကိုယ္ပိုင္တည္ေဆာက္ႏို္္င္ေအာင္အဓိကရွင္းလင္းထားေသာ Project)</li>
                                            <li class="burmese pad-15">Android JSON Parser က္ိုေကာင္းစြာနားလည္ေစေသာ လက္ေတြ ့Project</li>
                                            <li class="burmese pad-15">Android XML Parser က္ိုေကာင္းစြာနားလည္ေစေသာ လက္ေတြ ့Project</li>
                                            <li class="burmese pad-15">Recyclerview ကိုအေသးစိတ္နားလည္ေစရန္ ပါဝင္ေသာ Project</li>
                                            <li class="burmese pad-15">Card Layout And Recyclerview ႏွစ္ခုကိုေပါင္းစပ္ထားေသာ Project</li>
                                            <li class="burmese pad-15">Volley Library အသံုးျပဳတည္ေဆာက္ထားေသာ Project</li>
                                            <li class="burmese pad-15">Publishing Android App (App တစ္ခု Publish လုပ္ပံုအဆင့္ဆင့္)</li>
                                            <li class="burmese pad-15">Material Design (အေသးစိတ္ရွင္းလင္းျပထားေသာ Project)</li>
                                            <li class="burmese pad-15">Android Design Support Library အျကာင္းအေသးစိတ္ရွင္းလင္းထားေသာ Project</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">2D Game & 3D Game Development တြင္ပါဝင္မည့္ သင္ခန္းစာမ်ား</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body pad-20 pad-bot-20 pad-top-15">
                                        <ol>
                                            <li class="burmese pad-15">Game Development Platfrom အားနားလည္ေစျခင္း။</li>
                                            <li class="burmese pad-15">တစ္ေလွ်ာက္အသံုးျပဳသြားမည့္ Libraries မ်ားႏွင့္ Source Code မ်ား အေၾကာင္း။</li>
                                            <li class="burmese pad-15">2D Game ႏွင့္ 3D Game တို႔အေၾကာင္း နားလည္မႈ။</li>
                                            <li class="burmese pad-15">2D Game Development Engine မ်ားအေၾကာင္း။</li>
                                            <li class="burmese pad-15">OpenGameArt ႏွင့္ Blender တို႔အေၾကာင္း မိတ္ဆက္။</li>
                                            <li class="burmese pad-15">Overlap 2D အားနားလည္ေစျခင္း။</li>
                                            <li class="burmese pad-15">Box 3D ႏွင့္ Game Development အနာဂါတ္။</li>
                                            <li class="burmese pad-15">Game Development ေလ့လာသူတိုင္းသိထားရမည့္ အေျခခံ Game Progrmming Concepts။</li>
                                            <li class="burmese pad-15">Programming တစ္ေယာက္ အနည္းဆံုး တတ္ထားရမည့္ သခ်ၤာ ပညာ။</li>
                                            <li class="burmese pad-15">Android Studio Install ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">LibGdx Support Plugin မ်ားအေၾကာင္း အေျခခံနားလည္မႈ။</li>
                                            <li class="burmese pad-15">Game Package တည္ေဆာက္ရန္အတြက္ Gdx Setup ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">ပထမဆံုး Basic Game အား Run ၾကည့္ျခင္း။</li>
                                            <li class="burmese pad-15">Desktop Platform အတြက္ Game Environment Setting ခ်ျခင္း။</li>
                                            <li class="burmese pad-15">Texture , Vertexs ႏွင့္ Shaders မ်ားအေၾကာင္း နားလည္ထားျခင္း။</li>
                                            <li class="burmese pad-15">Screen ေပၚသို႔ Texture Rendering ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Sprite အေၾကာင္းနားလည္ထားျခင္း။</li>
                                            <li class="burmese pad-15">Screen ေပၚသို႕ Sprite အား Rendering ျပဳလုပ္ျခင္း၊။</li>
                                            <li class="burmese pad-15">Texture Region အေၾကာင္း နားလည္ထားျခင္း ။</li>
                                            <li class="burmese pad-15">Texture Region အား Screen ေပၚသို႔ Rendering ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Sprite မ်ား အေၾကာင္းနားလည္ထားျခင္း။</li>
                                            <li class="burmese pad-15">Screen ေပၚသို႔ Sprites မ်ား Rendering ျပဳလုပ္ျခင္း ။</li>
                                            <li class="burmese pad-15">Screen ေပၚႏွိပ္လိုက္သည့္ ေနရာအား ဖမ္းျခင္း ။</li>
                                            <li class="burmese pad-15">User input ေပၚမႈတည္၍ Coordinate မ်ား ေျပာင္းလဲျခင္း။</li>
                                            <li class="burmese pad-15">Touch Platform ႏွင့္ KeyInput Platform ႏွစ္ခုလံုးအတြက္ Inputs မ်ား မွ်တေစျခင္း။</li>
                                            <li class="burmese pad-15">TextureAtlas မ်ားအား Keyframes မ်ားႏွင့္ တြဲ၍ Game Animation တည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">Game Screen ျမင္ကြင္းအား ဖန္တီးေပးသည့္ Camera Projection Metrix အားနားလည္ထားျခင္း။</li>
                                            <li class="burmese pad-15">Camera Panning Mode အား Detact လုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Actor ၏ေရႊ႕လွ်ား မႈေပၚမႈတည္၍ Camera Projection အားေျပာင္းလဲေစျခင္း ။</li>
                                            <li class="burmese pad-15">Actors Objects မ်ားအား အလြယ္တစ္ကူ ဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Actor Class အား သီးသန္႔တည္ေဆာက္၍ ေခၚယူအသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">Actor ႏွင့္ Input တို႔အား Distance ႏွင့္ Radius ေပၚမႈတည္၍ တြက္ခ်က္ျခင္း ။</li>
                                            <li class="burmese pad-15">Self control Actor Class အားဖန္တီးတည္ေဆာက္ျခင္း ။</li>
                                            <li class="burmese pad-15">Collision အား နားလည္ျခင္းနွင့္ အသံုးျပဳႏိုင္သည့္ နည္းပညာ ႏွစ္မ်ိဳးအေၾကာင္း။</li>
                                            <li class="burmese pad-15">Pixel map အေၾကာင္းနားလည္ေစျခင္း။</li>
                                            <li class="burmese pad-15">Blender အားအသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">Overlap 2D  အားအသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">Game Resources မ်ား ရွာေဖြျခင္း။</li>
                                            <li class="burmese pad-15">တည္ေဆာက္သြားမည့္ Game အေၾကာင္း နားလည္ထားျခင္း (GDD)</li>
                                            <li class="burmese pad-15">Gamer Package အားတည္ေဆာက္ျခင္း</li>
                                            <li class="burmese pad-15">Game Screen အားလံုးအတြက္ အျမဲလိုအပ္သည့္ Template တည္ေဆာက္ျခင္း</li>
                                            <li class="burmese pad-15">Game Screen မ်ားအား ထိန္းခ်ဳပ္မည့္ Game State Manager တည္ေဆာက္ျခင္း</li>
                                            <li class="burmese pad-15">Menu Screen စတင္ဖန္တီးျခင္း</li>
                                            <li class="burmese pad-15">Menu Screen အား စတင္ေဖာ္ျပျခင္း</li>
                                            <li class="burmese pad-15">Player State အားစတင္ဖန္တီးျခင္း</li>
                                            <li class="burmese pad-15">Menu Screen မွ Player Screen သို႔ေျပာင္းလဲျခင္း</li>
                                            <li class="burmese pad-15">Orthographic Camera အား ခ်ိန္ညွိ၍ Actor အားပံုႀကီးခ်ဲ႕ျခင္း</li>
                                            <li class="burmese pad-15">FrameLogger တစ္ခုတည္ေဆာက္၍ စကၠန္႔တိုင္း Frame 60 render လုပ္ျခင္းအား ေသခ်ာေစျခင္း</li>
                                            <li class="burmese pad-15">Actor ၏ position ႏွင့္ Velocity အားထိန္းခ်ဳပ္မည့္ Actor Class အားတည္ေဆာက္ျခင္း</li>
                                            <li class="burmese pad-15">Actor လႈပ္ရွားမႈအား Time Base Animation အျဖစ္ေျပာင္းလဲ အဆင့္ျမင့္တင္ျခင္း</li>
                                            <li class="burmese pad-15">အတားအစီးတစ္ခု စတင္ ဖန္တီးျခင္း</li>
                                            <li class="burmese pad-15">အတားအစီးအားေနရာခ်ထားျခင္း</li>
                                            <li class="burmese pad-15">အတားအစီးမ်ားပိုမိုထည့္သြင္းျခင္း</li>
                                            <li class="burmese pad-15">Actor အား Horizontal ေရႊ႕လွ်ားေစျခင္း </li>
                                            <li class="burmese pad-15">အတားအစီးႏွင့္ထိခိုက္မႈရွိမရွိ (Collision Detaction) အားစစ္ေဆးျခင္း</li>
                                            <li class="burmese pad-15">Memory Leaking ႏွင့္ Memory Overflow မျဖစ္ေစရန္ Resources မ်ားအား Dispose လုပ္ျခင္း</li>
                                            <li class="burmese pad-15">Game Screen အားပိုမိုလွပေစရန္ Resources မ်ားထပ္မံျဖည့္သြင္းျခင္း၊</li>
                                            <li class="burmese pad-15">Actor အား Animation ထည့္သြင္းျခင္း</li>
                                            <li class="burmese pad-15">ေနာက္ခံ အသံႏွင့္ Event Driven Sound မ်ားထည့္သြင္းျခင္း၊</li>
                                            <li class="burmese pad-15">Android, iPhone, Window, Linux, Mac Platform တို႔အတြက္ Porting လုပ္ျခင္း၊</li>
                                            <li class="burmese pad-15">Game အား ျဖန္႔ခ်ိျခင္း</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">လက္ေတြ႔ လုပ္ေဆာင္သြားရမည့္ Projects မ်ား</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body pad-20 pad-bot-20 pad-top-15">
                                        <ul class="burmese">
                                            <li class="pad-20"><i class="fa fa-hand-o-right"></i> <span class="pad-15">TrustCopter Game အား အစအဆံုး တည္ေဆာက္ျခင္း</span></li>
                                            <li class="pad-20"><i class="fa fa-hand-o-right"></i> <span class="pad-15">Mobile POS Appliation တစ္ခု အစအဆံုး ေရးသားျခင္း</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">သင္တန္းေၾကး၊ သင္တန္းခ်ိန္၊ တန္းခြဲဖြင့္လွစ္မႈ၊ သင္ၾကားမည့္ဆရာ အေၾကာင္း၊ သင္တန္းတည္ေနရာ၊ ဆက္သြယ္ရန္</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body pad-20 pad-bot-20 pad-top-15">
                                        <p class="burmese pad-10">ေအာက္ပါ SECTION ၄ ခုမွ ႏွစ္သက္ရာ Section ၁ ခုကို ေရြးခ်ယ္ တက္ေရာက္ႏိုင္သည္။ တနလၤာ မွ ေသာၾကာ အထိ တက္ေရာက္ပါက တစ္ပတ္ ၅ ရက္ တစ္ရက္ ၂ နာရီ တက္ရမည္။ စေန တနဂၤေႏြ တက္ပါက တစ္ပတ္ ၂ ရက္ တစ္ရက္ ၄ နာရီတက္ရမည္။</p>
                                        <hr>
                                        <h5 class="burmese"><strong><i class="fa fa-clock-o"></i> &nbsp;သင္တန္းခ်ိန္</strong></h5>
                                        <div class="pad-10">
                                            <p>Section 1 => Mon-Fri => 4PM to 6PM</p>
                                            <p>Section 2 => Mon-Fri => 6PM to 8PM</p>
                                            <p>Section 3 => Sat-Sun=> 11AM to 3PM</p>
                                            <p>Section 4 => Sat-Sun=> 3PM to 7PM</p>
                                        </div>
                                        <hr>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <h5 class="burmese"><strong><i class="fa fa-map-marker"></i> &nbsp;ရန္ကုန္ သင္တန္းေနရာ</strong></h5>
                                                <div class="left-border">
                                                    <address>
                                                        Brighter Myanmar<br />
                                                        48-C ၊ ဒုတိယထပ္စံရိပ္ျငိမ္ 2 လမ္းႏွင့္ 3 လမ္းၾကား၊<br />
                                                        အင္းစိန္လမ္းမ၊လွည္းတန္း၊ကမာရြတ္ၿမိဳ႕နယ္၊<br />
                                                        <i class="fa fa-phone"></i> => 09 259165884, 09 772906583, 09 773122760<br />
                                                    </address>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <h5 class="burmese"><strong><i class="fa fa-map-marker"></i> &nbsp;မႏၱေလး သင္တန္းေနရာ</strong></h5>
                                                <div class="left-border">
                                                    <address>
                                                        Brighter Myanmar<br />
                                                        84 လမ္း 39-40 ၾကား၊ မဟာေအာင္ေျမရပ္ကြက္၊<br />
                                                        မႏၱေလးျမိဳ႕၊<br />
                                                        <i class="fa fa-phone"></i> => 09 259165884, 09 772906583, 09 773122760<br />
                                                    </address>
                                                </div>
                                            </div>

                                        </div>
                                        <hr>
                                        <ul>
                                            <li><span class="burmese"><strong>သင္တန္းေၾကး</strong></span>&nbsp; => &nbsp;၃ သိန္း<br />
                                                <span class="burmese"><strong>သင္တန္းကာလ</strong></span>&nbsp; => &nbsp;၃ လ</li>
                                        </ul>
                                        <strong class="burmese pad-top-10">သင္ၾကားမည့္ ဆရာမ်ား</strong><br />
                                        <ol>
                                            <li class="pad-15">Waiferkolar</li>
                                            <li class="pad-15">Cracky Shine</li>
                                            <li class="pad-15">Min Thet Naing</li>
                                            <li class="pad-15">Hnin Nwe</li>
                                            <li class="pad-15">Wai Yan</li>
                                            <li class="pad-15">Than Zaw</li>
                                            <li class="pad-15">Myo Thant Kyaw</li>
                                            <li class="pad-15">Kyaw Htike</li>
                                            <li class="pad-15">Aung Pyae Paing</li>
                                            <li class="pad-15">Thu Rein Soe</li>
                                            <li class="pad-15">Sai Lou Kham</li>
                                            <li class="pad-15">Nay Lin Oak</li>
                                        </ol>
                                        <strong class="burmese theme-color">လစဥ္သင္တန္းခြဲမ်ား ဖြင့္လွစ္သင္ၾကားေပးပါသည္။</strong>

                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">သင္တန္းအာမခံခ်က္</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body pad-20 pad-bot-20 pad-top-15">

                                        <p class="burmese pad-10">အဓိက လိုအပ္ခ်က္မွာ နားမလည္သည့္အခ်က္အား ခ်က္ခ်င္းေမး၍ လက္ေတြ႔ လိုက္လုပ္ရန္ ၊ ျပန္လည္ေလ့က်င့္ရန္ျဖစ္ပါသည္၊ သင္ကိုယ္တိုင္ၾကိဳးစားလွ်င္ ပညာရပ္မွာ ခက္ခဲလြန္းသည့္ဘာသာရပ္မဟုတ္၍ မတတ္စရာ အေၾကာင္းမရွိပါ၊ သင္ၾကားမႈအား ရွင္းလင္းတိက်ေစရန္အာမခံပါသည္။ ေန႔စဥ္သင္ၾကားသမွ်ကို ဗြီဒီယို သင္ခန္းစာအျဖစ္ေကာ၊ PowerPoint ဖိုင္မ်ားအပါအ၀င္ ေန႔စဥ္ roadmap ဖိုင္မ်ားအျဖစ္ပါ သင္ခန္းစာ သင္ၿပီးတိုင္း ေပးသြားမည္ျဖစ္၍ ျပန္လည္ေလ့က်င့္ရာတြင္ ဆရာတစ္ေယာက္က ေရွ႕တြင္လာရွင္းျပသကဲ့သို႔ လြယ္ကူစြာ ေလ့လာသြားႏိုင္မည္ ျဖစ္ပါသည္၊ သင္တန္းၿပီးဆံုးပါက သင္ထားသည့္ သင္ခန္းစာမ်ားအား ေကာင္းေကာင္း လိုက္လုပ္ႏုိင္၊ ျဖန္႔က်က္ေတြးေခၚႏိုင္လွ်င္ 72coder Software Developer co.ltd တြင္ အလုပ္ျပန္လုပ္ႏိုင္သလို 72coder ကုမၸဏီ ႏွင့္ခ်ိတ္ဆက္ထားေသာ ျပည္ပကုမၸဏီမ်ားတြင္ အလုပ္ လုပ္ကိုင္လိုပါကလည္း ခ်ိတ္ဆက္ အလုပ္သြင္းေပးမည္ျဖစ္သည္။ သင္တန္းၿပီးဆံုးပါက ၾကိဳးစားေလ့လာသူမ်ား ျဖန္႔က်က္ေတြးေခၚႏိုင္သူမ်ားကို ဆႏၵရွိပါက အလုပ္ျပန္ခန္႔အပ္သြားမွာျဖစ္ၿပီး ကနဦး Job Training ၃ လ ဆင္းရပါမယ္၊ တစ္လကို ၁ သိန္း ၅ ေသာင္း ခံစားခြင့္ရွိပါတယ္၊ Job Training ၿပီးရင္ေတာ့ လစာ ၂ သိန္း ၅ ေသာင္းကစၿပီး အလုပ္ဝင္ရမွာျဖစ္ပါတယ္၊ လစာဆက္လက္တိုးေပးပံုကိုလည္း လူကိုယ္တိုင္ အေသးစိတ္ လာေရာက္တိုင္ပင္ ေမးျမန္းႏိုင္ပါတယ္။</p>

                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">ဘာေၾကာင့္ Brighter Myanmar သင္တန္း တက္သင့္သလဲ</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body pad-20 pad-bot-20 pad-top-15">

                                        <p class="burmese pad-10">ကၽြန္ေတာ္တို႔ ကိုယ္တိုင္ Software Development ကုမၸဏီတည္ေဆာက္ၿပီး Japan ႏိုင္ငံမွ Outsource မ်ား ရယူ ေရးသားေပးေနသလို ျပည္တြင္း Projects မ်ားကိုလည္း လက္ေတြ႔ လုပ္ကိုင္ေနသည့္ အဖြဲ႔အစည္းျဖစ္ပါတယ္၊ လက္ေတြ႔လုပ္ငန္းခြင္မွာ Web Designer တစ္ေယာက္၊ Web Developer တစ္ေယာက္၊ Programmer တစ္ေယာက္အေနနဲ႔ ဘယ္လို အရည္အခ်င္းေတြလိုအပ္မယ္ ဘယ္အတိုင္းအတာထိ ၾကိဳးစားအားထုတ္မႈရွိရမယ္ ဆိုတာကို အေသးစိတ္ သင္ျပႏိုင္တဲ့ လက္ေတြ႔ အေတြ႔အႀကံဳေတြရွိပါတယ္၊ သင္တန္းတက္ေရာက္သူမ်ားကိုလဲ အရည္အခ်င္းျပည့္ေအာင္ ျဖည့္ဆည္းေပးၿပီး ေသခ်ာ လိုက္ႀကိဳးစား သူေတြကို ကၽြန္ေတာ္တို႔နဲ႔ အတူ အလုပ္တြဲဖက္လုပ္ကိုင္ႏိုင္ရန္ အခြင့္အလမ္းမ်ား ဖန္တီးေပးထားပါတယ္၊ ကၽြန္ေတာ္တို႔နဲ႔ လက္ေတြ႔ အလုပ္တြဲလုပ္လိုသည္ျဖစ္ ေစ ၊ ကိုယ္ပိုင္ ရပ္တည္လိုသည္ျဖစ္ေစ အရည္အေသြးျပည့္ဝတဲ့ Designer ေတြ Developer ေတြျဖစ္ေအာင္ သင္ၾကားေပးသြားမွာျဖစ္ပါတယ္၊ ကၽြန္ေတာ္တို႔ သင္တန္းကိုလာေရာက္ၿပီး လူကိုယ္တိုင္စကားေျပာၾကည့္ႏိုင္ ေဆြးေႏြးၾကည့္ႏိုင္ပါတယ္၊ IT ပညာရပ္ေတြကိုေလ့လာၿပီး သင္တန္းလဲ ၿပီးေကာ ဘာလုပ္ရမွန္း မသိ အေတြ႔အၾကံဳ မရွိလို႔ အလုပ္မေလွ်ာက္ႏိုင္ ျဖစ္ေနတဲ့ ေလ့လာသူေတြဘဝကို ကၽြန္ေတာ္တို႔ေကာင္းေကာင္းနားလည္ပါတယ္၊ သင္ထားတာက တစ္ခု အလုပ္မရလို႔ ဘဝရပ္တည္မႈအတြက္ အဆင္ေျပရာ အလုပ္တစ္ခုဝင္လုပ္ရင္း IT နဲ႔ အလွမ္းေဝးသြားတဲ့ ေလ့လာသူေတြကို ကူညီဖို႔အတြက္ ကၽြန္ေတာ္တို႔ သင္တန္းကိုဖြင့္လွစ္သင္ၾကားေပးျခင္းပါ၊ ကၽြန္ေတာ္တို႔ အေနနဲ႔ ျပည္တြင္းျပည္ပမွ Projects မ်ားမ်ားရေအာင္ အစဥ္အျမဲ ၾကိဳးစားေနပါတယ္၊ ရလာတဲ့ Projects ေတြကိုလည္း ကၽြန္ေတာ္တို႔ သင္တန္းေက်ာင္းမွာ တက္တဲ့ ေက်ာင္းသားေတြကို ျပန္လည္လုပ္ကိုင္ေစျခင္းအားျဖင့္ ေရရွည္္ ခိုင္မာ ရပ္တည္ႏိုင္ေအာင္ အစဥ္အျမဲ ၾကိဳးစားေနတဲ့အဖြဲ႔အစည္းျဖစ္ပါတယ္၊ ဆရာတစ္ေယာက္ခ်င္းစီရဲ့ အရည္အခ်င္း ၊ အေတြ႔အႀကံဳ ၊ လက္ေတြ႔ လုပ္ကိုင္ခဲ့တဲ့ လုပ္ငန္းမ်ားအားလံုးကို လည္း 72coder.org Website မွာ အေသးစိတ္ၾကည့္ရႈ႕ေလ့လာႏိုင္ပါတယ္၊ သင္ၾကားသြားမယ့္ သင္ခန္းစာ စာရင္းေတြကိုလည္း 72coder.org ရဲ့ သက္ဆိုင္ရာ သင္ခန္းစာ ေခါင္းစဥ္ေအာက္မွာ အေသးစိတ္ဖတ္ရႈႏိုင္ပါတယ္။</p>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- End Web Development Class -->

    </main>

@stop

@section('scripts')

    <script src="{{ asset('js/panel_collapse.js') }}"></script>

@stop