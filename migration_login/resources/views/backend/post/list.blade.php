<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
    @toastr_css
</head>
<body>
<a href="{{route("posts.create")}}">Them moi</a>
<a href="{{route("logout")}}">Dang xuat</a>
<table border="1px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>Category</th>
        <th>User</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
    <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->content}}</td>
        <td>
            @if(count($post->categories)>0)
            @foreach($post->categories as $category)
                <p>{{$category->name}}</p>
            @endforeach
            @else
            <p>Chua phan loai</p>
            @endif
        </td>
        <td>{{ $post->user->name}}</td>
        <td><a href="{{route('posts.edit',$post->id)}}">Update</a></td>
        <td><a href="{{route('posts.destroy',$post->id)}}">Delete</a></td>
    </tr>
    @endforeach
    </tbody>
</table>

</body>
@jquery
@toastr_js
@toastr_render
</html>
