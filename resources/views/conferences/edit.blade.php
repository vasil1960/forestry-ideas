@extends('layouts.app')

@section('title', 'Edit Conferences')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>

@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4 shadow">
                <div class="card-header">
                    <h3 class="py-3 font-weight-bold text-muted">Edit Conferences</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('conferences.update', $conferences->confID) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="conferences">
                                <h4>Conferences</h4>
                            </label>
                            <textarea class="form-control" id="conferences" name="conferences"
                                rows="6">{!! $conferences->confTitle !!}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
