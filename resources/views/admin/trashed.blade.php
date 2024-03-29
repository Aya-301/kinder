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
  <h2> Testimonial Trashed List</h2>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Client Name</th>
        <th>Profession</th>
        <th>Published</th>
         <th>Delete</th>
         <th>Restore</th>
       
      </tr>
    </thead>
    <tbody>
        @foreach ($testimonials as $testimonial)
      <tr>
        <td>{{$testimonial->clientName}}</td>
        <td>{{$testimonial->profession}}</td>
        <td>
            @if($testimonial->published)
            yes
            @else 
            No
            @endif
        </td>
        <td><a href="forceDelete/{{ $testimonial->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
        <td><a href="restoreTestimoninal/{{ $testimonial->id }}" >Restore</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
