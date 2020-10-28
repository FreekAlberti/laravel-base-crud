<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{route("books.store")}}">
        @csrf
        @method("POST")
        <div>
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" placeholder="Titolo">
        </div>

        <div>
            <label for="author">Autore</label>
            <input type="text" name="author" id="author" placeholder="Autore">
        </div>

        <div>
            <label for="edition">Edizione</label>
            <input type="text" name="edition" id="edition" placeholder="Edizione">
        </div>

        <div>
            <label for="pages">Pagine</label>
            <input type="text" name="pages" id="pages" placeholder="Pagine">
        </div>

        <div>
            <label for="genre">Genere</label>
            <input type="text" name="genre" id="genre" placeholder="Genere">
        </div>

        <div>
            <label for="image">Url Immagine</label>
            <input type="text" name="image" id="image" placeholder="Url Immagine">
        </div>

        <div>
            <label for="year">Anno</label>
            <input type="date" name="year" id="year" placeholder="Anno">
        </div>

        <div>
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" id="isbn" placeholder="ISBN">
        </div>

        <input type="submit" value="Salva">
    </form>
</body>
</html>