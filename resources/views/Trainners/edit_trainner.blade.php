@extends('layouts.app')

@section('title_eyelash','edit_profile')

@section('title_header')
<b><i><h1>Editar Perfil</h1></i></b>
@endsection

@section('content')
<div class="content_register">
    <form class="form_register" action="/trainnerUp/{{$trainner->slug}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div>
            <b><label>Nombre:</label></b>
            <input type="text" name="updateTrainner" placeholder="ingrese name of trainner" value="{{$trainner->name}}">
        </div>
        <div>
            <b><label>Avatar:</label></b>
            <input type="file" name="updatefileTrainner">
        </div>
        <div>
            <b><label>descripcion:</label></b>
            <textarea name="update_text_description" class="textarea_register" cols="10" rows="10" maxlength="255"></textarea>
        </div>
        <button type="submit">post</button>
    </form>
</div>

@endsection