@extends('principal')

@section('conteudo')

<h1>Dados do Produto</h1>

<br>
<p><strong>Id:</strong> {{ $produto->id }}</p>
<p><strong>Nome:</strong> {{ $produto->nome }}</p>
<p><strong>Unidade de Medida:</strong> {{ $produto->um }}</p>
<br>

<div class="btn-group">
    <a href="{{route('produtos.edit', $produto->id)}}" class="btn btn-outline-warning">Editar</a>

    <form name="formDelete" action="{{ route('produtos.destroy', $produto->id)}}" method="post" onsubmit="return confirm('Confirma a exclusão do estado?');">
        @csrf
        @method('DELETE')
        <input type="submit" value="Excluir" class="btn btn-outline-danger">
    </form>

    <a href="{{route('produtos.index')}}" class="btn btn-outline-primary">Voltar</a>
</div>


@endsection