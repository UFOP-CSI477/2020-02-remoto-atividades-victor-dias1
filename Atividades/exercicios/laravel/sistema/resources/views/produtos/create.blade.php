@extends('principal')

@section('conteudo')

<form action="{{route('produtos.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>
    <div class="form-group">
        <label for="sigla">Unidade de Medida</label>
        <input type="text" class="form-control" name="um" id="um">
    </div>
    <div class="text-right">
        <input type="submit" value="Cadastrar" class="btn btn-outline-primary">
        <input type="reset" value="Limpar" class="btn btn-outline-danger">
    </div>
</form>

@endsection