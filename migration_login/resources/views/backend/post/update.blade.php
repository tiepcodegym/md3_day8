<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    @csrf
    <input type="text" name="title" placeholder="Tiêu Đề" value="{{$post->title}}">
    <input type="text" name="content" placeholder="Nội Dung" value="{{$post->content}}">
    <input type="text" name="user_id" placeholder="ID user" value="{{$post->user_id}}">
    <hr>
    <h3>Danh sách thể loại</h3>
    @foreach($categories as $category)
        <input type="checkbox" {{$post->checkCategory($category->id) ? " checked":""}} name="category[]" value="{{$category->id}}">{{$category->name}}<br>
    @endforeach
    <br>
    <button type="submit">Sửa bài viết</button>
    <a href="{{route('posts.index')}}">Quay lai</a>

</form>

</body>
</html>

