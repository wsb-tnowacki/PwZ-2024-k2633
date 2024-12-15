@extends('layout.szablon')
@section('tytul','Szczegóły posta')
@section('podtytul', 'Szczegóły posta')
@section('tresc')
@isset($post)
<div class="for-group">
    <label for="tytul">Tytuł</label>
    <input type="text" class="form-control" name="tytul" id="tytul" value="{{$post->tytul}}" disabled>
</div>
<div class="for-group">
    <label for="autor">Autor</label>
    <input type="text" class="form-control" name="autor" id="autor" placeholder="Podaj autora postu" value="{{$post->user->name}}" disabled>
</div>
<div class="for-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Podaj email autora postu" value="{{$post->user->email}}" disabled> 
</div>
<div><p>Data utworzenia postu: <b>{{$post->created_at}}</b></p></div>
<div><p>Data edycji postu: <b>{{$post->updated_at}}</b></p></div>
<div class="for-group">
    <label for="tresc">Treść</label>
    <textarea class="form-control" name="tresc" id="tresc" cols="4" disabled>{{$post->tresc}}</textarea>
</div>
<div class="d-flex">
    <a href="{{route('post.edit',$post->id)}}">
        <button class="btn btn-success form-btn mt-1" type="button">Edytuj posta</button>
    </a>
    <form action="{{route('post.destroy',$post->id)}}" method="post" onsubmit="return confirmDelete()">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger form-btn mt-1 mx-1" type="submit">Usuń posta</button>
    </form>    
</div>

@endisset
<a href="{{route('post.index')}}"><button class="btn btn-primary form-btn mt-1" type="button">Do listy postów</button></a>

<script>
    function confirmDelete()
    {
        return confirm('Czy na pewno usunąć ten post?');
    }
</script>
@endsection
