@extends('crud.crud')

@section('content')
<table border="1"  align="center" >
		<tr>
			<td>ID</td>
			<td>Employee Name</td>
			<td>Contact</td>

			<td>ACTION</td>
		</tr>

	 @foreach($info as $s)
		<tr>
			<td>{{$s->id}}</td>
            <td>{{$s->firstName}}</td>
            <td>{{$s->lastName}}</td>
            
			
			<td>
				<a href="{{route('update', $s->id)}}">Edit</a> | 
				<a href="">Delete</a> | 
				<a href="{{route('bio', $s->id)}}">Details</a>
			</td>
		</tr>
	@endforeach

	</table>
@endsection