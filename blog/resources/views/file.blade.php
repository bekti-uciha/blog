@extends('base')
@section('content')
<!-- Main Section -->
<section class="main-section">
	<!-- Add Your Content Inside -->
	<div class="content">
		<!-- Remove This Before you Start -->
		<h1>coba uploud file</h1>
		@if(Session::has('alert-success'))
		<div class=" alert alert-success">
			<strong>{{\Illuminate\support\Facades
			\Session::get
			('alert-success')}}
			</strong>
		</div>
		@endif
		<hr>
		<table class="table table-bordered">
			
		</table>
	</div>>
</section>