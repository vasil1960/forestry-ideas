<?php

namespace App\Http\Controllers;

use App\Models\PubEthics;
use Illuminate\Http\Request;

class PubEthicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pubEthics = PubEthics::find(1);
        return view('pub-ethics.index',[
            'pubEthics' => $pubEthics
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PubEthics  $pubEthics
     * @return \Illuminate\Http\Response
     */
    public function show(PubEthics $pubEthics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PubEthics  $pubEthics
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pubEthics = PubEthics::find($id);
        return view('pub-ethics.edit', [
            'pubEthics' => $pubEthics
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PubEthics  $pubEthics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'pubEthics' => 'required'
        ]);

        $pubEthics = PubEthics::find($id);
        $pubEthics->content = $request->pubEthics;
        $pubEthics->save();

        return redirect()->route('pub-ethics.index')->with(['success' => 'Publication Ethics Update Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PubEthics  $pubEthics
     * @return \Illuminate\Http\Response
     */
    public function destroy(PubEthics $pubEthics)
    {
        //
    }
}
