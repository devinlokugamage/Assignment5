@extends('layouts.patapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
         
            <div class="">
      
                <div class="">{{ __('') }}</div>
               
                <div >
                    @yield('content_2')
                    @if (Route::is('patlogin'))
                    <h2>Welcome to Patients Login Home Page</h2>
                    
                    @endif
                    
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection

