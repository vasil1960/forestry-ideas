<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Journal;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadsController extends Controller
{
    public function downloadJournal($id)
    {
        $journal = Journal::find($id);
        $journal->increment('journalCount');
        return response()->download(base_path("files/journal/{$journal->journalFile}"));
    }

    public function downloadJournalContent($id)
    {
        $content = Journal::find($id);
        return response()->download(base_path("files/journal_content/{$content->journalFileContent}"));
    }

    public function downloadArticle($id)
    {

        $article = Article::find($id);
        $article->increment('issueCount');

        return response()->download(base_path("files/issue/{$article->issueFile}"));



    }
}
