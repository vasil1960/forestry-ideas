@extends('layouts.app')

@section('title', 'Contents')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4 shadow">
                <div class="card-header">
                    <h3>Contents</h3>
                </div>
                <div class="card-body">
                    {{-- <h5 class="card-title">Title</h5>
                    <p class="card-text">Content</p> --}}

                    <div class="row mt-5">
                        <div class="col-md-10 offset-md-1">
                            <a href="{{ route('journal.create') }}" class='btn btn-primary'>Add Journal</a>
                        </div>
                    </div>

                    <div class="col-md-10">
                        <table class="table table-sm table-striped offset-md-1 mt-3 mb-3">
                            <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Year</th>
                                    <th scope="col">Volume</th>
                                    <th scope="col">Number</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($journals as $journal)
                                    <tr>
                                        <th scope="row">{{ $journal->journalTitle }}</th>
                                        <td>{{ $journal->journalYear }}</td>
                                        <td class="text-left">Vol. {{ $journal->journalVolume }}</td>
                                        <td>Nr. {{ $journal->journalNr }}</td>
                                        <td><a href="{{ route('journal.download', $journal->journalID) }}">Journal</a></td>
                                        <td><a href="{{ route('content.download', $journal->journalID) }}">Content</a></td>
                                        <td class="text-right">
                                            <a href="{{ route('articles.index_all', $journal->journalID) }}">
                                                <i class="bi bi-folder2-open"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    {{-- @foreach ($contents as $content)
                        <a href="{{ url('issue', ['issueJournalID' => $content->journalID]) }}">
                            <h6> {{ $content->journalTitle }}, {{ $content->journalYear }}, Vol.
                                {{ $content->journalVolume }}, No
                                {{ $content->journalNr }}</h6>
                        </a>
                    @endforeach --}}
                </div>
            </div>
        </div>
    </div>



@endsection
