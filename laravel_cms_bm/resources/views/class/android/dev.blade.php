@extends('layout.master')

@section('title', 'Android Development Class')

@section('styles')

    <link rel="stylesheet" href="{{ asset('custom.css') }}">

@stop

@section('inner_banner')
    <div class="parallax-window inner-banner tc-padding overlay-dark" data-parallax="scroll" data-image-src="{{ asset('images/inner-banner/banner.jpeg') }}">
        <div class="container">
            <div class="inner-page-heading style-2 h-white">
                <h2>Android Development Class</h2>
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
                    <li>Android Development</li>
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
                <h2>Android <span class="theme-color">Development</span> Class</h2>
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
                                        <h5 class="burmese pad-15">Android Developer တစ္ေယာက္ျဖစ္ဖို႔ လိုအပ္သည့္ အရည္အခ်င္းမ်ား</h5>
                                        <ul class="burmese pad-15 list-disc pad-40 pad-bot-20">
                                            <li class="pad-15">Basic UI Components မ်ားအား နားလည္ အသံုးျပဳႏိုင္ျခင္း</li>
                                            <li class="pad-15">Fragment ကဲ့သုိ႔ေသာ API မ်ား Broadcast Receiver ကဲ့သို႔ေသာ API မ်ား</li>
                                            <li class="pad-15">Android Animation & Data Storage</li>
                                            <li class="pad-15">Material Design & Recycler View & Card View</li>
                                            <li class="pad-15">Google Map, Firebase, Google Login, Facebook Login</li>
                                            <li class="pad-15">Phone Book, Social App using Firebaseႈႈႈ</li>
                                        </ul>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i>  Android Development ကိုစတင္ေလ့လာသူတိုင္း UI Components ေတြကို အေကာင္းဆံုး အသံုးျပဳတတ္ေအာင္ စတင္ေလ့က်င့္ရပါတယ္၊ Brighter Myanmar သင္တန္းမွာလည္း Android Studio Project Structure သင္ခန္းစာ ၿပီးတာနဲ႔ UI Components ေတြအားလံုးကို နားလည္ေအာင္ လက္ေတြ႔အသံုးျပဳႏိုင္ေအာင္ Custom Style မ်ား ဖန္တီးႏိုင္ေအာင္ အရင္ဆံုးသင္ေပးပါတယ္၊ Developer ေတြအတြက္က ေရးသားတဲ့ ကုဒ္ရဲ့ Architecture မွန္ကန္ဖို႔ကို အာရံုစိုက္ၾကေပမယ့္ User ေတြအတြက္ကေတာ့ Applciaiton UI ေလးလွေနၿပီဆိုရင္ အထူးေက်နပ္ၾကပါတယ္၊ သံုးခ်င္ၾကပါတယ္၊ ဒါေၾကာင့္ User Interface ကိုေကာင္း ေကာင္းဖန္တီးႏိုင္ေအာင္ UI components ေတြအစံုအလင္သင္ေပးပါတယ္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> UI components မ်ားကိုေလ့လာၿပီးသြားရင္ေတာ့ Application components ေတြျဖစ္တဲ့ Activity, Intent, Fragments, Services, Content Provider, Broadcast Receiver (အျပည့္အစံုကို သင္ခန္းစာ စာရင္း မွာၾကည့္ပါ) တို႔လို Application components ေတြကိုလက္ေတြ႔အသံုးျပဳၿပီး ေန႔စဥ္ အသံုးဝင္ Appliations မ်ားစြာကို လက္ေတြ႔တည္ေဆာက္သြားရမွာျဖစ္ပါတယ္၊ Brighter Myanmar သင္တန္းမွာ Google က Support ေပးထားသမွ် UI components ေတြအားလံုးနဲ႔ Applicaiton components ေတြအားလံုးကို သင္ၾကားေပးသြားမွာျဖစ္ၿပီး ဒီႏွစ္မ်ိဳးလံုး တတ္တာနဲ႔ အသံုးဝင္ Applications ေတြကို ဆြဲတတ္ေနၿပီ ျဖစ္ပါတယ္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> Android UI ေတြကို စိတ္ႀကိဳက္ Animation ျပဳလုပ္ႏိုင္ရန္အတြက္လဲ Animation မ်ိဳးစံုကိုေလ့လာသြားရမွာျဖစ္သလို Data Storage System မွာေတာ့ SQLite Storage, Shareprefrence Storage, Internal Storage, External Storage, Cloud Storage တို႔အပါအဝင္ Google က Support မေပးထားေသာ္လည္း လိုအပ္ခ်က္ေၾကာင့္ Excel Stroage ကိုပါ API အသံုးျပဳ၍ သင္ၾကားေပးထားပါတယ္၊ ဒီ့အျပင္ User Interface ကိုပိုၿပီး ဒီဇိုင္းေကာင္းမြန္ေစရန္အတြက္ SlideTab ႏွင့္ ScrollTab တို႔လို Class မ်ားကိုအသံုးျပဳၿပီး Design ဖန္တီးပံုကိုပါ သင္ၾကားေပးထားပါတယ္္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> API Level 21 မွာ စတင္အသံုးျပဳလို႔ရတဲ့ Material Design Libarary ကိုအသံုးျပဳ၍ လြယ္ကူလွပသည့္ Design မ်ားတည္ေဆာက္ပံုကိုေလ့လာသြားရမွာျဖစ္ၿပီး Material Design ႏွင့္အတူ Recycler View, Card View တို႔ကိုပါ အသံုးျပဳနည္း ကိုေလ့လာသြားရမွာျဖစ္ပါတယ္၊ Material Design မွာ Scroll Tab, Sliding Drawer တို႔ကို Fragments မ်ားႏွင့္ တြဲသံုးၿပီး Applicaiton Support Memory ကိုေျခႊတာသည့္ Design တည္ေဆာက္ ပံုေတြကိုလည္းေလ့လာသြားရမွာပါ္္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> Google Map API Firebase API, Google ႏွင့္ Login System ႏွင့္ Facebook Login System တို႔အား အသံုးျပဳႏိုင္ရန္အတြက္ Developer အေကာင့္မ်ား ဖန္တီးကာ Google API Key Register လုပ္၍ အသံုးျပဳပံု၊ Firebase Cloud Host NoSQL database အားအသံုးျပဳ၍ Social Media site တည္ေဆာက္ပံု၊ Push Message မ်ားဖန္တီးပံု၊ Swip To Reload ဖန္တီး၍ Firebase မွာ Data loading လုပ္ပံု Login with Google ဖန္တီးပံု တို႔ကိုလည္းေလ့လာသြားရမွာျဖစ္ပါတယ္၊ Facebook Developer Account ဖန္တီး၍ Applicaiton Key ရယူကာ Login With Facebook တည္ေဆာက္ပံု၊ Google Map Api ကိုသံုး၍ Spy Tracker မ်ား ဖန္တီးပံုတို႔ကိုပါ ေလ့လာသြားရမွာျဖစ္ပါတယ္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> လက္ေတြ႔ Project အျဖစ္ server Data သံုး ဖုန္း စာအုပ္တည္ေဆာက္ျခင္း ႏွင့္ Social Media Application တစ္ခုတည္ေဆာက္ျခင္းတို႔ပါဝင္မည္၊ လက္ေတြ႔ Project မွာ သင္ၾကားခဲ့သမွ် သင္ခန္းစာမ်ားအား မေမ့ေစရန္ လက္ေတြ႔အသံုးျပဳတတ္ေစရန္ ထည့္သြင္းအသံုးျပဳသြားမွာျဖစ္ပါတယ္။</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">Android Development တြင္ပါဝင္မည့္သင္ခန္းစာမ်ား</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body pad-20 pad-bot-20 pad-top-15">
                                        <ol>
                                            <li class="burmese pad-15">android studio ႏွင့္ project structures မ်ားအေျကာင္းအေသးစိတ္ေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Basic view and view group မ်ားအေျကာင္းေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Linear Layout အေျကာင္း xml တြင္တည္ေဆာက္နည္း ေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Relative Layout အေျကာင္း xml တြင္တည္ေဆာက္နည္း ေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Button Click Event ကိုနားေထာင္ျခင္း(အပိုင္း၁) အားေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Button Click Event ကိုနားေထာင္ျခင္း(အပိုင္း၂) အားေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Button Click Event ကိုနားေထာင္ျခင္း(အပိုင္း၃) အားေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Button Click Event ကိုနားေထာင္ျခင္း(အပိုင္း၄) အားေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Simple App Login အားေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Data Transfer (အပို္္င္း၁)အားေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Data Transfer (အပို္္င္း၂)အားေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Data Transfer (အပို္္င္း၃)အားေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Weight and WeightSum မ်ားအေျကာင္းေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Margin and Padding အားႏွဳိင္းယွဥ္ေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Gravity and layout_gravity အားႏွဳိင္းယွဥ္ေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Edittext and font validation အားေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">CheckBox and ToggleButton မ်ားကို Simple shopping app တည္ေဆာက္ကာေလ့လာျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">CheckBox and ToggleButton မ်ားကို Simple shopping app တည္ေဆာက္ကာေလ့လာျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">CheckBox and ToggleButton မ်ားကို Simple shopping app တည္ေဆာက္ကာေလ့လာျခင္း(အပိုင္း၃)</li>
                                            <li class="burmese pad-15">CheckBox and ToggleButton မ်ားကို Simple shopping app တည္ေဆာက္ကာေလ့လာျခင္း(အပိုင္း၄)</li>
                                            <li class="burmese pad-15">CheckBox and ToggleButton မ်ားကို Simple shopping app တည္ေဆာက္ကာေလ့လာျခင္း(အပိုင္း၅)</li>
                                            <li class="burmese pad-15">CheckBox and ToggleButton မ်ားကို Simple shopping app တည္ေဆာက္ကာေလ့လာျခင္း(အပိုင္း၆)</li>
                                            <li class="burmese pad-15">CheckBox and ToggleButton မ်ားကို Simple shopping app တည္ေဆာက္ကာေလ့လာျခင္း(အပိုင္း၇) </li>
                                            <li class="burmese pad-15">CheckBox and ToggleButton မ်ားကို Simple shopping app တည္ေဆာက္ကာေလ့လာျခင္း(အပိုင္း၈) </li>
                                            <li class="burmese pad-15">FrameLayout ကိုအေသးစိတ္နားလည္ေစျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">FrameLayout ကိုအေသးစိတ္နားလည္ေစျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">FrameLayout ကိုအေသးစိတ္နားလည္ေစျခင္း(အပိုင္း၃)</li>
                                            <li class="burmese pad-15">Relative Layout အေျကာင္း activity တြင္တည္ေဆာက္နည္း ေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Linear Layout အေျကာင္း activity တြင္တည္ေဆာက္နည္း ေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Activity အေျကာင္း အေသးစိတ္အား ေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Intent ႏွစ္မ်ိဳး အားအေသးစိတ္ နားလည္ေစရန္ ေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Explicit Intent ေျကာင္းေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Implicit Intent(phone call) ေျကာင္းေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Implicit Intent(checking bill) ေျကာင္းေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Implicit Intent(email image) ေျကာင္းေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Implicit Intent(sending image) ေျကာင္းေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">ကိုယ္ပုိင္ Button Style ဖန္တီးတည္ေဆာက္ျခင္း</li>
                                            <li class="burmese pad-15">Custom Button Click Sound တည္ေဆာက္ျခင္း</li>
                                            <li class="burmese pad-15">Bundle အသံုးျပဳ၍ Data transfer between activity အားေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Android developer တစ္ေယာက္ မျဖစ္မေနအေရးပါေသာ Activity LifeCycle အေျကာင္းအား Custom Toast Messages အားအသံုးျပဳ၍ ေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Android developer တစ္ေယာက္ မျဖစ္မေနအေရးပါေသာ Activity LifeCycle အေျကာင္းအား Custom Logcat အားအသံုးျပဳ၍ ေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Activity Lifecycle and Orientation changes ကိုေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Activity LifeCycle အားပိုမိုရွင္းလင္းေစရန္ example app ႏွင့္တကြေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">App တစ္ခုစတင္ေသာ Loading Page အားေလ့လာျခင္း(အပုိင္း၁)</li>
                                            <li class="burmese pad-15">App တစ္ခုစတင္ေသာ Loading Page အားေလ့လာျခင္း(အပုိင္း၂)</li>
                                            <li class="burmese pad-15">App တြင္ပါေသာ Myanmar စာမ်ားအား Myanmar Font မရိွေသာဖုန္းတြင္ Myanmar လုိ ေပၚေစရန္ Zawgyi font  ထည့္ျခင္း</li>
                                            <li class="burmese pad-15">Video play ကိုေလ့လာျခင္း(အပုိင္း၁)</li>
                                            <li class="burmese pad-15">Video play ကိုေလ့လာျခင္း(အပုိင္း၂)</li>
                                            <li class="burmese pad-15">Table Layout အားအသံုးျပဳတည္ေဆာက္နည္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Table Layout အားအသံုးျပဳတည္ေဆာက္နည္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Table Layout အားအသံုးျပဳတည္ေဆာက္နည္း(အပိုင္း၃)</li>
                                            <li class="burmese pad-15">Table Layout အားအသံုးျပဳတည္ေဆာက္နည္း(အပိုင္း၄)</li>
                                            <li class="burmese pad-15">Grid Layout ကိုသုံးပိီး ကိုယ္ပို္င္ calculator တည္ေဆာက္ျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Grid Layout ကိုသုံးပိီး ကိုယ္ပို္င္ calculator တည္ေဆာက္ျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Grid Layout ကိုသုံးပိီး ကိုယ္ပို္င္ calculator တည္ေဆာက္ျခင္း(အပိုင္း၃)</li>
                                            <li class="burmese pad-15">Adapter View အေျကာင္းကိုအတြင္းက်က်ေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Layout Inflater အေျကာင္းကိုအတြင္းက်က်ေလ့လာျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Layout Inflater အေျကာင္းကိုအတြင္းက်က်ေလ့လာျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Layout Inflater အေျကာင္းကိုအတြင္းက်က်ေလ့လာျခင္း(အပိုင္း၃)</li>
                                            <li class="burmese pad-15">Layout Inflater အေျကာင္းကိုအတြင္းက်က်ေလ့လာျခင္း(အပိုင္း၄)</li>
                                            <li class="burmese pad-15">Simple ListView ကိုနားလည္ျခင္း ပထမအဆင့္စတင္ေလ့လာသုူမ်ားအတြက္(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Simple ListView ကိုနားလည္ျခင္း ပထမအဆင့္စတင္ေလ့လာသုူမ်ားအတြက္(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">List view ေပၚကိုပံုတင္ျခင္း ဒုတိယအဆင့္ (အပိုင္း၁)</li>
                                            <li class="burmese pad-15">List view ေပၚကိုပံုတင္ျခင္း ဒုတိယအဆင့္ (အပိုင္း၂)</li>
                                            <li class="burmese pad-15">List view ေပၚကိုပံုတင္ျခင္း ဒုတိယအဆင့္ (အပိုင္း၃)</li>
                                            <li class="burmese pad-15">Gallery View အေသးစိတ္ရွင္းလင္းျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Gallery View with image switcher and text switcher</li>
                                            <li class="burmese pad-15">Context menu အေျကာင္းကို listview ႏွင့္တဲြဖက္နားလည္ေစျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Context menu အေျကာင္းကို listview ႏွင့္တဲြဖက္နားလည္ေစျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Popup Menu အေျကာင္းကို listview ႏွင့္တဲြဖက္နားလည္ေစျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Popup Menu အေျကာင္းကို listview ႏွင့္တဲြဖက္နားလည္ေစျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Option Menu အေျကာင္းကိုေလ့လာျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Option Menu အေျကာင္းကိုေလ့လာျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Preferences Menu ကိုအသံုးျပဴ၍ Application Setting တည္ေဆာက္ျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Preferences Menu ကိုအသံုးျပဴ၍ Application Setting တည္ေဆာက္ျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Preferences Menu ကိုအသံုးျပဴ၍ Application Setting တည္ေဆာက္ျခင္း(အပိုင္း၃)</li>
                                            <li class="burmese pad-15">Simple Dictionary App တည္ေဆာက္ျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Simple Dictionary App တည္ေဆာက္ျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">TextToSpeech ကိုနားလည္ေစျခင္း</li>
                                            <li class="burmese pad-15">TabHost အေျကာင္းကိုေလ့လာျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">TabHost အေျကာင္းကိုေလ့လာျခင္း(အပိုင္း2)</li>
                                            <li class="burmese pad-15">ViewFlipper အားသံုးပီး Image Slideshow  app လုပ္ျခင္း</li>
                                            <li class="burmese pad-15">Fragment ကိုနားလည္ေစျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Fragment ကိုနားလည္ေစျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Fragment ကိုနားလည္ေစျခင္း(အပိုင္း၃)</li>
                                            <li class="burmese pad-15">Fragment Communication ကိုနားလည္ေစျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Fragment Transaction အေျကာင္းနားလည္ေစျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Fragment Transaction အေျကာင္းနားလည္ေစျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Fragment Transaction အေျကာင္းနားလည္ေစျခင္း(အပိုင္း၃)</li>
                                            <li class="burmese pad-15">Fragment Transaction အေျကာင္းနားလည္ေစျခင္း(အပိုင္း၄)</li>
                                            <li class="burmese pad-15">Fragment LifeCycle အေျကာင္းနားလည္ေစျခင္း</li>
                                            <li class="burmese pad-15">Fragment and Activity LifeCycle အေျကာင္းနားလည္ေစျခင္း</li>
                                            <li class="burmese pad-15">Sliding Drawer ကိုေလ့လာျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Sliding Drawer ကိုေလ့လာျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Sliding Drawer ကိုေလ့လာျခင္း(အပိုင္း၃)</li>
                                            <li class="burmese pad-15">WebBrowser ကိုေလ့လာျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">WebBrowser ကိုေလ့လာျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Camera app ကိုေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Wallpaper app ကိုေလ့လာျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Grid View တည္ေဆာက္အသံုးျပဳျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Grid View တည္ေဆာက္အသံုးျပဳျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Grid View တည္ေဆာက္အသံုးျပဳျခင္း(အပိုင္း၃)</li>
                                            <li class="burmese pad-15">Grid View တည္ေဆာက္အသံုးျပဳျခင္း(အပိုင္း၄)</li>
                                            <li class="burmese pad-15">Spinner View တည္ေဆာက္အသံုးျပဳျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Spinner View တည္ေဆာက္အသံုးျပဳျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Drawer Layout အားအသံုးျပဳတည္ေဆာက္နည္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Drawer Layout အားအသံုးျပဳတည္ေဆာက္နည္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Drawer Layout အားအသံုးျပဳတည္ေဆာက္နည္း(အပိုင္း၃)</li>
                                            <li class="burmese pad-15">Drawer Layout အားအသံုးျပဳတည္ေဆာက္နည္း(အပိုင္း၄)</li>
                                            <li class="burmese pad-15">ViewPager (Strip Tab) ကိုေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">ViewPager (Seekbar) ကိုေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">ViewPager (Swipe Tab) ကိုေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">SeekBar ကိုအသုံုးျပဳ၍ volume မ်ားခ်ိန္ညိ္ိွျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">SeekBar ကိုအသုံုးျပဳ၍ volume မ်ားခ်ိန္ညိ္ိွျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Phone တြင္ပါေသာ Music Player App တစ္ခုေဆာက္ျခင္း</li>
                                            <li class="burmese pad-15">Internal Storage အေျကာင္းေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">Cache and External Storage အေျကာင္းေလ့လာျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">Cache and ExternalStorage အေျကာင္းေလ့လာျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Cache and ExternalStorage အေျကာင္းေလ့လာျခင္း(အပိုင္း၃)</li>
                                            <li class="burmese pad-15">Cache and ExternalStorage အေျကာင္းေလ့လာျခင္း(အပိုင္း၄)</li>
                                            <li class="burmese pad-15">SharedPreferences Storage အေျကာင္းေလ့လာျခင္း(အပိုင္း၁)</li>
                                            <li class="burmese pad-15">SharedPreferences Storage အေျကာင္းေလ့လာျခင္း(အပိုင္း၂)</li>
                                            <li class="burmese pad-15">Broadcast &amp; Receiver အေသးစိတ္ရွင္းလင္းထားေသာProject</li>
                                            <li class="burmese pad-15">Advanced Cursor Adapter ထိေရာက္စြာအသံုးျပဳေသာ အဆင့္ျမင့္ Project</li>
                                            <li class="burmese pad-15">Drawer &amp; SwipeTab ထိေရာက္စြာအသံုးျပဳနည္း အဆင့္ျမင့္ Project</li>
                                            <li class="burmese pad-15">Fragment and Temporary Storage တဲြဖက္အသံုးျပဳထားေသာ အဆင့္ျမင့္ Project</li>
                                            <li class="burmese pad-15">ExpandableListView ထိေရာက္စြာအသံုးျပဳေသာ အဆင့္ျမင့္ Project</li>
                                            <li class="burmese pad-15">Fragment &amp; Dialog Fragments တဲြဖက္အသံုးျပဳထားေသာ အဆင့္ျမင့္ Project</li>
                                            <li class="burmese pad-15">Android More XML Animation တစ္ခုွဆီကို အေသးစိတ္ရွင္းလင္းထားေသာProject</li>
                                            <li class="burmese pad-15">Read And Write Message</li>
                                            <li class="burmese pad-15">Date &amp; Time Picker ထိေရာက္စြာအသံုးျပဳေသာ အဆင့္ျမင့္ Project</li>
                                            <li class="burmese pad-15">Content-Provider (Advanced)</li>
                                            <li class="burmese pad-15">Advanced Menu System ထိေရာက္စြာအသံုးျပဳေသာ အဆင့္ျမင့္ Project</li>
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
                                            <li class="pad-20"><i class="fa fa-hand-o-right"></i> <span class="pad-15">Online Support ေပးသည့္ Phone Book System တစ္ခုတည္ေဆာက္ျခင္း</span></li>
                                            <li class="pad-20"><i class="fa fa-hand-o-right"></i> <span class="pad-15">Facebook က့ဲသို႔ေသာ Social Application တစ္ခု ေရးသားျခင္း</span></li>
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
