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
  <h2> Contacts List</h2>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Show</th>
        <th>Delete</th>
        <th>Unread Messages</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
      <tr>
        <td>{{$contact->name}}</td>
        <td>{{$contact->email}}</td>
        <td>{{$contact->subject}}</td>
        <td>{{$contact->message}}</td>
        <td><a href="showContact/{{ $contact->id }}">Show</a></td>
        <td><a href="deleteContact/{{ $contact->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
        <td>
            @if($contact->read_at)
            read
            @else 
            unread
            @endif 
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$contacts->links()}}
</div>

</body>
</html>
