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
            <form class="form-floating" method="post" action="store-post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group mb-3 col">
                        <label class="mb-2" for="usr">عنوان:</label>
                        <input type="text" name="title" class="form-control" id="usr">
                    </div>

                    <div class="mb-3 col">
                        <label for="formFile" class="form-label">ثبت عکس</label>
                         <input class="form-control" type="file" name="pic" id="formFile">
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label class="mb-2" for="comment">متن پست:</label>
                    <textarea class="form-control" name="description" rows="5" id="comment"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">ثبت</button>
            </form>
        </div>
    </div>
@stop
