@extends('principal')

@section('conteudo')

<form action="{{ route('registros.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="equipamento_id">Equipamento:</label>
        <select name="equipamento_id" id="equipamento_id" class="form-select">
            @foreach($equipamentos as $eq)
            <option value="{{ $eq->id }}">{{ $eq->nome }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="usuario_id">Usuario:</label>
        <select name="usuario_id" id="usuario_id" class="form-select">
            @foreach($usuarios as $u)
            <option value="{{ $u->id }}">{{ $u->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="descricao">Descrição: </label>
        <input type="text" class="form-control" name="descricao" id="descricao">
    </div>
    <div class="form-group">
        <label for="tipo">Tipo: </label>
        <select name="tipo" id="tipo" class="form-control">
            <!-- <option selected>Selecione</option> -->
            <option value="1">Preventiva</option>
            <option value="2">Corretiva</option>
            <option value="3">Urgente</option>
        </select>
    </div>
    <div class="form-group">
        <label for="datalimite">Data limite: </label>
        <input type="date" class="form-control" name="datalimite" id="datalimite">
    </div>
    <div class="text-right">
        <input type="submit" value="Cadastrar" class="btn btn-outline-primary">
        <input type="reset" value="Limpar" class="btn btn-outline-warning">
        <a href="{{ route('registros.index') }}" class="btn btn-outline-danger">Voltar</a>
    </div>
</form>

@endsection