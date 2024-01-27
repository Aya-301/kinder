<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Class</title>
</head>
<body>
    <h1>Class Name is: {{$classes->className}}</h1><br>
    <h2>Teacher Name is: {{$classes->teacher->teacherName}}</h2><br>
    <h3>Time is: From: {{$classes->fromTime}}- To: {{$classes->toTime}}</h3><br>
    <h3>Capacity is: {{$classes->capacity}}</h3><br>
    <h3>Price is: {{$classes->price}}</h3><br>
    <h4>Updated at: {{$classes->updated_at}}</h4><br>
    <h4>Created at: {{$classes->created_at}}</h4><br>
    <h4>{{$classes->active}}</h4>
</body>
</html>