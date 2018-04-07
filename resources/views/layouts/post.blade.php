@extends('includes.header-footer')
@section('content')
<div class="col-lg-8">
   <!-- Title -->
   <h1 class="mt-4">Create Post</h1>
   <!-- Author -->
   <p class="lead">
      by
      <a href="#">Start Bootstrap</a>
   </p>
   <hr>
   <!-- Date/Time -->
   <p>Posted on January 1, 2018 at 12:00 PM</p>
   <!-- Comments Form -->
   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
   @endif
   <div class="card my-4">
      <h5 class="card-header">Post:</h5>
      <div class="card-body">
         <form method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
               <label for="title" class="label-control">Title</label>
               <input type="text" name="title" class="form-control" placeholder="Enter title" value="{{ old('title') }}">
               <span class="text-danger">{{ $errors->first('title') }}</span>
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
               <label for="description" class="control-label">Content</label>
               <textarea name="description" class="form-control" rows="3" placeholder="Enter description" value="{{ old('description') }}"></textarea>
               <span class="text-danger">{{ $errors->first('description') }}</span>
            </div>
            <div class="form-group {{ $errors->has('text') ? 'has-error' : '' }}">
               <label for="text" class="control-label">Content</label>
               <textarea name="text" class="form-control" rows="7" placeholder="Enter content" value="{{ old('text') }}"></textarea>
               <span class="text-danger">{{ $errors->first('text') }}</span>
            </div>
            <div class="form-group {{ $errors->has('url') ? 'has-error' : '' }}">
               <label for="url" class="control-label">File image</label>
               <input type="file" name="url" class="form-control" value="{{ old('url') }}">
               <span class="text-danger">{{ $errors->first('url') }}</span>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
         </form>
      </div>
   </div>
</div>
@endsection