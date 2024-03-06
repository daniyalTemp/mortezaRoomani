<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function list()
    {
        $notSeen = contact::where('seen', 0)->get();
        $all = contact::all();
        return view('back.contact.list', compact('notSeen', 'all'));

    }

    public function seen(Request $request, int $id)
    {

        $contact = contact::find($id);
        $contact->seen=true;
        $contact->save();
        return redirect()->route('dashboard.contact.list');
    }
}
