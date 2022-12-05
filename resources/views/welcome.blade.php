<!DOCTYPE html>
<html>
    <head>
      @include('pages.headder')
       

    
    </head>
    <body>
   

   <div  class="">
    <header class="row">
        @include('pages.navbarPage')
    </header>
            @yield('content_1')
    </div>
    <footer class="row">
        @include('pages.footer')
    </footer>
   </div>
    </body>
</html>
