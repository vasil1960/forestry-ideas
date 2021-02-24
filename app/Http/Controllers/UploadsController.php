<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Journal;

class UploadsController extends Controller
{
    public function uploadJournal(Request $request)
    {
        $request->validate([
            // 'title'        => 'required|min:3',
            'year'         => 'required|digits:4',
            'volume'       => 'required|digits:2',
            'number'       => 'required|digits:1',
            'journal_file' => 'required|mimes:pdf',
            'content_file' => 'required|mimes:pdf',
        ]);

        # Check if files are selected
        if($request->hasFile('journal_file') && $request->hasFile('content_file')){

            # Upload Journal File
            $journal_file = $request->file('journal_file')->getClientOriginalName();
            $path = $request->file('journal_file')->storeAs('journal', $journal_file, ['disk'=>'forestry']);

            # Upload Journal Content File
            $content_file = $request->file('content_file')->getClientOriginalName();
            $path = $request->file('content_file')->storeAs('journal_content', $content_file, ['disk'=>'forestry']);
        }

        # Save data to journal table
        $journal = new Journal();
        $journal->journalTitle       = "Forestry Ideas";
        // $journal->journalTitle       = $request->title;
        $journal->journalYear        = $request->year;
        $journal->journalVolume      = $request->volume;
        $journal->journalNr          = $request->number;
        $journal->journalFile        = $journal_file;
        $journal->journalFileContent = $content_file;

        $journal->save();


        return redirect()->route('journal.index');
    }
}
