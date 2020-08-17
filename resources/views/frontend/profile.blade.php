@extends('frondendtemplate')
@section('content')
<div class="offset-2 col-lg-8">
	<h2 class="text-center">profile</h2>
	<img src="frontend/userimg/a2.jpg" class="w-100 h-25" style="">
	<div class="table-responsive">
		<table class="table">
			<tr>
				<td>Name:</td>
				<td>{{Auth::user()->name}}</td>
			</tr>
			<tr>
				<td>Email:</td>
				<td>{{Auth::user()->email}}</td>
			</tr>
			<tr>
				<td>Join In:</td>
				<td>{{Auth::user()->created_at}}</td>
			</tr>
		</table>
	</div>
	<div class="form-group">
		<input type="text" class="form-control form-control-user" name="pp_name"  placeholder="Change Name">
	</div>
	<div class="form-group">
		<input type="email" class="form-control form-control-user" name="pp_email" placeholder="Change Email Address...">
	</div>
	<div class="form-group">
		<input type="password" class="form-control form-control-user" name="login_password"  placeholder="Change Password">
	</div>
	<div class="form-group">
		<input type="text" class="form-control form-control-user" name="pp_name"  placeholder="Change Address">
	</div>
	<input type="submit" value="+ Update" class="btn btn-outline-primary">
</div>
@endsection