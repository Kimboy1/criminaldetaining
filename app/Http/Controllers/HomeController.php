<?php

namespace App\Http\Controllers;
use App\Models\Criminal;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $criminals = Criminal::orderBy('created_at', 'desc')->get();
        $criminalCount = $criminals->count();
        
        return view('dashboard',compact('criminals','criminalCount'));
    }
}
