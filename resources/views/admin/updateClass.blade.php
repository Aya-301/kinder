<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Class</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.nav')
<div class="container">
  <h2>Update Class data</h2>
  <form action="{{route('updateClass',$classes->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="className">Class Name:</label>
      <input type="text" class="form-control" id="className" placeholder="Enter Class Name" name="className" value="{{$classes->className}}">
    @error('className')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
      <label for="fromAge">From Age:</label>
      <input type="text" class="form-control" id="fromAge" placeholder="" name="fromAge" value="{{$classes->fromAge}}">
    @error('fromAge')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
      <label for="toAge">To Age:</label>
      <input type="text" class="form-control" id="toAge" placeholder="" name="toAge" value="{{$classes->toAge}}">
    @error('toAge')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
      <label for="fromTime">From Time:</label>
      <input type="text" class="form-control" id="fromTime" placeholder="" name="fromTime" value="{{$classes->fromTime}}">
    @error('fromTime')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
      <label for="toTime">To Time:</label>
      <input type="text" class="form-control" id="toTime" placeholder="" name="toTime" value="{{$classes->toTime}}">
    @error('toTime')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
      <label for="capacity">Capacity:</label>
      <input type="text" class="form-control" id="capacity" placeholder="" name="capacity" value="{{$classes->capacity}}">
    @error('capacity')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
      <label for="price">Price:</label>
      <input type="text" class="form-control" id="price" placeholder="Enter Price" name="price" value="{{$classes->price}}">
    @error('price')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
      <label for="class_image">Image:</label>
      <input type="file" class="form-control" id="class_image" placeholder="Enter image" name="class_image">
      <img src="{{ asset('assets/images/'.$classes->class_image) }}" alt="" style="width:100px;"> 
      @error('class_image')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <input type="hidden" value="{{$classes->class_image}}" name="oldImage">
    </div>
    <div class="form-group">
      <label for="teacher">Teacher:</label>
      <select name="teacherId" id="">
        @foreach($teachers as $teacher)
        <option value="{{ $teacher->id }}" @selected(old('id') == $teacher->teacherId)>{{ $teacher->teacherName }}</option>
        @endforeach
      </select>
      @error('teacherId')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="active" value="1" @checked($classes->active) > Active: </label>
    </div>

    <button type="submit" class="btn btn-default">Update</button>
  </form>
</div>

</body>
</html>