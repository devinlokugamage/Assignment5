@extends("home")
@section('content_2')
  <center><h1>Edit Patient</h1> </center>
   
    
    <form action="/patients/view" method="post">
        {{ csrf_field() }}
        <input type="text"  class="invisible" id="lastName" name="id"  value='{{ $patient->id }}'/>
        <div class="form-group">
           
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName" name="fName" value='{{ $patient->fName }}'>
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="lName"  value='{{ $patient->lName }}'/>

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
        <script type="text/javascript">
            var gender = "{{ ($patient->gender) }}";
            if(gender=="Male"){
            const maleBtn = document.getElementById('rdGender1');
            maleBtn.checked=true;
            }else if(gender=="Female"){
            const femaleBtn = document.getElementById('rdGender2');
            femaleBtn.checked=true;
            }else{
            const notDisclosingBtn = document.getElementById('rdGender3');
            notDisclosingBtn.checked=true;
            }
        </script>
        <div class="form-group">
            <label for="dateOfBirth">Date of Birth</label>               
                    <input id="dateOfBirth" class="date form-control" type="text" name="dob" value='{{ $patient->dob }}'/>         
        </div>
        <div class="form-group">
            <label for="addressLine1">Address Line 1</label>
            <input type="text" class="form-control" id="addressLine1" name="address" value='{{ $patient->address }}'/>
        </div>

        <div class="form-group">
            <label for="inCity">City</label>
            <input type="text" class="form-control" id="inCity" name="city" value='{{ $patient->city }}'/>
        </div>

        <div class="form-group">
            <label for="inProvince">Province</label>
            <input type="text" class="form-control" id="inProvince" name="province" value='{{ $patient->province }}'/>
        </div>
        <div class="form-group">
            <label for="postCode">Postal Code</label>
            <input type="text" class="form-control" id="postCode" name="postalCode" value='{{ $patient->postalCode }}'/>
        </div>

    </div>
   
        <div class="form-group">
            <label for="phn">Phone</label>
            <input type="text" class="form-control" id="phn" name="phoneNo" value='{{ $patient->phoneNo }}' />
        </div>

        <div class="form-group">
            <label for="eMail">Email</label>
            <input type="email" class="form-control" id="eMail" name="email" placeholder="name@example.com"  value='{{ $patient->email }}' />
        </div>

        <div class="form-group">
            <label for="lstMeds">List of Current Medications</label>
            <input type="text" class="form-control" id="lstMeds" name="currentMeds" value='{{ $patient->currentMeds }}' />
        </div>

        <div class="form-group">
            <label for="lstAlergies">List of Allergies</label>
            <input type="text" class="form-control" id="lstAlergies" name="allergies" value='{{ $patient->allergies }}' />
        </div>
   
        <div class="form-group">
            <label for="refrDoc">Refering Doctor</label>
            <input type="text" class="form-control" id="refrDoc" name="referingDoctor" value='{{ $patient->referingDoctor }}' />
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
    <div class="form-group  pt-2 ">
        <center>
    <button type="submit" class="btn btn-primary  btn-lg btn-block">Submit</button>

</center>
    </div>
    </form>
   
@endsection