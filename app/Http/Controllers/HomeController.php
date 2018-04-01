<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gstr;
use App\Client;
use Carbon\Carbon;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $gstrs = Gstr::All();
         $clients = Client::All();
         return view('home')
                ->with('gstrs', $gstrs)                
                ->with('clients', $clients);
    }
}
