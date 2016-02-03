@extends('template')

@section('title')
    Blog da Ana 
@stop    

@section('content')
    <h1>Blog da Ana</h1>
        @foreach($posts as $post)
             <h2>{{ $post->title}} <i>({{ $post->created_at }})</i></h2>
             <p>{{ $post->content }}</p>
             <b>Tags:</b><br>
             <ul>
                 @foreach($post->tags as $tag)
                    <li>{{ $tag->name }}</li>
                 @endforeach
             </ul>
             <h3>Comments</h3>
             @foreach($post->comments as $comment)
             	<b>Name:</b> {{ $comment->name }}<br>
             	<b>Comment:</b> {{ $comment->comment }}<br>
             @endforeach
            <hr>
         @endforeach       
    </ul>
@stop