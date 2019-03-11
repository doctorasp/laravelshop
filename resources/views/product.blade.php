@extends('templates.main')
@section('content')
   <p>
       {{$good->name}}
   </p>
    <p>
        {{$good->description}}
    </p>
    <p>
        {{$good->price}}
    </p>

   <form action="/order/{{$good->id}}">
       <input type="submit" value="Order" class="btn btn-success">
   </form>
@endsection