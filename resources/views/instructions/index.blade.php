@extends('layouts.app')

@section('title', 'Instructions To The Authors')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>

@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4 shadow">
                <div class="card-header">
                    <h3 class="py-3 font-weight-bold text-muted">Instructions To The Authors</h3>
                </div>
                <div class="card-body shadow">

                        <div class="card-body">
                            <p>{!! $instructions->instrText !!}</p>

                            @auth
                                <a class="btn btn-secondary" href="{{ route('instructions.edit', $instructions->instrID) }}">Edit</a>
                            @endauth
                            <hr class="shadow">
                        </div>

                </div>
            </div>
        </div>
    </div>


@endsection
