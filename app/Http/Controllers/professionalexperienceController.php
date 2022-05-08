<?php

namespace App\Http\Controllers;

use App\Models\Professional_experience;
use Illuminate\Http\Request;

class professionalexperienceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $search = $request->get('search');
        $professional_experience = Professional_experience::where('name_position', 'like', '%' . $search . '%')->latest()->paginate(5);
        return view('admin.professional_experience.index', compact('professional_experience'));
    }

    public function create(Request $request)
    {
        $professionalexperience = Professional_experience::latest()->paginate(5);
        return view('admin.professional_experience.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name_position' => 'required',
            'company' => 'required',
            'date_of_entry' => 'required',
            'out_date' => 'required',
            'title_1' => 'required',
            'title_2' => 'required',
            'title_3' => 'required',
            'title_4' => 'required',
            'title_5' => 'required',
        ]);

        Professional_experience::create([

            'name_position' => $request->name_position,
            'company' => $request->company,
            'date_of_entry' => $request->date_of_entry, 
            'out_date' => $request->out_date,
            'title_1' => $request->title_1,
            'title_2' => $request->title_2,
            'title_3' => $request->title_3,
            'title_4' => $request->title_4,
            'title_5' => $request->title_5,
        ]);

        return redirect()->route('professional_experiences.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }


    public function edit(Professional_experience $professional_experience)
    {
        return view('admin.professional_experience.edit', compact('professional_experience'));
    }

    public function update (Request $request,Professional_experience $professional_experience)
    {
        $this->validate($request, [
            'name_position' => 'required',
            'company' => 'required',
            'date_of_entry' => 'required',
            'out_date' => 'required',
            'title_1' => 'required',
            'title_2' => 'required',
            'title_3' => 'required',
            'title_4' => 'required',
            'title_5' => 'required',
        ]);

        $professional_experience->update([
            'name_position' => $request->name_position,
            'company' => $request->company,
            'date_of_entry' => $request->date_of_entry, 
            'out_date' => $request->out_date,
            'title_1' => $request->title_1,
            'title_2' => $request->title_2,
            'title_3' => $request->title_3,
            'title_4' => $request->title_4,
            'title_5' => $request->title_5,
        ]);

        return redirect()->route('professional_experiences.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(Professional_experience $professional_experience){
        $professional_experience->delete();
        return redirect()->route('professional_experiences.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }


}
