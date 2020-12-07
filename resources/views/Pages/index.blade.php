@extends('layouts.site')
@section('content') 

<img src="\images\thumbnails\top.png" style="width: 100%">

<br><br>

<<section id="testimonials" class="testimonials">
      <div class="container">

        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in">

          <div class="testimonial-item">
            <img src="\images\thumbnails\Logo.png" class="testimonial-img" alt="">
            <h3>Welcome To ComicsOnLinE</h3>
            <h4>Best place for reading Comics</h4>
          </div>

          <div class="testimonial-item">
            <img src="\images\thumbnails\c1.jpg" class="testimonial-img" alt="">
            <h3>You can both read and Socialize</h3>
            <h4>Don't forget to leave comments and feed back</h4>
          </div>

          <div class="testimonial-item">
            <img src="\images\thumbnails\c3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
          </div>

        </div>

      </div>
    </section>

<br>
<h1 style="color:white"><b>Latest Updates: </b></h1>
<br>

@if(count($comics)>0)
<div class="continer">
	<br><br>
	@foreach($comics as $comic)
	<a href="#">
		<div >
			<div style="padding-left: 20%">
			<img src="\images\thumbnails\{{$comic->comic}}.jpg" width="50%" height="50%">
			<h3><b>{{$comic->comic}}</b></h3>
			<small>Artist: {{$comic->artist_name}}</small>
			<p>Geners: <small>{{$comic->gener}}</small></p>
			<br><hr style="color: #70d640"><br>
			</div>
		</div>
	</a>
	@endforeach
</div>
@else
<p>no updates yet</p>
@endif
@endsection