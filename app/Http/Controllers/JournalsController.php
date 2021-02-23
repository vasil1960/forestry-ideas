<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journal;

class JournalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $journals =  Journal::where('JournalID', '>', '36')->orderBy('journalID', 'DESC')->get();

        return view('journals.index', compact('journals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('journals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    $request->validate([
    //         'title'        => 'required|min:3',
    //         'year'         => 'required|digits:4',
    //         'volume'       => 'required|digits:2',
    //         'number'       => 'required|digits:1',
    //         'journal_file' => 'required|mimes:pdf',
    //         'content_file' => 'required|mimes:pdf',
    //     ]);


    //     if($request->hasFile('journal_file') && $request->hasFile('content_file')){

    //         # Upload Journal File
    //         $journal_file = $request->file('journal_file')->getClientOriginalName();
    //         $path = $request->file('journal_file')->storeAs('journal', $journal_file, ['disk'=>'forestry']);

    //         # Upload Journal Content File
    //         $content_file = $request->file('content_file')->getClientOriginalName();
    //         $path = $request->file('content_file')->storeAs('journal_content', $content_file, ['disk'=>'forestry']);

    //         # Save data to journal table
    //         $journal = new Journal();
    //         $journal->journalTitle       = $request->title;
    //         $journal->journalYear        = $request->year;
    //         $journal->journalVolume      = $request->volume;
    //         $journal->journalNr          = $request->number;
    //         $journal->journalFile        = $journal_file;
    //         $journal->journalFileContent = $content_file;

    //         $journal->save();
    //     }


    //     // dd($journal_file, $content_file);
    //     return redirect()->route('journal.index');
    }

    /**3
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
