@extends("patlhome")
@section('content_2')
  <center><h1>View Messages</h1> </center>

  
    
     <div class="d-flex justify-content-center">
        {{$patients->links("pagination::bootstrap-4")}}
    </div> 
   
  
  
   
     
    
       

@endsection