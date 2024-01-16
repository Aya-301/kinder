<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Testimonial</title>
</head>
<body>
    <h1>Title is: {{$testimonial->clientName}}</h1><br>
    <h2>Description is: {{$testimonial->profession}}</h2><br>
    <h3>Updated at: {{$testimonial->updated_at}}</h3><br>
    <h3>Created at: {{$testimonial->created_at}}</h3><br>
    <h4>{{$testimonial->published}}</h4>
</body>
</html>