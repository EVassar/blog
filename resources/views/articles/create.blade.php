@extends('partials.layout')
@section('content')
    <div class="container mx-auto">
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <form action="/admin/articles" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Title</span>
                        </label>
                        <input type="text" placeholder="Title" placeholder="Title" name="title" id="title"
                               class="input input-bordered input-primary w-full resize-y"/>
                        @error('title')
                        <label class="label">
                            <span class="label-text-alt text-error">{{$message}}</span>
                        </label>
                        @enderror
                    </div>
                    <div class="form-control w-full" for="body">
                        <label class="label">
                            <span class="label-text">Content</span>
                        </label>
                        <textarea class="textarea textarea-primary  resize-y" placeholder="Content" name="body"
                                  id="body"></textarea>
                        @error('body')
                        <label class="label">
                            <span class="label-text-alt text-error">{{$message}}</span>
                        </label>
                        @enderror
                    </div>
                    <div class="form-control w-full" for="image">
                        <label class="label">
                            <span class="label-text">Image</span>
                        </label>
                        <input type="file" name="image" id="image" class="file-input file-input-bordered file-input-primary w-full max-w"/>
                    </div>
                    <input class="btn btn-outline btn-primary" type="submit"></input>
                </form>
            </div>
        </div>
    </div>
@endsection
