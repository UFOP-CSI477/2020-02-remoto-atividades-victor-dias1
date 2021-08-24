@extends('principal')

@section('conteudo')

<form action="{{ route('equipamentos.update', $equipamento->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" value="{{ $estados->nome }}">
    </div>
    <div class="text-right">
        <input type="submit" value="Atualizar" class="btn btn-outline-primary">
        <a href="{{route('equipamentos.index')}}" class="btn btn-outline-danger">Voltar</a>
    </div>
</form>

@endsection