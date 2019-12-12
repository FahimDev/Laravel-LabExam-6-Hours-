@extends('crud.crud')

@section('content')


<form method="POST">
{{csrf_field()}}
        <table  align="center" border="1" >
        <tr>
                
                <td>Name:</td>
                <td><input type="text" name="firstName"></td>
        </tr>
        <tr>
                <td>Contact:</td>
                <td><input type="text" name="lastName"></td>
        </tr>
        <tr>
                <td>Date of Birth:</td>
                <td><input type="date" name="DoB"></td>
        </tr>
        <tr>
                <td>Username:</td>
                <td><input type="text" name="userName"></td>
        </tr>
        <tr>
                <td>Password:</td>
                <td><input type="text" name="password"></td>
        </tr>
        </table>

	<input type="submit" name="submit" value="ADD">


    </form>    

@endsection
