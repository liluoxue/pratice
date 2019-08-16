@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 class="text-center text-warning">{{$post->title}}</h3>
        <span class="pull-left">{{$post->author->name}}</span>
        <span class="pull-right">{{$post->published_at->diffforHumans() }}</span>
    <hr>
    <br>
        {{$post->body}}
        <hr>
        <br>
        <div class="pull-left">
            <a href="{{route("posts.edit",$post->id)}}">编辑博客</a>
        </div>
        <div class="pull-right">
            <form action="{{route('posts.destroy',$post->id)}}" method="post">

                <input type="hidden" name="_method" value="DELETE"/>
                {{csrf_field()}}
                <div class="form-group">
                    <button type="submit">删除表单</button>
                </div>
            </form>
        </div>
    </div>

@endsection
