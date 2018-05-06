@extends('layout.mainlayout')



@section('content')

<div class="container-fluid">

    {!! Form::open(['url' => 'foo/bar']) !!}
        //
    {!! Form::close() !!}

</div>

@endsection
