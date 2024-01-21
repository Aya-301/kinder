<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.nav')
<div class="container">
  <h2> Classes List</h2>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Teacher Id</th>
        <th>Class Name</th>
        <th>From Age</th>
        <th>To Age</th>
        <th>From Time</th>
        <th>To Time</th>
        <th>Capacity</th>
        <th>Price</th>
        <th>Active</th>
        <th>class_image</th>
        <th>Show</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($classes as $class)
      <tr>
        <td>{{$class->teacherId}}</td>
        <td>{{$class->className}}</td>
        <td>{{$class->fromAge}}</td>
        <td>{{$class->toAge}}</td>
        <td>{{$class->fromTime}}</td>
        <td>{{$class->toTime}}</td>
        <td>{{$class->capacity}}</td>
        <td>{{$class->price}}</td>
        <td>
            @if($class->active)
            yes
            @else 
            No
            @endif
        </td>
        <td><img src="{{asset('assets/images/'. $class->class_image )}}" alt="" style="width:100px;"> </td>
        <td><a href="showClass/{{ $class->id }}">Show</a></td>
        <td><a href="editClass/{{ $class->id }}">Edit</a></td>
        {-- <td><a href="deleteClass/{{ $class->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td> --}
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
