@extends('layouts.site')
@section('content') 

<img src="\images\thumbnails\top.png" style="width: 100%">

<br><br>

<section id="testimonials" class="testimonials">
      <div class="container">

        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in">

          <div class="testimonial-item">
            <img src="\images\thumbnails\Logo.png" class="testimonial-img" alt="">
            <h2>Welcome To ComicsOnLinE</h2>
            <h3>Best place for <br>reading Comics</h3>
          </div>

          <div class="testimonial-item">
            <img src="\images\thumbnails\c2.jpg" class="testimonial-img" alt="">
            <h2>You can both read and Socialize</h2>
            <h3>Don't forget to leave comments <br>and feedback.</h3>
          </div>

          <div class="testimonial-item">
            <img src="\images\thumbnails\c3.jpg" class="testimonial-img" alt="">
            <h2>Enjoy it</h2>
            <h3>We are always open.</h3>
          </div>

        </div>

      </div>
    </section>

<br>
<h1 style="color:white"><b>Latest Updates: </b></h1>
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

@else
<p>no updates yet</p>
@endif


@endsection