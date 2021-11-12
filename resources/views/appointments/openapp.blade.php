@extends('layouts.app')
@section('content')
@foreach($openapp as $open)
<ul><li>{{$open}} </li>
        @endforeach

    </ul>
@endsection