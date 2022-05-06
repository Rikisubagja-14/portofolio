<?php

namespace App\Http\Controllers;
use App\Models\Summary;
use Illuminate\Http\Request;

class SummaryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $summary = Summary::where('title_sumary','like','%'.$search.'%')->latest()->paginate(5);

        return view('admin.summary.index', compact('summary'));
    }

    public function create()
    {
         $summary = Summary::latest()->paginate(5);
         return view('admin.summary.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title_sumary' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);

        Summary::create([
            'title_sumary' => $request->title_sumary,
            'city' => $request->city,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        return redirect()->route('summary.index')->with(['success' => 'Data Berhasil Disimpan']);
    }
    public function edit (Summary $summary)
    {
        return view('admin.summary.edit', compact('summary'));
    }


    public function update (Request $request, Summary $summary)
    {
        $this->validate($request, [
            'title_sumary' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);

        $summary->update([
            'title_sumary' => $request->title_sumary,
            'city' => $request->city,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        return redirect()->route('summary.index')->with(['success' => 'Data Berhasil Diubah']);
    }


    public function destroy(Summary $summary)
    {
        $summary->delete();
        return redirect()->route('summary.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
