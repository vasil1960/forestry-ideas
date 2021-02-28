@extends('layouts.app')

@section('title', 'Issue')

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
                    <h3 class="py-3 font-weight-bold text-muted">News</h3>
                </div>
                <div class="card-body shadow">
                    @foreach ($news as $new)
                        <div class="card-body">
                            <p>{!! $new->newsText !!}</p>
                            <p class="text-right">{{ $new->newsDatum }}</p>
                            @auth
                                <a class="btn btn-secondary" href="{{ route('news.edit', $new->newsID) }}">Edit</a>
                            @endauth
                            <hr class="shadow">
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>


    {{-- @foreach ($issues as $issue)

        <div class="card mb-3">
            <div class="card-body">
            <h5 class="card-title">{!!  $issue->issueTitle !!}</h5>
            <p class="card-text">{!!  $issue->issueAutor !!}</p>
            <p class="card-text">{!!  $issue->issueFrom !!}</p>
            <p class="card-text">{!!  $issue->issueSummary !!}</p>
            <p class="card-text">{!!  $issue->issueFile !!}</p>
            <a href="#" class="btn btn-primary">Download PDF File</a>
            </div>
        </div>

    @endforeach

    {{ $issues->links() }} --}}

@endsection
