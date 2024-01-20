<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Testimonial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.nav')
<div class="container">
  <h2>update Testimonial data</h2>
  <form action="{{route('updateTestimoninals', $testimonials->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="clientName">Client Name:</label>
      <input type="text" class="form-control" id="clientName" placeholder="Enter Client Name" name="clientName" value="{{$testimonials->clientName}}">
      @error('clientName')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="profession">Profession:</label>
      <input type="text" class="form-control" id="profession" placeholder="Enter Profession" name="profession" value="{{$testimonials->profession}}">
      @error('profession')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="content">Content:</label>
      <textarea class="form-control" name="content" id="" cols="60" rows="3">{{$testimonials->content}}</textarea>
      @error('content')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" name="image">
      <img src="{{ asset('assets/images/'.$testimonials->image) }}" alt="{{$testimonials->clientName}}" style="width:100px;">
      @error('image')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <input type="hidden" value="{{$testimonials->image}}" name="oldImage">
    <div class="checkbox">
      <label><input type="checkbox" name="published" @checked($testimonials->published)> Published me</label>
    </div>
    <button type="submit" class="btn btn-default">Update</button>
  </form>
</div>

</body>
</html>