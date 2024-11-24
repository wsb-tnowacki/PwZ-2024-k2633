@extends('layout.szablon')
@section('tytul','Lista postów')
@section('podtytul','Lista postów')
@section('tresc')
<table class="table table-striped w-100">
    <thead class="w-100">
        <th scope="col">Lp</th>
        <th scope="col">Tytuł</th>
        <th scope="col">Autor</th>
        <th scope="col">Data utworzenia</th>
    </thead>
    <tbody>
        @isset($posty)
            @if($posty->count())
                @php($lp=1)
                @foreach ($posty as $post)
                    <tr>
                        <td>{{$lp++}}</td>
                        <td>{{$post->tytul}}</td>
                        <td>{{$post->autor}}</td>
                        <td>{{$post->created_at}}</td>
                    </tr>
                @endforeach
                @else
                    <tr scope="row">
                        <td colspan="4">Nie ma żadnych postów</td>
                    </tr>
            @endif
            @else
                <tr scope="row">
                    <td colspan="4">Nie ma żadnych postów</td>
                </tr>
        @endisset
    </tbody>
</table> 
@endsection
