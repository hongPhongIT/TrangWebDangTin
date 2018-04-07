@extends('includes.header-footer')
@section('content')
<div class="col-lg-8">
   <!-- Title -->
   @foreach($posts as $post)
   <h1 class="mt-4">{{$post->title}}</h1>
   <!-- Author -->
   <p class="lead">
      by
      <a href="#">Start Bootstrap</a>
   </p>
   <hr>
   <!-- Date/Time -->
   <p>Posted on January 1, 2018 at 12:00 PM</p>
   <hr>
   <!-- Preview Image -->
   @foreach($post->images as $image)
   <img class="img-fluid rounded" src="{{$image ? asset( $image->url) : 'http://placehold.it/900x300'}}" alt="">
   @endforeach
   <hr>
   <!-- Post Content -->
    <blockquote class="blockquote">
      <footer class="blockquote-footer">
         <cite title="Source Title">{{$post->description}}</cite>
      </footer>
   </blockquote>
   <p class="lead">{{$post->text}}</p>
   <hr>
   
    @endforeach
</div>
@endsection