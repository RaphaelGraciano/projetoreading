@extends('adm.layout')

@section('content')
@if(count($errors) > 0)
<ul class="validator">
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif
<form method="POST" action="{{url('livro',$livro->id)}}">
    @csrf
    @method('PUT')
    <div class="row">
        <label class="col-2" for="user">Autor da resenha</label>
        <select class="col-5" name="user_id" id="user">
            <option></option>
            @foreach($users as $user)
            <option value="{{$user->id}}" @if($user->id==$livro->user_id) selected @endif>{{$user->name}}</option>
            @endforeach
        </select>

    </div>
    <div class="row">
        <label class="col-2" for="nomelivro">Nome do livro</label>
        <input type="text" name="nomelivro" id="nomelivro" class="col-5" value="{{ $livro->nomelivro }}" />

    </div>
    <div class="row">
        <label class="col-2" for="autor">Autor do livro</label>
        <input type="text" name="autor" id="autor" class="col-5" value="{{ $livro->autor }}" />

    </div>
    <div class="row">
        <label class="col-2" for="resenha">Resenha:</label>
        <input type="text" name="resenha" id="resenha" class="col-5" value="{{ $livro->resenha }}" />

    </div>
    <div class="row">
        <label class="col-2" for="imagem">imagem</label>
        <input type="text" name="imagem" id="imagem" class="col-4" value="{{ $livro->imagem }}" />

    </div>
    <button type="submit" class="button">Salvar</button>
</form>

@endsection