@extends('layouts.app')

@section('title', 'Contents')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>

@endsection

@section('content')

    <h1>Add New Article (Issue)</h1>

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
                    <h3>{{ $journal->journalTitle }}, Year {{ $journal->journalYear }}, Vol. {{ $journal->journalVolume}}, Nr. {{ $journal->journalNr }}</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <form method="POST" action="{{ route('upload.article') }}" enctype="multipart/form-data">


                                <input type="hidden" name="hiddenJournalId" id="hiddenJournalId" value="{{ $journal->journalID }}" >



                                <div class="form-group">
                                    <label for="title">
                                        <h4>Title</h4>
                                    </label>
                                    <textarea class="form-control" id="title" name="title"
                                        rows="4">{{ old('title') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="author">
                                        <h4>Author</h4>
                                    </label>
                                    <textarea class="form-control" id="author" name="author"
                                        rows="5">{{ old('author') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="from">
                                        <h4>From</h4>
                                    </label>
                                    <textarea class="form-control" id="from" name="from"
                                        rows="3">{{ old('from') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="summary">
                                        <h4>Summary</h4>
                                    </label>
                                    <textarea class="form-control" id="summary" name="summary"
                                        rows="20">{{ old('summary') }}</textarea>
                                </div>


                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="article_file"><h4>Article File</h4></label>
                                <input
                                    type="file"
                                    class="form-control-file"
                                    name="article_file"
                                    id="article_file"
                                    placeholder="Select Article File (pdf)"
                                    aria-describedby="fileHelpId"
                                    {{-- value="{{ old('journal_file') }}"> --}}
                                    >
                                <small
                                    id="fileHelpId"
                                    class="form-text text-muted">Select Article file</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
