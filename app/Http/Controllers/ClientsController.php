<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Gstr;


class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
       // return $clients;
        return view('clients.index')->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'bname' => 'required',
            'gstin' => 'required',
            'number' => 'required'
        ]);
        $client = new Client;
        $client->name = $request->input('name');
        $client->bname = $request->input('bname');
        $client->gstin = $request->input('gstin');
        $client->type = $request->input('type');
        $client->pan = $request->input('pan');
        $client->number = $request->input('number');
        $client->email = $request->input('email');
        $client->save();

       // $gstr = new Gstr;
        //$gstr->client_id = $client->id;
        //$gstr->gstr1 = '';
        //$gstr->gstr2 = '';
        //$gstr->gstr3 = '';
        //$gstr->month = 0;
        //$gstr->year = 0;
        //$gstr->save();
        
        return redirect('/clients')->with('success', 'Client added');
    }

    public function fileReturn($id)
    {
        $ids = $id;
        return view('clients.returns')->with('ids', $ids);
    }

    public function showReturns(Request $request, $id)
    {
        $refs = $request->year . "" . $request->month;
        $gstrs = Gstr::get()
                ->where('active', 1)
                ->where('client_id', $id)
                ->where('ref', $refs);
        $gstx = Gstr::get()
                ->where('active', 0)
                ->where('client_id', $id)
                ->where('ref', $refs);
        return view('clients.file')
                ->with('gstrs', $gstrs)
                ->with('gstx', $gstx);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
