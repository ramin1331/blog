@extends('layouts.main')

@section('title', 'dashboard')
@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                @foreach($posts as $post)
                        <div class="col">
                            <div class="card shadow-sm">
{{--                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"--}}
{{--                                     xmlns="../storage/app/public/files/{{$post->picname}}" role="img" aria-label="Placeholder: Thumbnail"--}}
{{--                                     preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>--}}
{{--                                    <rect width="100%" height="100%" fill="#55595c"/>--}}
{{--                                    <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>--}}
{{--                                </svg>--}}
                                <img src="storage/files/{{$post->picname}}" alt="pic" style="width:300px;height:300px">
                                <div class="card-body">
                                    <h4 class="mb-3">{{$post->title}}</h4>
                                    <p class="card-text">{{$post->description}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <form action="show-post" method="get">
                                                <input type="hidden" name="post_id" value="{{$post->id}}">
                                                <button type="submit" class="btn btn-sm btn-outline-secondary">View</button>
                                            </form>
                                            @if($post->user_id == auth()->id())
                                                <form action="edit-post" method="get">
                                                    <input type="hidden" name="post_id" value="{{$post->id}}">
                                                    <button type="submit" class="btn btn-sm btn-outline-secondary">Edit</button>
                                                </form>
                                            @endif
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach

            </div>
        </div>
    </div>


@stop
