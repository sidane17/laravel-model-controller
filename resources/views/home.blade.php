@extends('layouts.app')

@section('content')
<h1>Movies</h1>
@foreach($movies as $movie)
    <P>{{$movie}}</P>
@endforeach
<?php
$dsn = 'mysql:host=localhost;dbname=laravel_model_controller';
$username = 'rroot';
$password = '';

try {
    $dbh = new PDO($dsn, $username, $password);
    echo "Connessione riuscita!";
} catch (PDOException $e) {
    echo 'Connessione fallita: ' . $e->getMessage();
}
?>
@endsection
