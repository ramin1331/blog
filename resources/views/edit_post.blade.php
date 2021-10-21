@extends('layouts.main')

@section('title', 'Create Post')

@section('content')

    <div class="container">
        <div class="form-container mt-4">
            @if(session()->has('successMsg'))
                <div class="alert alert-success" role="alert">
                    {{session('successMsg')}}
                </div>
            @endif
            <form class="form-floating" method="post" action="update-post">
                {{method_field('patch')}}
                @csrf
                <div class="row">
                    <div class="form-group mb-3 col">
                        <label class="mb-2" for="usr">عنوان:</label>
                        <input type="text" name="title" class="form-control" id="usr" value="{{$post->title}}">
                    </div>

                    <div class="mb-3 col">
                        <label for="formFile" class="form-label">ثبت عکس</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label class="mb-2" for="comment">متن پست:</label>
                    <textarea class="form-control" name="description" rows="5" id="comment" >{{$post->description}}</textarea>
                </div>

                <input type="hidden" name="post_id" value="{{$post->id}}">

                <button type="submit" class="btn btn-primary">ویرایش</button>
            </form>
        </div>
    </div>
@stop
