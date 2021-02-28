@extends('layouts.app')

@section('title', 'Edit news')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>

@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4 shadow">
                <div class="card-header">
                    <h3 class="py-3 font-weight-bold text-muted">Edit News</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('news.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="news">
                                <h4>News</h4>
                            </label>
                            <textarea class="form-control" id="news" name="news"
                                rows="6">{{ old('news') }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
