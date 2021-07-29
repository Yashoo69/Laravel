@extends('base')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  
</head>
<body>
    
</body>
</html>

<div class="tab_books">
<H1>Livres</H1>
<br>
<h2>Listes des livres</h2>
<br>
<table>
<tr>
    <th>titre</th>
    <th>Auteur</th>
    <th>Genre</th>
    <th>Année de publication</th>
</tr>

@foreach ($books as $book)
<tr>
    <td> {{ $book->title}} </td>
    <td> {{ $book->author}} </td>
    <td> {{ $book->publication_year}} </td>
    <td> {{ $book->genre}} </td>
   
</tr>
    
@endforeach
</table>
</div>

@endsection

@section('css' , 'books')

@section('title', 'Livres')