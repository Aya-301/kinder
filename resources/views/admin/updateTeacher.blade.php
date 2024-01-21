<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Teacher</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.nav')
<div class="container">
  <h2>Update Teacher data</h2>
  <form action="{{route('updateTeacher' ,$teachers->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="position">Position:</label>
      <input type="text" class="form-control" id="position" placeholder="Enter Position" name="position" value="{{$teachers->position}}">
    @error('position')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
      <label for="teacherName">Teacher Name:</label>
      <input type="text" class="form-control" id="teacherName" placeholder="Enter Teacher Name" name="teacherName" value="{{$teachers->teacherName}}">
    @error('teacherName')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" placeholder="Enter image" name="image">
      <img src="{{ asset('assets/images/'.$teachers->image) }}" alt="{{$teachers->teacherName}}" style="width:100px;">
      @error('image')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <input type="hidden" value="{{$teachers->image}}" name="oldImage">
    </div>
    <div class="form-group">
      <label for="facebook">Facebook:</label>
      <input type="text" class="form-control" id="facebook" placeholder="Enter Facebook" name="facebook" value="{{$teachers->facebook}}">
    @error('facebook')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
      <label for="twiter">Twiter:</label>
      <input type="text" class="form-control" id="twiter" placeholder="Enter Twiter" name="twiter" value="{{$teachers->twiter}}">
    @error('twiter')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
      <label for="instagram">Instagram:</label>
      <input type="text" class="form-control" id="instagram" placeholder="Enter Instagram" name="instagram" value="{{$teachers->instagram}}">
    @error('instagram')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="active" @checked($teachers->active) > Active: </label>
    </div>

    <button type="submit" class="btn btn-default">Update</button>
  </form>
</div>

</body>
</html>