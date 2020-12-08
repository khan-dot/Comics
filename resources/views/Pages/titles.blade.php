@extends('layouts.site')
@section('content')
<div>
        <div class="container">
            
            <img src="\images\thumbnails\{{$name}}.jpg" class="img-fluid" width="40%" height="40%">
            <div style="color: white">
                <h1 style="color: white">{{$name}}</h1>
                <span>
                	<p><big><b>Artist: </b></big>{{$comic->artist_name}}</p>
                	<p><big><b>Geners: </b></big>{{$comic->gener}}</p>
                </span>
                <div>
                    <p><big><b>OverView: </b></big>{{$comic->intro}}</p>
                </div>
            </div>
            <hr>
            <div>
                <h3 style="color: white">Chapters: </h3><br>
                @for($i=1;$i<=10;$i++)
                <div>
                    <a href="/chapter/{{{$name}}}/{{{$i}}}">
                    <div class="container" style="border:5px; border-color: white">
                        <h4><b>Chapter no:{{$i}} </b></h4>
                    </div>
                    </a>
                </div>
                @endfor
                <br>
                <a href="#">...load more</a>
                <br>
            </div>
            <hr>
        <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">
            <h1 style="color: white">Comments:</h1>

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <textarea class="form-control" name="Comment" placeholder="type your Comment.."></textarea>
                <div class="validate"></div>
              </div>
              <div class="text-center">
                <button class="btn btn-success" type="submit">Comment</button>
              </div>
            </form>
        </div>


        </div>
  </div> 
@endsection