@extends('core121basic::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('core121basic.name') !!}
    </p>
@stop
