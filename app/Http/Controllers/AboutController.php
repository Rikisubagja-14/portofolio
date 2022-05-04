<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    //
    public function index(Request $request)
    {

        $search = $request->get('search');
        $about = About::where('name_about','like','%'.$search.'%')->latest()->paginate(5);

        return view('admin.about.index', compact('about'));
    }

    public function create()
    {
        $about = About::latest()->paginate(5);
        return View('admin.about.create');
    }

    public function store(Request $request)
    {
        // untuk validasi form
        $this->validate($request, [
            'name_about' => 'required',
            'desc_about' => 'required',
            'birthday' => 'required',
            'website' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'age' => 'required',
            'deagree' => 'required',
            'email' => 'required',
            'caregory_freelance' => 'required',
            'title' => 'required',
            'skill' => 'required'
        ]);

        About::create([
            'name_about' => $request->name_about,
            'desc_about' => $request->desc_about,
            'birthday' => $request->birthday,
            'website' => $request->website,
            'phone' => $request->phone,
            'city' => $request->city,
            'age' => $request->age,
            'deagree' => $request->deagree,
            'email' => $request->email,
            'caregory_freelance' => $request->caregory_freelance,
            'title' => $request->title,
            'skill' => $request->skill  
        ]);

        return redirect()->route('about.index')->with(['success' => 'Data Berhasil Disimpan!']);

    }


    public function edit (About $about)
    {
        return view('admin.about.edit', compact('about'));
    }


    public function update (Request $request, About $about)
    {
        // untuk validasi form
        $this->validate($request, [
            'name_about' => 'required',
            'desc_about' => 'required',
            'birthday' => 'required',
            'website' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'age' => 'required',
            'deagree' => 'required',
            'email' => 'required',
            'caregory_freelance' => 'required',
            'title' => 'required',
            'skill' => 'required'
        ]);

        $about->update([
            'name_about' => $request->name_about,
            'desc_about' => $request->desc_about,
            'birthday' => $request->birthday,
            'website' => $request->website,
            'phone' => $request->phone,
            'city' => $request->city,
            'age' => $request->age,
            'deagree' => $request->deagree,
            'email' => $request->email,
            'caregory_freelance' => $request->caregory_freelance,
            'title' => $request->title,
            'skill' => $request->skill  
        ]);

        return redirect()->route('about.index')->with(['success' => 'Data Berhasil Diubah!']);
    }


    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('about.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
