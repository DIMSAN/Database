@extends('layouts.main')

@section('content')

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif



<h1>Showing client</h1>

    
		
			<a href="#" class="btn btn-primary" role="button">Edit</a>
			<a href="#" class="btn btn-primary" role="button">Show Payments</a>
			<a href="#" class="btn btn-primary" role="button">Show Contacts</a>

			<legend></legend>
		<div class="row">
		<div class="col-xs-6">
		<div class="panel panel-primary">
			  <div class="panel-heading">Panel heading without title</div>
			  <div class="panel-body">
			  <strong>Email:</strong><p></p><br>
			  <strong>Email:</strong><p></p><br>
			  <strong>Email:</strong><p>dasdasdadasad</p><br>
			  <strong>Email:</strong><p></p><br>
			  <strong>Email:</strong><p></p><br>
			  <strong>Email:</strong><p></p><br>
			  <strong>Email:</strong><p></p><br>
			  <strong>Email:</strong><p></p><br>
			  <strong>Email:</strong><p></p><br>
			  <strong>Email:</strong><p></p><br>
			  </div>
			</div>
		</div>

		<div class="col-xs-6">
		<div class="panel panel-primary">
			  <div class="panel-heading">Panel heading without title</div>
			  <div class="panel-body">
			     <strong>Email:</strong><p></p><br>
			  <strong>Email:</strong><p></p><br>
			  <strong>Email:</strong><p></p><br>
			  <strong>Email:</strong><p></p><br>
			  <strong>Email:</strong><p></p><br>
			  <strong>Email:</strong><p></p><br>
			  </div>
			</div>
		</div>
		</div>

		<div class="row">
		<div class="col-xs-6">
		<div class="panel panel-primary">
			  <div class="panel-heading">Panel heading without title</div>
			  <div class="panel-body">
				 <strong>Email:</strong><p></p><br>
			  <strong>Email:</strong><p></p><br>
			  <strong>Email:</strong><p></p><br>
			  <strong>Email:</strong><p></p><br>
			  <strong>Email:</strong><p></p><br>
			  <strong>Email:</strong><p></p><br>
			  </div>
			</div>
		</div>
		</div>

</div>
</body>
</html>

@endsection('content')