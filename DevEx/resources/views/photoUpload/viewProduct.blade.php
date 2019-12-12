<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Places</title>
</head>
<body>
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

			<td>ACTION</td>
		</tr>

	 @foreach($info as $s)
		<tr>
			<td>{{$s->id}}</td>
            <td><img src="uploads/"{{$s->path}} alt=""></td> 
            <td>{{$s->fullName}}</td>
            <td>{{$s->userName}}</td>
            <td>{{$s->title}}</td>
            <td>{{$s->catagory}}</td>
            <td>{{$s->type}}</td>
            <td>{{$s->description}}</td>
            
			
			<td>
				<a href="{{route('updateProd', $s->id)}}">Edit</a> | 
				<a href="">Delete</a> | 
				<a href="">Details</a>
			</td>
		</tr>
	@endforeach

	</table>
</body>
</html>