<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Journal;
use App\Models\Article;

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
        if ($request->hasFile('journal_file') && $request->hasFile('content_file')) {

            # Upload Journal File
            $journal_file = $request->file('journal_file')->getClientOriginalName();
            $path = $request->file('journal_file')->storeAs('journal', $journal_file, ['disk' => 'forestry']);

            # Upload Journal Content File
            $content_file = $request->file('content_file')->getClientOriginalName();
            $path = $request->file('content_file')->storeAs('journal_content', $content_file, ['disk' => 'forestry']);
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

    public function uploadArticle(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'summary' => 'required',
            'author' => 'required',
            'from' => 'required',
            'article_file' => 'required|mimes:pdf'
        ]);

        # Check if files are selected
        if ($request->hasFile('article_file')) {

            # Upload Article File
            $article_file = $request->file('article_file')->getClientOriginalName();
            $path = $request->file('article_file')->storeAs('issue', $article_file, ['disk' => 'forestry']);
        }

        $article = new Article();
        // dd($request->article_file);
        // dd($request->article_file);
        $article->issueTitle = $request->title;
        $article->issueSummary = $request->summary;
        $article->issueAutor = $request->author;
        $article->issueFrom = $request->from;
        $article->issueFile = $article_file;
        $article->issueJournalID = $request->hiddenJournalId;

        $article->save();

        return redirect()->route('articles.show', $article->issueID)->with(['success' => 'Article Upload and Save Successfully']);
    }
}
