@extends('layout.szablon')
@section('tytul','Lista postów')
@section('podtytul','Lista postów')
@section('tresc')
<div>
    <a href="{{route('post.create')}}"><button class="btn btn-primary form-btn m-2" type="button">Dodaj post</button></a>
</div>
<table class="table table-striped w-100">
    <thead class="w-100">
        <th scope="col">Lp</th>
        <th scope="col">Tytuł</th>
        <th scope="col">Autor</th>
        <th scope="col">Data utworzenia</th>
        <th scope="col">Akcja</th>
    </thead>
    <tbody>
        @isset($posty)
            @if($posty->count())
                @php($lp=1)
                @foreach ($posty as $post)
                    <tr>
                        <td>{{$lp++}}</td>
                        <td><a href="{{route('post.show',$post->id)}}">{{$post->tytul}}</a></td>
                        <td>{{$post->autor}}</td>
                        <td>{{date('j F Y',strtotime($post->created_at))}}</td>
                        <td class="d-flex">
                            <a href="{{route('post.edit',$post->id)}}">
                                <button class="btn btn-success form-btn m-1">E</button>
                            </a>
                            <form action="{{route('post.destroy',$post->id)}}" method="post" onsubmit="return confirmDelete()">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger form-btn m-1" type="submit">X</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @else
                    <tr scope="row">
                        <td colspan="5">Nie ma żadnych postów</td>
                    </tr>
            @endif
            @else
                <tr scope="row">
                    <td colspan="5">Nie ma żadnych postów</td>
                </tr>
        @endisset
    </tbody>
</table> 
<script>
    function confirmDelete()
    {
        return confirm('Czy na pewno usunąć ten post?');
    }
</script>
@endsection
