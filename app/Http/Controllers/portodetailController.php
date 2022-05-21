<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class portodetailController extends Controller
{
    public function index(Request $request)
    {
        $portofolio = Portofolio::all();
        
        return view('landingpage.L_porto.portfoliodetails',compact('portofolio'));

    }

    public function show(Request $request,$id)
    {
        $portodetail = Portofolio::detail($id);
        
        return view('landingpage.layout.portfoliodetails',compact('portodetail'));

    }


   
}
