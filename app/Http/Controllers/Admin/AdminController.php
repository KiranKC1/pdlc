<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{ 
    public function __construct(Request $request)
    {
        $this->middleware('auth:admin_user');
        // $this->middleware(function ($request, $next) {

        //     if (Auth::user()->roles()->where('title', '=', 'Dashboard')->exists()){
        //         return $next($request);
        //     }
        //     else
        //         abort(403);
        // });
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function test(Request $request){
        $request->session()->flash('success', "You clicked this");
        return redirect()->route('admin_dashboard');
    }
}
