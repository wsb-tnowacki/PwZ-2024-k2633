@extends('layout.szablon')
@section('tytul','Dodawanie posta')
@section('podtytul', 'Dodaj post')
@section('tresc')
@if($errors->any())
<div class="alert alert-danger">Uzupełnij brakujące pola</div>
@endif
<form action="{{route('post.store')}}" method="post" class="w-100">
    @csrf
    <div class="for-group">
        <label for="tytul">Tytuł</label>
        <input type="text" class="form-control" name="tytul" id="tytul" placeholder="Podaj tytuł postu" value="{{old('tytul')}}">
        @error('tytul')
            <div class="alert alert-danger mt-2">{{$message}}</div>
        @enderror

    </div>
    <div class="for-group">
        <label for="tresc">Treść</label>
        <textarea class="form-control" name="tresc" id="tresc" cols="4" >{{old('tresc')}}</textarea>
        @error('tresc')
        <div class="alert alert-danger mt-2">{{$message}}</div>
    @enderror
    </div>
    <button class="btn btn-primary form-btn mt-3" type="submit">Dodaj post</button>
</form>
@endsection
