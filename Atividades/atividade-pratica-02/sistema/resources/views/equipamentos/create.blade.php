@extends('principal')

@section('conteudo')

<form action="{{ route('equipamentos.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nome">Nome do equipamento: </label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>
    <div class="text-right">
        <input type="submit" value="Cadastrar" class="btn btn-outline-primary">
        <input type="reset" value="Limpar" class="btn btn-outline-warning">
        <a href="{{ route('equipamentos.index') }}" class="btn btn-outline-danger">Voltar</a>
    </div>
</form>

@endsection