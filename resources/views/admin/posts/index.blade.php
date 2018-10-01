@extends('layouts.admin')
@section('content')
    <h1>Post</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>User</th>
            <th>Cateogary</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>
          @if($posts)
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><img height="100" src="{{$post->photo_id ? $post->photo->photo : "http://placehold.it/4*4"}}" alt=""</td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->cateogary_id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                </tr>
                @endforeach
         @endif
        </tbody>
    </table>

@stop