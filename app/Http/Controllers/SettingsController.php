<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gstr;

class SettingsController extends Controller
{
    public function inactive()
    {
        $gstrs = Gstr::get()->where('active', 0);
        return view('settings.inactive')->with('gstrs', $gstrs);
    }

    public function setActive($id)
    {
        $gstr = Gstr::find($id);
        $gstr->delete();
        return redirect('/settings')->with('success', 'GSTR2 updated');
    }
}
