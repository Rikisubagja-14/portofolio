<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact_me;
use App\Models\Portofolio;
use App\Models\User;
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contactcount = Contact_me::count();
        $aboutcount = About::count();
        $usercount = User::count();
        $portofoliocount = Portofolio::count();
        return view('admin.dashboard.index', compact('contactcount','aboutcount','usercount','portofoliocount'));
    }
}
