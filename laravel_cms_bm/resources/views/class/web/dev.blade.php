@extends('layout.master')

@section('title', 'Web Development Class')

@section('styles')

    <link rel="stylesheet" href="{{ asset('custom.css') }}">

@stop

@section('inner_banner')
    <div class="parallax-window inner-banner tc-padding overlay-dark" data-parallax="scroll" data-image-src="{{ asset('images/inner-banner/banner.jpeg') }}">
        <div class="container">
            <div class="inner-page-heading style-2 h-white">
                <h2>Web Development Class</h2>
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
                    <li>Web Development</li>
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
                <h2>Web <span class="theme-color">Development</span> Class</h2>
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
                                        <h5 class="burmese pad-15">Web Developer တစ္ေယာက္ျဖစ္ဖို႔ လိုအပ္သည့္ အရည္အခ်င္းမ်ား</h5>
                                        <ul class="burmese pad-15 list-disc pad-40 pad-bot-20">
                                            <li class="pad-15">Web Developer တစ္ေယာက္ ကၽြမ္းက်င္ထားရမည့္ ဘာသာရပ္မ်ားအား နားလည္ကၽြမ္းက်င္ျခင္း</li>
                                            <li class="pad-15">SQL, MySQL, SQlite, PDO, PostgreSQL တို႔အား အဆင့္ျမင့္ျမင့္ နားလည္တတ္ကၽြမ္းထားမႈ</li>
                                            <li class="pad-15">လုပ္ငန္းတြင္ေစမည့္ Framework မ်ားအား ရင္းႏွီးကၽြမ္းဝင္ျခင္း</li>
                                            <li class="pad-15">Server Client Technology မ်ားအား အျပည့္အဝ အသံုးခ်၍ ဝက္ဆိုဒ္ Loading Time ပိုမိုျမန္ဆန္ေစရန္ဖန္တီးျခင္း</li>
                                            <li class="pad-15">Offline webserver မ်ားအား နားလည္ကၽြမ္းက်င္ထားရမွာျဖစ္သလို Online Server , Cpanel, Domain Pointing out လုပ္ျခင္းတို႔ကိုလည္းကၽြမ္းက်င္မႈႈ</li>
                                            <li class="pad-15">Share Hosting ႏွင့္ Virtual Private Server ႏွင့္ Dedicated Server တို႔အား Configure လုပ္ႏိုင္မႈႈႈ</li>
                                            <li class="pad-15">Web Security</li>
                                            <li class="pad-15">Googl Api</li>
                                        </ul>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i>  Web Developer တစ္ေယာက္ ကၽြမ္းက်င္ထားရမည့္ PHP, Ajax, JSON, MySQL ဘာသာရပ္မ်ားကို အေျခခံမွစ၍ လက္ေတြ႔ Projects မ်ား ဖန္တီးႏိုင္သည္ အထိ ေလ့လာသြားရမည္၊ PHP ဘာသာရပ္ကို အသံုးျပဳ၍ Back-end Develop လုပ္ရာတြင္ functional (Procedural) php ကိုအရင္ေလ့လာ၍ PHP concepts မ်ားကို ကၽြမ္းက်င္ေအာင္ ေလ့လာသြားရမည္ျဖစ္ပါတယ္၊ Procedural PHP ကို နားလည္ကၽြမ္းက်င္သြားပါက OOP (Object Oriented Programming) Style php ကိုေလ့လာ၍ ေနာက္ပိုင္း အျမဲ OOP ကိုသာ အသံုးျပဳၿပီး Develop လုပ္သြားရေတာ့မွာပါ၊ Ajax ဘာသာရပ္ကိုေတာ့ လက္ေတြ႔ Ajax Chatting Application တည္ေဆာက္ရင္း ေလ့လာသြားရမွာျဖစ္သလို JSON ဘာသာရပ္ေတြကိုေတာ့ အျခား ဝက္ဆိုဒ္မ်ား၏ Share Data မ်ားကို RSS Feeds မ်ားကို Applicaiton Programming Interface အျဖစ္ jSON encode data မ်ားအျဖစ္ ရယူၿပီး Decode လုပ္ကာ Web Page မ်ား တြင္ လက္ေတြ႔အသံုးျပဳျခင္း ကိုယ့္ဆိုဒ္က ေဒတာမ်ား ကို JSON Array Object မ်ား အျဖစ္ Share လုပ္ေပး ျခင္းတို႔ျဖင့္ လက္ေတြ႔ေလ့လာသြားရမွာျဖစ္ပါတယ္၊ အဆင့္ျမင့္ပိုင္းအေနနဲ႔ေတာ့ PHP Design Pattern မ်ား အေၾကာင္းကို အေသးစိတ္ေလ့လာသြားရမွာျဖစ္ပါတယ္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> အမ်ားစုေသာ Developer ေတြရဲ့ အားနည္းခ်က္ျဖစ္တဲ့ Database ထဲမွာ data မ်ားအား CURD (create, update, read, delete) လုပ္ငန္းစဥ္ေလာက္သာ လုပ္ျခင္း Foreign Key အသံုးျပဳ၍ Table Join ျခင္း Left join , Right Join လုပ္ျခင္းေလာက္သာ SQL Query မ်ားကိုေလ့လာသြားရမည္မဟုတ္ပဲ Database Administrator တစ္ေယာက္ အဆင့္အထိ Database အားနားလည္ ေစရန္အတြက္ Logical Data Structure , Physical Storage Structure, Relational Database Architecture, Database Smart Flash Cache တို႔အေၾကာင္း ေလ့လာသြားရမည္ျဖစ္ၿပီး၊ လြယ္ကူ ေသာ္လည္း ေမးလိုက္ရင္ ရွင္းရွင္းလင္းလင္း နားမလည္ၾကသည့္ Primary Key, Unique Key တို႔ကို အတြင္းက်က် နားလည္အသံုးျပဳတတ္မႈ၊ Dtabase Procedure မ်ားတည္ေဆာက္ အသံုး ျပဳတတ္မႈ၊ Trigger မ်ားဖန္တီး၍ Table Change ကို Listen လုပ္ကာ စိတ္ႀကိဳက္ Data Update လုပ္ျခင္းမ်ားကို ျပဳလုပ္နည္းေတြကိုပါေလ့လာသြားရမွာျဖစ္ပါတယ္္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> ေလ့လာတဲ့ေနရာမွာ အဆင့္ျမင့္ျမင့္ တက္ကၽြမ္းေအာင္ ေလ့လာရပါတယ္၊ ခက္ခဲ တဲ့ Theory သေဘာတရားေတြကို လက္ေတြ႔ အႀကိမ္ႀကိမ္ လုပ္ၿပီးေလ့လာသြားရမွာျဖစ္ပါတယ္၊ ဒါေပမယ့္ လက္ေတြ႔ လုပ္ငန္းခြင္မွာေတာ့ Security ျပႆနာေတြ၊ Architecture ျပႆနာေတြကို အေသးစိတ္ေျဖရွင္းျပီး Project ကို လက္ဝင္ေအာင္ တည္ေဆာက္လို႔မျဖစ္ပါဘူး၊ Customer က တတ္ႏိုင္တဲ့ ပမာဏနဲ႔ ကိုယ္ေပးရတဲ့ လုပ္အား နဲ႔ အခ်ိန္ ကိုက္ညီမႈမရွိရင္ အရံႈးေပၚပါတယ္၊ ဒီေတာ့ လံုျခံဳေရးစိတ္ခ်ရၿပီး လုပ္ငန္းတြင္တဲ့ Framework ေတြကို လက္ေတြ႔ အသံုးျပဳၿပီး လုပ္ငန္းတြင္ေအာင္ Productivity ျဖစ္ေအာင္ Develop လုပ္ရပါတယ္၊ ဒီ့အတြက္ Brighter Myanmar မွာ PHP framework တစ္ခုျဖစ္တဲ့ Laravel Framework ကို latest stabel version ျဖစ္တဲ့ 5.3.16 သံုးၿပီး သင္ေပးသြားမွာပါ၊ Laravel ရဲ့ အႏွစ္သာရကိုေကာင္းေကာင္း သေဘာေပါက္သြားရင္ Web Develop ကို အရမ္းလြယ္တယ္လို႔ထင္သြားမွာျဖစ္ၿပီး မည္မွ် ႀကီးမား ရႈပ္ေထြးတဲ့ Project ျဖစ္ပါေစ လက္ခံၿပီး လုပ္ေပးဖို႔ နည္းနည္းမွ မစိုးရိမ္ေတာ့ပါဘူး၊ Brighter Myanmar ကြန္ျပဴတာ သင္တန္းမွာေတာ့ Laravel Concepts ေတြျဖစ္တဲ့ Routing System, Tempalte engine, Object Relational Mapping Technique ကိုသံုးထားတဲ့ Eloquent Relation မ်ား၊ Middleware အသံုးျပဳ၍ လံုျခံဳေရးထိန္းခ်ဳပ္ျခင္း၊ Localization နည္းပညာမ်ားအျပင္ Collective Package မ်ားအသံုးျပဳျခင္း ႏွင့္ အျခား အသံုးဝင္ packages အမ်ိဳး မ်ိဳးတို႔အား အသံုးျပဳျခင္းေတြကိုေလ့လာသြားရမွာျဖစ္ပါတယ္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> ပံုမွန္အားျဖင့္ Develop လုပ္စဥ္ကာလမွာ Develop တိုင္းက wamp, xampp, mamp တို႔လို Local Server မွာပဲ Develop လုပ္ႀကပါတယ္၊ ဆိုဒ္တစ္ခုလံုး ၿပီးဆံုးၿပီဆိုရင္ေတာ့ Online Server Computer ေပၚကိုတင္ႀကပါတယ္၊ ဒီအခါ Domain Name ဝယ္ယူျခင္း Hosting ဝယ္ယူျခင္း၊ Domain Name နဲ႔ Hosting ဝယ္ထားတဲ့ ကုမၸဏီမတူရင္ Domain Name Point Out လုပ္ျခင္းဆိုတဲ့ လုပ္ငန္း စဥ္ေတြ ကိုလုပ္ရပါတယ္၊ ဒီလိုပါပဲ Web Server ရဲ့ Cpanel ကိုေကာင္းေကာင္းအသံုးျပဳတတ္ျခင္း ၊ Subdomain မ်ား ဖန္တီးတတ္ျခင္း ၊ ကိုယ္ပိုင္ ကုမၸဏီနာမည္ႏွင့္ Web Mail မ်ား ဖန္တီးျခင္း၊ Server ဝင္ေရာက္ အလုပ္လုပ္ခြင့္မေပးတဲ့ Hosting ေတြမွာ File Transfer Protocol ကိုအသံုးျပဳၿပီး Web Data မ်ား Upload လုပ္ျခင္းေတြကိုပါ အေသးစိတ္ေလ့လာသြားရမွာျဖစ္ပါတယ္၊ ဒီလိုပဲ Virtual Private Server (or) Dedicated Server ဝယ္ယူထားတဲ့ Customer မ်ားအတြက္ ကိုယ္ပိုင္ Hosting တစ္ခုလံုးအား ျပန္ဖန္တီးတဲ့ အဆင့္ျမင့္ နည္းပညာမ်ားကိုလည္း ေလ့လာသြားရမွာျဖစ္ပါတယ္္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> Web Developer ေတြရဲ့တာဝန္ျဖစ္တဲ့ Security ပိုင္းကိုေကာင္းေကာင္းနားလည္ေစရန္ တိုက္ခိုက္လာႏိုင္တဲ့ (Open Web Application Security Project (OWASP) အဖြဲ႔မွ သတ္မွတ္ထားေသာ) Attacks အမ်ိဳးမ်ိဳးတို႔အေၾကာင္းကို လက္ေတြ႔ ထိုးေဖာက္ၾကည့္ရင္း အသံုးျပဳၾကည့္ျခင္းျဖင့္ ကာကြယ္ႏိုင္တဲ့နည္းလမ္းေတြကိုေလ့လာသြားရမွာျဖစ္ပါတယ္၊ HTML 5.1 မွာ Cross-site Scripting Attack ကိုလံုးဝ ကာကြယ္ထားၿပီးၿပီျဖစ္သလို Laravel Framework ကလည္း SQL injection ကို အျပည့္အဝ ကာကြယ္ေပးေသာ္ျငား ျဖစ္ႏို္င္ေသးတဲ့အမွားအယြင္းနဲ႔ အားနည္းခ်က္ေတြကို ပိုမိုနားလည္သြားေအာင္ အမွားမလုပ္မိ ေအာင္ လက္ေတြ႔ ဥပမာ မ်ားျဖင့္ ရွင္းလင္းသင္ၾကားေပးသြားမွာျဖစ္ပါတယ္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> Google API ကိုအသံုးျပဳၿပီး Google Map Location ေဖာ္ျပျခင္း ၊ Login with Google Feature ကို ကိုယ့္ဝက္ဆိုဒ္မွာ Support ေပးျခင္း၊ Facebook Developer အေကာင့္ဖြင့္၍ Facebook Applicaiton Key ဖန္တီးကာ ဝက္ဆိုဒ္မွာ တင္သမွ် Posts ေတြကို အလိုအေလွ်ာက္ facebook မွာ တင္ၿပီးျဖစ္ေအာင္ ဖန္တီးျခင္း Login with Facebook feature ထည့္သြင္းျခင္း ၊ Like အေရအတြက္ကို Facebook ကေန ရယူၿပီး ဝက္ဆိုဒ္တြင္ေဖာ္ျပျခင္းတို႔ကိုလည္း ေလ့လာၿပီး API ေတြကို လက္ေတြ႔ အသံုးျပဳပံုမ်ားကိုလည္း ကၽြမ္းက်င္ေအာင္ သင္ၾကားေပးသြားမွာျဖစ္ပါတယ္၊ Cloud Host No SQL Database ျဖစ္တဲ့ Firebase ကို အသံုးျပဳၿပီး Browser Push Message မ်ား ေပးပို႔ပံု၊ alert လုပ္ပံု၊ Chat Application မ်ား အလြယ္တကူ တည္ေဆာက္ပံုတို႔ကိုလည္း ေလ့လာသြားရမွာပါ။</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">PHP သင္ခန္းစာမ်ား</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body pad-20 pad-bot-20 pad-top-15">
                                        <ol>
                                            <li class="burmese pad-15">ဘာ့ေၾကာင့္ PHP ကိုေလ့လာရမလဲ။</li>
                                            <li class="burmese pad-15">သင္ခန္းစာ တစ္ေလွ်ာက္ ဘာေတြေလ့လာသြားရမလဲ။</li>
                                            <li class="burmese pad-15">Local Development Environment and Software Install ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Course Exercise Files and Video Quality။</li>
                                            <li class="burmese pad-15">Code Editor အား install ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">PHP အား HTML elements မ်ားတြင္ ထည့္သြင္း အသုံးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">Dynamic Data အသုံးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">Comments မ်ား ထည့္သြင္းျခင္း။</li>
                                            <li class="burmese pad-15">လက္ေတြ႔ သင္ခန္းစာ (၁)။</li>
                                            <li class="burmese pad-15">Variables မ်ားအေၾကာင္းနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Math Object အေၾကာင္း ေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Arrays မ်ား တည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">Associative Arrays အေၾကာင္းနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">လက္ေတြ႔ သင္ခန္းစာ (၂)။</li>
                                            <li class="burmese pad-15">If Statements မ်ားအား ေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Comparison and logical operators မ်ားအား ေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Switch Statements မ်ားအား ေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">While Loop အေၾကာင္းေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">For Loop အေၾကာင္းေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Foreach Loop အေၾကာင္းေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">လက္ေတြ႔ သင္ခန္းစာ (၃)။</li>
                                            <li class="burmese pad-15">Function မ်ားတည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">Function Parameters မ်ားအားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">AFunction ၏ return values မ်ားအား ေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Global variables and global scope အား ေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Constants မ်ားအားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">လက္ေတြ႔ သင္ခန္းစာ (၄)။</li>
                                            <li class="burmese pad-15">Math Function မ်ားအား ေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">String Function မ်ားအား ေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Array Function မ်ားအား ေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">လက္ေတြ႔ သင္ခန္းစာ (၅)။</li>
                                            <li class="burmese pad-15">Form Submission အားစစ္ေဆးျခင္း။</li>
                                            <li class="burmese pad-15">Form မွ information မ်ားအား ထုတ္ယူျခင္း။</li>
                                            <li class="burmese pad-15">Form Data မ်ားအား စစ္ေဆးျခင္း။</li>
                                            <li class="burmese pad-15">External Page Submission အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">လက္ေတြ႔ သင္ခန္းစာ (၆)။</li>
                                            <li class="burmese pad-15">Database အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">PHPmyAdmin အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">PHPmyAdmin တြင္ Database တစ္ခုတည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">Tables မ်ားတည္ေဆာက္ျခင္းနွင့္ Data မ်ားထည့္သြင္းျခင္း။</li>
                                            <li class="burmese pad-15">Login Page တစ္ခု တည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15"> Data မ်ား လက္ခံရယူျခင္းႏွင့္ စစ္ေဆးျခင္း။</li>
                                            <li class="burmese pad-15">PHP အားအသုံးျပဳ၍  Database ႏွင့္ ခ်ိတ္ဆက္ျခင္း။</li>
                                            <li class="burmese pad-15">PHP အားအသုံးျပဳ၍  Database Table တြင္ Records မ်ားဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">PHP အားအသုံးျပဳ၍  Database အတြင္းရွိ Data မ်ားအား ဖတ္ျခင္း။</li>
                                            <li class="burmese pad-15">Form Records မ်ားအား Update ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Name and Attribute Values မ်ား သတ္မွတ္ျခင္း။</li>
                                            <li class="burmese pad-15">Id အား  Query သုံး၍ ဖတ္ျခင္း။</li>
                                            <li class="burmese pad-15">Username and Password အား query သုံး၍ Update လုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Function တြင္ Update Query အားျပဳျပင္ျခင္း။</li>
                                            <li class="burmese pad-15">Database အတြင္းရွိ records မ်ားအား ဖ်က္ျခင္း။</li>
                                            <li class="burmese pad-15">Database Query မ်ားအား  Function တြင္ တည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">Making All Files Modular and Refactoring။</li>
                                            <li class="burmese pad-15">လက္ေတြ႔ သင္ခန္းစာ (၇)။</li>
                                            <li class="burmese pad-15">SQL Injection နွင့္ ကာကြယ္နည္းမ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Password Encryption အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">လက္ေတြ႔ သင္ခန္းစာ (၈)။</li>
                                            <li class="burmese pad-15">HTTP Requests အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">GET Super Global Variable အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">POST Super Global Variable အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Cookies မ်ားအေၾကာင္းေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Cookies မ်ားအား setting ခ်ျခင္း။</li>
                                            <li class="burmese pad-15">Cookies မ်ားအားဖတ္ျခင္း။</li>
                                            <li class="burmese pad-15">Cookies မ်ားအသုံးခ်ျခင္းအား ေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">လက္ေတြ႔ သင္ခန္းစာ (၉)။</li>
                                            <li class="burmese pad-15">Classes and Objects မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">PHP တြင္ Classes မ်ားသတ္မွတ္ျခင္း။</li>
                                            <li class="burmese pad-15">Classes တြင္ Methods မ်ား ဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Class တြင္ Object ေဆာက္ျခင္းအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Class တြင္ Properties မ်ား ထည့္သြင္းျခင္း။</li>
                                            <li class="burmese pad-15">Inheritance Class အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Constructors မ်ား တည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">Data Access အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Static Data အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">လက္ေတြ႔ သင္ခန္းစာ (၁၀)။</li>
                                            <li class="burmese pad-15">Files မ်ားဖြင့္ျခင္းႏွင့္ တည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">Files Writing အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Files Reading အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Files Deleting အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">CMS အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Important Features အခ်ိဳ႕ အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Assets ဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Database ႏွင့္ Category table ဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Database ႏွင့္ ခ်ိတ္ဆက္ျခင္းအား ေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Files မ်ားအား Reusability ျဖစ္ေအာင္ ဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Category Table တြင္ Data ထည့္သြင္းျခင္းႏွင့္ ေဖာ္ျပျခင္း။</li>
                                            <li class="burmese pad-15">Posts Table တစ္ခုဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Post comment အား Counting ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Post Table တြင္ Data ထည့္သြင္းျခင္းႏွင့္ ေဖာ္ျပျခင္း။</li>
                                            <li class="burmese pad-15">Post Image ထည့္သြင္းျခင္းႏွင့္ ေဖာ္ျပျခင္း။</li>
                                            <li class="burmese pad-15">Custom Search Engine တစ္ခုဖန္တီးျခင္းအပိုင္း(၁)။</li>
                                            <li class="burmese pad-15">Custom Search Engine တစ္ခုဖန္တီးျခင္းအပိုင္း(၂)။</li>
                                            <li class="burmese pad-15">Custom Search Engine တစ္ခုဖန္တီးျခင္းအပိုင္း(၃)။</li>
                                            <li class="burmese pad-15"> Admin page တြင္ reusable code မ်ားအား ဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Admin page တြင္ Navigation links မ်ားအား ဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Admin Category page တစ္ခု ဖန္တီးျခင္း အပိုင္း(၁)။</li>
                                            <li class="burmese pad-15">Admin Category page တစ္ခု ဖန္တီးျခင္း အပိုင္း(၂)။</li>
                                            <li class="burmese pad-15">Category page တြင္ Data မ်ား ေဖာ္ျပျခင္း။</li>
                                            <li class="burmese pad-15">Categories မ်ားထည့္သြင္းျခင္း။</li>
                                            <li class="burmese pad-15">Header file တြင္ special function မ်ားထည့္သြင္းျခင္း။</li>
                                            <li class="burmese pad-15">Categories မ်ားဖ်က္ျခင္း။</li>
                                            <li class="burmese pad-15">Category Table အား update လုပ္ျခင္း အပိုင္း(၁)။</li>
                                            <li class="burmese pad-15">Category Table အား update လုပ္ျခင္း အပိုင္း(၂)။</li>
                                            <li class="burmese pad-15">Category code မ်ားအား ျပဳျပင္ျခင္း အပိုင္း(၁)။</li>
                                            <li class="burmese pad-15">Category code မ်ားအား ျပဳျပင္ျခင္း အပိုင္း(၂)။</li>
                                            <li class="burmese pad-15">Posts table ၏ lists မ်ားအားေဖာ္ျပျခင္း။</li>
                                            <li class="burmese pad-15">Admin တြင္ post list မ်ားအား ေဖာ္ျပျခင္း။</li>
                                            <li class="burmese pad-15">Condition Technique အား အေျခခံ၍ pages မ်ားဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Post HTML Form တစ္ခုဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Post data မ်ားထည့္သြင္းျခင္း။</li>
                                            <li class="burmese pad-15">Post data မ်ားဖ်က္ျခင္း။</li>
                                            <li class="burmese pad-15">Post Page အတြက္ Edit Form တစ္ခုဖန္တီးေပးျခင္း။</li>
                                            <li class="burmese pad-15">Edit Data မ်ားအား ျပန္လည္ေဖာ္ျပျခင္း။</li>
                                            <li class="burmese pad-15">Category Data မ်ားအား dynamic ျပဳျပင္ျခင္း ႏွင့္ Image ေဖာ္ျပျခင္း။</li>
                                            <li class="burmese pad-15">Posts Data မ်ားအား update လုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Category ႏွင့္ Post table အားခ်ိတ္ဆက္ျခင္း ႏွင့္ Data မ်ားေဖာ္ျပျခင္း။</li>
                                            <li class="burmese pad-15">Add Post Page တြင္ Category dropdown ဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Individual Post Page and Link ဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Category page တစ္ခု ဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Link မ်ား ခ်ိတ္ဆက္ျခင္း။</li>
                                            <li class="burmese pad-15">Comments table ဖန္တီးျခင္းႏွင့္ Data မ်ားထည့္သြင္းျခင္း။</li>
                                            <li class="burmese pad-15">Admin တြင္ Comments page and form တစ္ခုဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Comments မ်ား ေဖာ္ျပရန္ query ဆြဲထုတ္ျခင္း အပိုင္း(၁)။</li>
                                            <li class="burmese pad-15">Comments မ်ား ေဖာ္ျပရန္ query ဆြဲထုတ္ျခင္း အပိုင္း(၂)။</li>
                                            <li class="burmese pad-15">Front end comments တြင္ fields မ်ားထပ္ထည့္ျခင္း ႏွင့္ စမ္းသပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Front end comments အတြက္ insert query ဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Comment data ပို႔ျခင္း။</li>
                                            <li class="burmese pad-15">Comment table ႏွင့္ post table အား ခ်ိတ္ဆက္ျခင္း။</li>
                                            <li class="burmese pad-15">Comment data မ်ား ဖ်က္ျခင္း။</li>
                                            <li class="burmese pad-15">Comment မ်ားအား approve, unapproved သတ္မွတ္ျခင္း။</li>
                                            <li class="burmese pad-15">Approval အရ comment မ်ား ေဖာ္ျပျခင္း။</li>
                                            <li class="burmese pad-15">Comments count အားတိုးျခင္း။</li>
                                            <li class="burmese pad-15">Comment data မ်ားအား adjustment ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Status အေပၚမူတည္၍ post data မ်ား ေဖာ္ျပျခင္း။</li>
                                            <li class="burmese pad-15">User table ဖန္တီးျခင္းႏွင့္ Data မ်ားထည့္သြင္းျခင္း။</li>
                                            <li class="burmese pad-15">User page ဖန္တီးျခင္းႏွင့္ link မ်ားဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">User table heading အားျပဳျပင္ျခင္း။</li>
                                            <li class="burmese pad-15">User table အတြက္ display query မ်ားဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Admin တြင္ User data မ်ား ေဖာ္ျပျခင္း။</li>
                                            <li class="burmese pad-15">Admin တြင္ User data မ်ား ထည့္သြင္းျခင္း အပိုင္း(၁)။</li>
                                            <li class="burmese pad-15">Admin တြင္ User data မ်ား ထည့္သြင္းျခင္း အပိုင္း(၂)။</li>
                                            <li class="burmese pad-15">Admin တြင္ User data မ်ား ထည့္သြင္းျခင္း အပိုင္း(၃)။</li>
                                            <li class="burmese pad-15">Admin တြင္ User data မ်ား ထည့္သြင္းျခင္း အပိုင္း(၄)။</li>
                                            <li class="burmese pad-15">User data မ်ား ဖ်က္ျခင္း။</li>
                                            <li class="burmese pad-15">User Role မ်ားေျပာင္းလဲျခင္း။</li>
                                            <li class="burmese pad-15">Edit User Page အား ဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Edit Page တြင္ User values မ်ားေဖာ္ျပျခင္း။</li>
                                            <li class="burmese pad-15">User Role အတြက္ Select option မ်ား ထည့္သြင္းျခင္း ။</li>
                                            <li class="burmese pad-15">User table အား update ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Login Form တစ္ခုဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Login Page တစ္ခုဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Select User Query ဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Front end တြင္ User Query စစ္ေဆးျခင္း။</li>
                                            <li class="burmese pad-15">Sessions Values မ်ား ထည့္သြင္းျခင္း။</li>
                                            <li class="burmese pad-15">User Admin အား စစ္ေဆးျခင္း။</li>
                                            <li class="burmese pad-15">Logout Page Improved Validation အား ေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Login Improved အား ေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Profile Page တစ္ခုဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">User Data မ်ားေဖာ္ျပျခင္း။</li>
                                            <li class="burmese pad-15">User Data update ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Widgets မ်ား ထည့္သြင္းျခင္း။</li>
                                            <li class="burmese pad-15">Widget တြင္ Dynamic Data ထည့္သြင္းျခင္း။</li>
                                            <li class="burmese pad-15">Widget တြင္ Dynamic Data အသုံးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">Widget Links မ်ား adjust ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Admin တြင္  AWESOME chart တစ္ခုဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Chart အား cleaning up ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Chart တြင္ Dynamic Data မ်ားေဖာ္ျပျခင္း အပိုင္း(၁)။</li>
                                            <li class="burmese pad-15">Chart တြင္ Dynamic Data မ်ားေဖာ္ျပျခင္း အပိုင္း(၂)။</li>
                                            <li class="burmese pad-15">Post table အား adjust လုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Read more Button အား ဖယ္ရွားျခင္း။</li>
                                            <li class="burmese pad-15">Add User Page တြင္ Notification မ်ား ထည့္သြင္းျခင္း။</li>
                                            <li class="burmese pad-15">Edit Post Page တြင္ Dynamic Category Selection ထည့္သြင္းျခင္း။</li>
                                            <li class="burmese pad-15">Dashboard တြင္ extra element မ်ား ထည့္သြင္းျခင္း။</li>
                                            <li class="burmese pad-15">WYSIWYG Editor ထည့္သြင္းျခင္း။</li>
                                            <li class="burmese pad-15">Post Images and Read More Button မ်ားခ်ိတ္ဆက္ျခင္း။</li>
                                            <li class="burmese pad-15">Post Update Notification ထည့္သြင္းျခင္း။</li>
                                            <li class="burmese pad-15">Front end တြင္ Post Edit Link ထည့္သြင္းျခင္း။</li>
                                            <li class="burmese pad-15">Bulk Options Posts ထည့္သြင္းျခင္း အပိုင္း(၁)။</li>
                                            <li class="burmese pad-15">Bulk Options Posts ထည့္သြင္းျခင္း အပိုင္း(၂)။</li>
                                            <li class="burmese pad-15">Online Users မ်ား အားေဖာ္ျပျခင္း။</li>
                                            <li class="burmese pad-15">Navigation တြင္ Online Users မ်ား အားေဖာ္ျပျခင္း။</li>
                                            <li class="burmese pad-15">Instant Users Online count without refreshing အားေလ့လာျခင္း အပိုင္း(၁)။</li>
                                            <li class="burmese pad-15">Instant Users Online count without refreshing အားေလ့လာျခင္း အပိုင္း(၂)။</li>
                                            <li class="burmese pad-15">New Function အား explanation and implementation ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">System အတြင္း User Login ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Admin တြင္ add users new system ထည့္သြင္းျခင္း ။</li>
                                            <li class="burmese pad-15">Edit Page တြင္ new password system ထည့္သြင္းျခင္း အပိုင္း(၁)။</li>
                                            <li class="burmese pad-15">Edit Page တြင္ new password system ထည့္သြင္းျခင္း အပိုင္း(၂)။</li>
                                            <li class="burmese pad-15">Edit User Page အား cleaning up ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Comment count ဖန္တီးျခင္း ႏွင့္amount ေဖာ္ျပျခင္း ။</li>
                                            <li class="burmese pad-15">Comment count တြင္ link ဖန္တီးျခင္း ႏွင့္ get request ပို႔ျခင္း။</li>
                                            <li class="burmese pad-15"> Comments page to specific posts အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Same Page မ်ားအားဖ်က္ျခင္း။</li>
                                            <li class="burmese pad-15">Add Page အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15"> Insertion အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Fixing User Display Issue အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Edit Post Page Update အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Upgrading Front End အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">URL and MySQL Injection Protection အားေလ့လာျခင္း ။</li>
                                            <li class="burmese pad-15">WARNING BEFORE GOING ONLINE</li>
                                            <li class="burmese pad-15">Hosting Setup အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Online Errors မ်ားအားေဖာ္ျပျခင္း။</li>
                                            <li class="burmese pad-15">Files Uploading အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Online Database အားဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Database အား Import ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Fixing access to application အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15"> Getting the right PHP online version (FIXED)။</li>
                                            <li class="burmese pad-15">Contact Page တစ္ခုဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Contact Page အား Upload လုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Email ေပးပို႔ျခင္း။</li>
                                            <li class="burmese pad-15">Email Header အား modify ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Bootstrap Modal Delete Confirm Feature အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Markup တစ္ခုဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Writing the code။</li>
                                            <li class="burmese pad-15">No posts or category message features အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">No posts feature home page အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">No categories feature အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15"> Don't show draft to visitors but everything to admin </li>
                                            <li class="burmese pad-15">Applying functionality to mayor pages အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Active navigation links အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Login form visibility when logged in or logged out အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Duplicate category improvement အားေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Fixing bug in our edit post javascript editor အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Cloning empty fields and table shifting fix အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Refactoring index in admin အပိုင္း(၁)။</li>
                                            <li class="burmese pad-15">Refactoring index in admin အပိုင္း(၂)။</li>
                                            <li class="burmese pad-15">Refactoring our view all posts by JOINING TABLES အပိုင္း(၁)။</li>
                                            <li class="burmese pad-15">Refactoring our view all posts by JOINING TABLES အပိုင္း(၂)။</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">MySQL သင္ခန္းစာမ်ား</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body pad-20 pad-bot-20 pad-top-15">
                                        <ol>
                                            <li class="burmese pad-15">အခန္း (၁) မိတ္ဆက္</li>
                                            <li class="burmese pad-15">အခန္း(၂) ေရးသားနည္း</li>
                                            <li class="burmese pad-15">အခန္း(၃) Table မွ စြဲထုတ္ျခင္း(select)</li>
                                            <li class="burmese pad-15">အခန္း(၄) Distinct</li>
                                            <li class="burmese pad-15">အခန္း(၅) အျခအေနစစ္ျခင္း(where)</li>
                                            <li class="burmese pad-15">အခန္း(၆) And &amp; Or</li>
                                            <li class="burmese pad-15">အခန္း(၇) အစီအစဥ္အစဥ္တက်ထုတ္ျပျခင္း(Order Bu)</li>
                                            <li class="burmese pad-15">အခန္း(၈) Table ထဲသို႕Data သိုေလွာင္ျခင္း(Insert)</li>
                                            <li class="burmese pad-15">အခန္း(၉) Table Data မ်ား အား ျပင္ဆင္ျခင္း(Update)</li>
                                            <li class="burmese pad-15">အခန္း(၁၀) Table Data မ်ား အားျဖတ္ျခင္း(Delete)</li>
                                            <li class="burmese pad-15">အခန္း(၁၁) တူတာကိုစြဲထုတ္ျပျခင္း(like)</li>
                                            <li class="burmese pad-15">အခန္း(၁၂) Join</li>
                                            <li class="burmese pad-15">အခန္း(၁၃) Inner Join</li>
                                            <li class="burmese pad-15">အခန္း(၁၄) Left Join</li>
                                            <li class="burmese pad-15">အခန္း(၁၅) Right Join</li>
                                            <li class="burmese pad-15">အခန္း(၁၆) Union</li>
                                            <li class="burmese pad-15">Dtabase Advacned သင္ခန္းစာမ်ားလည္း ပါဝင္မည္၊</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">AJAX &amp; JSON သင္ခန္းစာမ်ား</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body pad-20 pad-bot-20 pad-top-15">
                                        <ol>
                                            <li class="burmese pad-15">မိတ္ဆက္။</li>
                                            <li class="burmese pad-15">XMLHttp အေၾကာင္း နားလည္ေစျခင္း။</li>
                                            <li class="burmese pad-15">Request တစ္ခုတည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">Request ရယူျခင္းႏွင့္ ကိုင္တြယ္အလုပ္လုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Event အေၾကာင္းေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">PHP Ajax သံုး Chat Application တည္ေဆာက္ျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">PHP Ajax သံုး Chat Application တည္ေဆာက္ျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">PHP Ajax သံုး Chat Application တည္ေဆာက္ျခင္း (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">PHP Ajax သံုး Chat Application တည္ေဆာက္ျခင္း (အပိုင္း ၄)။</li>
                                            <li class="burmese pad-15">PHP Ajax သံုး Chat Application တည္ေဆာက္ျခင္း (အပိုင္း ၅)။</li>
                                            <li class="burmese pad-15">PHP Ajax သံုး Chat Application တည္ေဆာက္ျခင္း (အပိုင္း ၆)။</li>
                                            <li class="burmese pad-15">PHP Ajax သံုး Chat Application တည္ေဆာက္ျခင္း (အပိုင္း ၇)။</li>
                                            <li class="burmese pad-15">JSON မိတ္ဆက္။</li>
                                            <li class="burmese pad-15">JSON Encode ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">JSON Decode ေျဖျခင္း။</li>
                                            <li class="burmese pad-15">JSON Object တည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">JSON Array အားနားလည္ထားျခင္း။</li>
                                            <li class="burmese pad-15">JSON File အား Database အျဖစ္ အသံုးခ်ျခင္း။</li>
                                            <li class="burmese pad-15">PHP ႏွင့္ JSON သံုး Registration System တည္ေဆာက္ျခငး (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">PHP ႏွင့္ JSON သံုး Registration System တည္ေဆာက္ျခငး (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">PHP ႏွင့္ JSON သံုး Registration System တည္ေဆာက္ျခငး (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">PHP ႏွင့္ JSON သံုး Registration System တည္ေဆာက္ျခငး (အပိုင္း ၄)။</li>
                                            <li class="burmese pad-15">PHP ႏွင့္ JSON သံုး Registration System တည္ေဆာက္ျခငး (အပိုင္း ၅)။</li>
                                            <li class="burmese pad-15">PHP ႏွင့္ JSON သံုး Registration System တည္ေဆာက္ျခငး (အပိုင္း ၆)။</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title burmese">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">MVC (Model View Controller) သင္ခန္းစာမ်ား</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body pad-20 pad-bot-20 pad-top-15">
                                        <ol>
                                            <li class="burmese pad-15">သင္ခန္းစာ မိတ္ဆက္။</li>
                                            <li class="burmese pad-15">MVC Architecture အားနားလည္ထားျခင္း။</li>
                                            <li class="burmese pad-15">Web Application ကုမၼဏီမ်ားတြင္ ေတြ႔ႀကံဳရေသာ ျပႆနာမ်ား။</li>
                                            <li class="burmese pad-15">MVC Design Pattern အား တည္ေဆာက္ထားပံု။</li>
                                            <li class="burmese pad-15">Appache Server, MySQL Database ႏွင့္ PHP တို႔ Install ျပဳလုပ္ပံု။</li>
                                            <li class="burmese pad-15">Project တစ္ခုတည္ေဆာက္ျခင္းႏွင့္ လက္တြ႔ Run ၾကည့္ျခင္း</li>
                                            <li class="burmese pad-15">Server configuration အားေျပာင္းလဲျခင္း။</li>
                                            <li class="burmese pad-15">URL Routing အလုပ္လုပ္ပံုအားနားလည္ထားျခင္း။</li>
                                            <li class="burmese pad-15">Font Controller အေၾကာင္း နားလည္ေစျခင္း။</li>
                                            <li class="burmese pad-15">URL Design အား စိတ္ႀကိဳက္ျဖစ္ေအာင္ ဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Appache Server အား Rewrite ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Routing Table ဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Request ႏွင့္ Rout Data တို႔ တိုက္စစ္ျခင္း။</li>
                                            <li class="burmese pad-15">Routing System အား အဆင့္ျမင့္တင္ျခင္း။</li>
                                            <li class="burmese pad-15">Regular Expression အသံုးျပဳ၍ URL parameters အား စစ္ေဆးျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Regular Expression အသံုးျပဳ၍ URL parameters အား စစ္ေဆးျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Regular Expression အသံုးျပဳ၍ URL parameters အား စစ္ေဆးျခင္း (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">Regular Expression အသံုးျပဳ၍ URL parameters အား စစ္ေဆးျခင္း (အပိုင္း ၄)။</li>
                                            <li class="burmese pad-15">Regular Expression အသံုးျပဳ၍ URL parameters အား စစ္ေဆးျခင္း (အပိုင္း ၅)။</li>
                                            <li class="burmese pad-15">Regular Expression အသံုးျပဳ၍ URL parameters အား စစ္ေဆးျခင္း (အပိုင္း ၆)။</li>
                                            <li class="burmese pad-15">URL request ေပၚမႈတည္၍ Controller အားရယူျခင္း။</li>
                                            <li class="burmese pad-15">URL သို႔စိတ္ႀကိဳက္ တန္ဖိုးမ်ား ထည့္သြင္းျခင္း။</li>
                                            <li class="burmese pad-15">Controller မ်ားႏွင့္ Methods  မ်ား။</li>
                                            <li class="burmese pad-15">Methods မ်ားအား စိတ္ႀကိဳက္ေခၚယူျခင္း။</li>
                                            <li class="burmese pad-15">Controller ေပၚမႈတည္၍ Methods မ်ားအား Parameters ေပးေခၚျခင္း။</li>
                                            <li class="burmese pad-15">NameSpace မ်ားအသံုးျပဳ၍ Project အား ပိုမို ေကာင္းမြန္ေအာင္ ဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Auto Loading Class မ်ားဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Auto Loading Class မ်ားဖန္တီး၍ namespace ထည့္သြင္းျခင္း။</li>
                                            <li class="burmese pad-15">Route Table မွ Parameters မ်ားအား Controllers မ်ားသို႔ေပးပို႔ျခင္း။</li>
                                            <li class="burmese pad-15">Class အတြင္း ခြင့္ျပဳမထားေသာ Methods မ်ားအားေခၚၾကည့္ျခင္း</li>
                                            <li class="burmese pad-15">လုပ္ေဆာင္ခ်က္တစ္ခုၿပီးတိုင္း Method တစ္ခုအားေခၚယူျခင္း။</li>
                                            <li class="burmese pad-15">Controllers မ်ားအား Sub Directory ထဲသို႔ထည့္သြင္း၍ Namespace မ်ားတည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">Views မ်ားစတင္ဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Views မ်ားအား ကိုင္တြယ္ အလုပ္လုပ္မည့္ Class အားဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Output Esacping အေၾကာင္းနားလည္ျခင္း ။</li>
                                            <li class="burmese pad-15">Controller မွ View သို႔ ေဒတာမ်ားလွမ္းပို႔ျခင္း။</li>
                                            <li class="burmese pad-15">Template Engine တစ္ခုတည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">View မ်ားအား ဖန္တီးရလြယ္ကူေအာင္ ျပဳျပင္ရလြယ္ကူေအာင္ ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Base Template တည္ေဆာက္၍ Abstract အျဖစ္ ထားရွိကာ views တိုင္းအား Inherit လုပ္ေစျခင္း။</li>
                                            <li class="burmese pad-15">Composer အသံုးျပဳ၍ Third-Party Library ထည့္သြင္းျခင္း</li>
                                            <li class="burmese pad-15">Composer Install ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Composer အသံုးျပဳ၍ Template Engine Library ထည့္သြင္းျခင္း။</li>
                                            <li class="burmese pad-15">Composer အသံုးျပဳ၍ Package Classes အားလံုး Install ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Template Engine Library အား Composer အသံုးျပဳ၍ Loading ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Composer Autoloader သို႔ ကိုယ္ပိုင္ Class အားထည့္သြင္းျခင္း။</li>
                                            <li class="burmese pad-15">Autoload function အား composer Autoload function ႏွင့္ ေျပာင္းျပစ္ျခင္း။</li>
                                            <li class="burmese pad-15">Modal မိတ္ဆက္။</li>
                                            <li class="burmese pad-15">Database ဖန္တီး၍ PHP ႏွင့္ခ်ိတ္ဆက္ၾကည့္ျခင္း။</li>
                                            <li class="burmese pad-15">PDO အသံုးျပဳ၍ Data Query ဖမ္းၾကည့္ျခင္း။</li>
                                            <li class="burmese pad-15">Modal အသံုးျပဳ၍ Database မွ ေဒတာမ်ား ရယူကာ View တြင္ေဖာ္ျပျခင္း။</li>
                                            <li class="burmese pad-15">လိုအပ္တဲ့အခ်ိန္မွာသာ database အားခ်ိတ္ဆက္၍ အျခား အခ်ိန္မ်ားတြင္ Reset လုပ္ထားျခင္း။</li>
                                            <li class="burmese pad-15">Database Connection Mode အမွားမ်ားအား စစ္ေဆးျခင္း</li>
                                            <li class="burmese pad-15">Configuration File အားတည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">Error Reports မ်ာအား ဖတ္ရႈ႕နားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Error ဖမ္းရန္ Exception Handling အားအသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">PHP configuration Setting အား အေျပာင္းအလဲ ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">PHP Configuration အား ေျပာင္းလဲ၍ Error message မ်ားေဖာ္ျပႏိုင္ေစရန္ ဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Error Detail အား Developer Friendly message မ်ားျဖစ္ေဖာ္ျပျခင္း။</li>
                                            <li class="burmese pad-15">HTTP Status Codes မ်ားေပၚမႈတည္၍ မတူညီေသာ Errors မ်ားအား အမ်ိဳးအစားခြဲျခင္း။</li>
                                            <li class="burmese pad-15">Error Page အတြက္ View ဖန္တီးျခင္း</li>
                                            <li class="burmese pad-15">နာမည္ႀကီး Framework မ်ား မိတ္ဆက္။</li>
                                            <li class="burmese pad-15">ဆက္လက္ေလ့လာရန္ လမ္းညြန္ခ်က္။</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">Laravel သင္ခန္းစာမ်ား</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body pad-20 pad-bot-20 pad-top-15">
                                        <ol>
                                            <li class="burmese pad-15">မိတ္ဆက္။</li>
                                            <li class="burmese pad-15">သင္ခန္းစာတစ္ေလွ်ာက္ ေလ့လာသြားမည့္ အခ်က္မ်ား။</li>
                                            <li class="burmese pad-15">သင္ခန္းစာတစ္ေလွ်ာက္ လိုအပ္မည့္ Software ႏွင့္ Helper Tools မ်ား။</li>
                                            <li class="burmese pad-15">Environment Setup ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Laravel Application အား စတင္တည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">Laravel နဲ႔ PHP ကြာျခားခ်က္။</li>
                                            <li class="burmese pad-15">MVC Framework ႏွင့္ Laravel။</li>
                                            <li class="burmese pad-15">Laravel Project မွာ Views အေၾကာင္းနားလည္ေစျခင္း။</li>
                                            <li class="burmese pad-15">Laravel Project မွ Buil-in Blade Template Engine ႏွင့္ မိတ္ဆက္ေပးျခင္း။</li>
                                            <li class="burmese pad-15">Routing ႏွင့္ GET Request တို႔အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Routing ႏွင့္ POST Request တို႔အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Routes ေတြအားလံုးအား ေနရာခ်ထားျခင္း။</li>
                                            <li class="burmese pad-15">Laravel Models ႏွင့္ Database Access။</li>
                                            <li class="burmese pad-15">User Input အား စစ္ေဆးျခင္း။</li>
                                            <li class="burmese pad-15">Models ႏွင့္ Migrations တို႔အေၾကာင္း (Database တြင္ Data structures တည္ေဆာက္ျခင္း)။</li>
                                            <li class="burmese pad-15">Data သိမ္းဆည္းျခင္း။</li>
                                            <li class="burmese pad-15">Modal မွာ Views သို႔ ေဒတာမ်ား ရယူျခင္း။</li>
                                            <li class="burmese pad-15">Data ထည့္သြင္းျခင္း။</li>
                                            <li class="burmese pad-15">Relationships အေၾကာင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Relationships အေၾကာင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Laravel Query Builder အားအသံုးျပဳ၍ Data ရယူျခင္း။
                                            </li><li class="burmese pad-15">Data ေရြးခ်ယ္ ရယူျခင္း။</li>
                                            <li class="burmese pad-15">Data မ်ားအား ကိုင္တြယ္ အလုပ္လုပ္ျခငး။</li>
                                            <li class="burmese pad-15">Pages မ်ားတြင္ Data မ်ားအားေဖာ္ျပျခင္း။</li>
                                            <li class="burmese pad-15">Ajax Request တစ္ခုဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Project အား ျပန္လယ္ စီမံျခင္း။</li>
                                            <li class="burmese pad-15">WorkSpace ျပင္ဆင္ျခင္း။</li>
                                            <li class="burmese pad-15">လိုအပ္သည့္ Models ႏွင့္ Migrations မ်ား။</li>
                                            <li class="burmese pad-15">Main View တည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">CSS အလွဆင္ျခငး။</li>
                                            <li class="burmese pad-15">Quote မ်ား ဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Quote မ်ားအာေဖာ္ျပျခင္း။</li>
                                            <li class="burmese pad-15">Input မ်ားအားစစ္ေဆး၍ မွားမွန္ အေျဖထုတ္ေပးျခင္း။</li>
                                            <li class="burmese pad-15">Quotes မ်ားအားျဖတ္ျပစ္ျခင္း။</li>
                                            <li class="burmese pad-15">Quotes မ်ားအား စစ္ထုတ္ျခငး။</li>
                                            <li class="burmese pad-15">Pagination System တစ္ခု တည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">Event-Drivent Applications တစ္ခုတည္ေဆာက္ျခငး။</li>
                                            <li class="burmese pad-15">Events ႏွင့္ Listeners တို႔အေၾကာင္း။</li>
                                            <li class="burmese pad-15">Mail Address ရယူျခင္း။</li>
                                            <li class="burmese pad-15">Mailtrap အသံုးျပဳ၍ mail စစ္ေဆးျခင္း။</li>
                                            <li class="burmese pad-15">Email ပို႔ျခင္း။</li>
                                            <li class="burmese pad-15">Mails မ်ားအတြက္ Callback Link ထည့္သြင္းျခင္း။</li>
                                            <li class="burmese pad-15">User Modal တစ္ခုဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">လံုျခံဳေရးအတြက္ စစ္ေဆးျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">လံုျခံဳေရးအတြက္ စစ္ေဆးျခငး (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Routes မ်ားအား ကာကြယ္ရန္ Middleware Filters မ်ားထည့္သြင္းျခင္း။</li>
                                            <li class="burmese pad-15">Middleware အသံုးျပဳ၍ Routes မ်ားအား ေနရာခ်ျခင္း။</li>
                                            <li class="burmese pad-15">Blog System တစ္ခုတည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">WorkSpace အား ျပင္ဆင္ျခင္း။</li>
                                            <li class="burmese pad-15">User Interface အား စီမံျခင္း။</li>
                                            <li class="burmese pad-15">Models ႏွင့္ Migrations မ်ား။</li>
                                            <li class="burmese pad-15">Admin Dashborad အားဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">အလွဆင္ျခင္း။</li>
                                            <li class="burmese pad-15">Post အတြက္ PHP ကုဒ္အားျပင္ဆင္ျခင္း။</li>
                                            <li class="burmese pad-15">Post အားလံုးအား List အေနႏွင့္ ေဖာ္ျပျခင္း။</li>
                                            <li class="burmese pad-15">Post Edit ႏွင့္ Delete Functionalities တို႔အား ဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Category View အား တည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">Navigation ဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Category အသစ္ထည့္သြင္းျခင္း။</li>
                                            <li class="burmese pad-15">Category အားျပင္ဆင္ျခင္း။</li>
                                            <li class="burmese pad-15">Category အားျဖတ္ျပစ္ျခင္း။</li>
                                            <li class="burmese pad-15">JavaScript သံုး၍ Category ႏွင့္ Posts တို႔အား ျဖည့္စြက္ျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">JavaScript သံုး၍ Category ႏွင့္ Posts တို႔အား ျဖည့္စြက္ျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Contact Message တည္ေဆာက္ျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Contact Message တည္ေဆာက္ျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Contact Message တည္ေဆာက္ျခင္း (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">Login ႏွင့္ Logout System တည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">ဆက္လက္ေလ့လာရန္။</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">Small Projects မ်ား</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body pad-20 pad-bot-20 pad-top-15">
                                        <ol>
                                            <li class="burmese pad-15">image-resize ျပဳလုပ္ျခင္း (အပိုင္း ၁):။</li>
                                            <li class="burmese pad-15">image-resize ျပဳလုပ္ျခင္း (အပိုင္း ၂):။</li>
                                            <li class="burmese pad-15">image-resize ျပဳလုပ္ျခင္း (အပိုင္း ၃):။</li>
                                            <li class="burmese pad-15">image-resize ျပဳလုပ္ျခင္း (အပိုင္း ၄):။</li>
                                            <li class="burmese pad-15">image-resize ျပဳလုပ္ျခင္း (အပိုင္း ၅):။</li>
                                            <li class="burmese pad-15">DataBase ထဲ က data အား PHP အသံုးျပဳ၍ ႐ွာေဖြျခင္း (အပိုင္း ၁):။</li>
                                            <li class="burmese pad-15">DataBase ထဲ က data အား PHP အသံုးျပဳ၍ ႐ွာေဖြျခင္း (အပိုင္း ၂):။</li>
                                            <li class="burmese pad-15">DataBase ထဲ က data အား PHP အသံုးျပဳ၍ ႐ွာေဖြျခင္း (အပိုင္း ၃):။</li>
                                            <li class="burmese pad-15">DataBase ထဲ က data အား PHP အသံုးျပဳ၍ ႐ွာေဖြျခင္း (အပိုင္း ၄):။</li>
                                            <li class="burmese pad-15">Developer API ဖန္တီးျခင္း (အပိုင္း ၁):။</li>
                                            <li class="burmese pad-15">Developer API ဖန္တီးျခင္း (အပိုင္း ၂):။</li>
                                            <li class="burmese pad-15">Developer API ဖန္တီးျခင္း (အပိုင္း ၃):။</li>
                                            <li class="burmese pad-15">Developer API ဖန္တီးျခင္း (အပိုင္း ၄):။</li>
                                            <li class="burmese pad-15">Developer API ဖန္တီးျခင္း (အပိုင္း ၅):။</li>
                                            <li class="burmese pad-15">Error Log ဖန္တီးျခင္း  (အပိုင္း ၁):။</li>
                                            <li class="burmese pad-15">Error Log ဖန္တီးျခင္း  (အပိုင္း ၂):။</li>
                                            <li class="burmese pad-15">Error Log ဖန္တီးျခင္း  (အပိုင္း ၃):။</li>
                                            <li class="burmese pad-15">zip File ျဖည္ျခင္း (အပိုင္း ၁):။</li>
                                            <li class="burmese pad-15">zip File ျဖည္ျခင္း (အပိုင္း ၂):။</li>
                                            <li class="burmese pad-15">zip File ျဖည္ျခင္း (အပိုင္း ၃):။</li>
                                            <li class="burmese pad-15">You Tube Playlist နဲ႔ Videos အား ရယူျခင္း (အပိုင္း ၁):။</li>
                                            <li class="burmese pad-15">You Tube Playlist နဲ႔ Videos အား ရယူျခင္း (အပိုင္း ၂):။</li>
                                            <li class="burmese pad-15">You Tube Playlist နဲ႔ Videos အား ရယူျခင္း (အပိုင္း ၃):။</li>
                                            <li class="burmese pad-15">You Tube Playlist နဲ႔ Videos အား ရယူျခင္း (အပိုင္း ၄):။</li>
                                            <li class="burmese pad-15">You Tube Playlist နဲ႔ Videos အား ရယူျခင္း (အပိုင္း ၅):။</li>
                                            <li class="burmese pad-15">Multiple File upload လုပ္ျခင္း (အပိုင္း ၁):။</li>
                                            <li class="burmese pad-15">Multiple File upload လုပ္ျခင္း (အပိုင္း ၂):။</li>
                                            <li class="burmese pad-15">Multiple File upload လုပ္ျခင္း (အပိုင္း ၃):။</li>
                                            <li class="burmese pad-15">Multiple File upload လုပ္ျခင္း (အပိုင္း ၄):။</li>
                                            <li class="burmese pad-15">File Download Speed အား Limit လုပ္ျခင္း (အပိုင္း ၁):။</li>
                                            <li class="burmese pad-15">File Download Speed အား Limit လုပ္ျခင္း (အပိုင္း ၂):။</li>
                                            <li class="burmese pad-15">File Download Speed အား Limit လုပ္ျခင္း (အပိုင္း ၃):။</li>
                                            <li class="burmese pad-15">Mailing List system တည္ေဆာက္ျခင္း (အပိုင္း ၁):။</li>
                                            <li class="burmese pad-15">Mailing List system တည္ေဆာက္ျခင္း (အပိုင္း ၂):။</li>
                                            <li class="burmese pad-15">Mailing List system တည္ေဆာက္ျခင္း (အပိုင္း ၃):။</li>
                                            <li class="burmese pad-15">Mailing List system တည္ေဆာက္ျခင္း (အပိုင္း ၄):။</li>
                                            <li class="burmese pad-15">Page View Counter ဖန္တီးျခင္း (အပိုင္း ၁):။</li>
                                            <li class="burmese pad-15">Page View Counter ဖန္တီးျခင္း (အပိုင္း ၂):။</li>
                                            <li class="burmese pad-15">Page View Counter ဖန္တီးျခင္း (အပိုင္း ၃):။</li>
                                            <li class="burmese pad-15">Pagination System ဖန္တီးျခင္း (အပိုင္း ၁):။</li>
                                            <li class="burmese pad-15">Pagination System ဖန္တီးျခင္း (အပိုင္း ၂):။</li>
                                            <li class="burmese pad-15">Pagination System ဖန္တီးျခင္း (အပိုင္း ၃):။</li>
                                            <li class="burmese pad-15">Pagination System ဖန္တီးျခင္း (အပိုင္း ၄:။</li>
                                            <li class="burmese pad-15">Pagination System ဖန္တီးျခင္း (အပိုင္း ၅):။</li>
                                            <li class="burmese pad-15">Pagination System ဖန္တီးျခင္း (အပိုင္း ၆):။</li>
                                            <li class="burmese pad-15">Random Password Generator ဖန္တီးျခင္း (အပိုင္း ၁):။</li>
                                            <li class="burmese pad-15">Random Password Generator ဖန္တီးျခင္း (အပိုင္း ၂):။</li>
                                            <li class="burmese pad-15">Random Password Generator ဖန္တီးျခင္း (အပိုင္း ၃):။</li>
                                            <li class="burmese pad-15">RSS Feed Generator ဖန္တီးျခင္း (အပိုင္း ၁):။</li>
                                            <li class="burmese pad-15">RSS Feed Generator ဖန္တီးျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">RSS Feed Generator ဖန္တီးျခင္း (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">RSS Feed Generator ဖန္တီးျခင္း (အပိုင္း ၄)။</li>
                                            <li class="burmese pad-15">PHP Secure File Upload ဖန္တီးျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">PHP Secure File Upload ဖန္တီးျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">PHP Secure File Upload ဖန္တီးျခင္း (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">PHP Secure File Upload ဖန္တီးျခင္း (အပိုင္း ၄)။</li>
                                            <li class="burmese pad-15">PHP Secure Including Files အား နားလည္ျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">PHP Secure Including Files အား နားလည္ျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">PHP Secure Including Files အား နားလည္ျခင္း (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">PHP Security Magic Quotes အား နားလည္ျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">PHP Security Magic Quotes အား နားလည္ျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">PHP Security Magic Quotes အား နားလည္ျခင္း (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">Rating Voting System တစ္ခုတည္ေဆာက္ျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Rating Voting System တစ္ခုတည္ေဆာက္ျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Rating Voting System တစ္ခုတည္ေဆာက္ျခင္း (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">Rating Voting System တစ္ခုတည္ေဆာက္ျခင္း (အပိုင္း ၄)။</li>
                                            <li class="burmese pad-15">Temporary Download Link အား ဖန္တီးျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Temporary Download Link အား ဖန္တီးျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Temporary Download Link အား ဖန္တီးျခင္း (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">Temporary Download Link အား ဖန္တီးျခင္း (အပိုင္း ၄)။</li>
                                            <li class="burmese pad-15">Temporary Download Link အား ဖန္တီးျခင္း (အပိုင္း ၅)။</li>
                                            <li class="burmese pad-15">URL အား shorten ျပဳလုပ္ျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">URL အား shorten ျပဳလုပ္ျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">URL အား shorten ျပဳလုပ္ျခင္း (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">URL အား shorten ျပဳလုပ္ျခင္း (အပိုင္း ၄)။</li>
                                            <li class="burmese pad-15">User Profile မ်ား ဖန္တီးျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">User Profile မ်ား ဖန္တီးျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">User Profile မ်ား ဖန္တီးျခင္း (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">User Profile မ်ား ဖန္တီးျခင္း (အပိုင္း ၄)။</li>
                                            <li class="burmese pad-15">User Profile မ်ား ဖန္တီးျခင္း (အပိုင္း ၅)။</li>
                                            <li class="burmese pad-15">User Profile မ်ား ဖန္တီးျခင္း (အပိုင္း ၆)။</li>
                                            <li class="burmese pad-15">User Profile မ်ား ဖန္တီးျခင္း (အပိုင္း ၇)။</li>
                                            <li class="burmese pad-15">User Profile မ်ား ဖန္တီးျခင္း (အပိုင္း ၈)။</li>
                                            <li class="burmese pad-15">CSV File အား create, read, write လုပ္ျခင္း  (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">CSV File အား create, read, write လုပ္ျခင္း  (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">CSV File အား create, read, write လုပ္ျခင္း  (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">CSV File အား create, read, write လုပ္ျခင္း  (အပိုင္း ၄)။</li>
                                            <li class="burmese pad-15">CSV File အား create, read, write လုပ္ျခင္း  (အပိုင္း ၅)။</li>
                                            <li class="burmese pad-15">CSV File အား create, read, write လုပ္ျခင္း  (အပိုင္း ၆)။</li>
                                            <li class="burmese pad-15">You Tube API Signature အား နားလည္ျခင္း (အပိုင္း ၁)</li>
                                            <li class="burmese pad-15">You Tube API Signature အား နားလည္ျခင္း (အပိုင္း ၂)</li>
                                            <li class="burmese pad-15">You Tube API Signature အား နားလည္ျခင္း (အပိုင္း ၃)</li>
                                            <li class="burmese pad-15">You Tube API Signature အား နားလည္ျခင္း (အပိုင္း ၄)</li>
                                            <li class="burmese pad-15">You Tube API Signature အား နားလည္ျခင္း (အပိုင္း ၅)</li>
                                            <li class="burmese pad-15">Facebook Login API အသံုးျပဳ၍ Login System တည္ေဆာက္ျခငး (အပိုင္း ၁)</li>
                                            <li class="burmese pad-15">Facebook Login API အသံုးျပဳ၍ Login System တည္ေဆာက္ျခငး (အပိုင္း ၂)</li>
                                            <li class="burmese pad-15">Facebook Login API အသံုးျပဳ၍ Login System တည္ေဆာက္ျခငး (အပိုင္း ၃)</li>
                                            <li class="burmese pad-15">Facebook Login API အသံုးျပဳ၍ Login System တည္ေဆာက္ျခငး (အပိုင္း ၄)</li>
                                            <li class="burmese pad-15">Facebook Login API အသံုးျပဳ၍ Login System တည္ေဆာက္ျခငး (အပိုင္း ၅)</li>
                                            <li class="burmese pad-15">Google+ Login API အသံုးျပဳ၍ Login System တည္ေဆာက္ျခငး (အပိုင္း ၁)</li>
                                            <li class="burmese pad-15">Google+ Login API အသံုးျပဳ၍ Login System တည္ေဆာက္ျခငး (အပိုင္း 2)</li>
                                            <li class="burmese pad-15">Google+ Login API အသံုးျပဳ၍ Login System တည္ေဆာက္ျခငး (အပိုင္း 3)</li>
                                            <li class="burmese pad-15">Google+ Login API အသံုးျပဳ၍ Login System တည္ေဆာက္ျခငး (အပိုင္း 4)</li>
                                            <li class="burmese pad-15">Google+ Login API အသံုးျပဳ၍ Login System တည္ေဆာက္ျခငး (အပိုင္း 5)</li>
                                            <li class="burmese pad-15">Google+ Login API အသံုးျပဳ၍ Login System တည္ေဆာက္ျခငး (အပိုင္း 6)</li>
                                            <li class="burmese pad-15">PHP Security XSS(Cross Site Scripting) Attacks အား နားလည္ျခင္း (အပိုင္း ၁)</li>
                                            <li class="burmese pad-15">PHP Security XSS(Cross Site Scripting) Attacks အား နားလည္ျခင္း (အပိုင္း ၂)</li>
                                            <li class="burmese pad-15">PHP Security XSS(Cross Site Scripting) Attacks အား နားလည္ျခင္း (အပိုင္း ၃)</li>
                                            <li class="burmese pad-15">PHP Security XSS(Cross Site Scripting) Attacks အား နားလည္ျခင္း (အပိုင္း ၄)</li>
                                            <li class="burmese pad-15">PHP Security XSS(Cross Site Scripting) Attacks အား နားလည္ျခင္း (အပိုင္း ၅)</li>
                                            <li class="burmese pad-15">PHP Security XSS(Cross Site Scripting) Attacks အား နားလည္ျခင္း (အပိုင္း ၆)</li>
                                            <li class="burmese pad-15">PHP Security XSS(Cross Site Scripting) Attacks အား နားလည္ျခင္း (အပိုင္း ၇)</li>
                                            <li class="burmese pad-15">PHP Security SQL Injection အား နားလည္ျခင္း (အပိုင္း ၁)</li>
                                            <li class="burmese pad-15">PHP Security SQL Injection အား နားလည္ျခင္း (အပိုင္း ၂)</li>
                                            <li class="burmese pad-15">PHP Security SQL Injection အား နားလည္ျခင္း (အပိုင္း ၃)</li>
                                            <li class="burmese pad-15">PHP Security SQL Injection အား နားလည္ျခင္း (အပိုင္း ၄)</li>
                                            <li class="burmese pad-15">PHP Security SQL Injection အား နားလည္ျခင္း (အပိုင္း ၅)</li>
                                            <li class="burmese pad-15">PHP Security SQL Injection အား နားလည္ျခင္း (အပိုင္း ၆)</li>
                                            <li class="burmese pad-15">PHP Security SQL Injection အား နားလည္ျခင္း (အပိုင္း ၇)</li>
                                            <li class="burmese pad-15">PHP Security SQL Injection အား နားလည္ျခင္း (အပိုင္း ၈)</li>
                                            <li class="burmese pad-15">PHP Security SQL Injection အား နားလည္ျခင္း (အပိုင္း ၉)</li>
                                            <li class="burmese pad-15">PHP Security SQL Injection အား နားလည္ျခင္း (အပိုင္း ၁၀)</li>
                                            <li class="burmese pad-15">PHP Security SQL Injection အား နားလည္ျခင္း (အပိုင္း ၁၁)</li>
                                            <li class="burmese pad-15">PHP Security SQL Injection အား နားလည္ျခင္း (အပိုင္း ၁၂)</li>
                                            <li class="burmese pad-15">PHP Security SQL Injection အား နားလည္ျခင္း (အပိုင္း ၁၃)</li>
                                            <li class="burmese pad-15">PHP Security SQL Injection အား နားလည္ျခင္း (အပိုင္း ၁၄)</li>
                                            <li class="burmese pad-15">PHP Security SQL Injection အား နားလည္ျခင္း (အပိုင္း ၁၅)</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">လက္ေတြ႔ လုပ္ေဆာင္ရမည့္ Project မ်ား</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body pad-20 pad-bot-20 pad-top-15">
                                        <ul class="burmese">
                                            <li class="pad-20"><i class="fa fa-hand-o-right"></i> <span class="pad-15">Functionality ျပည့္စံုသည့္ အြန္လိုင္းမွ ေငြေပးေျခႏိုင္သည့္ Online Shopping ဝက္ဆိုဒ္ တစ္ခုအား Develop လုပ္ျခင္း</span></li>
                                            <li class="pad-20"><i class="fa fa-hand-o-right"></i> <span class="pad-15">Laravel Framework အသံုးျပဳ၍ Facebook ကဲ့သို႔ေသာ Social Media Site တစ္ခုဖန္တီးျခင္း</span></li>
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
