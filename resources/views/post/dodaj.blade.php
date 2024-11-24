@extends('layout.szablon')
@section('tytul','Dodawanie posta')
@section('podtytul', 'Dodaj post')
@section('tresc')
<form action="{{route('post.store')}}" method="post" class="w-100">
    @csrf
    <div class="for-group">
        <label for="tytul">Tytuł</label>
        <input type="text" class="form-control" name="tytul" id="tytul" placeholder="Podaj tytuł postu" value="{{old('tytul')}}">


    </div>
    <div class="for-group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" name="autor" id="autor" placeholder="Podaj autora postu" value="{{old('autor')}}">
    </div>
    <div class="for-group">
        <label for="tytul">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Podaj email autora postu" value="{{old('email')}}">  
    </div>
    <div class="for-group">
        <label for="tresc">Treść</label>
        <textarea class="form-control" name="tresc" id="tresc" cols="4" >{{old('tresc')}}</textarea>
    </div>
    <button class="btn btn-primary form-btn mt-3" type="submit">Dodaj post</button>
</form>
@endsection
