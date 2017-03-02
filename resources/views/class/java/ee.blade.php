@extends('layout.master')

@section('title', 'JavaEE Class')

@section('styles')

    <link rel="stylesheet" href="{{ asset('custom.css') }}">

@stop

@section('inner_banner')
    <div class="parallax-window inner-banner tc-padding overlay-dark" data-parallax="scroll" data-image-src="{{ asset('images/inner-banner/banner.jpg') }}">
        <div class="container">
            <div class="inner-page-heading style-2 h-white">
                <h2>Java EE Class</h2>
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
                    <li>Java EE</li>
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
                <h2>JAVA <span class="theme-color"> EE </span> Class</h2>
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
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">Java EE Course တြင္ပါဝင္သည့္ သင္ခန္းစာမ်ား</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                        <div class="clearfix"></div>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body pad-20 pad-top-15">
                                        <h5 class="burmese pad-15">JavaEE Course တြင္ပါဝင္သည့္ သင္ခန္းစာမ်ား</h5>
                                        <ul class="burmese pad-15 list-disc pad-40 pad-bot-20">
                                            <li class="pad-15">Basic Concepts</li>
                                            <li class="pad-15">Intermediate Concept</li>
                                            <li class="pad-15">Servlet & Server Page</li>
                                            <li class="pad-15">Spring Framework</li>
                                            <li class="pad-15">Hibernate</li>
                                            <li class="pad-15">JavaMail</li>
                                        </ul>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i>  Java Basic Programming<br>Java Basic Concept သင္ခန္းစာတြင္ Java ဘာသာရပ္အား စတင္ေလ့လာသူတို႔ သိရွိထားရမည့္ Java Basic Program တစ္ခုအားတည္ေဆာက္ပံု ၊ Operating System မွ Java Program အား အဆင့္ဆင့္ Compile လုပ္၍ Computer မွ နားလည္အလုပ္လုပ္ႏိုင္သည့္ Machine Code မ်ားပါ၀င္ေသာ Object ဖိုင္မ်ား ေျပာင္းပံု၊ JVM (Java Virtual Machine) မွ Random Access Memory တြင္ ေနရာယူ၍ Real Time Compilation System အားျဖစ္ေပၚေစပံုတို႔အား အဆင့္ျမင့္ျမင့္နားလည္ေစရန္ သင္ၾကားေပးျခင္း၊ Syntax ကြဲေသာ္လည္း Concepts တူသည့္အသံုးအမ်ားဆံုး Programming ဘာသာရပ္မ်ား ျဖစ္ၾကသည့္ C++, Python, Objective C, PHP OOP style တို႔ႏွင့္ Java ဘာသာရပ္ယွဥ္၍ရွင္းျပျခင္း၊ထိုရွင္းျပမႈတြင္ Java Programmingအား နားလည္သြားပါကအျခား Programming ဘာသာရပ္ တို႔အားရက္ပိုင္းေလ့လာရံုႏွင့္နားလည္ကၽြမ္းက်င္သြားႏိုင္ေအာင္လက္ေတြ႔ေရးျပရွင္းျပျခင္း၊ Programmer တိုင္းသိထားရမည့္ data type, variables, operators, class, methods, Stri ng, Array, Control Statements တို႔ကို Java Basic Concepts အေနႏွင့္ေလ့လာသြားရမွာျဖစ္ပါသည္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> Intermediate Concept<br>Intermediate သင္ခန္းစာအတြက္ Class, Method, Objects, String, Characters, Regular Expressions ႏွင့္ Java Patterns မ်ားအား နက္နက္နဲနဲ နားလည္သြားေအာင္ အေသးစိတ္ေလ့လာသြားရမွာျဖစ္ပါသည္၊ ဖိုင္မ်ားတည္ေဆာက္ျခင္း ၊ တည္းျဖတ္ျခင္း ၊ ေဒတာ သိမ္းဆည္းျခင္း ၊ ထုတ္ယူျခင္းတို႔အတြက္ File handling, ကိုယ္ပိုင္ Object အသံုးျပဳ၍ လံုျခံဳေရးထိန္းခ်ဳပ္ႏိုင္ရန္အတြက္ Stream & Object Serialization တို႔ကိုလည္း နားလည္ကၽြမ္းက်င္ေအာင္ ေလ့လာသြားရမည္ျဖစ္ပါသည္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> Servlet ကေတာ့ Server side မွာ အလုပ္လုပ္တဲ့ Java Technology ျဖစ္ၿပီးေတာ့ Dynamic Web Page ေတြကိုဖန္တီးဖို႔အတြက္ အသံုးျပဳပါတယ္၊ Java Language အသံုးျပဳၿပီး တည္ေဆာက္ထားတဲ့ Technology ျဖစ္တဲ့အတြက္ Server Type ေရြးခ်ယ္ရာမွာ Platform Independent ျဖစ္တယ္၊ Servlet API မွာ Servlet, GenericServlet, HttpServlet, ServletRequest, servletResponse တို႔လို Interfaces ေတြနဲ႔ Classes ေတြ အမ်ား ႀကီးရွိပါတယ္။<p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> JSP Page ဆိုတာကေတာ့ tags နဲ႔ JSP tags မ်ား ထည့္သြင္းတည္ေဆာက္တဲ့ Web စာမ်က္ႏွာေတြကိုဆိုလိုပါတယ္၊ Servlet သီးသန္႔ေရးၿပီးတည္ေဆာက္ထားတဲ့ စာမ်က္ႏွာေတြထက္စာရင္ ဒီဇိုင္းအလွဆင္မႈေကာ ေရရွည္ျပဳျပင္ထိန္းသိမ္းမႈေတြမွာပါ JSP page ေတြအသံုးျပဳျခင္းက အမ်ားႀကီး အေရးသာပါတယ္၊ JSP page ေတြမွာ Expression Languages ကိုလည္း Features ေတြအျဖစ္ေတြ႔ႏိုင္သလို ကိုယ္ပိုင္ Custom Tags ေတြကို လည္းတည္ေဆာက္ႏိုင္ပါတယ္၊ JSP နဲ႔ပတ္သက္ၿပီး အေသးစိတ္ ေလ့လာသြားရမွာပါ။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> Database နဲ႔ ခ်ိတ္ဆက္အလုပ္လုပ္တဲ့အခါ ပိုမိုလြယ္ကူေစၿပီး Functionalities ေတြျပည့္စံုတယ္ ORM (Object Relational Mapping) ကိုအသံုးျပဳၿပီး အလုပ္လုပ္ႏိုင္ဖို႔အတြက္ Hibernate framework ကိုအသံုးျပဳနည္း အဆင့္ဆင့္ သင္ၾကားေပးပါတယ္၊ Hibernate Framework ကိုအသံုးျပဳျခင္းအားျဖင့္ ရႈပ္ေထြးတဲ့ Relational Database မ်ားကိုကိုင္တြယ္အလုပ္လုပ္ျခင္း၊ Table join လုပ္ျခင္း Foreign Key သတ္မွတ္၍ ခ်ိတ္ဆက္ျခင္းမ်ားႏွင့္ Dtabase Procedure သတ္မွတ္ျခင္း trigger မ်ားဖန္တီး သတ္မွတ္ျခင္းတို႔လို လုပ္ငန္းစဥ္ေတြကို ပိုမိုလြယ္ကူသြားေစမွာျဖစ္ပါတယ္္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> Servlet အသံုးျပဳျပီး Functionalities ေတြျပည့္စံုတဲ့ ဝက္ဆိုဒ္ေတြကို ဖန္တီးရာမွာ ေရးရတဲ့ ကုဒ္ေတြမ်ားျခင္း Model View Controller Architecture ကိုအသံုးျပဳႏိုင္ေသာ္လည္း Routing System, Server Rendering, Page Controller မ်ား သတ္မွတ္ျခင္းမွာရႈပ္ေထြးလက္ဝင္လွတဲ့လုပ္ငန္းစဥ္ေတြျဖစ္ပါတယ္။ Spring ကေတာ့ Servlet ကိုပိုမိုလြယ္ကူသြားေစတဲ့ JavaEE Application ေတြကို ဖန္တီးရာမွာ အလြန္႔ကို လုပ္ငန္းတြင္ေစပါတယ္။ Beginner ေတြအေနနဲ႔ အသံုးမ်ားသလို Experts ေတြလဲ မသံုးမျဖစ္သံုးၾကရပါတယ္၊ Spring က Lightweight Framework ျဖစ္ၿပီး သူ႔ထဲမွာကို Struts , Hibernate, Tapestry, EJB, JSF တို႔လို Framework ေတြကို support ေပးထားတဲ့အတြက္ Framework ေတြရဲ႕မိခင္ႀကီးကို ျဖစ္ေနလို႔ ျပည္႔ျပည္႔စုံစုံရွိလွပါတယ္၊ Spring Framework ကို IOC, AOP, DAO, Context, ORM, WEB MVC တို႔လို modules ေတြနဲ႔ တည္ေဆာက္ထားတဲ့အတြက္ လက္ေတြ႔ သင္ခန္းစာေတြမွာ ထို Modules ေတြအားလံုးကို ေလ့လာသြားရမွာျဖစ္ပါတယ္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> ဝက္ဘ္ဆုိဒ္တည္ေဆာက္တဲ့အခါမွာ Single Email ျဖစ္ေစ Bulk Email Marketing ျဖစ္ေစ ပို႔လႊတ္ဖို႔လိုပါတယ္၊ ဒီလိုအခါမ်ိဳးမွာ Procotol-independent framework ျဖစ္တဲ့ JavaMail API ကို အသံုးျပဳၿပီး၊ Mail ပို႔ ျခင္း၊ လက္ခံရယူျခင္းတို႔ျပဳလုပ္ႏိုင္ ပါတယ္။ JavaMail API ကိုေလ့လာရာမွာ core packages ေတြျဖစ္တဲ့ java.mail နဲ႔ javax.mail.activation packages ေတြကိုပါ အေသးစိတ္နားလည္သြား ေအာင္ေလ့လာရမွာပါ။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> Java ဘာသာရပ္ကိုအသံုးျပဳ၍ လံုျခံဳေရး အာမခံခ်က္အျပည့္ရွိသည့္ Website မ်ား Dynamic Website မ်ားတည္ေဆာက္ ႏိုင္ရန္ အတြက္ JSP, Servlet, JavaScript, WebServices တို႔ကို သင္ၾကားေပးျခင္း၊ Java Framework မ်ားျဖစ္ၾကသည့္ Spring, Struts, Hibernate, တို႔ကို စာေတြ႕လက္ေတြ႔သင္ၾကားေပးျခင္း၊ လက္ေတြ႔ Project အေနႏွင့္ Banking Website တည္ေဆာက္ျခင္း၊ Content Management System အသံုးျပဳ၀က္ဘ္ဆိုဒ္ အား တည္ေဆာက္ျခင္းတို႔ပါ၀င္သြားပါမည္။ Long Running တြင္အျခားဘာသာရပ္မ်ား မယွဥ္ႏိုင္ေအာင္ Stable ျဖစ္ျခင္း Smooth ျဖစ္ျခင္း တို႔အတြက္ နားမည္ႀကီးသည့္ Java Web Development အႏွစ္သာရကို ေသခ်ာ နားလည္သြားေစရန္ သင္ၾကားေပးသြားမည္ျဖစ္ပါသည္။</p>

                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">Basic Concepts တြင္ပါဝင္မည့္ သင္ခန္းစာမ်ား</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body pad-20 pad-bot-20 pad-top-15">
                                        <ol>
                                            <li class="burmese pad-15">Programmer တစ္ေယာက္ျဖစ္ဖို႔ လိုအပ္ခ်က္မ်ား။</li>
                                            <li class="burmese pad-15">ဘာေၾကာင့္ Java Programming ကိုေလ့လာသင့္သလဲ။</li>
                                            <li class="burmese pad-15">ဘယ္အဆင့္ထိေရာက္ရင္ Java ကို ကၽြမ္းက်င္သြားၿပီလို႔ေျပာႏိုင္လဲ။</li>
                                            <li class="burmese pad-15">Professional Java Developer တစ္ေယာက္ျဖစ္ေအာင္ အဆင့္ဆင့္ေလ့လာနည္း။</li>
                                            <li class="burmese pad-15"> တစ္ေလွ်ာက္အသံုးျပဳသြားမည့္ IDEs မ်ား ႏွင့္ Resources မ်ား အေၾကာင္းမိတ္ဆက္။</li>
                                            <li class="burmese pad-15">JDK Install လုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">JDK ႏွင့္ JRE ကြာျခား ခ်က္။</li>
                                            <li class="burmese pad-15">Text Editor သံုး၍ Simple Java Program တည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">Java Program အား Compile လုပ္ျခင္ Interpret လုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Java Program Run ႏိုင္သည့္ အေျခအေနေရာက္တဲ့အဆင့္ထိ ဆင့္ကဲျဖစ္စဥ္။</li>
                                            <li class="burmese pad-15">Programmer တိုင္းသိသင့္သည့္ Programming ေ၀ါဟာရမ်ား။</li>
                                            <li class="burmese pad-15">NetBean IDE အား ေဒါင္းလုပ္ရယူျခင္း။</li>
                                            <li class="burmese pad-15">NetBean Project တစ္ခုတည္ေဆာက္ျခင္း၊။</li>
                                            <li class="burmese pad-15">ပထမဆံုး Project အား Run ၾကည့္ျခင္း။</li>
                                            <li class="burmese pad-15">NetBean Workspace အားစိတ္ႀကိဳက္ေျပာင္းလဲျခင္း။</li>
                                            <li class="burmese pad-15">Hello World Program အေၾကာင္း ရွင္းလင္းခ်က္။</li>
                                            <li class="burmese pad-15">Variable မိတ္ဆက္။</li>
                                            <li class="burmese pad-15">Data Type မိတ္ဆက္။</li>
                                            <li class="burmese pad-15">Premetive Data Type မ်ားအား လက္ေတြ႔ အသံုးျပဳၾကည့္ျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Premetive Data Type မ်ားအား လက္ေတြ႔ အသံုးျပဳၾကည့္ျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Premetive Data Type မ်ားအား လက္ေတြ႔ အသံုးျပဳၾကည့္ျခင္း (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">Premetive Data Type မ်ားအား လက္ေတြ႔ အသံုးျပဳၾကည့္ျခင္း (အပိုင္း ၄)။</li>
                                            <li class="burmese pad-15">Variable Typecasting (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Variable Typecasting (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Arithmetic Operator (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Arithmetic Operator (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Relational  Operator (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Relational  Operator (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Assignment  Operator (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Assignment  Operator (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Increment And Decrement Operator။</li>
                                            <li class="burmese pad-15">Logical Operator (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Logical Operator (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Conditional Statement (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Conditional Statement (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Ternary Operator (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Ternary Operator (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Switch Statement (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Switch Statement (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">What is Looping။</li>
                                            <li class="burmese pad-15">For Loop (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">For Loop (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">While Loop (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">While Loop (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Do While Loop (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Do While Loop (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Break Statement (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Break Statement (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Continue Statement (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Continue Statement (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">String Object &amp; Build-in Methods (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">String Object &amp; Build-in Methods  (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">String Object &amp; Build-in Methods  (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">String Object &amp; Build-in Methods  (အပိုင္း ၄)။</li>
                                            <li class="burmese pad-15">String Object &amp; Build-in Methods  (အပိုင္း ၅)။</li>
                                            <li class="burmese pad-15">String Object &amp; Build-in Methods  (အပိုင္း ၆)။</li>
                                            <li class="burmese pad-15">String Object &amp; Build-in Methods  (အပိုင္း ၇)။</li>
                                            <li class="burmese pad-15">String Object &amp; Build-in Methods  (အပိုင္း ၈)။</li>
                                            <li class="burmese pad-15">StringBuilder အား အသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">StringBuffer အား အသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">Method မ်ား တည္ေဆာက္အသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">အသံုးျပဳႏိုင္ေသာ Method အမ်ိဳးအစားမ်ား။</li>
                                            <li class="burmese pad-15">Method မ်ားႏွင့္ Arguments မ်ား။</li>
                                            <li class="burmese pad-15">Method Overloading အေၾကာင္းနားလည္ထားျခင္း။</li>
                                            <li class="burmese pad-15">Variable Scope အား နားလည္ထားျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Variable Scope အား နားလည္ထားျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Array မိတ္ဆက္ ။</li>
                                            <li class="burmese pad-15">Array တည္ေဆာက္အသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">Arrays မ်ားအား Parameters မ်ားအျဖစ္ Methods မ်ားသို႔ေပးပို႔ျခင္း။</li>
                                            <li class="burmese pad-15">Foreach Loop အေၾကာင္းနားလည္ေစျခင္း။</li>
                                            <li class="burmese pad-15">Multi Dimentional Array မိတ္ဆက္။</li>
                                            <li class="burmese pad-15">Multi Dimentional Array လက္ေတြ႔တည္ေဆာက္ အသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">OOP မိတ္ဆက္ (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Class And Object အေၾကာင္းနားလည္ျခင္း(အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Class And Object အေၾကာင္းနားလည္ျခင္း(အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Class And Object အေၾကာင္းနားလည္ျခင္း(အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">Class And Object အေၾကာင္းနားလည္ျခင္း(အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">User Input အား အသံုးခ်ျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">User Input အား အသံုးခ်ျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">ArrayList မိတ္ဆက္ (Collection Framework)။</li>
                                            <li class="burmese pad-15">ArrayList အားလက္ေတြ႔အသံုးျပဳျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">ArrayList အားလက္ေတြ႔အသံုးျပဳျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Call By Value &amp; Class By Refrence (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Call By Value &amp; Class By Refrence (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Class Constructor အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Constructor Overloading အားနားလည္ျခင္း။</li>
                                            <li class="burmese pad-15">Constructor အေၾကာင္း ပိုမိုနားလည္ျခင္း၊။</li>
                                            <li class="burmese pad-15">Static keyword အေၾကာင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Static keyword အေၾကာင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Enumeration keyword အေၾကာင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Enumeration keyword အေၾကာင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">This KeyWord အေၾကာင္း မိတ္ဆက္။</li>
                                            <li class="burmese pad-15">This KeyWord လက္ေတြ႔အသံုးခ်ျခင္း။</li>
                                            <li class="burmese pad-15">Inheritance အေၾကာင္း နားလည္ျခင္။</li>
                                            <li class="burmese pad-15">Inheritance လက္ေတြ႔အသံုးခ်ျခင္။</li>
                                            <li class="burmese pad-15">Super Keyword အားနားလည္ထားျခင္။</li>
                                            <li class="burmese pad-15">Super Keyword အားလက္ေတြ႔အသံုးခ်ၾကည့္ျခင္း။</li>
                                            <li class="burmese pad-15">Polymorphism အား ေလ့လာျခင္း(အပိုင္း ၁။</li>
                                            <li class="burmese pad-15">Polymorphism အား ေလ့လာျခင္း(အပိုင္း ၂။</li>
                                            <li class="burmese pad-15">Polymorphism အား ေလ့လာျခင္း(အပိုင္း ၃။</li>
                                            <li class="burmese pad-15">Polymorphism အား ေလ့လာျခင္း(အပိုင္း ၄။</li>
                                            <li class="burmese pad-15">Polymorphism အား ေလ့လာျခင္း(အပိုင္း ၅။</li>
                                            <li class="burmese pad-15">Polymorphism အား ေလ့လာျခင္း(အပိုင္း ၆။</li>
                                            <li class="burmese pad-15">ဘာတြဆက္ေလ့လာမလဲ။</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">Intermediate Concepts တြင္ပါဝင္မည့္ သင္ခန္းစာမ်ား</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body pad-20 pad-bot-20 pad-top-15">
                                        <ol>
                                            <li class="burmese pad-15">Collection FrameWork မိတ္ဆက္။</li>
                                            <li class="burmese pad-15">ArrayList အာေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">LinkedList and the List Interface တို႔အေၾကာင္း။</li>
                                            <li class="burmese pad-15">ArrayList ႏွင့္ LinkedList တို႔ကြာျခားခ်က္။</li>
                                            <li class="burmese pad-15">HashSet Class အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">LinkedHashSet Class အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">TreeSet Class အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">PriorityQueue Class အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Map Interface အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">HashMap Class အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">LinkedHashMap Class အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">TreeMap Class အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Hashtable Class အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">HashMap ႏွင့္ Hashtable တို႔ကြာျခားခ်က္။</li>
                                            <li class="burmese pad-15">Sorting ျပဳလုပ္၍ အစီအစဥ္ခ်ျခင္း။</li>
                                            <li class="burmese pad-15">Comparable Interface အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Comparator Interface အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Comparable ႏွင့္ Comparator တို႔ကြာျခားခ်က္။</li>
                                            <li class="burmese pad-15">ArrayList ႏွင့္ Vector တို႔ကြာျခားခ်က္။</li>
                                            <li class="burmese pad-15">Sorted Maps ႏွင့္ the Map Interface အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Sets အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Sets ႏွင့္ Maps တို႔တြင္ ကိုယ္ပိုင္ Objects မ်ားထည့္သြင္းအလုပ္လုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Comparators အသံုးျပဳ၍ List Sorting ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Natural Ordering ႏွင့္ the Comparable Interface။</li>
                                            <li class="burmese pad-15">Queues အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Complex Data Structures အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">ဘယ္ Java Collection အားအသံုးျပဳမလဲ ဆံုးျဖတ္ျခင္း။</li>
                                            <li class="burmese pad-15">Iterable Interface အားအသံုးျပဳျခင္း; Downloading Web Pages။</li>
                                            <li class="burmese pad-15">Iterators အသံုးျပဳပံု အေသးစိတ္။</li>
                                            <li class="burmese pad-15">Threads မ်ားအား စတင္ေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">အေျခခံ Thread Synchronization။</li>
                                            <li class="burmese pad-15">Synchronized Keyword အသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">Synchronized Code Block အားအသံုးျပဳ၍ Multiple Locks တည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">Thread Pools အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Countdown Latches အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Producer-Consumer အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Wait and Notify အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Low-Level Synchronization အားလက္ေတြ႔ တည္ေဆာက္အသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">Re-entrant Locks အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Deadlock အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Semaphores အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Callable အားေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">Interrupting Threads အားေလ့လာျခင္း။</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">Java Web Development တြင္ပါဝင္မည့္ သင္ခန္းစာမ်ား</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body pad-20 pad-bot-20 pad-top-15">
                                        <ol>
                                            <li class="burmese pad-10 pad-bot-20">
                                                <h4><strong>Setting Up Your System</strong></h4>
                                                <ol>
                                                    <li class="pad-5">Hello World Servlet</li>
                                                    <li class="pad-5">A Hello World JSP</li>
                                                    <li class="pad-5">Deployment Descriptors- the Web.xml File</li>
                                                    <li class="pad-5">Deploying Your Application to a Local Server</li>
                                                    <li class="pad-5">Deploying Your Application to the Internet -- For Free</li>
                                                </ol>
                                            </li>
                                            <li class="burmese pad-10 pad-bot-20">
                                                <h4><strong>Nuts and Bolts</strong></h4>
                                                <ol>
                                                    <li class="pad-5">Importing Java Classes Into JSPs</li>
                                                    <li class="pad-5">Getting URL Parameters</li>
                                                    <li class="pad-5">Scripting HTML</li>
                                                    <li class="pad-5">Including Files In Other Files</li>
                                                    <li class="pad-5">Forwarding and Redirecting</li>
                                                    <li class="pad-5">The Declaration Tag</li>
                                                    <li class="pad-5">JSP Tags Summary</li>
                                                    <li class="pad-5">Model 1 vs. Model 2 Architecture</li>
                                                    <li class="pad-5">Using External APIs in Web Application</li>
                                                    <li class="pad-5">The Servlet Lifecycle</li>
                                                </ol>
                                            </li>
                                            <li class="burmese pad-10 pad-bot-20">
                                                <h4><strong>Beans and Forms</strong></h4>
                                                <ol>
                                                    <li class="pad-5">JSP Beans</li>
                                                    <li class="pad-5">Beans and Scope</li>
                                                    <li class="pad-5">Setting Bean Properties Using Parameters</li>
                                                    <li class="pad-5">Forms</li>
                                                    <li class="pad-5">HTTP Posts</li>
                                                    <li class="pad-5">Using Beans to Store Form Data</li>
                                                    <li class="pad-5">Adding Validation to Beans</li>
                                                    <li class="pad-5">Self-Validating Forms</li>
                                                    <li class="pad-5">Validating Forms Using MVC Architecture</li>
                                                </ol>
                                            </li>
                                            <li class="burmese pad-10 pad-bot-20">
                                                <h4><strong>Some Useful Objects</strong></h4>
                                                <ol>
                                                    <li class="pad-5">The Session Object</li>
                                                    <li class="pad-5">URL Rewriting- Supporting Sessions Without Cookies</li>
                                                    <li class="pad-5">The Servlet Context Object</li>
                                                    <li class="pad-5">Getting Initialisation Parameters from web.xml</li>
                                                    <li class="pad-5">Scoped Objects Review</li>
                                                    <li class="pad-5">Cookies</li>
                                                </ol>
                                            </li>
                                            <li class="burmese pad-10 pad-bot-20">
                                                <h4><strong>Database</strong></h4>
                                                <ol>
                                                    <li class="pad-5">Connecting to a Database</li>
                                                    <li class="pad-5">Setting Up a JNDI Data Source</li>
                                                    <li class="pad-5">Querying Databases</li>
                                                    <li class="pad-5">Inserting Data Into Database</li>
                                                </ol>
                                            </li>
                                            <li class="burmese pad-10 pad-bot-20">
                                                <h4><strong>Sending Email</strong></h4>
                                                <ol>
                                                    <li class="pad-5">Sending Email - Prerequisites</li>
                                                    <li class="pad-5">Sending Emails with the Mail API</li>
                                                </ol>
                                            </li>
                                            <li class="burmese pad-10 pad-bot-20">
                                                <h4><strong>JSTL</strong></h4>
                                                <ol>
                                                    <li class="pad-5">Beginning JSTL- Hello World JSTL</li>
                                                    <li class="pad-5">Accessing Bean Values in JSTL</li>
                                                    <li class="pad-5">Getting URL Parameters in JSTL</li>
                                                    <li class="pad-5">The JSTL "if" Statement</li>
                                                    <li class="pad-5">The Choose Tag in JSTL</li>
                                                    <li class="pad-5">The foreach loop in JSTL</li>
                                                    <li class="pad-5">Referencing Java Objects in JSTL</li>
                                                    <li class="pad-5">JSTL Implicit Objects</li>
                                                    <li class="pad-5">Using Maps in EL</li>
                                                    <li class="pad-5">Outputting Variables- The c-out Tag vs. Using EL Directly</li>
                                                    <li class="pad-5">forEach- Iterating Through Lists</li>
                                                    <li class="pad-5">Using External Files- Graphics, CSS, etc</li>
                                                    <li class="pad-5">Reusable Fragments Using JSTL c-import</li>
                                                    <li class="pad-5">SQL Queries with JSTL</li>
                                                    <li class="pad-5">Setting Variables in JSTL</li>
                                                    <li class="pad-5">Expressions in EL</li>
                                                    <li class="pad-5">Creating URLs With JSTL</li>
                                                    <li class="pad-5">Wildcards and Getting a Single Row in JSTL</li>
                                                    <li class="pad-5">JSTL Functions</li>
                                                    <li class="pad-5">SQL Updates and Transactions in JSTL</li>
                                                    <li class="pad-5">Formatting Using JSTL</li>
                                                    <li class="pad-5">Custom Tags</li>
                                                </ol>
                                            </li>
                                            <li class="burmese pad-10 pad-bot-20">
                                                <h4><strong>Spring</strong></h4>
                                                <ol>
                                                    <li class="pad-5">Getting Started</li>
                                                    <li class="pad-5">What is Spring?</li>
                                                    <li class="pad-5">Settin Up Your System</li>
                                                    <li class="pad-5">Introducing Maven</li>
                                                    <li class="pad-5">Using Maven on the Command Line</li>
                                                    <li class="pad-5">Spring Hello World</li>
                                                    <li class="pad-5">Class Path Contexts</li>
                                                </ol>
                                            </li>
                                            <li class="burmese pad-10 pad-bot-20">
                                                <h4><strong>Basic Bean Configuration</strong></h4>
                                                <ol>
                                                    <li class="pad-5">Constructor Arguments</li>
                                                    <li class="pad-5">Setting Bean Properties</li>
                                                    <li class="pad-5">Dependency Injection</li>
                                                    <li class="pad-5">Bean Scope</li>
                                                    <li class="pad-5">Init and Destroy Methods</li>
                                                    <li class="pad-5">Factory Beans and Methods</li>
                                                    <li class="pad-5">The P Namespace</li>
                                                    <li class="pad-5">Setting List Properties</li>
                                                    <li class="pad-5">Lists of Beans</li>
                                                    <li class="pad-5">Inner Beans</li>
                                                    <li class="pad-5">Property Maps</li>
                                                    <li class="pad-5">Arbitrary Maps as Bean Properties</li>
                                                </ol>
                                            </li>
                                            <li class="burmese pad-10 pad-bot-20">
                                                <h4><strong>Autowiring</strong></h4>
                                                <ol>
                                                    <li class="pad-5">Autowiring by Type</li>
                                                    <li class="pad-5">Autowiring by Name</li>
                                                    <li class="pad-5">Autowiring by Constructor</li>
                                                    <li class="pad-5">Default Autowiring</li>
                                                    <li class="pad-5">Remove autowire Ambiguities</li>
                                                </ol>
                                            </li>
                                            <li class="burmese pad-10 pad-bot-20">
                                                <h4><strong>Wiring with Annotations</strong></h4>
                                                <ol>
                                                    <li class="pad-5">Adding Support for Annotation-Based Wiring</li>
                                                    <li class="pad-5">The "Autowired" Annotation</li>
                                                    <li class="pad-5">Optional Beans</li>
                                                    <li class="pad-5">Using Qualifiers</li>
                                                    <li class="pad-5">The Resource Annotation (JSR-250)</li>
                                                    <li class="pad-5">Annotation-Based Init and Destroy Methods</li>
                                                    <li class="pad-5">The Inject annotation (JSR-330)</li>
                                                    <li class="pad-5">Automatic Bean Discovery</li>
                                                    <li class="pad-5">Setting Property Values via Annotations</li>
                                                </ol>
                                            </li>
                                            <li class="burmese pad-10 pad-bot-20">
                                                <h4><strong>Spring Expression Language</strong></h4>
                                                <ol>
                                                    <li class="pad-5">Introducing SPEL</li>
                                                    <li class="pad-5">Using SPEL with Annotations</li>
                                                    <li class="pad-5">Some useful SPEL Operators</li>
                                                </ol>
                                            </li>
                                            <li class="burmese pad-10 pad-bot-20">
                                                <h4><strong>Working with Databases</strong></h4>
                                                <ol>
                                                    <li class="pad-5">Creating a Database with MySQL</li>
                                                    <li class="pad-5">Using Property Files</li>
                                                    <li class="pad-5">Implementing the DAO Pattern</li>
                                                    <li class="pad-5">Downloading a Connector Jar</li>
                                                    <li class="pad-5">Configuring Connection Pooling with Apache DBCP</li>
                                                    <li class="pad-5">JDBC Templates</li>
                                                    <li class="pad-5">Querying the Database</li>
                                                    <li class="pad-5">Database Exceptions</li>
                                                    <li class="pad-5">Named Parameters	</li>
                                                    <li class="pad-5">Update Statements</li>
                                                    <li class="pad-5">Getting Placeholder Values from Beans</li>
                                                    <li class="pad-5">Adding an Update Method to the Downloading</li>
                                                    <li class="pad-5">Batch Updates- Prepared Statements</li>
                                                    <li class="pad-5">Transactions</li>
                                                </ol>
                                            </li>
                                            <li class="burmese pad-10 pad-bot-20">
                                                <h4><strong>Web Application Basics with Spring MVC</strong></h4>
                                                <ol>
                                                    <li class="pad-5">A Basic Non-Spring Web App</li>
                                                    <li class="pad-5">Bringing in Maven</li>
                                                    <li class="pad-5">The Dispatcher Servlet</li>
                                                    <li class="pad-5">Adding a Controller	</li>
                                                    <li class="pad-5">View Resolvers	</li>
                                                    <li class="pad-5">Adding Data to the Sessions</li>
                                                    <li class="pad-5">Using Spring Data Models</li>
                                                    <li class="pad-5">Using JSTL (JSP Standard Tag Library)</li>
                                                    <li class="pad-5">Configuring a JNDI Data Source</li>
                                                    <li class="pad-5">Bringing in the DAO Code</li>
                                                    <li class="pad-5">Loading Bean Containers with ContextLoaderListener</li>
                                                    <li class="pad-5">Creating a Datasource Bean</li>
                                                    <li class="pad-5">Adding a Service Layer</li>
                                                    <li class="pad-5">Adding a New Controller</li>
                                                    <li class="pad-5">Getting URL Parameters</li>
                                                </ol>
                                            </li>

                                            <li class="burmese pad-10 pad-bot-20">
                                                <h4><strong>Working with Web Forms</strong></h4>
                                                <ol>
                                                    <li class="pad-5">Creating a Form</li>
                                                    <li class="pad-5">Getting Form Values</li>
                                                    <li class="pad-5">Adding CSS Styles</li>
                                                    <li class="pad-5">Serving Static Resources</li>
                                                    <li class="pad-5">Adding Hibernate Form Validation Support</li>
                                                    <li class="pad-5">More Form Validation Tags</li>
                                                    <li class="pad-5">Making Forms Remember Values</li>
                                                    <li class="pad-5">Displaying Form Validation Errors</li>
                                                    <li class="pad-5">Creating a Custom Validation Annotation</li>
                                                    <li class="pad-5">Hooking Up the Controller and Database Code</li>
                                                    <li class="pad-5">Exception Handling in Spring MVC</li>
                                                </ol>
                                            </li>
                                            <li class="burmese pad-10 pad-bot-20">
                                                <h4><strong>Aspect-Oriented Programming (AOP)</strong></h4>
                                                <ol>
                                                    <li class="pad-5">A Base Project for Working with Aspects</li>
                                                    <li class="pad-5">A Simple Aspect Example</li>
                                                    <li class="pad-5">Annotation-Based Aspects</li>
                                                    <li class="pad-5">Wildcards in Pointcut Expressions</li>
                                                    <li class="pad-5">Advice Types - After, Around and Others</li>
                                                    <li class="pad-5">Proxies, Interfaces and Aspects</li>
                                                    <li class="pad-5">The “Within” Pointcut Designator</li>
                                                    <li class="pad-5">“This”, “Target” and Matching Subpackages</li>
                                                    <li class="pad-5">Annotation-Specific PCDs</li>
                                                    <li class="pad-5">The “Bean” PCD</li>
                                                    <li class="pad-5">The “Args” PCD</li>
                                                    <li class="pad-5">Getting Target Method Arguments</li>
                                                    <li class="pad-5">Getting Arguments Using “Args”</li>
                                                    <li class="pad-5">Combining Pointcuts</li>
                                                    <li class="pad-5">Introductions -  Adding Functionality Using Aspects	</li>
                                                </ol>
                                            </li>
                                            <li class="burmese pad-10 pad-bot-20">
                                                <h4><strong>Spring Security and Managing Users</strong></h4>
                                                <ol>
                                                    <li class="pad-5">Servlets Filters - A Review</li>
                                                    <li class="pad-5">Adding a Spring Security Filters</li>
                                                    <li class="pad-5">Adding a Spring Login Form</li>
                                                    <li class="pad-5">Serving Static Resources - Access Rules</li>
                                                    <li class="pad-5">Customising the Login Form</li>
                                                    <li class="pad-5">Displaying Login Errors	</li>
                                                    <li class="pad-5">Authorising Users from a Database</li>
                                                    <li class="pad-5">Adding a “Create Account” Form</li>
                                                    <li class="pad-5">Making the “Create Account” Form Work</li>
                                                    <li class="pad-5">Adding Validation to the User Form</li>
                                                    <li class="pad-5">Dealing with Duplicate Usernames</li>
                                                    <li class="pad-5">Storing Validation Messages in a Property File</li>
                                                    <li class="pad-5">Using JQuery to verify the password</li>
                                                    <li class="pad-5">Using Property File Values in JSPs</li>
                                                    <li class="pad-5">Adding a Logout Link</li>
                                                    <li class="pad-5">Working With Roles</li>
                                                    <li class="pad-5">Outputting Text Based on Authentication Status</li>
                                                    <li class="pad-5">Row Mapping with BeanPropertyRowMapper</li>
                                                    <li class="pad-5">Using Custom Authentication Queries - Case Sensitive Usernames</li>
                                                    <li class="pad-5">Method-Level Access Control</li>
                                                    <li class="pad-5">Catching Secure Annotation Violations</li>
                                                    <li class="pad-5">Adding “Remember Me” Functionality</li>
                                                    <li class="pad-5">Encrypting Passwords</li>
                                                </ol>
                                            </li>
                                            <li class="burmese pad-10 pad-bot-20">
                                                <h4><strong>Apache tiles and Spring MVC</strong></h4>
                                                <ol>
                                                    <li class="pad-5">Tiles Dependencies</li>
                                                    <li class="pad-5">“Hello World” Apache Tiles</li>
                                                    <li class="pad-5">Adding Headers and Footers</li>
                                                    <li class="pad-5">Formatting the Offers Application</li>
                                                    <li class="pad-5">Creating Tiles from JSP Files</li>
                                                </ol>
                                            </li>
                                            <li class="burmese pad-10 pad-bot-20">
                                                <h4><strong>Logging and Testing</strong></h4>
                                                <ol>
                                                    <li class="pad-5">Adding Log4J Logging</li>
                                                    <li class="pad-5">Resolving Logging Conflicts</li>
                                                    <li class="pad-5">Using Logging</li>
                                                    <li class="pad-5">Creating a MySQL Test Database</li>
                                                    <li class="pad-5">Using Spring Profiles</li>
                                                    <li class="pad-5">Creating JUnit Tests</li>
                                                    <li class="pad-5">Coding the JUnit DAO Tests</li>
                                                </ol>
                                            </li>
                                            <li class="burmese pad-10 pad-bot-20">
                                                <h4><strong>Improving the Application</strong></h4>
                                                <ol>
                                                    <li class="pad-5">Normalizing the Database</li>
                                                    <li class="pad-5">Querying Tables with Foreign Keys and Refactoring the DAO Layer</li>
                                                    <li class="pad-5">Refactoring the Web Layer</li>
                                                    <li class="pad-5">Getting the Username of the Logged-In User</li>
                                                    <li class="pad-5">Deleting from Tables with Foreign Keys and a Little Bugfix</li>
                                                    <li class="pad-5">Custom RowMappers</li>
                                                    <li class="pad-5">Conditional Database-Dependent Text in JSPs</li>
                                                    <li class="pad-5">Editing Database Objects with Forms</li>
                                                    <li class="pad-5">Multiple Form Submits and Optional Parameters</li>
                                                    <li class="pad-5">Adding a Confirm Dialog with JQuery</li>
                                                </ol>
                                            </li>
                                            <li class="burmese pad-10 pad-bot-20">
                                                <h4><strong>Hibernate</strong></h4>
                                                <ol>
                                                    <li class="pad-5">Introducing Hibernate</li>
                                                    <li class="pad-5">A Simple Hibernate Query</li>
                                                    <li class="pad-5">Saving Objects</li>
                                                    <li class="pad-5">Validation Groups and Password Encryption</li>
                                                    <li class="pad-5">Translating Hibernate Exceptions to Spring Exceptions</li>
                                                    <li class="pad-5">Queries with Criteria</li>
                                                    <li class="pad-5">Mapping Many-to-One Relationships</li>
                                                    <li class="pad-5">Restrictions on Joined Tables</li>
                                                    <li class="pad-5">Multiple Criteria</li>
                                                    <li class="pad-5">Updating Objects</li>
                                                    <li class="pad-5">Deleting Objects</li>
                                                    <li class="pad-5">Completing the Offers DAO</li>
                                                </ol>
                                             </li>
                                            <li class="burmese pad-10 pad-bot-20">
                                                <h4><strong>Spring Webflow</strong></h4>
                                                <ol>
                                                    <li class="pad-5">Introducing Webflow</li>
                                                    <li class="pad-5">Creating a Flow Registry</li>
                                                    <li class="pad-5">Hooking Up URLs to Webflows</li>
                                                    <li class="pad-5">Connecting Webflow and Apache Tiles</li>
                                                    <li class="pad-5">Creating a “Messages” Table.mp4</li>
                                                    <li class="pad-5">Creating a “Message” Class</li>
                                                    <li class="pad-5">Adding a Message Form.mp4</li>
                                                    <li class="pad-5">Transitions</li>
                                                    <li class="pad-5">Action States</li>
                                                    <li class="pad-5">Linking to Webflows</li>
                                                    <li class="pad-5">Validating Webflow Forms</li>
                                                    <li class="pad-5">Accessing User Details in Webflow</li>
                                                </ol>
                                            </li>
                                            <li class="burmese pad-10 pad-bot-20">
                                                <h4><strong>JSON and AJAX</strong></h4>
                                                <ol>
                                                    <li class="pad-5">Creating a JSON Server</li>
                                                    <li class="pad-5">Updating Dynamically with jQuery</li>
                                                    <li class="pad-5">Generating Pages with Javascript</li>
                                                    <li class="pad-5">Adding Reply Boxes</li>
                                                    <li class="pad-5">Showing and Hiding the Reply Forms</li>
                                                    <li class="pad-5">Stopping and Starting the Timer</li>
                                                    <li class="pad-5">Getting the Text from the Right TextArea</li>
                                                    <li class="pad-5">Posting Back JSON Data</li>
                                                    <li class="pad-5">Giving the User Feedback</li>
                                                    <li class="pad-5">Sending Email with Springmail</li>
                                                </ol>
                                            </li>

                                        </ol>

                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">လက္ေတြ႔ လုပ္ေဆာင္သြားရမည့္ Projects မ်ား</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body pad-20 pad-bot-20 pad-top-15">
                                        <ul class="burmese">
                                            <li class="pad-20"><i class="fa fa-hand-o-right"></i> <span class="pad-15">Online ေငြေပးေျခသည့္ စနစ္ပါဝင္ေသာ Music Store applicaiton တစ္ခုဖန္တီးျခင္း</span></li>
                                            <li class="pad-20"><i class="fa fa-hand-o-right"></i> <span class="pad-15">Function အျပည့္အစံုး ပါဝင္သည့္ Blog System တစ္ခု ဖန္တီးျခင္း</span></li>
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