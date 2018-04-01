<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gstr;
use App\User;
use App\Client;
use Carbon\Carbon; 
use Illuminate\Support\Facades\Auth;

class GstrsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('gstrs.index');
    }

    public function index1(Request $request)
    {
        $yr = $request->year;
        $mn = $request->month;
        $refs = $request->year . "" . $request->month;
        $gstrs = Gstr::get()
                ->where('active', 1)
                ->where('ref', $refs);
        $clients = Client::whereDoesntHave('gstr', function ($query) use ($refs) {
                    $query->where('ref', '=', $refs);
        })->get();
        
         return view('gstrs.index1')
                ->with('gstrs', $gstrs)
                ->with('yr', $yr)
                ->with('mn', $mn)
                ->with('refs', $refs)                
                ->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function gstr1($id, $ref)
    {
        $clients = Client::find($id);
        $refs = $ref;
        return view('gstrs.gstr1')
                ->with('refs', $refs)
                ->with('clients', $clients);
    }
    public function gstr2($id)
    {
        $gstrs = Gstr::find($id);
        return view('gstrs.gstr2')->with('gstrs', $gstrs);
    }
    public function gstr3($id)
    {
        $gstrs = Gstr::find($id);
        return view('gstrs.gstr3')->with('gstrs', $gstrs);
    }



    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store1(Request $request, $id, $ref)
    {

        $this->validate($request, [
            'gstr1' => 'required|mimes:pdf|max:10000'
            ]);
    
            //Handle file upload
            $filenameWithExt = $request->file('gstr1')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('gstr1')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('gstr1')->storeAs('public/gstr1', $fileNameToStore);


        $gstr = new Gstr;
        $gstr->client_id = $id;
        $gstr->gstr1 = $fileNameToStore;
        $gstr->gstr2 = '';
        $gstr->gstr3 = '';
        $gstr->ref = $ref;
        $gstr->active = 1;
        $gstr->g1_uid = Auth::id();
        $gstr->g2_uid = 0;
        $gstr->g3_uid = 0;
        $gstr->save();
    
            return redirect('/gstrs')->with('success', 'GSTR3 updated');
    }

    public function store2(Request $request, $id)
    {
        $this->validate($request, [
            'gstr2' => 'required|mimes:pdf|max:10000'
            ]);
    
            //Handle file upload
            $filenameWithExt = $request->file('gstr2')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('gstr2')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('gstr2')->storeAs('public/gstr2', $fileNameToStore);


        $gstr = Gstr::find($id);
        $gstr->gstr2 = $fileNameToStore;
        $gstr->g2_uid = Auth::id();
        $gstr->save();
    
            return redirect('/gstrs')->with('success', 'GSTR2 updated');
    }


    public function store3(Request $request, $id)
    {
        $this->validate($request, [
            'gstr3' => 'required|mimes:pdf|max:10000'
            ]);
    
            //Handle file upload
            $filenameWithExt = $request->file('gstr3')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('gstr3')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('gstr3')->storeAs('public/gstr3', $fileNameToStore);


        $gstr = Gstr::find($id);
        $gstr->gstr3 = $fileNameToStore;
        $gstr->g3_uid = Auth::id();
        $gstr->save();
    
            return redirect('/gstrs')->with('success', 'GSTR3 updated');
    }



    public function setInactive($id, $ref)
    {
        $gstr = new Gstr;
        $gstr->client_id = $id;
        $gstr->gstr1 = '';
        $gstr->gstr2 = '';
        $gstr->gstr3 = '';
        $gstr->ref = $ref;
        $gstr->active = 0;
        $gstr->save();
    
            return redirect('/gstrs')->with('success', 'GSTR3 updated');
    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gstr = Gstr::find($id);
        $user = User::find($gstr->g1_uid);
        $userName = $user->name;
        return view('gstrs.show')->with('gstr', $gstr)
                                 ->with('userName', $userName);
    }

    public function show1($id)
    {
        $gstr = Gstr::find($id);
        $user = User::find($gstr->g2_uid);
        $userName = $user->name;
        return view('gstrs.show1')->with('gstr', $gstr)
                                 ->with('userName', $userName);
    }

    public function show2($id)
    {
        $gstr = Gstr::find($id);
        $user = User::find($gstr->g3_uid);
        $userName = $user->name;
        return view('gstrs.show2')->with('gstr', $gstr)
                                 ->with('userName', $userName);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
