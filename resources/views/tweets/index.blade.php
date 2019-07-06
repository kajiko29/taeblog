@extends('layout')

@section('content')
<div>
    <p>{{ $tweets[0]['content'] }}</p>
    <p>{{ $tweets['content'] }}</p>
</div>
@endsection