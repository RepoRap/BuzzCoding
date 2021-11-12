@extends('layouts.app')
@section('content')
<div class="well">
    This application has been developed by the first didgital cohort of BuzzCoding
    <ul>
    @foreach($names as $name)
        <li>{{$name}}</li>
    @endforeach
</div></ul>
@endsection
