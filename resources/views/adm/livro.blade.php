@extends('adm.layout')

@section('content')
<a href="{{url('livro/create')}}" class="button">Adicionar Resenha</a>
<table>
    <thead>
        <tr>
            <th>Autor da resenha</th>
            <th>Nome do livro</th>
            <th>Autor do livro</th>
            <th>Resenha</th>
            <th>Capa do livro</th>
            <th>Editar</th>
            <th>Remover</th>
        </tr>
    </thead>
    <tbody>
        @foreach($livros as $livro)
        <tr>
            <td>{{$livro->user->name}}</td>
            <td>{{$livro->nomelivro}}</td>
            <td>{{$livro->autor}}</td>
            <td>{{$livro->resenha}}</td>
            <td>{{$livro->imagem}}</td>
            <td>
                <a href="{{route('livro.edit',$livro->id)}}" class="button">
                    Editar
                </a>
            </td>
            <td>
                <form method="POST" action="{{route('livro.destroy',$livro->id)}}" onsubmit="return confirm('Você confirma a exclusão da resenha?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button">
                        Remover
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection