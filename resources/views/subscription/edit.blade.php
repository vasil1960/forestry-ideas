@extends('layouts.app')

@section('title', 'Edit Subscription')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>

@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4 shadow">
                <div class="card-header">
                    <h3 class="py-3 font-weight-bold text-muted">Subscription</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('subscription.update', $subscr->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="subscr">
                                <h4>Subscription</h4>
                            </label>
                            <textarea class="form-control" id="subscr" name="subscr"
                                rows="6">{!! $subscr->content !!}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
