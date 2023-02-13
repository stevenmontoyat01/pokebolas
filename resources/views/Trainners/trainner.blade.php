@extends('layouts.app')

@section('title_eyelash','Trainner')

@section('title_header')
    <b><i><h1>POKEMON</h1></i></b>
@endsection

@section('content')
    <div id="content_trainner_profile">
        <img src="/images/{{$trainner->avatar}}" alt="{{$trainner->name}}">
        <u><i><h2>{{$trainner->name}}</h2></i></u>
        <div id="content_description">
            <p>{{$trainner->description}}</p>
        </div>
        <a href="/trainner/{{$trainner->slug}}/edit"><button>editar</button></a>
    </div>
@endsection