@extends('principal')

@section('conteudo')

<form action="{{ route('produtos.update', $produtos->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" value="{{ $produtos->nome }}">
    </div>
    <div class="form-group">
        <label for="um">Unidade de Medida</label>
        <input type="text" class="form-control" name="um" id="um" value="{{ $produtos->um }}">
    </div>
    <div class="text-right">
        <input type="submit" value="Atualizar" class="btn btn-outline-primary">
        <a href="{{ route('produtos.index')}}" class="btn btn-outline-danger">Voltar</a>
    </div>
</form>

@endsection