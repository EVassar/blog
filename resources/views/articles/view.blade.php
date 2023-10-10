@extends('partials.layout')

@section('content')
    <div class="container mx-auto">
        <div>
            <table class="table table-zebra">
                <tr>
                    <th>
                        Id
                    </th>
                    <td>
                        {{$article->id}}
                    </td>
                </tr>
                <tr>
                    <th>
                        Title
                    </th>
                    <td>
                        {{$article->title}}
                    </td>
                </tr>
                <tr>
                    <th>
                        Content
                    </th>
                    <td>
                        {{$article->body}}
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection
