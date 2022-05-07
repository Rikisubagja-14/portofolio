<?php

namespace App\Http\Controllers;
use App\Models\Contact_me;
use Illuminate\Http\Request;

class ContactmeController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $contactme = Contact_me::where('name','like','%'.$search.'%')->latest()->paginate(5);

        return view('admin.contact_me.index', compact('contactme'));
    }

    public function destroy(Contact_me $contactme)
    {
        $contactme->delete();
        return redirect()->route('contact_me.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
