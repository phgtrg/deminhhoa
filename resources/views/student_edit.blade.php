@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
			<h1 class="display-one mt-5">EDIT INFORMATION</h1>
			

			<form id="edit-frm" method="POST" action="" class="border p-3 mt-2">
				@csrf 
				<div class="form-group">
					<label for="formGroupExampleInput">ID </label>
						 <input type="text" class="form-control" id="id" name="id" value="{{ $student->id}}" disabled='true' placeholder="Example input">
					</div>
					<div class="form-group">
					<label for="formGroupExampleInput2">Fullname</label>
					<input type="text" class="form-control" id="fullname" name="fullname" value="{{ $student->fullname}}" placeholder="Another input">
					</div>
		  
					<div class="form-group">
						 <label for="formGroupExampleInput2">Birthday</label>
						 <input type="date"   class="form-control" id="birthday" name="birthday" value="{{ $student->birthday}}" >
						 </div>
		  
						 <div class="form-group">
							  <label for="formGroupExampleInput2">Address</label>
							  <input type="text" class="form-control" id="address" name="address" value="{{ $student->address}}"  placeholder="Another input">
							  </div>
					<button type="submit"  class="btn btn-primary btn-md">Save</button>
			   </form>
		  
@endsection