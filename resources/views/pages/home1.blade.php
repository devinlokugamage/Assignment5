@extends("welcome")
@section('content_1')
<nav aria-label="breadcrumb">
   <ol class="breadcrumb mt-5 mb-5">
     <li class="breadcrumb-item active"><a href="/">Home</a></li>
   </ol>
 </nav>
 
 <h1>Welcome to Middlesex Health Car Unit</h1>
 <p>This is the home page</p>
 <img src="{{asset('images/login_page.jpg')}}" alt="image">
@endsection
