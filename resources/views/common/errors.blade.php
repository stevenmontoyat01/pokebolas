@if($errors->all())
      <div class="alert">
         <ul>
         @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
         @endforeach
         </ul>
      </div>
   @endif