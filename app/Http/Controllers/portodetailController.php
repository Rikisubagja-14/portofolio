<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class portodetailController extends Controller
{
    public function index()
    {
        $potodetail = Portofolio::all();
        return view('landingpage.layout.portfoliodetails',compact('potodetail'));

    }
}
