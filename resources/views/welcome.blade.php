@extends('partials.layout')
@section('content')
    <div class="container mx-auto">
        {{$articles->links()}}
        <div class="flex flex-row flex-wrap">
            @foreach($articles as $article)
                <div class="basis-1/4 mb-4">
                    <div class="card card-compact bg-base-100 shadow-xl h-full mx-3">
                        @if($article->image)
                            <figure><img src="{{$article->image}}"/></figure>
                        @endif
                        <div class="card-body">
                            <h2 class="card-title">{{ $article->title }}</h2>
                            <p>{{ $article->snippet }}</p>
                            <div class="stat">
                                <div class="start-desc">{{$article->user->name}}</div>
                                <div class="start-desc">{{$article->created_at->diffForHumans()}}</div>
                            </div>
                            <div class="card-actions justify-end">
                                <button class="btn btn-primary">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
