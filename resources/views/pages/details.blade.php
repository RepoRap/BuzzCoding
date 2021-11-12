@extends('layouts.app')
@section('content')
    @foreach($arr as $em)
        <li>{{$em}}</li>
    @endforeach
@endsection