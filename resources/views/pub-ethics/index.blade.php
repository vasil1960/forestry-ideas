@extends('layouts.app')

@section('title', 'Publication Ethics')

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
                    <h3 class="py-3 font-weight-bold text-muted">Publication Ethics and Publication Malpractice Statement</h3>
                </div>
                <div class="card-body shadow">

                        <div class="card-body">
                            <p>{!! $pubEthics->content !!}</p>

                            @auth
                                <a class="btn btn-secondary" href="{{ route('pub-ethics.edit', $pubEthics->id) }}">Edit</a>
                            @endauth
                            <hr class="shadow">
                        </div>

                </div>
            </div>
        </div>
    </div>


@endsection
