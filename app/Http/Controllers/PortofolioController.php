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


    public function create(Request $request)
    {
        $portofolio = Portofolio::latest()->paginate(5);
        return view('admin.portofolio.create');
    }

    public function store (Request $request)
    {
        $this->validate($request,[
            'name_app' => 'required|max:5',
            'city_clint' => 'required|max:5',
            'categoty' => 'required|max:5',
            'project_date' => 'required',
            'project_url' => 'required|max:5',
            'image_project' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        //upload image_project

        $image_project = $request->file('image_project');
        $image_project->storeAs('public/portofolio', $image_project->hashName());


        //create portofolio

        Portofolio::create([
            'name_about' => $request->name_about,
            'city_clint' => $request->city_clint,
            'categoty' => $request->categoty,
            'project_date' => $request->project_date,
            'project_url' => $request->project_url,
            'image_project' => $request->hashName(),
        ]);

        //redirect index3
        return redirect()->route('portofolio.index')->with(['success' => 'Data Berhasil Disimpan']);
    }
}
