@extends ('base')

@section('content')

<section class="main-section">
	<div class="content">
		<h1>Form Login</h1>
		<hr>
		@if (Session::has('alert'))
			<div class="alert alert-danger">
				<div>{{Session::get('alert')}}</div>
			</div>
		@endif
		@if (\Session::has('alert-success'))
			<div class="alert alert-success">
				<div>{{Session::get('alert-success')}}</div>
			</div>
		@endif
		<form action="{{url ('/loginPost')}}" method="POST">
			{{csrf_filed()}}
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" class="form-control" id="email">
			</div>
		</form>
	</div>
</section>