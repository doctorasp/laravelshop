@extends('templates.main')
@section('content')
    @foreach($goods as $good)
        <p>
            <a href="/goods/{{$good->id}}">
                {{$good->name}}
            </a>
        </p>
        <p>
            {{$good->price}}
        </p>
        <img src="{{$path}}" width="100px"/>
        
    @endforeach


@endsection