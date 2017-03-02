@extends('layout.master')

@section('title', 'Laravel Book')

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
                    <li><a href="{{ url('/services/home') }}">Services</a></li>
                    <li>Web</li>
                </ul>
            </div>
        </div>
    </div>

@stop

<!--  End Breadcrumb -->

<!-- expand -->
@section('expand_book')
    <!-- Modal -->
    <div class="modal fade open-book-view" id="open-book-view" role="dialog">
        <div class="position-center-center" role="document">
            <div class="modal-content">
                <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div id="magazine">
                    <div style="background-image:url('{{ asset('images/pages/01.jpg') }}');"></div>
                    <div style="background-image:url('{{ asset('images/pages/02.jpg') }}');"></div>
                    <div style="background-image:url('{{ asset('images/pages/03.jpg') }}');"></div>
                    <div style="background-image:url('{{ asset('images/pages/04.jpg') }}');"></div>
                    <div style="background-image:url('{{ asset('images/pages/04.jpg') }}');"></div>
                    <div style="background-image:url('{{ asset('images/pages/05.jpg') }}');"></div>
                    <div style="background-image:url('{{ asset('images/pages/05.jpg') }}');"></div>
                    <div style="background-image:url('{{ asset('images/pages/06.jpg') }}');"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- expand -->
@stop

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
                                        <img src="{{ asset('images/books/laravel_book_cover.png') }}" alt="">
                                        <a class="expand" href="#open-book-view" data-toggle="modal"><i class="fa fa-expand"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Product Thumnbnail -->

                        <!-- Product Detail -->
                        <div class="col-lg-8 col-md-7">
                            <div class="single-product-detail">
                                <span class="availability">Availability :<strong>Stock<i class="fa fa-check-circle"></i></strong></span>
                                <h3>PHP with Laravel 5.3 Book</h3>

                                <div class="book-info-list">
                                    <ul>
                                        <li><span>Number of Pages: </span>324</li>
                                        <li><span>Video lessons: </span>100 more</li>
                                        <li><span>Price: </span> 20000 kyats</li>
                                    </ul>
                                </div>

                                <p></p>

                                <h4 class="myanmar">ျမန္မာႏိုင္ငံရဲ့ ေစ်းကြက္လိုအပ္ခ်က္</h4>
                                <p class="myanmar">အရည္အခ်င္း ရွိတဲ့ Developer ေတြက ကိုယ္ပိုင္ ကုဒ္ပဲ ေရးခ်င္တာပါ။ သူမ်ား ေရးထားတဲ့ snippet တစ္ခုကိုျဖစ္ေစ Framework တစ္ခုကိုျဖစ္ေစ
                                    ယူသံုးရမွာ ရွက္တက္ၾကပါတယ္။ ကိုယ္ပိုင္ေရးတယ္ဆိုရာမွာ လည္း System တစ္ခုကို Develop လုပ္ရသလို အခ်ိန္မေရြးျပဳျပင္လြယ္ေအာင္ လိုအပ္တဲ့ Functionalities
                                    ေတြကို ထပ္ျဖည့္ရာမွာ ေရးခဲ့ၿပီးသား snippets ေတြကို ထိခိုက္မႈမရွိေအာင္၊ Database Design ကို ေသသပ္ <a href="javascript:void(0);" style="display: inline; text-decoration: underline;" data-toggle="collapse" data-target=".php-laravel"><i class="fa fa-arrow-right"></i> read more </a><span class="php-laravel collapse">ေအာင္၊ လံုျခံဳေရးအားနည္းခ်က္မရွိေအာင္၊ ဘာသာရပ္ အမ်ိဳးမ်ိဳး
                                    Support ေပးႏိုင္ေအာင္ စသျဖင့္ စီစဥ္ရတဲ့အခ်က္ေတြမ်ားစြာပါ၀င္ပါတယ္။ အနိမ့္ဆံုး Blog System ေလး တစ္ခု တည္ေဆာက္မယ္ဆိုရင္ေတာ့ Permission ခြဲျခားျခင္း၊ သတ္မွတ္ထားသည့္
                                    Permission အလိုက္ Post Management လုပ္ျခင္း (create,edit,update,delete)၊ User Management လုပ္ျခင္း၊ Multimedia Support ေပးတဲ့ post ျဖစ္ေအာင္ တည္ေဆာက္ျခင္း၊
                                    အသင္း၀င္မ်ားအတြက္ Membership System တည္ေဆာက္ျခင္း၊ Post မ်ားအတြက္ Comment System မ်ားတည္ေဆာက္ျခင္း၊ လံုျခံဳေရးအတြက္
                                    HTTP Request မ်ားအား Filtering လုပ္ျခင္း၊ Localization ထည့္သြင္း၍ ဝက္ဆိုဒ္မွာ ဘာသာရပ္ အမ်ိဳးမ်ိဳးကို Support လုပ္ေပးျခင္း စသျဖင့္ ေရးသားရမယ့္
                                    Snippets ေတြအမ်ားႀကီးပါဝင္ပါတယ္။ ေရးသားရာမွာလည္း Developer အေနနဲ႔ PHP basic, Intermediate ေလာက္တက္ရံုနဲ႔ ေရးသားလို႔မျဖစ္ႏိုင္ပါဘူး၊
                                    Advanced အဆင့္အထိတက္လဲ အေတြ႔အႀကံဳေကာင္းေကာင္းမရွိရင္ reusable ျဖစ္ေအာင္ေရးသားဖို႔ Frontend နဲ႔ Backend မညွိပဲ Designer ေကာ
                                    Developer ပါ လြတ္လပ္စြာ မိမိက႑ကို ေရးႏိုင္ေအာင္တည္ေဆာက္ဖို႔၊ MySQL Injection နဲ႔ Cross-Side Scripting Attact တို႔လိုမ်ိဳး တိုက္ခိုက္မႈမ်ားကို
                                    ထိန္းႏိုင္ဖို႔မလြယ္ပါဘူး၊ ဘက္စံုျပည့္စံုေအာင္ ေရးႏိုင္ၿပီဆိုရင္ေတာင္မွ အနိမ့္ဆံုး Blog System တစ္ခုအတြက္ 5 သိန္းေလာက္ ေတာင္းရင္ေတာင္
                                    Customers ေတြက ျငိဳျငင္တာကို လက္ေတြ႔ေတြ႔ရမွာပါ၊ တကယ္ေတာ့ System Developer တစ္ေယာက္အတြက္ Blog System
                                    တစ္ခုကို တည္ေဆာက္ရင္ သိန္း ၁၀၀၀ (တစ္ေထာင္) လဲ ေတာင္းခြင့္ရွိပါတယ္၊ 5 သိန္း (or) 10 သိန္းေလာက္က Design ပိုင္းသီးသန္႔ အတြက္ ဆိုရင္ေတာင္ မတန္ေသးပါဘူး၊</span></p>

                                <div class="php-laravel collapse">
                                    <p class="myanmar">ေစ်းကြက္လိုအပ္ခ်က္နဲ႔ Developer ရဲ့ အရည္အခ်င္း လိုအပ္ခ်က္က မမွ်တဘူးျဖစ္ေနပါတယ္၊ ေပးႏိုင္တဲ့ ေစ်းက နည္းနည္း ပဲျဖစ္ေပမယ့္
                                        Developer အတြက္ အရည္အခ်င္းနဲ႔ အခ်ိန္ကေတာ့ အမ်ားႀကီးေပးဆပ္ရပါတယ္၊ ဒီေတာ့ လြယ္ကူတဲ့ CMS (Content Management System)
                                        ေတြျဖစ္တဲ့ Wordpress, Joomla, Drupal တို႔လို Drag & Drop System ေတြကိုသံုးမယ္ဆိုၿပီး အမ်ား စုေသာ အဖြဲ႔အစည္းေတြက ဆံုးျဖတ္ၾက
                                        ပါတယ္၊ ဒီေျဖရွင္းခ်က္ကလည္း ယာယီသာ ျပႆနာကို ေျပလည္သြား ႏိုင္ေစေပမယ့္ ရည္ရွည္မွာေတာ့ Customer ရဲ့ ေတာင္းဆိုမႈ စိတ္ႀကိဳက္
                                        Customize လုပ္လိုမႈကို လံုး၀မေျဖရွင္း ေပးႏိုင္ပါဘူး၊ ဥပမာ Wordpress လို ဆိုဒ္မ်ိဳးက Blog System အတြက္ သီးသန္႔ျဖစ္ၿပီး Membership
                                        System ပါထည့္သြင္းခ်င္ရင္ Plugin features ေတြသံုးနုိင္ေပမယ့္ Payment System မ်ိဳးမွာေတာ့ ျပည့္တြင္းမွာ သံုးခြင့္ မရွိေသးတဲ့ Paypal Internet
                                        Banking System မ်ိဳးကိုပဲ သံုးႏိုင္ေသးတာမ်ိဳး၊ ျပည္တြင္းမွာ KBZ တို႔ CB တို႔က Support လုပ္ေပးထားတဲ့ Payment System အတြက္
                                        Develop လုပ္ဖို႔ဆိုရင္ အဆင္လံုး၀မ​ေျပတာမ်ိဳးကိုေတြ႔ရမွာပါ၊ ဒီေတာ့ Wordpress လို Blog System မွာ woo-commerce တို႔ Wpestore တို႔လို
                                        plugin ထည့္သြင္းၿပီး ပစၥည္းအခ်ိဳ႕ကို ေရာင္းခ်ႏိုင္တယ္ဆိုေပမယ့္ ရည္ရွည္မွာ ေတာ့ Blog Feature ထက္ပိုၿပီး ထည့္မိရင္ ဆိုးက်ိဳးကိုသာခံစားရပါတယ္၊
                                        5 သိန္းေလာက္နဲ႔ Develop လုပ္မိတဲ့ Web Based Programming မတတ္သူေတြအေနနဲ႔လည္း low level customize လုပ္ဖို႔ လိုလာရင္ ဘာမွမလုပ္တတ္ေတာ့ပဲ
                                        Customer အတြက္ လံုး၀မျဖစ္ႏိုင္ပါဘူး၊ ဦးသိန္းစိန္ အစိုးရလက္ထက္က သမၼတရံုး တိုင္ၾကားစာကို pdf အေနနဲ႔ ေပးပို႔ခြင့္ျပဳေတာ့
                                        pdf ဖိုင္တင္တဲ့သူေတြ သူတို႔တင္တဲ့ဖိုင္ေတြ မေအာင္ဘဲ အမွားရွိေနတဲ့ Ajax နဲ႔ PHP class ကိုေဖာ္ျပေနတဲ့ လင့္​ေတြေတြ႔ရတဲ့ ျပႆနာမ်ိဳးပါ၊ ဒါမ်ိဳးက
                                        Joomla တို႔ Druple တို႔သံုးၿပီး Programming တစ္ခုခုမတက္ဘဲ တည္ေဆာက္လို႔ ေတြ႔ႀကံဳရတဲ့ ျပႆနာျဖစ္ၿပီး ေျဖရွင္းရတာလည္း အရမ္းကိုခက္ခဲပါတယ္၊ ေနာက္က ေရးထားတဲ့
                                        Framework တစ္ခုလံုးကို ထိခိုက္မႈမရွိေအာင္ ျပဳျပင္ ရတာပါ၊ ဒီေတာ့ 3 သိန္း 5 သိန္း တန္ဆိုဒ္ေတြ ကို Magento, Wordpress, Joomla, Drupal တို႔လို ဆိုဒ္ေတြအသံုးျပဳၿပီးဆြဲတာက မွန္ကန္တဲ့လုပ္ငန္းစဥ္မဟုတ္ဘူး၊
                                        ဒီေတာ့ ေစ်းကြက္ရဲ့ လိုအပ္ခ်က္က 5 သိန္း (or) ၁၀ သိန္း၀န္းက်င္နဲ႔ long term support ကိုလိုခ်င္တာ၊ ဒီေစ်းနဲ႔ရႏိုင္တဲ့ CMS system ေတြကက်ေတာ့ long term support နဲ႔
                                        Customization အတြက္ အဆင္မေျပဘူး၊ ကိုယ္တိုင္ေရးမယ္ဆိုရင္လည္း 5 သိန္း (သို႔) 10 သိန္းဆိုတဲ့ ေစ်းကြက္ထဲကို ထည့္လို႔မျဖစ္ဘူး၊ လိုအပ္ခ်က္နဲ႔ ေပးႏိုင္တဲ့ ပမာဏအမွ်
                                        အေျခအေနမွာ Laravel က အေကာင္းဆံုးေျဖရွင္းခ်က္ျဖစ္သြားပါတယ္၊ ဘာေၾကာင့္ Laravel လဲ Laravel က ဘာေတြလုပ္လို႔ရသလဲ ဘယ္ေလာက္အထိ
                                        productivity (အခ်ိန္အတိုင္းအတာ တစ္ခုအတြင္း product အျမန္ထုတ္ႏိုင္မႈ) ျဖစ္လဲ၊</p>

                                    <h4 class="myanmar">Laravel ဆိုတာဘာလဲ</h4>
                                    <p class="myanmar">Laravel ဆိုတာ PHP Framework တစ္ခုျဖစ္ပါတယ္၊ MVC (Model View Controller) Architecture ကိုအသံုးျပဳၿပီးေဆာက္ထားတဲ့ php framework ျဖစ္ၿပီး
                                        Web Application ေတြကို လွ်င္ျမန္စြာ Develop လုပ္ႏိုင္ဖို႔အတြက္ ရည္ရြယ္တည္ေဆာက္ထားတာျဖစ္ပါတယ္။</p>
                                    <p class="myanmar">Laravel ရဲ့ အဓိက Features ေတြျဖစ္တဲ့ လုိအပ္တဲ့ Development Package ေတြကို Dependency Manager အသံုးျပဳၿပီး အလြယ္တကူ ရယူအသံုးျပဳႏိုင္တဲ့
                                        modular packaging system, Database Handling အတြက္ လြယ္ကူ ၿပီး အမ်ိဳးမ်ိဳးေသာ လိုအပ္ခ်က္ေတြအလိုက္ စိတ္ႀကိဳက္ေရြးခ်ယ္ အသံုးျပဳႏိုင္တဲ့ relational
                                        databases (Eloquent) , Application Development နဲ႔ Maintainance ကို လြယ္ကူေစတဲ့ utilities မ်ား၊ HTTP Request ေတြအတြက္ လံုျခံဳမႈရွိေအာင္ filtering လုပ္ေပးတဲ့
                                        Middleware ၊ Designer ေတြအတြက္ ဝက္ဆိုဒ္ Develop လုပ္ရာမွာ အလြန္လြယ္ကူသြားေစတဲ့ အျပင္ Back-end နဲ႔ Front-End ကို လံုး၀ခြဲထုတ္ႏိုင္တဲ့ Blade Template Engine
                                        Feature တို႔အျပင္ လက္ေတြ႔ အသံုးျပဳရင္း ခံစားသြားရမယ့္ ေကာင္းမြန္တဲ့ Features ေတြမ်ားစြာပါ၀င္ပါတယ္။</p>
                                    <h4 class="myanmar">Laravel အသံုးျပဳထားတဲ့ နာမည္ႀကီးဆိုဒ္မ်ား</h4>
                                    <p class="myanmar">လက္ရွိ Laravel အသံုးျပဳထားတဲ့ နာမည္ႀကီးဆိုဒ္မ်ား<br>
                                    <ol>
                                        <li class="burmese"><a href="http://www.STARTUPS.CO" style="display: inline; text-decoration: underline;">STARTUPS.CO</a> ကေတာ့ လုပ္ငန္းစတင္ တည္ေထာင္သူမ်ားအတြက္ Customer ေတြရွာေပးဖို႔ ရင္းႏွီးျမဳပ္ႏွံသူေတြရွာေပးဖို႔ တည္ေဆာက္ထားတဲ့ဆိုဒ္ျဖစ္ၿပီး register လုပ္ထားတဲ့ users ေပါင္း ၁၃ သန္းေက်ာ္ရွိပါတယ္၊</li>
                                        <li class="burmese"><a href="http://www.TOYOTAHALLOFFAME.COM" style="display: inline; text-decoration: underline;">TOYOTAHALLOFFAME.COM</a> ကေတာ့ USA နဲ႔ Canada ႏွစ္ခုတည္းကို အြန္လိုင္း ေဘာလံုး ဂိမ္းကစားသူ သန္း ၃၀ ေက်ာ္ရွိတဲ့ ဝက္ဆိုဒ္တစ္ခုျဖစ္ပါတယ္၊</li>
                                        <li class="burmese"><a href="http://www.RV.CAMPINGWORLD.COM" style="display: inline; text-decoration: underline;">RV.CAMPINGWORLD.COM</a> ကေတာ့ အြန္လိုင္းကေန recreational vehicles (RVs) ေရာင္းခ်ျခင္း ဝယ္ယူျခင္း ျပဳလုပ္ႏိုင္တဲ့ ဆိုဒ္တစ္ခုျဖစ္ၿပီး diagnostic, repair, maintainance, warranty, collision, and installation တို႔လို ဝန္ေဆာင္မႈေတြအားလံုးေပးပါတယ္၊</li>
                                        <li class="burmese"><a href="http://www.GLOBALDIETARYDATABASE.ORG" style="display: inline; text-decoration: underline;">GLOBALDIETARYDATABASE.ORG</a> ကေတာ့ Data Collection ဝက္ဆိုဒ္တစ္ခုျဖစ္ပါတယ္၊</li>
                                        <li class="burmese"><a href="http://www.EXPLOREGEORGIA.ORG" style="display: inline; text-decoration: underline;">EXPLOREGEORGIA.ORG</a> ကေတာ့ အေမရိကန္ Georgia ျပည္နယ္က Department of Economic Development ရဲ့ Tourism ဝက္ဆိုဒ္တစ္ခုျဖစ္ပါတယ္၊</li>
                                        <li class="burmese"><a href="http://www.CEENTA.COM" style="display: inline; text-decoration: underline;">CEENTA.COM</a> ကေတာ့ North Carolina က နာမည္ႀကီး ေဆးရံုတစ္ခုရဲ့ ဝက္ဆိုဒ္ျဖစ္ပါတယ္၊</li>
                                        <li class="burmese"><a href="http://www.INVICTAWATCH.COM" style="display: inline; text-decoration: underline;">INVICTAWATCH.COM</a> ကေတာ့ အေမရိကန္ နာရီကုမၼဏီ တစ္ခုျဖစ္တဲ့ Invicta Watch Group ရဲ့ ဝက္ဆိုဒ္ျဖစ္ပါတယ္၊</li>
                                        <li class="burmese"><a href="http://www.RATEMYAPPRENTICESHIP.CO.UK" style="display: inline; text-decoration: underline;">RATEMYAPPRENTICESHIP.CO.UK</a> ကေတာ့ ေက်ာင္းသူေကာင္းသားေတြအတြက္ လိုအပ္တဲ့ ပညာသင္ဆုေလွ်ာက္ထားမႈ နဲ႔ အခြင့္အလမ္းမ်ားအတြက္ လိုအပ္တဲ့ သတင္းအခ်က္အလက္ေတြ ကိုေပးတဲ့ ဝက္ဆိုဒ္တစ္ခုျဖစ္ပါတယ္၊</li>
                                        <li class="burmese"><a href="http://www.FOX47.COM" style="display: inline; text-decoration: underline;">FOX47.COM</a> ကေတာ့ သတင္းဝက္ဆိုဒ္တစ္ခုျဖစ္ၿပီး Televistion Affiliate Program မ်ားကို ေၾကျငာ ေပးတဲ့ Video , Blog contents ေတြပါ၀င္တဲ့ ဆိုဒ္ျဖစ္ပါတယ္၊</li>
                                        <li class="burmese"><a href="http://www.YULAIR.COM" style="display: inline; text-decoration: underline;">YULAIR.COM</a> ကေတာ့ ကေနဒါ ႏိုင္ငံမွာ ေစ်းႏႈန္း အသင့္ဆံုး ေလေၾကာင္းလိုင္းကို ရွာေဖြေပးတဲ့ ဝက္ဆိုဒ္တစ္ခုျဖစ္ပါတယ္၊ Localization အတြက္ Laravel features ေတြကိုအျပည့္အ၀သံုးထား ပါတယ္၊ Canada ႏိုင္ငံရဲ့ အေကာင္းဆံုး ဝက္ဆိုဒ္လို႔ေတာင္ဆိုၾကတာပါ၊</li>
                                        <li class="burmese"><a href="http://www.LARACASTS.COM" style="display: inline; text-decoration: underline;">LARACASTS.COM</a> ကေတာ့ Laravel အသံုးျပဳၿပီးတည္ေဆာက္ထားတဲ့ E-learning System တစ္ခုျဖစ္ပါတယ္၊ </li>
                                    </ol>
                                    </p>
                                </div>
                                <hr>

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

                                    @if ( Auth::check() )

                                        <h5>Order to Buy Book</h5>
                                        <h6><span class="theme-color">အနီးဆံုး ကားဂိတ္သို႔ အေရာက္ ပို႔ေဆာင္မွာ ျဖစ္တဲ့အတြက္ ပို႔ေဆာင္ရမည့္ ေနရာ တိတိက်က် ျဖည့္စြက္ပါ။</span></h6>



                                        <form class="sending-form" method="post" action="{{ route('books.order', ['laravel']) }}">

                                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                                            <div class="row">
                                                {{--<div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" required="required" placeholder="Full name" name="name" value="{{ old('name') }}">
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
                                                        <input type="text" name="phone" class="form-control" required="required" placeholder="eg. ( 09259165884 )" value="{{ old('phone') }}">
                                                        <i class="fa fa-phone"></i>
                                                    </div>
                                                </div>

                                                <div class="quantity-box col-sm-6">
                                                    <label>Qty :</label>
                                                    <div class="sp-quantity">
                                                        <div class="sp-minus fff"><a class="ddd minus" data-multi="-1">-</a></div>
                                                        <div class="sp-input">
                                                            <input type="text" name="qty" class="quntity-input" value="1" />
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
                                        <a class="btn btn-link" href="{{ url('/login') }}">Please Login to Order PHP with Laravel Book</a>
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

            $('.php-laravel').on("show.bs.collapse", function(){
                $(".fa-arrow-right").parent().css('display', 'none');
            });

        });
    </script>

@stop
