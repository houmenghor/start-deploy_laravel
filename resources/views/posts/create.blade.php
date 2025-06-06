<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>
<body>
    <h1>Create a New Post</h1>
    <form action="{{ route('posts.store')}}" method="POST">
        @csrf
        <label for="">Title</label>
        <input type="text" name="title" required> <br> <br>
        <label for="">Content:</label>
        <textarea name="content" required id=""></textarea> <br> <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
