@extends("welcome")
@section('content_1')
<nav aria-label="breadcrumb">
   <ol class="breadcrumb mt-5 mb-0">
     <li class="breadcrumb-item active"><a href="/">Home</a></li>
   </ol>
 </nav>
 
 <h1>Welcome to Middlesex Health Care Unit</h1>
 <img src="{{asset('images/login_page.jpg')}}" alt="image">
 <p>This is the home page</p>
@endsection
