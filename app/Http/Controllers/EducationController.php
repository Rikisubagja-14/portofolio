<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $education = Education::where('name_university', 'like', '%' . $search . '%')->latest()->paginate(5);
        return view('admin.education.index', compact('education'));
    }

    public function create(Request $request)
    {
        $education = Education::latest()->paginate(5);
        return view('admin.education.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [

            'name_university' => 'required',
            'major' => 'required',
            'date_of_entry' => 'required',
            'out_date' => 'required',
            'title' => 'required'

        ]);

        Education::create([

            'name_university' => $request->name_university,
            'major' => $request->major,
            'date_of_entry' => $request->date_of_entry,
            'out_date' => $request->out_date,
            'title' => $request->title,

        ]);

        return redirect()->route('education.index')->with(['success' => 'Data Berhasil Disimpan']);
    }


    public function edit(Education $education)
    {
        return view('admin.education.edit', compact('education'));
    }


    public function update (Request $request,Education $education)
    {
        $this->validate($request, [

            'name_university' => 'required',
            'major' => 'required',
            'date_of_entry' => 'required',
            'out_date' => 'required',
            'title' => 'required'

        ]);

            $education->update([

            'name_university' => $request->name_university,
            'major' => $request->major,
            'date_of_entry' => $request->date_of_entry,
            'out_date' => $request->out_date,
            'title' => $request->title,

        ]);

        return redirect()->route('education.index')->with(['success' => 'Data Berhasil Diubah']);
    }

    public function destroy(Education $education){
        $education->delete();
        return redirect()->route('education.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
