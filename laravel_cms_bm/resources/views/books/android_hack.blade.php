@extends('layout.master')

@section('title', 'Android Hack Book')

@section('inner_banner')
    <div class="parallax-window inner-banner tc-padding overlay-dark" data-parallax="scroll" data-image-src="{{ asset('images/inner-banner/banner.jpeg') }}">
        <div class="container">
            <div class="inner-page-heading style-2 h-white">
                <h2>Books</h2>
                <p>Android Hack Book</p>
            </div>
        </div>
    </div>
@stop

<!--  Breadcrumb -->
@section('breadcrumb')

    <div class="breadcrumb-holder white-bg">
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/books') }}">Books</a></li>
                    <li>Android Hack</li>
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
                                        <img src="{{ asset('images/books/android_hack.jpg') }}" alt="">
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
                                <h3>Android Hack Book</h3>

                                <div class="book-info-list">
                                    <ul>
                                        <li><span>App အေန နဲ႔ ရ မည္။ </span></li>
                                        <li><span>Price: </span> 10000 kyats</li>
                                    </ul>
                                </div>

                                <p></p>

                                <h4>OverView</h4>
                                <p class="myanmar">ကၽြန္ေတာ္တို႔ျမန္မာႏုိင္ငံမွာ ဖုန္းကဒ္ေတြ စိတ္ႀကိဳက္၀ယ္ယူလာႏုိင္သည္ႏွင့္အမွ် ဖုန္းအသံုး ျပဳသူဦးေရလည္း
                                    မ်ားျပားလာပါတယ္။ ဒီအေျခအေနအတုိင္းသြားရင္ 2014 အကုန္မွာ လူတန္းေစ့ ဖုန္းရွိေနႏုိင္ပါၿပီ၊ ဖုန္းေတြအမ်ဳိးမ်ဳိးအသံုးျပဳၾကေပမယ့္ 70% ရာခုိင္ႏႈန္းေသာပမာဏက
                                    Android ဖုန္းကို သံုးေနၾကပါတယ္။ Android ကို ဘယ္လုိအသားသာခ်က္ေၾကာင့္ သံုးလဲဆုိတာ ဖုန္းအသံုးျပဳသူ အမ်ားစုအေနနဲ႔ နည္းပညာဆန္ဆန္ မရွင္းျပႏုိင္ၾကေပမယ့္ အသံုးျပဳသူအမ်ားစုရဲ႕
                                    Android ဖုန္းသံုးရျခင္းအေၾကာင္းရင္းကေတာ့ applications ေတြ စိတ္ႀကိဳက္ထည့္သြင္းႏုိင္ျခင္း၊ ဖုန္းကို စိတ္ႀကိဳက္ပံုစံေျပာင္းလဲႏုိင္ျခင္း၊ Screen ေပၚမွာ လက္နဲ႔ေထာက္ (ပြတ္)
                                    ၿပီး ကစားႏုိင္တဲ့ အရသာေတြျပည့္စံုျခင္းအျပင္ ျမန္မာႏုိင္ငံအတြင္း ထုိးေဖာက္၀င္ေရာက္ေနတဲ့ Huawei လုိ Android ဖုန္းေတြဟာ အျခားေသာ Android ဖုန္းအမ်ဳိးအစားေတြနဲ႔ယွဥ္ရင္
                                    ေစ်းသက္သာမႈေၾကာင့္လည္း ပါပါတယ္။ <a href="javascript: void(0);"  style="display: inline; text-decoration: underline;" data-toggle="collapse" data-target="#android-hack"><i class="fa fa-arrow-right"></i> read more</a></p>

                                <div id="android-hack" class="collapse">

                                <p class="myanmar">အသံုးျပဳသူေတြအေနနဲ႔ စိတ္ႀကိဳက္ျပဳျပင္ေျပာင္းလဲသံုးစြဲႏုိင္တဲ့ Android ဖုန္းေတြက ျပႆနာလည္း တက္လွပါတယ္။ အခ်ဳိ႕ျပႆနာေတြက (firmware update, memory
                                    corruption တုိ႔လုိ) အသံုးျပဳသူရဲ႕ မွားယြင္းတဲ့လုပ္ေဆာင္ခ်က္ေၾကာင့္ျဖစ္ေပၚလာသလုိ အခ်ဳိ႕ျပႆနာေတြက ေတာ့ (network lock တို႔ voice recorder တို႔လုိ) ဖုန္းစ၀ယ္ကတည္းကပါလာတဲ့ကုမၸဏီ
                                    အားနည္း ခ်က္၊ ကန္႔သတ္ခ်က္ (OEM defeacts) ေတြေၾကာင့္ျဖစ္ပါတယ္။
                                    ကုမၸဏီေၾကာင့္ပဲျဖစ္ျဖစ္၊ အသံုးျပဳသူရဲ႕အမွားေၾကာင့္ပဲျဖစ္ျဖစ္ ျဖစ္ေပၚလာတဲ့ ျပႆနာေတြ ကုိ ဖုန္းျပဳျပင္တဲ့ညီအစ္ကုိေတြက အေကာင္းဆံုးႀကိဳးစားေျဖရွင္းၾကပါတယ္။
                                    ဒီလုိေျဖရွင္းရာမွာ ကိုယ္ပုိင္ကၽြမ္းက်င္မႈေတြနဲ႔ေျဖရွင္းၾကသလုိ ဖုန္းႏွင့္ပတ္သက္ေသာ ျပည္တြင္းျပည္ပ၀က္ဆုိဒ္မ်ားမွ အကူအညီယူၿပီး ေလ့လာၿပီးလည္းေျဖရွင္းၾကပါတယ္။
                                    ယေန႔လက္ရွိအေျခအေနအထိျဖစ္ေပၚေနတဲ့ ျပႆနာကို ကုိယ့္နည္းကုိယ့္ဟန္နဲ႔ေျဖရွင္းခဲ့ၾကတာကေတာ့ ဂုဏ္ယူစရာေကာင္းတဲ့ ျမန္မာႏုိင္ငံက ဖုန္း Service Technicians နဲ႔
                                    Developers ေတြရဲ႕အစြမ္းေၾကာင့္ျဖစ္ပါတယ္။</p>
                                <p class="myanmar">ျပည္ပက Developer ေတြ Programmer ေတြကလည္း ဖုန္းနဲ႔ပတ္သက္လုိ႔ ထြက္ရွိသမွ် Android ဖုန္းေတြကို root ေဖာက္ျခင္း၊ ျဖစ္ေပၚသမွ် အမွားမ်ားကိုျပဳျပင္ျခင္းတို႔ကို
                                    အဆင့္ဆင့္ ျပဳျပင္နည္းႏွင့္တကြ လက္ေတြ႕ရွင္းလင္းခ်က္ေတြနဲ႔ ရွင္းျပထားေပမယ့္ ျမန္မာႏုိင္ငံမွာ အသံုးမ်ား လွတဲ့ Huawei models ဖုန္းေတြမ်ဳိးမွာေတာ့ အတိအက်ရွင္းျပထားတဲ့
                                    မွီျငမ္းႏုိင္တဲ့ ျပည္ပ၀က္ဆုိဒ္ မ်ဳိးကရွားလွပါတယ္။ (မေတြ႕ဖူးဘူး)။ ျမန္မာႏုိင္ငံမွာ အသံုးမ်ားတဲ့ဖုန္းျဖစ္တဲ့ Huawei modesl လုိ ဖုန္းေတြမွာ ျဖစ္သမွ် ျပႆနာက ျပည္ပကေန
                                    တုိက္႐ုိက္မမွီျငမ္းႏုိင္တဲ့အတြက္ ျမန္မာျပည္က Developers ေတြ ကိုယ္တုိင္ႀကိဳးစားေျဖရွင္းရပါတယ္။</p>
                                <p class="myanmar">ႏုိင္ငံျခားတုိင္းျပည္ေတြက Developers ေတြထုတ္တဲ့ Software ေတြ application ေတြဟာ ေကာင္းလြန္းလွတဲ့အတြက္ ခက္ခဲလွတဲ့၊ တင္းက်ပ္စြာပိတ္ပင္ထားတဲ့ဖုန္းေတြကိုေတာင္
                                    ကလစ္တစ္ခ်က္ႏွိပ္႐ံုနဲ႔တင္ Root ေဖာက္ႏုိင္ပါတယ္။ ဒီလို application (သုိ႔) programs ေတြက Android ေလာကမွာေတာ့ တကယ့္ကိုအဖိုးတန္လွတဲ့အတြက္ လူတုိင္းအသံုးျပဳၾကပါတယ္။
                                    Bootloader unlocker လုိ application မ်ဳိးကလည္း အသံုးျပဳသူက ခလုတ္တစ္ခ်က္ႏွိပ္လုိက္တာနဲ႔ process (ဆင့္ကဲလုပ္ေဆာင္မႈေတြ) အားလံုး ခဏအတြင္းမွာ ျဖစ္ပ်က္သြားၿပီး
                                    bootloader lock ပြင့္သြားပါတယ္။ Custom Recovery တို႔ firmware image နဲ႔ Radio Baseband image တို႔က လည္း လုပ္တတ္သူေတြအတြက္ အလြယ္တကူ flash လုပ္ႏိုင္၊
                                    update လုပ္ႏုိင္ပါတယ္။ ဒီလုိ Android ေလာကမွာ ေျပာင္းလဲခ်င္သမွ် လုပ္လုိသမွ်အခ်က္ေတြကို လြယ္ကူစြာလုပ္ေဆာင္ႏုိင္တဲ့ Applications ေတြနဲ႔ Programs ေတြ အမ်ားႀကီးရွိပါတယ္။
                                    အသံုးျပဳသူေတြအေနနဲ႔ လုိအပ္တဲ့ လုပ္ေဆာင္ခ်က္ကို လြယ္ကူစြာလုပ္ေဆာင္ႏုိင္တဲ့ ထုိ application ေတြက လြန္စြာေကာင္းမြန္တိက် လွတယ္ဆုိေပမယ့္ ေကာင္းလြန္းတဲ့အခ်က္ေၾကာင့္ပဲ
                                    Android ကို ေလ့လာရာမွာ အတားအဆီး တစ္ခု ေပၚလာပါတယ္။ ဖုန္းတစ္လံုးကို root ေဖာက္လုိတဲ့သူက Vroot ကိုသံုးၿပီး လြယ္ကူစြာ root ေဖာက္လုိက္တယ္။ သူလုိခ်င္တဲ့ root
                                    ေဖာက္တယ္ဆုိတဲ့အခ်က္က အလြယ္ေလးၿပီးသြားတယ္။ ဒီေတာ့ ေနာင္လည္း ဒီနည္းပဲသံုးၿပီး root ေဖာက္တယ္။ ဒီလုိနဲ႔ တကယ္ root ေဖာက္တဲ့အခါမွာ ဖုန္းထဲမွာ ျဖစ္သြားတဲ့
                                    ဆင့္ကဲလုပ္ေဆာင္ခ်က္ေတြကို မသိေတာ့ဘူး။ လက္ေတြ႕လုပ္ေဆာင္ခ်က္ ေတြနဲ႔ အလွမ္းေ၀းလာတယ္။ su binary ကုိ ဘယ္လုိ permission သံုးၿပီး System partition ထဲကို အဆင့္ဆင့္ထည့္သြင္းကာ
                                    root ေဖာက္သလဲ။ Bootloader unlock လုပ္ဖို႔ကို application ေလး တစ္ခု Install လုပ္ၿပီးေတာ့ Run လုိက္ သူ႕အလုိလုိ reboot ျပန္ျဖစ္သြားမယ္။ Power လည္း ျပန္ တက္လာေရာ bootloader က
                                    unlock ျဖစ္သြားေရာတဲ့။ ဒီလုိလြယ္ကူလွတဲ့လုပ္ေဆာင္ခ်က္ေတြက တကယ့္ျဖစ္စဥ္ေတြနဲ႔ေ၀းကြာေနပါတယ္။ လတ္တေလာအသံုးျပဳမႈမွာ လြယ္ကူေနတဲ့အခ်က္က တကယ့္နားလည္မႈ
                                    ေတြနဲ႔ပတ္သက္တဲ့အခ်က္ေတြနဲ႔ေတာ့ ေ၀းသြားေစခဲ့ပါတယ္။ Android မွာပါ၀င္ တဲ့ framework, software နဲ႔ hardware architectures ေတြ၊ components ေတြနဲ႔ interface
                                    ေတြ အားလံုးမွာ သူတို႔ကိုတည္ေဆာက္ထားတဲ့ အလုပ္လုပ္ေစတဲ့ code ေတြနဲ႔ ဆင့္ကဲျဖစ္စဥ္ေတြရွိပါ တယ္။ ခ်ိတ္ဆက္အလုပ္လုပ္ေနတဲ့ Android အတြင္းက components
                                    ေတြအားလံုးကုိ နားလည္ သြားရင္ လုိအပ္သလုိ ျပဳျပင္ေျပာင္းလဲမႈနဲ႔ root ေဖာက္ျခင္း၊ bootloader unlock လုပ္ျခင္းတို႔ အတြက္ ျဖစ္ႏုိင္တဲ့အားနည္းခ်က္ေတြကိုရွာေဖြၿပီး ထုိးေဖာက္ႏုိင္ပါတယ္။ စိတ္ႀကိဳက္
                                    firmware တစ္ခုလံုးျပန္ေရးျခင္း၊ custom build kernel ေတြတည္ေဆာက္ျခင္းတို႔ကုိျပဳလုပ္ဖို႔လြယ္ကူသြားပါ ၿပီ။</p>
                                <p class="myanmar">ဒီစာအုပ္ရဲ႕အဓိကရည္ရြယ္ခ်က္ကေတာ့ Android ဖုန္းတစ္လံုးမွာပါ၀င္တဲ့ Hardware နဲ႔ Software ေတြအေၾကာင္း ေကာင္းေကာင္းနားလည္ၿပီး Android Version
                                    အသစ္ထြက္တုိင္း ပါလာ တတ္တဲ့ ကန္႔သတ္ခ်က္ေတြ၊ အတားအဆီးေတြကို ဘယ္လုိအားနည္းခ်က္ရွာေဖြၿပီး တုိက္ခုိက္ကာ ကိုယ့္ဖုန္းကိုကုိယ့္စိတ္ႀကိဳက္ အကန္႔အသတ္မရွိ အသံုးျပဳႏုိင္ေစဖို႔ပါ။
                                    Android ဖုန္းထဲက components ေတြက တစ္ခုနဲ႔တစ္ခု ခ်ိတ္ဆက္ၿပီး အလုပ္လုပ္ၾကသလုိ သီးျခားလုပ္ငန္းစဥ္ေတြကို လုပ္ေဆာင္ေနတဲ့ Radio Interface Layer တို႔လုိလည္းရွိပါတယ္။
                                    Components ေတြအားလံုး အဆင့္ဆင့္ခ်ိတ္ဆက္အလုပ္လုပ္ေနၾကတဲ့ျဖစ္စဥ္ကို သေဘာေပါက္ရင္ အားနည္းခ်က္ကိုရွာၿပီး တုိက္ခုိက္ဖို႔က မခက္ေတာ့ပါဘူး။ ဒီလုိတုိက္ခုိက္ဖို႔
                                    အတြက္လည္း သိထားရမယ့္အခ်က္ေတြအား လံုးကုိ လက္ေတြ႕ပါထည့္ၿပီး ရွင္းျပထားပါတယ္။</p>
                                <p class="myanmar">ဒီစာအုပ္မွာပါ၀င္တဲ့ အခ်ဳိ႕လက္ေတြ႕လုပ္ေဆာင္ခ်က္ေတြကို 72coder.org ၀က္ဆုိက္တို႔မွာ လက္ေတြ႕လုပ္ျပထား၊ ထပ္၍ရွင္းျပထားတဲ့အတြက္ စာအုပ္၀ယ္ယူသူအေနနဲ႔ အေသးစိတ္အခ်က္အလက္နဲ႔
                                    ေနာက္ပိုင္းျဖည့္စြက္ခ်က္ေတြအားလံုးကို ေဖာ္ျပပါ၀က္ဆုိက္မ်ားမွာ သြားေရာက္ေလ့လာႏုိင္ပါတယ္။</p>
                                <p class="myanmar">ဒီစာအုပ္ကိုဖတ္ၿပီး ေကာင္းေကာင္းနားလည္သြားရင္ Android နဲ႔ပတ္သက္တဲ့ အေသးစိတ္ အခ်က္အလက္ေတြကို နားလည္သြားၿပီး ပညာရွင္ဆန္တဲ့ ကၽြမ္းက်င္မႈမ်ဳိးနဲ႔ ဘယ္ဖုန္း
                                    version အသစ္ထြက္ထြက္ root ေဖာက္တာတို႔၊ bootloader lock ျဖည္တာတို႔ Custom Recovery ကုိယ္တိုင္ တည္ေဆာက္တာတို႔ကို အလြယ္တကူလုပ္ႏိုင္ပါၿပီ။ Android
                                    ဖုန္းရဲ႕အားနည္းခ်က္ေတြ ကို လြယ္ကူစြာရွာေဖြႏိုင္ကာ programming ဘာသာရပ္တစ္ခုခုကို ပိုင္ႏိုင္ထားသူေတြအေနနဲ႔ ကုိယ္ပိုင္ code ေတြ၊ ဖုန္းျပင္တဲ့ UI software
                                    ေတြကို ဖန္တီးတတ္သြားမွာပါ။ ေနာက္ပိုင္းေပၚတဲ့ Android version ေတြမွာလည္း လံုျခံဳေရးထိန္းခ်ဳပ္မႈေတြအမ်ားႀကီးထပ္ျဖည့္ထည့္သြင္းသြားမွာျဖစ္ တဲ့အတြက္ ဒီစာအုပ္မွာရွင္းျပခဲ့တဲ့
                                    အခ်က္ေတြကို နားလည္ထားသူေတြက ထုိသုိ႔ေသာ version အသစ္ေတြအတြက္ အားနည္းခ်က္ေတြကို ေကာင္းေကာင္းရွာႏုိင္ၿပီး Android ကုိ လုိသလုိျပဳျပင္ ထုိးေဖာက္ႏုိင္မွာျဖစ္ပါတယ္။</p>

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
                                    <h5>Order to Buy Book</h5>
                                    <h6><span class="theme-color">အနီးဆံုး ကားဂိတ္သို႔ အေရာက္ ပို႔ေဆာင္မွာ ျဖစ္တဲ့အတြက္ ပို႔ေဆာင္ရမည့္ ေနရာ တိတိက်က် ျဖည့္စြက္ပါ။</span></h6>

                                    <form class="sending-form" method="post" action="{{ route('books.order', ['android_hack']) }}">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control" required="required" placeholder="Full name" name="name" value="{{ old('name') }}">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" required="required" placeholder="Email" name="email" value="{{ old('email') }}">
                                                    <i class="fa fa-envelope"></i>
                                                </div>
                                            </div>

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
                                                        <input type="text" class="quntity-input" value="1" />
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

            $("#android-hack").on("show.bs.collapse", function(){
                $(".fa-arrow-right").parent().css('display', 'none');
            });

        });
    </script>

    @stop
