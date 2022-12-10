@extends("home")
@section('content_2')
  <center><h1>Send Patients Messages</h1> </center>
   
    
    <form action="/patients/sendmsg" method="post">
        {{ csrf_field() }}
        {{-- 
        <div class="form-group">
            <label class="" for="rdGender">Gender</label>
            <div  class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="rdGender1" value="Male">
                <label class="form-check-label" for="inlineRadio1">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="rdGender2" value="Female">
                <label class="form-check-label" for="inlineRadio2">Female</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="rdGender3" value="Not Disclosing">
                <label class="form-check-label" for="inlineRadio2">Not Disclosing</label>
              </div>
            </div>
        </div>
        <div class="form-group">
            <label for="dateOfBirth">Date of Birth</label>               
                    <input id="dateOfBirth" class="date form-control" type="text" name="dob">         
        </div>
       
        <div class="form-group">
            <label for="eMail">Email</label>
            <input type="email" class="form-control" id="eMail" name="email" placeholder="name@example.com"/>
        </div>

        <div class="form-group">
            <label for="Diag">Diagnosis</label>
            <input type="text" class="form-control" id="Diag" name="Diagnosis"/>
        </div>
 --}}
       <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName" name="fName">
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="lName"/>
        </div>

        <div class="form-group">
            <label for="eMail">Email</label>
            <input type="email" class="form-control" id="eMail" name="email" placeholder="name@example.com"/>
        </div>

        <div class="form-group">
            <label for="Msgs"> Send Message to Patient</label>
            <textarea rows="15" cols="50" class="form-control" id="msgdt" name="msgdt"></textarea>
        </div>

        <div class="form-group"> 

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>
        <div class="form-group">
        </div>
        <div class="form-group  pt-2 ">
            <center>
        <button type="submit" class="btn btn-primary  btn-lg btn-block">Send</button>
    </center>
        </div>
        
    </form>
@endsection