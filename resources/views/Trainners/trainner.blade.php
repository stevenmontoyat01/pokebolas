@extends('layouts.app')

@section('title_eyelash','Trainner')

@section('title_header')
    <b><i><h1>POKEMON</h1></i></b>
@endsection

@section('content')

    <div id="content_trainner_profile">
        @include('Common.good')
        <img src="/images/{{$trainner->avatar}}" alt="{{$trainner->name}}">
        <u><i><h2>{{$trainner->slug}}</h2></i></u>
        <div id="content_description">
            <p>{{$trainner->description}}</p>
        </div>
        <div id="content_button_profile">
            <a href="/trainner/{{$trainner->slug}}/edit"><button type="submit">editar</button></a>
            {!! Form::open(['route'=>['trainneresource.destroy',$trainner->slug],'method'=>'DELETE']) !!}
                {!! Form::submit('Eliminar', ['class'=>'button_del']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection