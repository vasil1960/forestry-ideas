@extends('layouts.app')

@section('title', 'Contents')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>

@endsection

@section('content')

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
            <div class="card mt-4 shadow ">
                <div class="card-header">
                    <h3 class="py-3 font-weight-bold text-muted">Add New Journal</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('upload.journal') }}" enctype="multipart/form-data" >
                        @csrf
                        {{-- @method('put') --}}

                          <div class="row">
                              <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="title">
                                            <h4>Journal Title</h4>
                                        </label>
                                        <input
                                            class="form-control"
                                            id="title"
                                            name="title"
                                            placeholder="Insert Journal Title"
                                            value="Forestry Ideas"
                                            value="{{ old('title') }}"
                                            disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="year">
                                            <h4>Year</h4>
                                        </label>
                                        <input
                                            class="form-control"
                                            id="year"
                                            name="year"
                                            placeholder="Insert Journal Year"
                                            value="{{ old('year') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="volume">
                                            <h4>Volume</h4>
                                        </label>
                                        <input
                                            class="form-control"
                                            id="volume"
                                            name="volume"
                                            placeholder="Insert Journal Volume"
                                            value="{{ old('volume') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="number">
                                            <h4>Number</h4>
                                        </label>
                                        <input
                                            class="form-control"
                                            id="number"
                                            name="number"
                                            placeholder="Insert Journal Number"
                                            value="{{ old('number') }}">
                                    </div>
                              </div>

                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="journal_file"><h4>Journal File</h4></label>
                                    <input
                                        type="file"
                                        class="form-control-file"
                                        name="journal_file"
                                        id="journal_file"
                                        placeholder="Select Journal File (pdf)"
                                        aria-describedby="fileHelpId"
                                        {{-- value="{{ old('journal_file') }}"> --}}
                                    <small
                                        id="fileHelpId"
                                        class="form-text text-muted">Select journal file</small>
                                  </div>

                                  <div class="form-group">
                                      <label for="journal_content"><h4>Journal Content File</h4></label>
                                      <input
                                            type="file"
                                            class="form-control-file"
                                            name="content_file"
                                            id="content_file"
                                            placeholder="Select Journal File (pdf)"
                                            aria-describedby="fileHelpId"
                                            {{-- value="{{ old('content_file') }}"> --}}
                                      <small id="fileHelpId" class="form-text text-muted">Select content file</small>
                                    </div>
                              </div>
                          </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
