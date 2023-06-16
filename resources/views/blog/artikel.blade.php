<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>artikel</title>
</head>
<body>
        @foreach ($posts as $post)
            <h1 class="mb-5">{{ $post->title }}</h1>
                {{ $post->body }}
        @endforeach
<a href="/blog">kembali ke post</a>   
</body>
</html>
