<html>
   <head>
      <title>@yield('title_eyelash')</title>
      <link rel="stylesheet" href={{ asset('Style/style.css') }} type="text/css">
   </head>

   <body>
      <header>
         @yield('title_header')
      </header>

      <nav>
         <div id="content_nav1">
            <p>pokemones|</p>
            <a href="/trainners">Home</a>
         </div>
         <div id="content_nav2">
            <a href="/register">Registro</a>
         </div>
      </nav>

      @yield('content')

   </body>


</html>