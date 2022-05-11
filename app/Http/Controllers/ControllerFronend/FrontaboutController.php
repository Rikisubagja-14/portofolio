<?php

namespace App\Http\Controllers\ControllerFronend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact_me;
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
     $contact = Contact_me::all();
     return view('landingpage.layout.index', compact('aboutt','summar','educ','portofolio'));
    }


    public function create()
    {
        $contact = Contact_me::all();
        return View('landingpage.layout.index');
    }

    public function store(Request $request)
    {
        // untuk validasi form
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
            
        ]);

        Contact_me::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            
        ]);

        return redirect()->route('landingpage.layout.index')->with(['success' => 'Success send!']);

    }
}
