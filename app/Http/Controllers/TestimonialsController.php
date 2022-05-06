<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    //

    public function index(Request $request)
    {   
        $search = $request->get('search');
        $testimonials = Testimonials::where('name_client','like','%'.$search.'%')->latest()->paginate(5);
        return view('admin.testimonials.index', compact('testimonials'));
    }


    public function create()
    {
        $testimonials = Testimonials::latest()->paginate(5);
        return view('admin.testimonials.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name_client' => 'required',
            'title_position' => 'required',
            'title_testimonials' => 'required',
        ]);

        Testimonials::create([
            'name_client' => $request->name_client,
            'title_position' => $request->title_position,
            'title_testimonials' => $request->title_testimonials,
        ]);


        return redirect()->route('testimonials.index')->with(['success' => 'Data Berhasil']);
    }



    public function edit(Testimonials $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }


    public function update(Request $request,Testimonials $testimonial)
    {
        $this->validate($request, [
            'name_client' => 'required',
            'title_position' => 'required',
            'title_testimonials' => 'required',
        ]);

        $testimonial->update([
            'name_client' => $request->name_client,
            'title_position' => $request->title_position,
            'title_testimonials' => $request->title_testimonials,
        ]);

        return redirect()->route('testimonials.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(Testimonials $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('testimonials.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}
