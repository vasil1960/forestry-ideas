<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Journal;

class ArticleIssueController extends Controller
{

    public function index_all($id)
    {
        $journal = Journal::find($id);
        $articles =  Journal::find($journal->journalID)->article()->paginate(5);
        // dd($issues);
        $contents =  Journal::where('JournalID', '>', '36')->orderBy('journalID', 'DESC')->get();
        // dd($issues);
        return view('articles.index_all', compact('journal', 'articles', 'contents'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $journal = Journal::find($id);
        return view('articles.create', compact('journal'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::where('issueId', $id)->first();
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::where('issueId', $id)->first();
        return view('articles.edit', compact('article'));
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
        $article = Article::where('issueId', $id)->first();

        $request->validate([
            'title' => 'required|min:3',
            'summary' => 'required',
            'author' => 'required',
            'from' => 'required',
        ]);

            $article->issueTitle = $request->title;
            $article->issueSummary = $request->summary;
            $article->issueAutor = $request->author;
            $article->issueFrom = $request->from;

            $article->save();

            return redirect()->route('articles.show', $id)->with(['success' => 'Articles Update Successfully']);
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
