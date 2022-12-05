@extends("home")
@section('content_2')
  <center><h1>Add New Patient</h1> </center>
   
    
    <form action="/patients" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName" name="fName">
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="lName"/>
        </div>
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
            <label for="addressLine1">Address Line 1</label>
            <input type="text" class="form-control" id="addressLine1" name="address"/>
        </div>

        <div class="form-group">
            <label for="inCity">City</label>
            <input type="text" class="form-control" id="inCity" name="city"/>
        </div>

        <div class="form-group">
            <label for="inProvince">Province</label>
            <input type="text" class="form-control" id="inProvince" name="province"/>
        </div>
        <div class="form-group">
            <label for="postCode">Postal Code</label>
            <input type="text" class="form-control" id="postCode" name="postalCode"/>
        </div>

    </div>
 

        <div class="form-group">
            <label for="phn">Phone</label>
            <input type="text" class="form-control" id="phn" name="phoneNo"/>
        </div>

        <div class="form-group">
            <label for="eMail">Email</label>
            <input type="email" class="form-control" id="eMail" name="email" placeholder="name@example.com"/>
        </div>

        <div class="form-group">
            <label for="lstMeds">List of Current Medications</label>
            <input type="text" class="form-control" id="lstMeds" name="currentMeds"/>
        </div>

        <div class="form-group">
            <label for="lstAlergies">List of Allergies</label>
            <input type="text" class="form-control" id="lstAlergies" name="allergies"/>
        </div>
   
        <div class="form-group">
            <label for="refrDoc">Refering Doctor</label>
            <input type="text" class="form-control" id="refrDoc" name="referingDoctor"/>
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
        <button type="submit" class="btn btn-primary  btn-lg btn-block">Submit</button>
    </center>
        </div>
        
    </form>
@endsection