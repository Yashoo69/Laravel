@extends('base')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
</head>
<body>
    
    <h1> Ajouter Livres </h1>

<div class="form">
    <form action="/addBook" id="form">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Titre du livre</label>
            <input type="text" class="form-control" name="title" id="inputEmail4" placeholder="Titre">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Auteur</label>
            <input type="text" class="form-control" name="author" id="inputPassword4" placeholder="Auteur">
          </div>
       
        <div class="form-group col-md-6">
          <label for="inputAddress">Année de publication</label>
          <input type="text" class="form-control" name="publication_year" id="inputAddress" placeholder="Publication">
        </div>
        <div class="form-group col-md-6">
            <label for="exampleFormControlSelect1">Genre</label>
            <select class="form-control" name="genre" id="exampleFormControlSelect1">
              <option>Roman</option>
              <option>Roman d'aventures</option>
              <option>Biographie</option>
              <option>Science-fiction</option>
              <option>Thriller</option>
              <option>Fantastique</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleFormControlTextarea1">Synopsis</label>
            <textarea class="form-control" name="synopsis" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        <div class="form-group">
          <div class="form-check">
        </div>
    </div>

    <button type="submit" class="btn btn-primary"> Ajouter </button>
        </div>
    </form>
</div> 
</body>
</html>
@endsection

@section('css' , 'addBook')
    
@section('title', 'Ajouter Livres')