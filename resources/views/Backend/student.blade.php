@extends('Backend.backendtemplate')
@section('content')
<div class="main">
	<div class="main-inner">
		<div class="container">
			<div class="row">
				<table class="table">
					<thead style="background-color: gray">
						<th>No</th>
						<th>Name</th>
						<th>Profile</th>
						<th>Email</th>
						<th>Address</th>
					</thead>

					<tbody>
						
						@php 
						$i=1;
						@endphp

						@foreach($userList as $user)
							{{-- @if($user->getRoleNames()=="User") --}}
							
							<tr>
								
								<td>{{$i++}}</td>
								<td>{{$user->name}}</td>
								<td>
									<img src="{{asset($user->profile)}}" class="img-fluid ">
								</td>
								<td>{{$user->email}}</td>
								<td>{{$user->address}}</td>
								
							</tr>
							{{-- @endif --}}
						@endforeach
						
					</tbody>
					
				</table>
			</div>
		</div> 
	</div>
</div>
@endsection