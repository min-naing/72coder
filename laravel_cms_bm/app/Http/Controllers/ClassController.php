<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{

    public function index()
    {
        return view('class.home');
    }

    public function webDesign()
    {
        return view('class.web.design');
    }
    public function webDev()
    {
        return view('class.web.dev');
    }
    public function androidDev()
    {
        return view('class.android.dev');
    }
    public function androidAdv()
    {
        return view('class.android.adv');
    }
    public function javaSe()
    {
        return view('class.java.se');
    }
    public function javaEe()
    {
        return view('class.java.ee');
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
}
