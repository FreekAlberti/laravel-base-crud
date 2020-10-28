<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        @foreach ($books as $book)
            <div>{{$book->title}}</div>
            <div>{{$book->author}}</div>
            <div>{{$book->edition}}</div>
            <div>{{$book->pages}}</div>
            <div>{{$book->genre}}</div>
            <img style="height: 100px; width: 100px;" src="{{$book->image}}" alt="">
            <div>{{$book->year}}</div>
            <div>{{$book->isbn}}</div>
        @endforeach
</body>
</html>