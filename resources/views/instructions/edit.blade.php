@extends('layouts.app')

@section('title', 'Edit Instructions To The Authors')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>

@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4 shadow">
                <div class="card-header">
                    <h3 class="py-3 font-weight-bold text-muted">Edit Instructions To The Authors</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('instructions.update', 1) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="instructions">
                                <h4>Instructions To The Authors</h4>
                            </label>
                            <textarea class="form-control" id="instructions" name="instructions"
                                rows="6">{!! $instructions->instrText !!}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
