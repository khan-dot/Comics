@extends('layouts.site')
@section('content')
<br><br>
<h1 style="color:white"><b>Comics List: </b></h1>
<br>

@if(count($comics)>0)
	@foreach($comics as $comic)
    <a href="/titles/{{{$comic->comic}}}">
	<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
		
        <div class="member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
                <img src="\images\thumbnails\{{$comic->comic}}.jpg" class="img-fluid" alt="">
            </div>
            <div class="member-info">
                <h3 style="color: white">{{$comic->comic}}</h3>
                <span style="color: white">
                	<small>Artist: {{$comic->artist_name}}</small>
                	<p>Geners: <small>{{$comic->gener}}</small></p>
                </span>
            </div>
        </div>
  </div>
</a>
	@endforeach
@endif


@endsection
