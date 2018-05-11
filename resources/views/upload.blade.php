@extends('layout.mainlayout')



@section('content')

<div class="container-fluid">

    {!! Form::open(['route' => 'uploadCreate', 'files' => true]) !!}
        <div class="form-group">
            {!! Form::label('Study Guide') !!}
            {!! Form::file('Browse', $attributes=['id' => 'studyGuide']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

</div>

@endsection
