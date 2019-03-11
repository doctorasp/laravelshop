@extends('templates.main')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <form  method="post" action="/order_final">
        <div>
            <input type="text" name="customer_name" class="form-control">
        </div>
        <div>
            <input type="text" name="phone" class="form-control">
        </div>
        <div>
            <input type="text" name="city" class="form-control">
        </div>
        <div>
            <textarea name="comment" class="form-control">Comment</textarea>
        </div>
        <div>
            <input type="number" name="amount" class="form-control">
        </div>
        <input type="submit" value="Order" class="btn btn-success">
    </form>
@endsection