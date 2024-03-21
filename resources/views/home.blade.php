{{-- Xin chào, {!!$name!!} ! --}}
{{-- Day a comment --}}


{{-- <h1>{{$title}}</h1>
@includeif('shared.notify',['alertType'=>'alert-warning']) --}}
{{-- <h1>List Post</h1>
<div class="list-post">
    @each('shared.post',$posts,'post')
</div> --}}

{{-- <x-todo>
    @foreach($tasks as $task)
    <h3>{{$task['name']}}</h3>
    @endforeach
</x-todo> --}}


@extends('layouts.app')
@section('title','Page Title')
@section('sidebar')
@parent
<p>This is appendes to the master sidebar.</p>
@endsection
@section('content')
<p>This is my body content.</p>
@endsection
