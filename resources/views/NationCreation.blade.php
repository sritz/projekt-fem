@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Nation</div>
                    <div class="panel-body">

                        <form class="form-horizontal" method="POST" action="{{ route('NationCreation') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nation Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('ruler') ? ' has-error' : '' }}">
                                <label for="ruler" class="col-md-4 control-label">Ruler Name</label>

                                <div class="col-md-6">
                                    <input id="ruler" type="text" class="form-control" name="ruler" value="{{ old('ruler') }}" required>

                                    @if ($errors->has('ruler'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('ruler') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('ruler_title') ? ' has-error' : '' }}">
                                <label for="ruler_title" class="col-md-4 control-label">Ruler Title</label>

                                <div class="col-md-6">
                                    <input id="ruler_title" type="text" class="form-control" name="ruler_title" value="{{ old('ruler_title') }}" required>

                                    @if ($errors->has('ruler_title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('ruler_title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Create Nation
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
