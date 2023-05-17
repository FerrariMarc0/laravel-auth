@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">{{$portfolio->name}}</h1>
        <p>{{$portfolio->description}}</p>
    </div>
@endsection
