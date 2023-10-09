@extends('partials.layout')

@section('content')

    <div class="container mx-auto">
        <a class="btn btn-primary">New Article</a>
        {{$articles->links()}}
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Title</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td>{{$article->id}}</td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->created_at}}</td>
                        <td>{{$article->updated_at}}</td>
                        <td>
                            <div class="join">
                                <a class="btn btn-info join-item">View</a>
                                <a class="btn btn-warning join-item">Edit</a>
                                <a class="btn btn-error join-item">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
