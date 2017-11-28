@extends('layouts.master')
@section('content')
    <h2 class="text-center">{{$letter->title}}</h2>
    <p class="text-justify">{{$letter->body}}</p>
@endsection