<?php

namespace App\Http\Controllers\match;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\model\group;
use App\Http\Controllers\Controller;
class HomeController extends Controller
{
    
       public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $group =  group::all();
        return view('home', compact('group'));
    }




}//end of class
