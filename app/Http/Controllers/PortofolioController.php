<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;
use Illuminate\Support\Facades\Storage;

class PortofolioController extends Controller
{
    public function index(Request $request)
    {   
        $search = $request->get('search');
        $portofolio = Portofolio::where('name_app','like','%'.$search.'%')->latest()->paginate(5);
        return view('admin.portofolio.index', compact('portofolio'));
    }


    public function create(Request $request)
    {
        $portofolio = Portofolio::latest()->paginate(5);
        return view('admin.portofolio.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name_app' => 'required',
            'city_clint' => 'required',
            'categoty' => 'required',
            'project_date' => 'required',
            'project_url' => 'required',
            'image_project' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        //upload image_project

        $image_project = $request->file('image_project');
        $image_project->storeAs('public/portofolio', $image_project->hashName());


        //create portofolio

        Portofolio::create([
            'name_app' => $request->name_app,
            'city_clint' => $request->city_clint,
            'categoty' => $request->categoty,
            'project_date' => $request->project_date,
            'project_url' => $request->project_url,
            'image_project' => $image_project->hashName(),
        ]);

        //redirect 
        return redirect()->route('portofolio.index')->with(['success' => 'Data Berhasil Disimpan']);
    }

    //update portofolio
    public function edit(Portofolio $portofolio)
    {
        return view('admin.portofolio.edit', compact('portofolio'));
    }

    public function update(Request $request, Portofolio $portofolio)
    {
        $this->validate($request, [
            'name_app' => 'required',
            'city_clint' => 'required',
            'categoty' => 'required',
            'project_date' => 'required',
            'project_url' => 'required',
            'image_project' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('image_project')) {

            //upload new image
            $image_project = $request->file('image_project');
            $image_project->storeAs('public/portofolio', $image_project->hashName());

            //delete old image
            Storage::delete('public/portofolio/' . $portofolio->image_project);

            //updated
            $portofolio->update([
                'name_app' => $request->name_app,
                'city_clint' => $request->city_clint,
                'categoty' => $request->categoty,
                'project_date' => $request->project_date,
                'project_url' => $request->project_url,
                'image_project' => $image_project->hashName(),
            ]);
        } else {
            $portofolio->update([
                'name_app' => $request->name_app,
                'city_clint' => $request->city_clint,
                'categoty' => $request->categoty,
                'project_date' => $request->project_date,
                'project_url' => $request->project_url
            ]);
        }
        return redirect()->route('portofolio.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(Portofolio $portofolio)
    {
        $portofolio->delete();
        return redirect()->route('portofolio.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
