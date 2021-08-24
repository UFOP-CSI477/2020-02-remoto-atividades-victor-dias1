@extends('principal')

@section('conteudo')

<form action="{{ route('registros.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="equipamento_nome">Equipamento:</label>
        <select name="equipamento_nome" id="equipamento_id" class="form-control">
            @foreach($equipamentos as $eq)
            <option value="{{ $eq->id }}">{{ $eq->nome }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="usuario_nome">Usuario:</label>
        <select name="usuario_nome" id="usuario_id" class="form-control">
            @foreach($usuarios as $u)
            <option value="{{ $u->id }}">{{ $u->nome }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="nome">Descrição: </label>
        <input type="text" class="form-control" name="nome" id="nome">
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