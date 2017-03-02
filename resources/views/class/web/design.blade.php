@extends('layout.master')

@section('title', 'Web Design Class')

@section('styles')

    <link rel="stylesheet" href="{{ asset('custom.css') }}">

@stop

@section('breadcrumb')

    <div class="breadcrumb-holder white-bg">
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/class') }}">Class</a></li>
                    <li>Web Design Class</li>
                </ul>
            </div>
        </div>
    </div>

@stop

@section('content')

    <!-- Main Content -->
    <main class="main-content">

        <div class="main-heading-holder">
            <div class="main-heading style-1">
                <h2>Web <span class="theme-color">Design</span> Class</h2>
            </div>
        </div>

        <div class="product-grid-holder tc-padding">

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
                                        <h5 class="burmese pad-15">Web Designer တစ္ေယာက္ျဖစ္ဖို႔ လိုအပ္သည့္ အရည္အခ်င္းမ်ား</h5>
                                        <ul class="burmese pad-15 list-disc pad-40 pad-bot-20">
                                            <li class="pad-15">Web Designer တစ္ေယာက္ ကၽြမ္းက်င္ထားရမည့္ ဘာသာရပ္မ်ားအား နားလည္ကၽြမ္းက်င္ျခင္း</li>
                                            <li class="pad-15">Screen Size မတူညီေသာ Layout မ်ိဳးစံုႏွင့္ ကိုက္ညီ ေျပာင္းလဲႏိုင္သည့္ Design မ်ား ဖန္တီးႏိုင္မႈ</li>
                                            <li class="pad-15">လုပ္ငန္းတြင္ေစမည့္ Framework မ်ားအား ရင္းႏွီးကၽြမ္းဝင္ျခင္း</li>
                                            <li class="pad-15">Color Theory အားနားလည္၍ Design TOOLS မ်ားအား ကၽြမ္းက်င္စြာအသံုးခ်တတ္မႈ</li>
                                            <li class="pad-15">Web Page အမ်ိဳးမ်ိဳး၏ Layout Theory ႏွင့္ Page တစ္ခုစီ၏ အႏွစ္သာရအားနားလည္၍ အဓိပၸါယ္ျပည့္ဝေသာ Pages မ်ား ဖန္တီးႏိုင္မႈ</li>
                                            <li class="pad-15">အႀကိမ္ႀကိမ္အသံုးျပဳရေသာ ကုဒ္ Snippets မ်ားအား Template Engine အသံုးျပဳ၍ Share Data မ်ားအျဖစ္ေရးသားႏိုင္မႈ</li>
                                            <li class="pad-15">Search Engine Optimize ျဖစ္သည့္ Website မ်ားေရးသားပံု URL Registration ျပဳလုပ္ပံု</li>
                                            <li class="pad-15">Web Worker , Server Sent Events, HTML5 local Storage တို႔အား အသံုးျပဳတတ္ျခင္း</li>
                                        </ul>
    <p class="burmese pad-15"><i class="fa fa-arrow-right"></i>  Web Designer တစ္ေယာက္ ကၽြမ္းက်င္ထားရမည့္ ဘာသာရပ္မ်ား အေနနဲ႔ HTML (HTML 5, HTML 5.1), CSS (CSS3), jQuery, JavaScript တို႔ကိုေလ့လာသြားရမည္၊ ကၽြမ္းက်င္ထားသင့္တဲ့ဘာသာရပ္ကုိ မကၽြမ္းက်င္ဘဲ တတ္သေလာက္နဲ႔ေရးရင္ရလား ဆိုေတာ့ရပါတယ္၊ ဒါေပမယ့္ အေပ်ာ္တမ္း အဆင့္ ဝက္ဘ္ဆိုဒ္ေတြကိုသာ ေရးသားႏိုင္မွာ ျဖစ္ၿပီးေတာ့ ျပည္တြင္းျပည္ပ ေစ်းကြက္ဝင္ဝက္ဘ္ဆိုဒ္ေတြကိုေတာ့ ေရးႏိုင္မွာမဟုတ္ပါဘူး၊ အခ်ိဳ႕ အဆင့္မမွီတဲ့ ဝက္ဘ္္ဆိုဒ္ေတြနဲ႔ ဝင္ေငြရေနသူေတြလဲရွိပါတယ္၊ ဒါကေတာ့ customer ေတြရဲ့ နားမလည္မႈေပၚမွာ အခြင့္ေကာင္းယူတာျဖစ္လို႔ ရည္ရွည္တည္ျမဲမွာမဟုတ္ပါဘူး၊ ဒီေတာ့ ကိုယ္စိတ္ဝင္စားလို႔ေလ့လာတဲ့ ဘာသာရပ္ကို Professional က်က် နားလည္တက္ေျမာက္ထားဖို႔လိုပါတယ္၊ လိုအပ္တဲ့ ရွင္းလင္း သင္ၾကားေပးမႈကို ကၽြန္ေတာ္တို႔ဘက္ကအျပည့္အဝ Support ေပးမယ္၊ ရေအာင္ ေလ့က်င့္ သင္ယူဖို႔ အႀကိမ္ႀကိမ္ ေလ့လာႀကိဳးစားဖို႔ကေတာ့ ကိုယ္တိုင္တာဝန္ျဖစ္ပါတယ္။</p>
      <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> တိုးတက္လာတဲ့ေခတ္ႀကီးထဲမွာ Internet အသံုးျပဳသူတိုင္း ကြန္ျပဴတာမပိုင္ၾကေပမယ့္ ဖုန္း ေတာ့ ပိုင္ၾကပါတယ္၊ Facebook အသံုးျပဳသူရဲ့ 90% က Mobile သံုးၿပီး facebook ကိုၾကည့္ၾကတာပါ၊ ဒီလိုပဲ အျခားေသာ Platform ေတြမွာလဲ Mobile traffic ကသာလွ်င္ အမ်ားဆံုးျဖစ္လို႔ Designer တစ္ေယာက္ အေနနဲ႔လည္း Screen Size မတူညီေသာ Devices မ်ိဳးစံုတြင္ အပ်က္အစီးမရွိပဲ အလိုအေလွ်ာက္ ပံုစံေျပာင္းလဲ ေဖာ္ျပႏိုင္သည့္ Web Page မ်ားတည္ေဆာက္ႏိုင္ဖို႔ လိုအပ္လာပါတယ္၊ ဒီ့အတြက္ Bootstrap Design Framework အား အသံုးခ်နည္းကို ေလ့လာၿပီး Flaxible ျဖစ္တဲ့ ဝက္ဘ္ဆိုဒ္ Devices မ်ိဳးစံု၏ Screen Size မ်ိဳးစံုအရြယ္အစား ေပၚမူတည္ၿပီး အလိုအေလွ်ာက္ လိုက္ေလွ်ာညီေထြေအာင္ ေျပာင္းႏိုင္တဲ့ ဝက္ဆိုဒ္မ်ိဳးဖန္တီးႏိုင္ေအာင္ သင္ၾကားေပးမွာျဖစ္ပါတယ္။</p>
    <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> CSS သံုးၿပီး ဝက္ဆိုဒ္ေတြကို အလွဆင္တာက Designer တစ္ေယာက္အတြက္ လိုအပ္တဲ့အရည္အခ်င္းဆိုေပမယ့္ လက္ေတြ႔ Design ေလာကမွာေတာ့ CSS သီးသန္႔ဆိုရင္ အလုပ္မတြင္ႏိုင္ပါဘူး၊ သက္ဆိုင္ရာ Values ေတြအားလံုးကို အခ်ိန္မေရြးလြယ္ကူစြာ ေျပာင္းလဲႏိုင္ေအာင္ လွ်င္ျမန္စြာ CSS ကုဒ္ေတြကို ေရးႏိုင္ေအာင္၊ Bootstrap Framework တို႔ကို အလြယ္တကူ Override လုပ္ႏို္င္ဖို႔အတြက္ဆိုရင္ေတာ့ LESS (သို႔) SCSS တို႔လို CSS processor တစ္ခုခုကို ကၽြမ္းက်င္ထားဖို႔လိုပါတယ္၊ ဒီ့အတြက္လည္း Brighter Myanmar ကြန္ျပဴတာသင္တန္းမွာ SCSS ႏွင့္ LESS သင္ခန္းစာေတြကို အဆင့္ဆင့္ သင္ၾကားေပးျခင္း လက္ေတြ႔ Projects ေတြမွာ အသံုးျပဳျခင္းေတြလုပ္သြားရပါမယ္။</p>
    <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> Color Theroy ကို နားလည္၍ Website တစ္ခုလံုးအေနႏွင့္ ျခံဳငံုကာ အေရာင္ အသံုးျပဳပံု အလွဆင္ပံု ကိုေလ့လာရမည့္အျပင္ Designer TOOLS မ်ားျဖစ္သည့္ Photoshop ႏွင့္ Illustrator တို႔ကိုလည္း ေလ့လာသြားရမည္၊ Color Theory မွာ Minimalism သေဘာတရား၊ Color Concepts & Terminology ၊ Color Pattern ၊ Flat Color ၊ Material Deisgn & Color Theory တို႔ကို ေလ့လာသြားရမွာ ျဖစ္ပါတယ္၊ Design Tools မ်ား ျဖင့္ Virtualize Design မ်ား Layout မ်ား သတ္မွတ္ျခင္း ၊ Logo Design မ်ား ဖန္တီးျခင္း ၊ Web Component UI မ်ား ဖန္တီးျခင္းတို႔ကိုေလ့လာသြားရမွာ ျဖစ္ပါတယ္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> ကမၻာေက်ာ္ ဒီဇိုင္းပညာရွင္မ်ား ႏွင့္ အသံုးမ်ားသည့္ Design မ်ား ၏ Layout အယူအဆ Page တစ္ခုခ်င္းစီ၏ information အယူအဆမ်ားကို ေလ့လာ၍ ကမၻာ့ ေစ်းကြက္ဝင္ ဒီဇုိင္းမ်ား ကို ေရးသားႏိုင္ေအာင္ ေလ့လာရမည္။ Web Design Technology အသံုးျပဳ၍ အြန္လိုင္းတြင္ Design မ်ားေရာင္းခ်၍ ဝင္ေငြရွာေနၾကေသာ Freelance မ်ား၏ Design မ်ား စုစည္းရာ Templatemonster ႏွင့္ ThemeForest တို႔ရွိနာမည္ႀကီး ဒီဇိုင္းမ်ား အား ဥပမာ ယူ၍ ကိုယ္ပိုင္ အေကာင္းဆံုး ဒီဇိုင္းမ်ား ဖန္တီးႏိုင္ေအာင္ အဆင့္ဆင့္ ေလ့လာသြားရမည္ျဖစ္သည္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> အႀကိမ္ႀကိမ္ အသံုးျပဳႏိုင္ေသာ ကုဒ္မ်ားအား Sinppets မ်ားအျဖစ္ဖန္တီး၍ Twig Template Engine ႏွင့္ Laravel Template Engine တို႔အား အသံုးျပဳကာ Reusable ျဖစ္ေအာင္ ဖန္တီးပံုအား ေလ့လာရမည္၊ တကယ့္ လက္ေတြ႔ Design Project တစ္ခုမွာ အႀကိမ္ႀကိမ္ ျပန္လည္အသံုးျပဳရသည့္ Code Snippets မ်ား ပါဝင္စျမဲ ျဖစ္သည္၊ ထိုကုဒ္မ်ားကို Yield လုပ္၍ အႀကိမ္ႀကိမ္ ေရးစရာ လံုး၀မလိုဘဲ တည္ေဆာက္ႏိုင္သည့္ နည္းမ်ားအား သင္ၾကားေပးမည္ျဖစ္သည္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> Web Site တည္ေဆာက္ရာတြင္ ဒီဇိုင္း လွပေသသပ္ေကာင္းမြန္မႈ တစ္ခုတည္းႏွင့္ မလံုေလာက္ပါ၊ Search Engine Optimization ေကာင္းမြန္သည့္ ဝက္ဆိုဒ္ျဖစ္ရန္လည္း လိုအပ္ပါသည္၊ ဒီ့အတြက္ Web Designer တစ္ေယာက္အေနနဲ႔ လိုက္နာလုပ္ေဆာင္ရာမယ့္ Meta မ်ားအား အေကာင္းဆံုးအသံုးခ်ပံု၊ Heading Tags မ်ားအား Content ႏွင့္ညီေအာင္ အသံုးျပဳပံု ၊ URL Registration ျပဳလုပ္ပံု၊ Google Search Engine အလုပ္လုပ္ပံု သေဘာတရားေတြကိုပါ အထူးျပဳသင္ၾကားေပးသြားမွာျဖစ္ပါတယ္၊ ဒီသေဘာတရားေတြကို ကၽြမ္းက်င္မွသာလွ်င္ Content တူ ဝက္ဆိုဒ္မ်ားနဲ႔ ယွဥ္ရင္ ကိုယ့္ရဲ႕ဝက္ဆိုဒ္က Search Result ထိပ္ဆံုးမွာ ေရာက္ေနမွာျဖစ္ပါတယ္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> ပံုမွန္အားျဖင့္ Design ဖန္တီးစဥ္ကာလ Develop လုပ္စဥ္ကာလမွာ Designer တိုင္းက Local Machine မွာပဲ Develop လုပ္ႀကပါတယ္၊ ဆိုဒ္တစ္ခုလံုး ၿပီးဆံုးၿပီဆိုရင္ေတာ့ Online Server COMPUTER ေပၚကိုတင္ႀကပါတယ္၊ ဒီအခါ Domain Name ဝယ္ယူျခင္း Hosting ဝယ္ယူျခင္း၊ Domain Name နဲ႔ Hosting ဝယ္ထားတဲ့ ကုမၸဏီမတူရင္ Domain Name Point Out လုပ္ျခင္းဆိုတဲ့ လုပ္ငန္း စဥ္ေတြ ကိုလုပ္ရပါတယ္၊ ဒီလိုပါပဲ Web Server ရဲ့ Cpanel ကိုေကာင္းေကာင္းအသံုးျပဳတတ္ျခင္း ၊ Subdomain မ်ား ဖန္တီးတတ္ျခင္း ၊ ကိုယ္ပိုင္ ကုမၸဏီနာမည္ႏွင့္ Web Mail မ်ား ဖန္တီးျခင္း၊ Server ဝင္ေရာက္ အလုပ္လုပ္ခြင့္မေပးတဲ့ Hosting ေတြမွာ File Transfer Protocol ကိုအသံုးျပဳၿပီး Web Data မ်ား Upload လုပ္ျခင္းေတြကိုပါ အေသးစိတ္ေလ့လာသြားရမွာျဖစ္ပါတယ္။ ဒီလိုပဲ Virtual Private Server (or) Dedicated Server ဝယ္ယူထားတဲ့ Customer မ်ားအတြက္ ကိုယ္ပိုင္ Hosting တစ္ခုလံုးအား ျပန္ဖန္တီးတဲ့ အဆင့္ျမင့္ နည္းပညာမ်ားကိုလည္း ေလ့လာသြားရမွာျဖစ္ပါတယ္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> ဝက္ဆိုဒ္ တည္ေဆာက္တဲ့အခါ Web Page Loading Time ျမန္ေအာင္လို႔ အသံုးျပဳႏိုင္တဲ့ HTML5 Local Storage Technology ကိုသံုးၿပီး အျမဲတမ္းအသံုးျပဳတဲ့ CSS ေဒတာေတြကို သိမ္းထားႏိုင္ပါတယ္၊ ေနာက္ပိုင္း အဲ့ဒီ့ page ကို Loading လုပ္တိုင္းမွာ CSS ဖိုင္ရွိၿပီးသားျဖစ္ေနမွာျဖစ္လို႔လုပ္ငန္းစဥ္ကို ပိုၿပီးျမန္ေစပါတယ္၊ Server Sent Events ကိုသံုးၿပီး Push Message တည္ေဆာက္ျခင္း ၊ ေဒတာ အေျပာင္း အလဲ လုပ္ျခင္းေတြကိုလည္း အလြယ္တကူလုပ္ႏိုင္သလို လိုအပ္တဲ့ မွတ္တမ္းတင္မႈ Script Rendering လုပ္မႈေတြကိုလည္း Web Worker ရဲ့ Background Thread သံုးၿပီး လုပ္ကိုင္ပံုမ်ားကိုပါ အေသးစိတ္ ေလ့လာသြားရမွာျဖစ္ပါတယ္။</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">HTML သင္ခန္းစာမ်ား</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body pad-20 pad-bot-20 pad-top-15">
                                        <ol>
                                            <li class="burmese pad-15">Web Design Basic အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">HTML Basic Frame အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Heading and Paragraph အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Image and image attributes မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Meta tag ႏွင့္ more attributes မ်ားအားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Font tag ႏွင့္ attribute မ်ားအားနားလည္ျခင္း</li>
                                            <li class="burmese pad-15">Link tag and shortcut icon attribute အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Formatting tag မ်ားအားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Pre tag ႏွင့္ xmp tag မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Hyber link ႏွင့္ Image link မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Anchor Link အေၾကာင္းနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Horizontal Rule and Line Break အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">HTML Comments အေၾကာင္းနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Quotation အေၾကာင္းနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Color and Atrributes မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Ordered List မ်ားအားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Unordered List မ်ားအားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Definition List မ်ားအားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">HTML Remaining tag အခ်ိဳ႕အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">External File ခ်ိတ္ဆက္ျခင္း အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Absolute Link and relative link မ်ားအား ေလ႔လာျခင္း။</li>
                                            <li class="burmese pad-15">Difference between id and class အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Form Elements မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Text Input Control အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Submit Button and Reset button ဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Checkbox Control အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Radio Box Control အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Selectbox Control အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">File Selectbox Control အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Hidden Control အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Table Row, Table data and border မ်ားဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Table Header, cellspacing and cellpadding မ်ားဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Colspan and rowspan attributes မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Table tag and attributes မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Marqueee tag မ်ားအားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Meta tag  မ်ားအားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Link Target Attribute အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Website တစ္ခုဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Domain name and Hosting အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Embed Media အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Frames မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">HTML5 Browser Support အားေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">HTML5 Elements မ်ားအားေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">H TML5 Semantics မ်ားအားေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">HTML5 Migration အားေလ့လာျခင္း</li>
                                            <li class="burmese pad-15">HTML နဲ႔ CSS ဆိုတာဘာလဲ?</li>
                                            <li class="burmese pad-15">Editor install ျပဳလုပ္ျခင္း</li>
                                            <li class="burmese pad-15">HTML တည္ေဆာက္ပုံ၊ HTML tags မ်ားႏွင့္ attributes မ်ားအေၾကာင္းေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Paragraph,heading,comment,quote and formatting tag မ်ားအားတည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">Link, image and table မ်ားအား တည္ေဆာက္ျခင္း </li>
                                            <li class="burmese pad-15">Div, span, iframe နွင့္ lists မ်ားဖန္တီးျခင္း </li>
                                            <li class="burmese pad-15">Basic form တစ္ခု ဘယ္လို ဖန္တီးၾကမလဲ? </li>
                                            <li class="burmese pad-15">Input Form type အမ်ိဴးမ်ိဴးအား ေလ့လာျခင္း </li>
                                            <li class="burmese pad-15">Form attributes အမ်ိဴးမ်ိဴးအား ေလ့လာျခင္း </li>
                                            <li class="burmese pad-15">Audio, Video and Youtube Video မ်ားအား တည္ေဆာက္ျခင္း</li>
                                            <li class="burmese pad-15">HMTL5 semantic elements မ်ားအားေလ့လာျခင္း </li>
                                            <li class="burmese pad-15">CSS syntax, selector ႏွင့္ CSS apply လုပ္မည့္နည္းလမ္းမ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">HTML page ၏ ေနာက္ခံအား ျပဳျပင္ျခင္း </li>
                                            <li class="burmese pad-15">Text မ်ားအားအလွဆင္ျခင္း </li>
                                            <li class="burmese pad-15">Font မ်ားအားျပဳျပင္ျခင္း  </li>
                                            <li class="burmese pad-15">Class ဆိုတာဘာလဲ၊ comment မ်ားထည့္ျခင္းနွင့္ Lists မ်ားအား အလွဆင္ျခင္း။</li>
                                            <li class="burmese pad-15">Border, outline, margin, padding and dimensions မ်ားအားဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Dimension ေတြဘယ္လိုသတ္မွတ္ၾကမလဲ? </li>
                                            <li class="burmese pad-15">Margin ေတြဘယ္လိုသတ္မွတ္ၾကမလဲ?</li>
                                            <li class="burmese pad-15">Display property အားေလ့လာျခင္း </li>
                                            <li class="burmese pad-15">Anchor tag, image, div, table, and html5 semantic elements မ်ားအား အလွဆင္ျခင္း။</li>
                                            <li class="burmese pad-15">Id နဲ႔ floating ဆိုတာဘာလဲ? </li>
                                            <li class="burmese pad-15">Class and Id တို႔၏ ကြာျခားခ်က္မ်ား </li>
                                            <li class="burmese pad-15">Elements မ်ားအား ေနရာခ်ျခင္း</li>
                                            <li class="burmese pad-15">Combinators, opacity, overflow, visibility တို႔အေၾကာင္းေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Pseudo Elements နဲ႔ Pseudo Class ဆိုတာဘာလဲ? </li>
                                            <li class="burmese pad-15">Navigation Bar တစ္ခု တည္ေဆာက္ျခင္း </li>
                                            <li class="burmese pad-15">Image Gallery တစ္ခုဖန္တီးျခင္း</li>
                                            <li class="burmese pad-15">Webpage Layout တစ္ခုအားဖန္တီးျခင္း </li>
                                            <li class="burmese pad-15">CSS3 color နွင့္ Prefixes မ်ားအားေလ့လာျခင္း </li>
                                            <li class="burmese pad-15">Border image နွင့္ Rounded corners မ်ားဖန္တီးျခင္း </li>
                                            <li class="burmese pad-15">Background အားေလ့လာျခင္း</li>
                                            <li class="burmese pad-15"> BoxSizing ဆိုတာဘာလဲ? </li>
                                            <li class="burmese pad-15">CSS3 Gradient color မ်ားဖန္တီးျခင္း</li>
                                            <li class="burmese pad-15">Font မ်ားအား  Shadow ဖန္တီးျခင္း</li>
                                            <li class="burmese pad-15">CSS3 သုံး၍ Font မ်ားအားျပဳျပင္ျခင္း</li>
                                            <li class="burmese pad-15">Transition property အား ဘယ္လို အသုံးခ်ၾကမလဲ</li>
                                            <li class="burmese pad-15">2D and 3D Transformation မ်ားအားအသုံးခ်ျခင္း </li>
                                            <li class="burmese pad-15">Animation တစ္ခု ဘယ္လိုတည္ေဆာက္ၾကမလဲ?</li>
                                            <li class="burmese pad-15">User interface handle လုပ္ျခင္းနွင့္ Columns မ်ားခြဲျခင္း </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">Css သင္ခန္းစာမ်ား</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body pad-20 pad-bot-20 pad-top-15">
                                        <ol>
                                            <li class="burmese pad-15">CSS မိတ္ဆက္ ။</li>
                                            <li class="burmese pad-15">CSS Apply လုပ္ျခင္းအား နားလည္ျခင္း ။</li>
                                            <li class="burmese pad-15">CSS syntax အားေလ့လာျခင္း ။</li>
                                            <li class="burmese pad-15">Selectors မ်ားအားေလ့လာျခင္း ။</li>
                                            <li class="burmese pad-15">Background အားေလ့လာျခင္း ။</li>
                                            <li class="burmese pad-15">Text Decoration အားေလ့လာျခင္း ။</li>
                                            <li class="burmese pad-15">Font မ်ားအား အလွဆင္ျခင္း ။</li>
                                            <li class="burmese pad-15">Link state မ်ားအားနားလည္ျခင္း ။</li>
                                            <li class="burmese pad-15">List and properties မ်ားအားနားလည္ျခင္း ။</li>
                                            <li class="burmese pad-15">Table အားေလ့လာျခင္း ။</li>
                                            <li class="burmese pad-15">Box Model, dimension, padding and margin အားနားလည္ျခင္း ။</li>
                                            <li class="burmese pad-15">Border မ်ားဖန္တီးျခင္း ။</li>
                                            <li class="burmese pad-15">Outline မ်ားဖန္တီးျခင္း ။</li>
                                            <li class="burmese pad-15">Margin အားနားလည္ျခင္း ။</li>
                                            <li class="burmese pad-15">Padding အားနားလည္ျခင္း ။</li>
                                            <li class="burmese pad-15"> Dimension အားေလ့လာျခင္း ။</li>
                                            <li class="burmese pad-15">CSS Display အားနားလည္ျခင္း ။</li>
                                            <li class="burmese pad-15">Max-width property အားေလ့လာျခင္း ။</li>
                                            <li class="burmese pad-15">Position property အားေလ့လာျခင္း ။</li>
                                            <li class="burmese pad-15">Float property အားနားလည္ျခင္း ။</li>
                                            <li class="burmese pad-15">Inline-block elements မ်ားအားနားလည္ျခင္း ။</li>
                                            <li class="burmese pad-15">CSS Align ခ်ိန္ျခင္း ။</li>
                                            <li class="burmese pad-15">CSS Combinators မ်ားအားနားလည္ျခင္း ။</li>
                                            <li class="burmese pad-15">CSS Pseudo-class မ်ားအားနားလည္ျခင္း ။</li>
                                            <li class="burmese pad-15">Navigation Bar မ်ားတည္ေဆာက္ျခင္း ။</li>
                                            <li class="burmese pad-15">CSS Dropdown ဖန္တီးျခင္း ။</li>
                                            <li class="burmese pad-15">CSS Tooltips မ်ားတည္ေဆာက္ျခင္း ။</li>
                                            <li class="burmese pad-15">Image Gallery မ်ားဖန္တီးျခင္း ။</li>
                                            <li class="burmese pad-15">Image Opacity မ်ားအားနားလည္ျခင္း ။</li>
                                            <li class="burmese pad-15">Image Sprites မ်ားအားနားလည္ျခင္း ။</li>
                                            <li class="burmese pad-15">Attribute Selectors မ်ားအားနားလည္ျခင္း ။</li>
                                            <li class="burmese pad-15">CSS Form မ်ားအားနားလည္ျခင္း ။</li>
                                            <li class="burmese pad-15">CSS Counters မ်ားဖန္တီးျခင္း ။</li>
                                            <li class="burmese pad-15">CSS3 မိတ္ဆက္ ။</li>
                                            <li class="burmese pad-15">CSS3 Rounded Corners Property အားနားလည္ျခင္း ။</li>
                                            <li class="burmese pad-15">Border Images မ်ားဖန္တီးျခင္း ။</li>
                                            <li class="burmese pad-15">CSS3 Background property အားေလ့လာျခင္း ။</li>
                                            <li class="burmese pad-15">Colors မ်ားအားေလ့လာျခင္း ။</li>
                                            <li class="burmese pad-15">Gradient color မ်ားဖန္တီးျခင္း ။</li>
                                            <li class="burmese pad-15">CSS3 Shadows အားေလ့လာျခင္း ။</li>
                                            <li class="burmese pad-15">CSS3 Text အားေလ့လာျခင္း ။</li>
                                            <li class="burmese pad-15">CSS3 Font အားေလ့လာျခင္း ။</li>
                                            <li class="burmese pad-15">2D Transform အားေလ့လာျခင္း ။</li>
                                            <li class="burmese pad-15">3D Transform အားေလ့လာျခင္း ။</li>
                                            <li class="burmese pad-15">Transition မ်ားအားနားလည္ျခင္း ။</li>
                                            <li class="burmese pad-15">CSS3 Animation  ဖန္တီးျခင္း ။</li>
                                            <li class="burmese pad-15">CSS3 Image အားေလ့လာျခင္း ။</li>
                                            <li class="burmese pad-15">Buttons မ်ားဖန္တီးျခင္း ။</li>
                                            <li class="burmese pad-15">Pagination အားနားလည္ျခင္း ။</li>
                                            <li class="burmese pad-15">Multiple Columns မ်ား ပိုင္းျခားျခင္း ။</li>
                                            <li class="burmese pad-15">CSS3 User Interface အားနားလည္ျခင္း ။</li>
                                            <li class="burmese pad-15">Box Sizing အားနားလည္ျခင္း ။</li>
                                            <li class="burmese pad-15">Flexbox အားနားလည္ျခင္း ။</li>
                                            <li class="burmese pad-15">Media Queries  အားနားလည္ျခင္း ။</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">JavaScript သင္ခန္းစာမ်ား</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body pad-20 pad-bot-20 pad-top-15">
                                        <ol>
                                            <li class="burmese pad-15">Javascript မိတ္ဆက္။</li>
                                            <li class="burmese pad-15">Javascript Output methods မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Syntax အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Statements မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Javscript Comments မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Variables မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Operators မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Arithmetic Operators မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Assignment Operators မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Data Types မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Functions မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Objects မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Scope အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Events မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Javascript String အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Javascript String Methods မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Number အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Number Methods မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Math အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Dates အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Dates Formats မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Dates Methods မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Boolean အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Comparisons အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Conditions မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Switch အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Javscript For Loop အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Javascript While Loop အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Break Statement အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Type Conversion အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Reg Expression အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Errors အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Debugging အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Hoisting အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Strict Mode အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Javscript Form Validation အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Javascript HTML DOM သင္ခန္းစာမ်ား။</li>
                                            <li class="burmese pad-15">DOM မိတ္ဆက္။</li>
                                            <li class="burmese pad-15">DOM Methods မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">DOM Document မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">DOM Elements မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">DOM HTML အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">DOM CSS အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">DOM Events အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">DOM EventListener  မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">DOM Navigation အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">DOM Node အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">DOM Nodelist အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Browser BOM ။</li>
                                            <li class="burmese pad-15">Javascript Window အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Screen အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Location အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Javascript History အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Navigator အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Popup Alert အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Timing Functions မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Javascript Cookies မ်ားအားေလ့လာျခင္း။</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title burmese">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">jQuery သင္ခန္းစာမ်ား</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body pad-20 pad-bot-20 pad-top-15">
                                        <ol>
                                            <li class="burmese pad-15">JQuery မိတ္ဆက္။</li>
                                            <li class="burmese pad-15">JQuery Syntax အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">JQuery Selectors မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">JQuery Events မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">JQuery Hide/Show Methods မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">JQuery Fade Methods မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">JQuery Slide Methods မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">JQuery Animate Methods မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">JQuery Stop Methods မ်ားအားေလ့လာျခင္း။ </li>
                                            <li class="burmese pad-15">JQuery Chaining အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">JQuery Getting HTML Elements အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">JQuery Setting HTML Elements အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">JQuery Adding HTML Elements အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">JQuery Removing HTML Elements အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">JQuery CSS Classes အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">JQuery CSS Methods မ်ားအားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">JQuery Dimensions အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">JQuery Traversing အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">JQuery Ancestors အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">JQuery Descendants အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">JQuery Siblings အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">JQuery Filtering အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">JQuery and AJAX မိတ္ဆက္ ။</li>
                                            <li class="burmese pad-15">JQuery Load အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">JQuery Get/Post အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">JQuery noConflict() အားနားလည္ျခင္း။</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">Bootstrap သင္ခန္းစာမ်ား</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body pad-20 pad-bot-20 pad-top-15">
                                        <ol>
                                            <li class="burmese pad-15">မိတ္ဆက္။ </li>
                                            <li class="burmese pad-15">Bootstrap သံုး ၍ တည္ေဆာက္သြားမည့္ Website ။</li>
                                            <li class="burmese pad-15">Editor Install မွာ Start Up ။</li>
                                            <li class="burmese pad-15">HTML, CSS ႏွင့္ Bootstrap တို႔အေၾကာင္း။</li>
                                            <li class="burmese pad-15">Wire-framing အေၾကာင္းနားလည္ထားျခင္း ။</li>
                                            <li class="burmese pad-15">Container တည္ေဆာက္ျခင္း ၊ Homepage ဖန္တီးျခင္း ။</li>
                                            <li class="burmese pad-15">Fonts မ်ား install ျပဳလုပ္ျခငး</li>
                                            <li class="burmese pad-15">CSS3 အသံုးျပဳ၍ Homepage ဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Navigation Bar တည္ေဆာက္ျခငး။</li>
                                            <li class="burmese pad-15">Feature Page တည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">Relative And Absolute Positioning &amp; Pseudo CLasses မ်ား အေၾကာင္း။</li>
                                            <li class="burmese pad-15">Timeline Page အားတည္ေဆာက္ျခင္း (အပိုင္း ၁)</li>
                                            <li class="burmese pad-15">Timeline Page အားတည္ေဆာက္ျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Timeline Page အားတည္ေဆာက္ျခင္း (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">Parallax Page အားတည္ေဆာက္ျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Parallax Page အားတည္ေဆာက္ျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Parallax Page အားတည္ေဆာက္ျခင္း (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">Product Page အားတည္ေဆာက္ျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Product Page အားတည္ေဆာက္ျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Product Page အားတည္ေဆာက္ျခင္း (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">Numbers Page အားတည္ေဆာက္ျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Numbers Page အားတည္ေဆာက္ျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Numbers Page အားတည္ေဆာက္ျခင္း (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">Testimonials Page အားတည္ေဆာက္ျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Testimonials Page အားတည္ေဆာက္ျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Testimonials Page အားတည္ေဆာက္ျခင္း (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">Footer ဖန္တီးျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Footer ဖန္တီးျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">WebSite တစ္ခုလံုးအား စစ္ေဆး မြန္းမံျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">WebSite တစ္ခုလံုးအား စစ္ေဆး မြန္းမံျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">WebSite တစ္ခုလံုးအား စစ္ေဆး မြန္းမံျခင္း (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">Navigation Bar အား Browser ထိပ္တြင္ ကပ္ေနေအာင္ ဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Smooth Scrolling Effect ထည့္သြင္းျခင္း။</li>
                                            <li class="burmese pad-15">Scroll Animation ဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Media Queries မိတ္ဆက္။</li>
                                            <li class="burmese pad-15">WebSite အား Responsive ျဖစ္ေအာင္ဖန္တီးျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">WebSite အား Responsive ျဖစ္ေအာင္ဖန္တီးျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">WebSite အား Responsive ျဖစ္ေအာင္ဖန္တီးျခင္း (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">Favicon Icon ဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">Responsive Navigation Bar ဖန္တိးျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Responsive Navigation Bar ဖန္တိးျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Multi-level Dropdown Menu ဖန္တီးျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Multi-level Dropdown Menu ဖန္တီးျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Multi-level Dropdown Menu ဖန္တီးျခင္း (အပိုင္း ၃)။</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">LESS & SCSS သင္ခန္းစာမ်ား</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body pad-20 pad-bot-20 pad-top-15">
                                        <ol>
                                            <li class="burmese pad-15">LESS ဆိုတာဘာလဲ။</li>
                                            <li class="burmese pad-15">WebStrom Install ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Note.js Install ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">LESS Install ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">LESS Variables မ်ားအား နားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">LESS Variables မ်ားအား လက္ေတြ႔အသံုးခ်ျခင္း။</li>
                                            <li class="burmese pad-15">LESS Mixing လုပ္ပံုအား နားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">LESS Mixing အားလက္ေတြ႔အသံုးခ်ျခင္း။</li>
                                            <li class="burmese pad-15">LESS Nested Rule အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">LESS Nested Rule အားလက္ေတြ႔အသံုးခ်ျခင္း။</li>
                                            <li class="burmese pad-15">LESS Nested Condition အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">LESS Nexted Condition အားလက္ေတြ႔အသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">LESS Operation အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">LESS Operation အားလက္ေတြ႔အသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">LESS အေၾကာင္းနားလည္ အသံုးခ်ျခင္း။</li>
                                            <li class="burmese pad-15">LESS File Paths မ်ားအား Dynamic ျဖစ္ေအာင္ ဖန္တီးျခင္း။</li>
                                            <li class="burmese pad-15">LESS လက္ေတြ႔အသံုးျပဳျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">LESS လက္ေတြ႔အသံုးျပဳျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">LESS လက္ေတြ႔အသံုးျပဳျခင္း (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">Sass Install ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Sass Variables မ်ားအားနားလည္အသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">Sass Rule အားနားလည္အသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">Sass အားနားလည္အသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">Sass Mixins အားနားလည္အသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">Sass Extends အားနားလည္အသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">Sass Functions အားနားလည္အသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">Sass Directives အားနားလည္အသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">Sass လက္ေတြ႔အသံုးျပဳျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Sass လက္ေတြ႔အသံုးျပဳျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Sass လက္ေတြ႔အသံုးျပဳျခင္း (အပိုင္း ၃)။</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">Photoshop, Illustrator, Layout Design, Color Theory သင္ခန္းစာမ်ား</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body pad-20 pad-bot-20 pad-top-15">
                                        <ol>
                                            <li class="burmese pad-15">အလင္း/အေမွာင္တို႔၏ သေဘာသဘာ၀မ်ား</li>
                                            <li class="burmese pad-15">Color Theory</li>
                                            <li class="burmese pad-15">pixel ႏွင့္ bitmap တို႔၏အေၾကာင္း</li>
                                            <li class="burmese pad-15">layers အသံုးျပဳပံု အေသးစိတ္ႏွင့္ resolution တို႔၏အေၾကာင္း</li>
                                            <li class="burmese pad-15">file format တစ္ခုခ်င္းစီ၏ ကြာျခားမႈႏွင့္ ၄င္းတို႔အား အသံုးျပဳပံု</li>
                                            <li class="burmese pad-15">Photoshop မ်ား၏ အသံုးျပဳပံုႏွင့္ လက္ေတြ႕ေလ့က်င့္ခန္းမ်ား</li>
                                            <li class="burmese pad-15">Illustrator tool မ်ား၏အသံုးျပဳပံုႏွင့္ လက္ေတြ႕ေလ့က်င့္ခန္းမ်ား</li>
                                            <li class="burmese pad-15">မသိမျဖစ္ သိရမည့္ အေရးႀကီးေသာ special effect မ်ား</li>
                                            <li class="burmese pad-15">ကမၻာေက်ာ္ ဒီဇိုင္နာမ်ား၏ ခ်ည္းကပ္ယူဆပံုမ်ား</li>
                                            <li class="burmese pad-15">logo တစ္ခု၏ ရာဇ၀င္ႏွင့္ ေရးဆြဲပံုအဆင့္ဆင့္</li>
                                            <li class="burmese pad-15">မိမိစိတ္ခံစားခ်က္အေတြးအျမင္မ်ားအား ပံုမ်ားအျဖစ္ ဖန္တီးမႈအဆင့္ဆင့္</li>
                                            <li class="burmese pad-15">Website template တစ္္ခုအား ေရးဆြဲရာတြင္ စဥ္းစားရမည့္အေျခခံအခ်က္မ်ား</li>
                                            <li class="burmese pad-15">Photoshop ျဖင့္ လွပေသသပ္ေသာ Website Template မ်ားေရးဆြဲပံု</li>
                                            <li class="burmese pad-15">Illustrator ေပၚတြင္ resolution ေကာင္းမြန္ေသာ ႏိုင္ငံတကာအဆင့္မီ bitmap ပံုမ်ားေရးဆြဲဖန္တီးျခင္းႏွင့္ Website ေပၚတြင္ အသံုးျပဳပံုမ်ား</li>

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
                                           <li class="pad-20"><i class="fa fa-hand-o-right"></i> <span class="pad-15">ေစ်းေရာင္း သည့္ Online Shopping ဝက္ဆိုဒ္အမ်ဳိးအစားအျဖစ္ ecommerce Design တစ္ခုေရးသားျခင္း</span></li>
                                           <li class="pad-20"><i class="fa fa-hand-o-right"></i> <span class="pad-15">Devices မ်ိုးစံုတြင္ ၾကည့္ရႈ႕ႏုိင္သည့္ Interactive Web Design တစ္ခုဖန္တီးျခင္း</span></li>
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

    </main>
    <!-- Main Content -->

@stop

@section('scripts')

    <script src="{{ asset('js/panel_collapse.js') }}"></script>

@stop