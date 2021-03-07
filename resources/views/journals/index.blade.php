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
                <!-- Alert User -->
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <div class="card-header">
                    <h3 class="py-3 font-weight-bold text-muted">Contents</h3>
                </div>
                <div class="card-body">
                    {{-- <h5 class="card-title">Title</h5>
                    <p class="card-text">Content</p> --}}

                    @auth
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('journal.create') }}" class='btn btn-secondary float-right'>Add Journal</a>
                        </div>
                    </div>
                    @endauth
                    <div>
                        <table class="table table-striped mt-3 mb-5">
                            <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Year</th>
                                    <th scope="col">Volume</th>
                                    <th scope="col">Number</th>
                                    <th scope="col" class="text-center">Downloads</th>
                                    <th scope="col">Journal</th>
                                    <th scope="col">Content</th>
                                    <th scope="col" class="text-right">Articles</th>
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
                                        <td><p class="text-center">{{ $journal->journalCount }}</p></td>
                                        <td><a href="{{ route('journal.download', $journal->journalID) }}"><i class="bi-download" style="font-size: 1rem; color: rgb(5, 110, 92);"></i></a></td>
                                        <td><a href="{{ route('content.download', $journal->journalID) }}"><i class="bi-download" style="font-size: 1rem; color: rgb(5, 110, 92);"></i></a></td>
                                        @auth
                                            <td><a href="{{ route('articles.create', $journal->journalID ) }}">Add</a></td>
                                        @endauth
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
