@extends('layout.master')

@section('title', 'JavaSE Class')

@section('styles')

    <link rel="stylesheet" href="{{ asset('custom.css') }}">

@stop

@section('inner_banner')
    <div class="parallax-window inner-banner tc-padding overlay-dark" data-parallax="scroll" data-image-src="{{ asset('images/inner-banner/banner.jpeg') }}">
        <div class="container">
            <div class="inner-page-heading style-2 h-white">
                <h2>Java SE Class</h2>
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
                    <li>Java SE</li>
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
                <h2>JAVA <span class="theme-color"> SE </span> Class</h2>
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
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">Java SE Course တြင္ပါဝင္သည့္ သင္ခန္းစာမ်ား</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                        <div class="clearfix"></div>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body pad-20 pad-top-15">
                                        <h5 class="burmese pad-15">JavaSE Course တြင္ပါဝင္သည့္ သင္ခန္းစာမ်ား</h5>
                                        <ul class="burmese pad-15 list-disc pad-40 pad-bot-20">
                                            <li class="pad-15">Basic Concepts</li>
                                            <li class="pad-15">Intermediate Concept</li>
                                            <li class="pad-15">Design Pattern</li>
                                            <li class="pad-15">Java FX</li>
                                        </ul>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i>  Java Basic Programming<br>Java Basic Concept သင္ခန္းစာတြင္ Java ဘာသာရပ္အား စတင္ေလ့လာသူတို႔ သိရွိထားရမည့္ Java Basic Program တစ္ခုအားတည္ေဆာက္ပံု ၊ Operating System မွ Java Program အား အဆင့္ဆင့္ Compile လုပ္၍ Computer မွ နားလည္အလုပ္လုပ္ႏိုင္သည့္ Machine Code မ်ားပါ၀င္ေသာ Object ဖိုင္မ်ား ေျပာင္းပံု၊ JVM (Java Virtual Machine) မွ Random Access Memory တြင္ ေနရာယူ၍ Real Time Compilation System အားျဖစ္ေပၚေစပံုတို႔အား အဆင့္ျမင့္ျမင့္နားလည္ေစရန္ သင္ၾကားေပးျခင္း၊ Syntax ကြဲေသာ္လည္း Concepts တူသည့္အသံုးအမ်ားဆံုး Programming ဘာသာရပ္မ်ား ျဖစ္ၾကသည့္ C++, Python, Objective C, PHP OOP style တို႔ႏွင့္ Java ဘာသာရပ္ယွဥ္၍ရွင္းျပျခင္း၊ထိုရွင္းျပမႈတြင္ Java Programmingအား နားလည္သြားပါကအျခား Programming ဘာသာရပ္ တို႔အားရက္ပိုင္းေလ့လာရံုႏွင့္နားလည္ကၽြမ္းက်င္သြားႏိုင္ေအာင္လက္ေတြ႔ေရးျပရွင္းျပျခင္း၊ Programmer တိုင္းသိထားရမည့္ data type, variables, operators, class, methods, Stri ng, Array, Control Statements တို႔ကို Java Basic Concepts အေနႏွင့္ေလ့လာသြားရမွာျဖစ္ပါသည္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> Intermediate Concept<br>Intermediate သင္ခန္းစာအတြက္ Class, Method, Objects, String, Characters, Regular Expressions ႏွင့္ Java Patterns မ်ားအား နက္နက္နဲနဲ နားလည္သြားေအာင္ အေသးစိတ္ေလ့လာသြားရမွာျဖစ္ပါသည္၊ ဖိုင္မ်ားတည္ေဆာက္ျခင္း ၊ တည္းျဖတ္ျခင္း ၊ ေဒတာ သိမ္းဆည္းျခင္း ၊ ထုတ္ယူျခင္းတို႔အတြက္ File handling, ကိုယ္ပိုင္ Object အသံုးျပဳ၍ လံုျခံဳေရးထိန္းခ်ဳပ္ႏိုင္ရန္အတြက္ Stream & Object Serialization တို႔ကိုလည္း နားလည္ကၽြမ္းက်င္ေအာင္ ေလ့လာသြားရမည္ျဖစ္ပါသည္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> Java Advanced Programming<br>Advanced သင္ခန္းစာမ်ားအတြက္ အဆင့္ျမင့္ Programming Technologies မ်ားျဖစ္သည့္ Server & Socket, Generic Collection Framework, Multi Threading, Exception Handling & Garbbage Collector, Recursion, Searching, Sorting and Big O algorithms, Custom Generic Data Structures, တို႔အား Object Oriented Concepts မ်ား ျဖစ္ေသာ Inheritance, Polymorphism, Interface, abstract တို႔ႏွင့္တြဲ၍ ေလ့လာသြားရမည္ျဖစ္ပါသည္၊ Java SE 8 သင္ခန္းစာအျဖစ္ Lambdas and Streams သင္ခန္းစာမ်ားကိုလည္း လက္ေတြ႔ရွင္းရွင္းလင္းလင္း နားလည္သည္အထိ ေလ့လာသြားရမည္ျဖစ္ပါတယ္၊ Database Programming အတြက္ JDBC အား xampp, wampp, Tomcat server တို႔ႏွင့္တြဲဖက္ေလ့လာရမည္ျဖစ္ပါတယ္။<p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> GUI Programming with Java<br>GUI programming အတြက္ Window, Linux, Mac, Android တို႔တြင္ Java ဘာသာရပ္သံုး၍ Application မ်ားတည္ေဆာက္ျခင္းကို နာမည္အႀကီးဆံုးႏွင့္ အသံုးအမ်ားဆံုးျဖစ္ေသာ JavaFX UI Framework မ်ားအသံုးျပဳ၍ ေလ့လာသြားရမည္ျဖစ္ကာ Android ကဲ့သုိ႔ေသာ Operating System အတြက္ Libraries မ်ားေရးသားပံုကိုလည္းေလ့လာသြားရမည္ျဖစ္ပါတယ္၊ လက္ေတြ႔ Projects မ်ားအေနႏွင့္ Data မ်ားကိုထိန္းခ်ဳပ္တြက္ခ်က္လုပ္ကိုင္သည့္စာရင္းကိုင္ ေဆာ့၀ဲလ္ႏွင့္ Android, iOS System တို႔ႏွင့္တြဲဖက္အလုပ္လုပ္ႏိုင္သည့္ Server Socket Programming သံုး၍ Android System ႏွင့္တြဲဖက္အလုပ္လုပ္သည့္ Data Transfer Projects မ်ားကိုလည္းလက္ေတြ႕တည္ေဆာက္ ေလ့လာသြားရမည္ျဖစ္ပါသည္။</p>
                                        <p class="burmese pad-15"><i class="fa fa-arrow-right"></i> Java Game Development<br>Java ဘာသာရပ္အသံုးျပဳ၍ Web Base Games မ်ား တည္ေဆာက္ႏိုင္ရန္အတြက္ Java Applet သံုး၍ လက္ေတြ႔ Game ေရးသားျခင္းကိုေလ့လာသြားရမည္ျဖစ္ပါသည္။ Mine Craft သို႔ေသာ 2D Games မ်ားတည္ေဆာက္ႏိုင္ရန္အတြက္ Java 2D Game Concepts မ်ားကိုေလ့လာသြားရမည္ျဖစ္ကာ လက္ေတြ႔ Project အေနႏွင့္ Runner Game တစ္ခုကို အစအဆံုးတည္ေဆာက္သြားရမည္ျဖစ္ပါသည္။ လိုအပ္ခ်က္ႏွင့္ အားနည္းခ်က္အခ်ိဳ႕ေၾကာင့္ Java ဘာသာရပ္သံုး 3D games မ်ား ေခတ္မစားေသာ္လည္း အေတြ႔အၾကံဳရေစရန္ 3D games Introduction သင္ခန္းစာကိုပါ ထည့္သြင္းသင္ၾကားေပးသြားမည္ျဖစ္ပါသည္။ 3D Games Concepts မ်ားကို ေကာင္းေကာင္းနားလည္သြားရံုမွ်မက OpenGL ႏွင့္ SDL တို႔ကိုပါ မိတ္ဆက္ေပးသည့္အတြက္ အျခားမည္သည့္ ဘာသာရပ္သံုး၍ 3D Games မ်ားေရးသည္ျဖစ္ေစ အေျခခံက်က်နားလည္ထား၍ အခက္အခဲမရွိ ေအာင္ျမင္စြာ 3D Games မ်ား ေရးသားႏိုင္မည္ ျဖစ္ပါသည္။</p>

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
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">Design Pattern တြင္ပါဝင္မည့္ သင္ခန္းစာမ်ား</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body pad-20 pad-bot-20 pad-top-15">
                                        <ol>
                                            <li class="burmese pad-15">Observer Pattern သင္ခန္းစာ ၂၀။</li>
                                            <li class="burmese pad-15">Abstract Factory Pattern သင္ခန္းစာ ၂၀။</li>
                                            <li class="burmese pad-15">Command Pattern သင္ခန္းစာ ၂၀။</li>
                                            <li class="burmese pad-15">Facade Pattern သင္ခန္းစာ ၂၀။</li>
                                            <li class="burmese pad-15">Template Method Pattern သင္ခန္းစာ ၂၀။</li>
                                            <li class="burmese pad-15">State Pattern သင္ခန္းစာ ၂၀။</li>
                                            <li class="burmese pad-15">proxy Pattern သင္ခန္းစာ ၂၀။</li>
                                            <li class="burmese pad-15">Design Patterns and Model သင္ခန္းစာ ၂၀။</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFour">
                                            <i class="fa fa-file-text-o"></i> &nbsp;<span class="burmese">JavaFX သင္ခန္းစာတြင္ ပါဝင္မည့္ သင္ခန္းစာမ်ား</span>
                                            <span class="plus pull-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body pad-20 pad-bot-20 pad-top-15">
                                        <ol>
                                            <li class="burmese pad-15">JavaFx မိတ္ဆက္။</li>
                                            <li class="burmese pad-15">JDK Installation။</li>
                                            <li class="burmese pad-15">Intellij IDE Installation။</li>
                                            <li class="burmese pad-15">Intellij IDE အသံုးျပဳ၍ JavaFx Project တစ္ခုအား Setup လုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Intellij IDE Workspace အား စိတ္ႀကိဳက္ျပင္ဆင္ျခင္း။</li>
                                            <li class="burmese pad-15">Window တစ္ခုတည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">JavaFx Scene အားနားလည္ထားျခင္း။</li>
                                            <li class="burmese pad-15">Window ထဲသို႔ Button တစ္ခု ထည့္သြင္းျခင္း။</li>
                                            <li class="burmese pad-15">Button Click Event အားနားေထာင္ျခင္း။</li>
                                            <li class="burmese pad-15">Multiple Button Click Event အားနားေထာင္ျခင္း။</li>
                                            <li class="burmese pad-15">Window ထဲသို႔ Label ထည့္သြင္းတည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">Mouse Event အားလက္ခံအသံုးျပဳျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Mouse Event အားလက္ခံအသံုးျပဳျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Window ထဲသို႔ TextField ထည့္သြင္း အသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">TextField ထဲမွ စာသားအားရယူ ျခင္း။</li>
                                            <li class="burmese pad-15">Window ထဲသို႔ PasswordField ထည့္သြင္း အသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">PasswordField ထဲမွ စာသားအားရယူ ျခင္း။</li>
                                            <li class="burmese pad-15">PasswordField ႏွင့္ TextField တို႔ရွိ Focus Mode အား ဖမ္းအသံုးျပဳျခင္း၊။</li>
                                            <li class="burmese pad-15">Focus Mode ေပၚမႈတည္၍ အျခား Events မ်ားအား Auto Loading ျပဳလုပ္ျခင္း။</li>
                                            <li class="burmese pad-15">Horizontal Box Layout အား နားလည္ထားျခင္း။</li>
                                            <li class="burmese pad-15">Horizontal Box Layout အားလက္ေတြ႔အသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">Verticle Box Layout အား နားလည္ထားျခင္း။</li>
                                            <li class="burmese pad-15">Verticle Box Layout အားလက္ေတြ႔အသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">TextArea အား နားလည္ထားျခင္း။</li>
                                            <li class="burmese pad-15">TextArea ထဲမွ Texts မ်ားအား ရယူအသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">Radio Button တည္ေဆာက္အသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">Radio Button Select အား ဖမ္းယူျခင္း။</li>
                                            <li class="burmese pad-15">ToggleButton တည္ေဆာက္အသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">ToggleButton Select Item အား ဖမ္းယူျခင္း။</li>
                                            <li class="burmese pad-15">CheckBox တည္ေဆာက္အသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">CheckBox Select Item အား ဖမ္းယူျခင္း။</li>
                                            <li class="burmese pad-15">ChoiceBox တည္ေဆာက္အသံုးျပဳျခင္။</li>
                                            <li class="burmese pad-15">ChoiceBox Select Item အား ဖမ္းယူျခင္း။</li>
                                            <li class="burmese pad-15">ComboBox တည္ေဆာက္အသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">ComboBox Select Item အား ဖမ္းယူျခင္း။</li>
                                            <li class="burmese pad-15">ProgressBar တည္ေဆာက္အသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">ProgressBar Loading Parcentage အား ရယူျခင္း။</li>
                                            <li class="burmese pad-15">ProgressBar အား Long Running Task ႏွင့္ တြဲဖက္ေလ့လာျခင္း(အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">ProgressBar အား Long Running Task ႏွင့္ တြဲဖက္ေလ့လာျခင္း(အပိုင္း ၂) ။</li>
                                            <li class="burmese pad-15">GridPane Layout အား ေလ့လာျခင္း။</li>
                                            <li class="burmese pad-15">GridPane Layout အား လက္ေတြ႔အသံုးခ်ျခင္း။</li>
                                            <li class="burmese pad-15">ColorPicker တည္ေဆာက္အသံုးျပဳျခင္(အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">ColorPicker တည္ေဆာက္အသံုးျပဳျခင္(အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">DataPicker တည္ေဆာက္အသံုးျပဳျခင္(အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">DataPicker တည္ေဆာက္အသံုးျပဳျခင္(အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Slider တည္ေဆာက္အသံုးျပဳျခင္(အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Slider တည္ေဆာက္အသံုးျပဳျခင္(အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">ProgressIndicator အား တည္ေဆာက္အသံုးျပဳျခင္း။</li>
                                            <li class="burmese pad-15">ProgressIndicator အား Long Running Task ႏွင့္ တြဲဖက္ေလ့လာျခင္း ။</li>
                                            <li class="burmese pad-15">ScrollBar တည္ေဆာက္အသံုးျပဳျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">ScrollBar တည္ေဆာက္အသံုးျပဳျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">BorderPane တည္ေဆာက္အသံုးျပဳျခင္(အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">BorderPane တည္ေဆာက္အသံုးျပဳျခင္(အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">BorderPane တည္ေဆာက္အသံုးျပဳျခင္(အပိုင္း 3)။</li>
                                            <li class="burmese pad-15">BorderPane ႏွင့္ Text Editor တည္ေဆာက္ျခင္း(အပိုင္း 4)။</li>
                                            <li class="burmese pad-15">BorderPane ႏွင့္ File Choose တည္ေဆာက္အသံုးျပဳျခင္(အပိုင္း 5)။</li>
                                            <li class="burmese pad-15">BorderPane ႏွင့္ Text Editor တည္ေဆာက္ျခင္း(အပိုင္း 6)။</li>
                                            <li class="burmese pad-15">BorderPane ႏွင့္ Text Editor တည္ေဆာက္ျခင္း(အပိုင္း 7)။</li>
                                            <li class="burmese pad-15">BorderPane ႏွင့္ Text Editor တည္ေဆာက္ျခင္း(အပိုင္း ၈)။</li>
                                            <li class="burmese pad-15">ScrollPane တည္ေဆာက္အသံုးျပဳျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">ScrollPane တည္ေဆာက္အသံုးျပဳျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Menu System တည္ေဆာက္အသံုးျပဳျခင္း(အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Menu System တည္ေဆာက္အသံုးျပဳျခင္း(အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Menu System တည္ေဆာက္အသံုးျပဳျခင္း(အပိုင္း 3)။</li>
                                            <li class="burmese pad-15">Menu System တည္ေဆာက္အသံုးျပဳျခင္း(အပိုင္း 4)။</li>
                                            <li class="burmese pad-15">Seperator တည္ေဆာက္အသံုးျပဳျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Seperator တည္ေဆာက္အသံုးျပဳျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">HTML Editor တည္ေဆာက္ျခင္း(အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">HTML Editor တည္ေဆာက္ျခင္း(အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Pagination System တည္ေဆာက္အသံုးျပဳျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">ListView တည္ေဆာက္အသံုးျပဳျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">ListView တည္ေဆာက္အသံုးျပဳျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">ListView တည္ေဆာက္အသံုးျပဳျခင္း (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">ListView တည္ေဆာက္အသံုးျပဳျခင္း (အပိုင္း ၄)။</li>
                                            <li class="burmese pad-15">ListView တည္ေဆာက္အသံုးျပဳျခင္း (အပိုင္း ၅)။</li>
                                            <li class="burmese pad-15">TableView တည္ေဆာက္အသံုးျပဳျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">TableView တည္ေဆာက္အသံုးျပဳျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">TableView တည္ေဆာက္အသံုးျပဳျခင္း(အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">TableView တည္ေဆာက္အသံုးျပဳျခင္း(အပိုင္း ၄)။</li>
                                            <li class="burmese pad-15">TableView တည္ေဆာက္အသံုးျပဳျခင္း(အပိုင္း ၅)။</li>
                                            <li class="burmese pad-15">TreeView တည္ေဆာက္အသံုးျပဳျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">TreeView တည္ေဆာက္အသံုးျပဳျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">TreeView တည္ေဆာက္အသံုးျပဳျခင္း(အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">TreeView တည္ေဆာက္အသံုးျပဳျခင္း(အပိုင္း ၄)။</li>
                                            <li class="burmese pad-15">TreeView တည္ေဆာက္အသံုးျပဳျခင္း(အပိုင္း ၅)။</li>
                                            <li class="burmese pad-15">TreeTableView တည္ေဆာက္အသံုးျပဳျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">TreeTableView တည္ေဆာက္အသံုးျပဳျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">TreeTableView တည္ေဆာက္အသံုးျပဳျခင္း(အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">TreeTableView တည္ေဆာက္အသံုးျပဳျခင္း(အပိုင္း ၄)။</li>
                                            <li class="burmese pad-15">TreeTableView တည္ေဆာက္အသံုးျပဳျခင္း(အပိုင္း ၅)။</li>
                                            <li class="burmese pad-15">TilePane တည္ေဆာက္အသံုးျပဳျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">TilePane တည္ေဆာက္အသံုးျပဳျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">AccordionPane တည္ေဆာက္အသံုးျပဳျခင္း(အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">AccordionPane တည္ေဆာက္အသံုးျပဳျခင္း(အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">AccordionPane တည္ေဆာက္အသံုးျပဳျခင္း(အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">AccordionPane တည္ေဆာက္အသံုးျပဳျခင္း (အပိုင္း ၄)။</li>
                                            <li class="burmese pad-15">Animation တည္ေဆာက္အသံုးျပဳျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Animation တည္ေဆာက္အသံုးျပဳျခင္း(အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Animation တည္ေဆာက္အသံုးျပဳျခင္း(အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">Animation တည္ေဆာက္အသံုးျပဳျခင္း(အပိုင္း ၄)။</li>
                                            <li class="burmese pad-15">Animation တည္ေဆာက္အသံုးျပဳျခင္း (အပိုင္း ၅)။</li>
                                            <li class="burmese pad-15">Line Shape တည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">Rectangle Shape တည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">Path Shape တည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">Circle Shape တည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">Arc Shape တည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">Polygon Shape တည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">Shape Color တည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">Shape Gradient တည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">Text Shape တည္ေဆာက္ျခင္း။</li>
                                            <li class="burmese pad-15">JavaFx သံုး CSS အား ေလ့လာျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">JavaFx သံုး CSS အား ေလ့လာျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">JavaFx သံုး CSS အား ေလ့လာျခင္း (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">JavaFx သံုး CSS အား ေလ့လာျခင္း (အပိုင္း ၄)။</li>
                                            <li class="burmese pad-15">JavaFx သံုး CSS အား ေလ့လာျခင္း (အပိုင္း ၅)။</li>
                                            <li class="burmese pad-15">JavaFx WebEngine အား ေလ့လာျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">JavaFx WebEngine အား ေလ့လာျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">JavaFx WebEngine အား ေလ့လာျခင္း (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">JavaFx WebEngine အား ေလ့လာျခင္း (အပိုင္း ၄)။</li>
                                            <li class="burmese pad-15">JavaFx WebEngine အား ေလ့လာျခင္း (အပိုင္း ၅)။</li>
                                            <li class="burmese pad-15">JavaFx Properties အား ေလ့လာျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">JavaFx Properties အား ေလ့လာျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">JavaFx Properties အား ေလ့လာျခင္း (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">JavaFx Properties အား ေလ့လာျခင္း (အပိုင္း ၄)။</li>
                                            <li class="burmese pad-15">JavaFx Propertiesအား ေလ့လာျခင္း (အပိုင္း ၅)။</li>
                                            <li class="burmese pad-15">Line Chart တည္ေဆာက္ျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Line Chart တည္ေဆာက္ျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Pie Chart တည္ေဆာက္ျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Pie Chart တည္ေဆာက္ျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Area Chart တည္ေဆာက္ျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Area Chart တည္ေဆာက္ျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Bubble Chart တည္ေဆာက္ျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Bubble Chart တည္ေဆာက္ျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Bar Chart တည္ေဆာက္ျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Bar Chart တည္ေဆာက္ျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Scatter Chart တည္ေဆာက္ျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Scatter Chart တည္ေဆာက္ျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Fx ရွိ Event အားလံုးအားေလ့လာျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">Fx ရွိ Event အားလံုးအားေလ့လာျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">Fx ရွိ Event အားလံုးအားေလ့လာျခင္း (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">Fx ရွိ Event အားလံုးအားေလ့လာျခင္း (အပိုင္း ၄)။</li>
                                            <li class="burmese pad-15">Fx ရွိ Event အားလံုးအားေလ့လာျခင္း (အပိုင္း ၅)။</li>
                                            <li class="burmese pad-15">Fx ရွိ Event အားလံုးအားေလ့လာျခင္း (အပိုင္း ၆)။</li>
                                            <li class="burmese pad-15">Fx ရွိ Event အားလံုးအားေလ့လာျခင္း (အပိုင္း ၇)။</li>
                                            <li class="burmese pad-15">SceneBuilder အသံုးျပဳျခင္း (အပိုင္း ၁)။</li>
                                            <li class="burmese pad-15">SceneBuilder အသံုးျပဳျခင္း (အပိုင္း ၂)။</li>
                                            <li class="burmese pad-15">SceneBuilder အသံုးျပဳျခင္း (အပိုင္း ၃)။</li>
                                            <li class="burmese pad-15">SceneBuilder အသံုးျပဳျခင္း (အပိုင္း ၄)။</li>
                                            <li class="burmese pad-15">SceneBuilder အသံုးျပဳျခင္း (အပိုင္း ၅)။</li>
                                            <li class="burmese pad-15">SceneBuilder အသံုးျပဳျခင္း (အပိုင္း ၆)။</li>
                                            <li class="burmese pad-15">ဘာဆက္ေလ့လာရမလဲ။</li>
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
                                            <li class="pad-20"><i class="fa fa-hand-o-right"></i> <span class="pad-15">ကြန္ျပဴတာႏွင့္ ေစ်းေရာင္းသည့္ စနစ္တစ္ခုအား JavaFx အသံုးျပဳ၍ ေရးသားျခင္း (POS)</span></li>
                                            <li class="pad-20"><i class="fa fa-hand-o-right"></i> <span class="pad-15">Java Download Manager တစ္ခုဖန္တီးျခင္း</span></li>
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
