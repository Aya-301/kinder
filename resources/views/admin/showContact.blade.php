<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Contact</title>
</head>
<body>
    <h2>Name is: {{$contacts->name}}</h2><br>
    <h3>Email is: {{$contacts->email}}</h3><br>
    <h3>Subject is: {{$contacts->subject}}</h3><br>
    <h3>Message is: {{$contacts->message}}</h3><br>
</body>
</html>