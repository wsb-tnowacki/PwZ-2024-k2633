@extends('szablon')
@section('tytul')
    O nas
@endsection
@section('podtytul')
    Strona o nas
@endsection
@section('tresc')
    <div>Treść strony o nas
        <ol>
            <?php foreach ($zadania ?? '' as $zadanie) : ?>
            <li><?= $zadanie ?></li>
            <?php endforeach; ?>
        </ol>
    </div>
   
@endsection