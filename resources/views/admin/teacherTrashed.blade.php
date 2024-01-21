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
  <h2> Teachers Trashed List</h2>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Position</th>
        <th>Teacher Name</th>
        <th>Active</th>
         <th>Delete</th>
         <th>Restore</th>
       
      </tr>
    </thead>
    <tbody>
        @foreach ($teachers as $teacher)
      <tr>
        <td>{{$teacher->position}}</td>
        <td>{{$teacher->teacherName}}</td>
        <td>
            @if($teacher->active)
            yes
            @else 
            No
            @endif
        </td>
        <td><a href="forceDeleteTeacher/{{ $teacher->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
        <td><a href="restoreTeacher/{{ $teacher->id }}" >Restore</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
