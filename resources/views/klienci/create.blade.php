@extends('app')

@section('content')

<h2>content</h2>


{!! Form::open(array('url' => 'foo/bar')) !!}



{!! Form::close() !!}

@stop



@section('footer')

@stop
