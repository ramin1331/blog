@extends('layouts.main')

@section('title', 'post')

@section('content')
    <div class="container">
        <div class="post-container">
            <div style="width: 100% ;text-align:center"><img class="mt-4" src="storage/files/{{$post->picname}}" alt="pic" style="width:80%;height:400px"></div>

            <h3>عنوان پست</h3>
            <h4>{{$post->title}}</h4>

            <p>{{$post->description}}</p>
        </div>
    </div>
@stop
