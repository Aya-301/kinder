<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Car</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.nav')
<div class="container">
  <h2>Add new Testimonial data</h2>
  <form action="{{route('insert')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="clientName">Client Name:</label>
      <input type="text" class="form-control" id="clientName" placeholder="Enter Client Name" name="clientName" value="{{old('clientName')}}">
    @error('clientName')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
      <label for="profession">Profession:</label>
      <input type="text" class="form-control" id="profession" placeholder="Enter Profession" name="profession" value="{{old('clientName')}}">
    @error('profession')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
      <label for="content">Content:</label>
      <textarea class="form-control" name="content" id="content" cols="60" rows="3">{{old('content')}}</textarea>
      @error('content')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" placeholder="Enter image" name="image">
      @error('image')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="published" value="1" {{ old('published') ? 'checked' : '' }} > Published me</label>
    </div>
    <button type="submit" class="btn btn-default">Insert</button>
  </form>
</div>

</body>
</html>