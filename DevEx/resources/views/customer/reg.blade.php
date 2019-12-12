<!DOCTYPE html>
<html lang="en">
<<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	

    <title>Registration</title>

    <style>
    tr:nth-child(even) {background-color: #f2f2f2;}
    th, td {
    
    padding: 8px;
    }

    input{
        display: block;
        max-width: 300px;
        margin: auto;
    }
    </style>

</head>
<body>


@if (count($errors) > 0)
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{$error}}</p>
                        @endforeach
                        
                    @endif

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

	<input type="submit" name="submit" value="Register">


    </form>  
</body>
</html>