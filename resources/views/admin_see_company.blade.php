@extends('layout.admin_dashboard')
@section('body')
	<h1 style="text-align: center;"> All Company List<h1><hr>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<table class="table" border="1px solid black">
			<thead class="thead-dark">
				<tr>
					<td scope="col">Company Name</td>
					
					<td scope="col" scope="col">Employer Email</td>
					<td scope="col">Location</td>
					
					
				</tr>
			</thead>
		@foreach($data as $value)
			<tr>
				<td>{{ $value->companyName }}</td>
				
				<td>{{ $value->userEmail }}</td>
				<td>{{ $value->jobLocation }}</td>
				
				
			</tr>
		@endforeach
		</table>
@endsection