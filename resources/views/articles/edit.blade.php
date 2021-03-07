@extends('layouts.app')

@section('title', 'Contents')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>

@endsection

@section('content')

    <h1>Update Issue</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4 shadow">
                <div class="card-header">
                    <h3>{{ $article->issueFile }} - file for download
                    </h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('articles.update', $article->issueID) }}">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="title">
                                <h4>Title</h4>
                            </label>
                            <textarea class="form-control" id="title" name="title"
                                rows="4">{{ $article->issueTitle }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="summary">
                                <h4>Summary</h4>
                            </label>
                            <textarea class="form-control" id="summary" name="summary"
                                rows="20">{{ strip_tags($article->issueSummary) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="author">
                                <h4>Author</h4>
                            </label>
                            <textarea class="form-control" id="author" name="author"
                                rows="3">{{ $article->issueAutor }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="from">
                                <h4>From</h4>
                            </label>
                            <textarea class="form-control" id="from" name="from"
                                rows="3">{{ $article->issueFrom }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
