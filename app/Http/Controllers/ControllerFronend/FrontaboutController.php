<?php

namespace App\Http\Controllers\ControllerFronend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Education;
use App\Models\Portofolio;
use App\Models\Summary;
use Illuminate\Http\Request;

class FrontaboutController extends Controller
{
    
    public function index()
    {
     $aboutt = About::all();
     $summar =Summary::all();
     $educ = Education::all();
     $portofolio = Portofolio::all();
     return view('landingpage.layout.index', compact('aboutt','summar','educ','portofolio'));
    }
}
