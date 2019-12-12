<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 <title>Packge Shop</title>
</head>
<body>


<form method="POST">

{{csrf_field()}}
<label name="userName" for="Customer Name">Welcome: {{session()->get('name')}} </label>
<table border="1"  align="center" >
<tr>
			<td>ID</td>
            <td>Location Image</td>
			<td>Locationt Name</td>
            <td>Travel Cost</td>
            <td>Person</td>
			<td>Including Transport</td>
            <td>Including Lunch</td>
            <td>Days</td>

			<td>Add to Cart </td>
		</tr>

	 @foreach($info as $s)
		<tr>
			<td> <label for="location" >{{$s->id}}</label> </td>
            <td><img src="uploads/"{{$s->path}} alt=""></td> 
            <td> <label for="location" name="fullName" >{{$s->fullName}}</label> </td>
            <td> <label for="location" name="userName" >{{$s->userName}}</label> </td>
            <td>{{$s->title}}</td>
            <td>{{$s->catagory}}</td>
            <td>{{$s->type}}</td>
            <td>{{$s->description}}</td>
            
			
			<td>
            <div class="form-check">
                <input class="form-check-input position-static"  name="id[]" type="checkbox" id="blankCheckbox" value="{{$s->id}}" aria-label="...">
            </div>
			</td>
		</tr>
       
	@endforeach
    <tr>
            <td>
           
            <button type="submit" name="submit" class="btn btn-success" > Confirm your Booking </button>

            </td>
    </tr>
	</table>
</form>

</body>
</html>