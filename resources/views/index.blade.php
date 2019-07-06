@extends('layout')

@section('content')
<div>
    <p>{{ $tweets[0]['content'] }}</p>
    <p>{{ $tweet['content'] }}</p> // 追加
</div>
@endsection