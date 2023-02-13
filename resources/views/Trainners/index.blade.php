@extends('layouts.app')

@section('titleyelash','Home pokemon')

@section('title_header')
   <b><i><h1>POKEMON</h1></i></b>
@endsection

@section('content')
   <div id="first_content_trainners"> 
      @foreach ($trainers as $trainer)
            <div class="cards_trainners">
               <img src="images/{{ $trainer->avatar }}" alt="{{ $trainer->avatar }}">
               <h2>{{ $trainer->name }}</h2>
               <div class="container_parrf">
                  <p>{{ $trainer->description }}</p>
               </div>
               <div class="container_buttom">
                  <a href="/trainner/{{ $trainer->slug }}"><button>vermas...</button></a>
               </div>
            </div>
      @endforeach
   </div>

@endsection