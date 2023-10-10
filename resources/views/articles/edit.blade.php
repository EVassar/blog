@extends('partials.layout')
@section('content')
    <div class="container mx-auto">
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <form action="{{route('articles.update', ['article' => $article])}}" method="POST">
                    @csrf
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Title</span>
                        </label>
                        <input type="text" placeholder="Title" value="{{$article->title}}" name="title" id="title"
                               class="input input-bordered input-primary w-full resize-y"/>
                    </div>
                    <div class="form-control w-full" for="body">
                        <label class="label">
                            <span class="label-text">Content</span>
                        </label>
                        <textarea class="textarea textarea-primary  resize-y" value="{{$article->body}}" name="body"
                                  id="body"></textarea>
                    </div>
                    <input class="btn btn-outline btn-primary" type="submit"></input>
                </form>
            </div>
        </div>
    </div>
@endsection
