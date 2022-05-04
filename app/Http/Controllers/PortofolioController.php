<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;

class PortofolioController extends Controller
{
    public function index()
    {
        $portofolio = Portofolio::latest()->paginate(5);

        return view('admin.portofolio.index', compact('portofolio'));
    }


    public function create(Request $request){

        
    }
}
