<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MH Staff Login System') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
   

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-dark bg-primary navbar-expand-lg ">
          
            @guest
            @if (Route::has('login'))
               {{-- <li class="nav-item">
                   <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
               </li> --}}
               <div>
                <a class="nav-link" href="/"><img class="img-thumbnail bg-white"  src="{{asset('images/logo.svg')}}"/> </a>
               </div>
           @endif
          
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                     

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif 
                        @else
                        <img class="img-thumbnail bg-white"  src="{{asset('images/logo.svg')}}"> 
                    </a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                              
                                @if (Route::is('home'))
                                <a class="nav-link active" aria-current="page" href="/home">Home</a>

                                @else
                                <a class="nav-link" aria-current="page" href="/home">Home</a>
                                @endif
                              </li>
                              <li class="nav-item">
                                @if (Route::has('create')) 
                                <a class="nav-link active" aria-current="page" href="/patients/create">Add New Patient</a>
                                @else
                                <a class="nav-link" aria-current="page" href="/patients/create">Add New Patient</a>
                        
                                @endif
                              </li>
                              <li class="nav-item">
                                @if (Route::has('create')) 
                                <a class="nav-link active" aria-current="page" href="/patients/view">View Patients</a>
                                @else
                                <a class="nav-link" aria-current="page" href="/patients/view">View Patients</a>
                        
                                @endif
                              </li>
                          
                            
                            </ul>
                           
                          </div>
                        <div class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle nav-link-dark" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="row">
            @include('pages.footer')
            <script type="text/javascript">
                
                $('.date').datepicker({  
            
                   format: 'mm-dd-yyyy'
            
                 });  
            
            </script> 
          
        </footer>
    </div>
</body>
</html>
