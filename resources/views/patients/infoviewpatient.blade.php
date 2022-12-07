@extends("patlhome")
@section('content_2')
  <center><h1>View Patients</h1> </center>

  
    <table  class="table table-bordered mb-5" >
        <thead>
        <tr class="table-success">
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Gender</th>
            <th width="100px"  scope="col">Date of Birth</th>
            <th scope="col">Address</th>
            <th scope="col">City</th>
            <th scope="col">Province</th>
            <th scope="col">Postal Code</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Email</th>
            <th scope="col">Current Medications</th>
            <th scope="col">Allergies</th>
            <th scope="col">Reffered Doctor</th>



            <th scope="col">Created At</th>
            <th scope="col" >Updated At</th>

            <th scope='col'>Modify - Delete</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($patients as $data)
        <tr>
            <th scope="row">{{ $data ['id'] }}</th>
            <td>{{ $data ['fName'] }}</td>
            <td>{{ $data ['lName'] }}</td>
            <td>{{ $data ['gender'] }}</td>
            <td>{{ $data ['dob'] }}</td>
            <td>{{ $data ['address'] }}</td>
            <td>{{ $data ['city'] }}</td>
            <td>{{ $data ['province'] }}</td>
            <td>{{ $data ['postalCode'] }}</td>
            <td>{{ $data ['phoneNo'] }}</td>
            <td>{{ $data ['email'] }}</td>
            <td>{{ $data ['currentMeds'] }}</td>
            <td>{{ $data ['allergies'] }}</td>
            <td>{{ $data ['referingDoctor'] }}</td>
            <td>{{ $data ['created_at'] }}</td>
            <td>{{ $data ['updated_at'] }}</td>
            
            <td><a href="/patients/edit/{{$data ['id']}}">
                <button type="submit" class="btn btn-default">Edit</button>
            </a>
            <a href="/patients/delete/{{$data ['id']}}">
                <button type="submit" class="btn btn-default">Delete</button>
            </a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
     <div class="d-flex justify-content-center">
        {{$patients->links("pagination::bootstrap-4")}}
    </div> 
   
  
  
   
     
    
       

@endsection