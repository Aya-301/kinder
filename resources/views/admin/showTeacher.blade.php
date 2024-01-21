<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Teacher</title>
</head>
<body>
    <h1>Position is: {{$teachers->position}}</h1><br>
    <h2>Teacher Name is: {{$teachers->teacherName}}</h2><br>
    <h3>Updated at: {{$teachers->updated_at}}</h3><br>
    <h3>Created at: {{$teachers->created_at}}</h3><br>
    <h4>{{$teachers->active}}</h4>
</body>
</html>