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
  <h2> Teachers List</h2>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Position</th>
        <th>Teacher Name</th>
        <th>Facebook</th>
        <th>Twiter</th>
        <th>Instagram</th>
        <th>Image</th>
        <th>Active</th>
        <th>Show</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($teachers as $teacher)
      <tr>
        <td>{{$teacher->position}}</td>
        <td>{{$teacher->teacherName}}</td>
        <td>{{$teacher->facebook}}</td>
        <td>{{$teacher->twiter}}</td>
        <td>{{$teacher->instagram}}</td>
        <td><img src="{{asset('assets/images/'. $teacher->image )}}" alt="" style="width:100px;"> </td>
        <td>
            @if($teacher->active)
            yes
            @else 
            No
            @endif
        </td>
        <td><a href="showTeacher/{{ $teacher->id }}">Show</a></td>
        <td><a href="editTeacher/{{ $teacher->id }}">Edit</a></td>
        <td><a href="deleteTeacher/{{ $teacher->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
