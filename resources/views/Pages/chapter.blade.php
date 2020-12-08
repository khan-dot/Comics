@extends('layouts.site')
@section('content')
<div class="container">
	<br>
	<div style="color: white">
		<h1>{{$name}} Chapter: {{$no}}</h1>
	</div>
	<hr>
	<a class="cta-btn" href="#">Single Page</a>
	<a class="cta-btn" href="#">Long Strip</a>
	<hr>
	<div>
		@for($i=1;$i<=20;$i++)
		<img src="\images\comics\{{$name}}\chapter{{$no}}\{{$i}}.jpg">
		@endfor
	</div>
	
</div>
@endsection