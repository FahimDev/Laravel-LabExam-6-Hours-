@extends('crud.crud')

@section('content')

<h2>Employee Bio</h2>
<form method="POST">
{{csrf_field()}}
        <table  align="center" border="1">
        <tr>
                
                <td>Employee Name:</td>
                <td><input type="text" name="firstName" value="{{$bio->firstName}}" ></td>
        </tr>
        <tr>
                <td>Contact:</td>
                <td><input type="text" name="lastName" value="{{$bio->lastName}}" ></td>
        </tr>
        <tr>
                <td>Date of Birth:</td>
                <td><input type="date" name="DoB" value="{{$bio->DoB}}" ></td>
        </tr>
        <tr>
                <td>Username:</td>
                <td><input type="text" name="userName" value="{{$bio->userName}}" ></td>
        </tr>
        <tr>
                <td>Password:</td>
                <td><input type="text" name="password" value="{{$bio->password}}" ></td>
        </tr>

                     
        </table>
        
        
    </form>    

@endsection
