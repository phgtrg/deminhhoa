@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
			<h1 class="display-one m-5">STUDENT MANAGE</h1>
			

			<table class="table mt-3  text-left">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col" class="pr-5">FULLNAME</th>
						<th scope="col">BIRTHDAY</th>
						<th scope="col">ADDRESSS</th>
					</tr>
				</thead>
				<tbody>
					@forelse($students as $student)
					<tr>
						<td>{!! $student->id !!}</td>
						<td class="pr-5 text-right">{!! $student->fullname !!}</td>
						<td>{!! $student->birthday !!}</td>
                        <td class="pr-5 text-right">{!! $student->address !!}</td>
						<td><a href="edit/{!! $student->id !!}"
							class="btn btn-outline-primary">Edit</a>
							
					</tr>
					@empty
					<tr>
						<td colspan="3">No students found</td>
					</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>




@endsection