@extends('layout.mainlayout')



@section('content')

<div class="container-fluid">

    {!! Form::open(['route' => 'upload', 'files' => true]) !!}
        <div class="form-group">
            {!! Form::label('Study Guide') !!}
            {!! Form::file('Browse', null) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

</div>

@endsection
