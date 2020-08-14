@extends('frondendtemplate')
@section('content')
<div class="offset-2 col-lg-5">
	<h2>profile</h2>
	<img src="frontend/userimg/a2.jpg" class="w-75 h-25" style="">
	<div class="table-responsive">
		<table class="table">
			<tr>
				<td>Name:</td>
				<td>yadanarphyo</td>
			</tr>
			<tr>
				<td>Email:</td>
				<td>yadanarphyo@gmail.com</td>
			</tr>
			<tr>
				<td>Address:</td>
				<td>kawlin</td>
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