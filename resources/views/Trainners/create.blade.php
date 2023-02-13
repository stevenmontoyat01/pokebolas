@extends('layouts.app')

@section('title_eyelash','Register trainner')

@section('title_header')
   <b><i><h1>REGISTRO</h1></i></b>
@endsection

@section('content')
<div class="content_register">
   
   <form class="form_register" action="/trainners/create" method="POST" enctype="multipart/form-data">
      @csrf
      <div>
         <b><label>Nombre:</label></b>
         <input type="text" name="nameTrainner" placeholder="ingrese name of trainner">
      </div>
      <div>
         <b><label>Avatar:</label></b>
         <input type="file" name="fileTrainner">
      </div>
      <div>
         <b><label>descripcion:</label></b>
         <textarea name="text_description" class="textarea_register" cols="10" rows="10" maxlength="255"></textarea>
      </div>
      <button type="submit">post</button>
   </form>

   @if($errors->all())
      <div id="alert">
         <ul>
      @foreach ($errors->all() as $error)
         <li>{{$error}}</li>
      @endforeach
         </ul>
      </div>
   @endif
</div>


@endsection

