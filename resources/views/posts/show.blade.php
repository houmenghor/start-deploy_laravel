<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Detail</title>
</head>
<body>
    <h1>{{$post['title']}}</h1>
    <p>{{$post['content']}}</p>
    <a href="{{route('posts.index')}}">Back to All Posts</a>
</body>
</html>
