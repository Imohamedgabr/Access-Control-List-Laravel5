@extends('layouts.master')


@section('content')



    <h1>Everyone may visit this page!</h1>

    	@if (Session::has('success')) 
{{--  success is the name of the session we gave in create.blade --}} 
	
	<div >
		<strong>Success:</strong> {{Session::get('success')}}
	</div>

{{--  content --}}

@endif

@endsection