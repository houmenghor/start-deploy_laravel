<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
</head>
<body>
    <form action="{{posts.update}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Title:</label>
        <input type="text" name="title" value="{{$post['title']}}" required> <br> <br>
        <label for="">Content:</label>
        <textarea name="content" required >{{$post['content']}}</textarea><br> <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
