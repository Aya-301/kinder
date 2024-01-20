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
<div class="container">
  <h2> Appointment List</h2>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Gurdian Name</th>
        <th>Gurdian Email</th>
        <th>Child Name</th>
        <th>Child Age</th>
        <th>Message</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($appointment as $appointment)
      <tr>
        <td>{{$appointment->gurdian_name}}</td>
        <td>{{$appointment->gurdian_email}}</td>
        <td>{{$appointment->child_name}}</td>
        <td>{{$appointment->child_age}}</td>
        <td>{{$appointment->message}}</td>
        <td><a href="editApp/{{ $appointment->id }}">Edit</a></td>
        <td><a href="deleteApp/{{ $appointment->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
