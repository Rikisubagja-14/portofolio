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

        return redirect()->route('summary.index', compact('summary'));
    }

    public function create()
    {
         $summary = Summary::latest()->paginate(5);
         return redirect()->route('admin.summary.create');
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
}
