<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticesController extends Controller
{
    public function show(Request $request) 
    {
        $practice = $request->get('id');

        // if ($practice === '01') {
        //     return view('practice.pr-01');
        // } else if ($practice === '02') {
        //     return view('practice.pr-02');
        // } else {
        //     abort(404);
        // }

        if (empty($practice)) {
            return view('practices');
        }

        // using views

        // $viewPath = 'practice.pr-' . $practice;
        // if (view()->exists($viewPath)) {
        //     return view($viewPath);
        // } else {
        //     abort(404);
        // }

        // using methods

        $viewMethod = 'practice' . $practice;
        if (method_exists($this, $viewMethod)) {
            return $this->$viewMethod();
        } else {
            abort(404);
        }

        // return view('practices');
    }

    public function practice01()
    {


        return view('practice.pr-01');
    }

    public function practice02()
    {
        return view('practice.pr-02');
    }
}
