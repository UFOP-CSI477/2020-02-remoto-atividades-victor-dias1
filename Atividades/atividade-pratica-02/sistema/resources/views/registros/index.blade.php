@extends('principal')

@section('conteudo')
<div class="row">
    <div class="col"></div>
    <div class="col">
        <a href="{{ route('registros.create') }}" class="btn btn-outline-primary">Cadastrar</a>
    </div>
    <div class="col"></div>
</div>

<div class="row">
    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Data limite</th>
                <th>Nome do Equipamento</th>
                <th>Nome do Usuário</th>
                <th>Tipo</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>

            @foreach($registros as $reg)
            <tr>
                <td>{{ $reg->datalimite }}</td>
                <td>{{ $reg->equipamento->nome }}</td>
                <td>{{ $reg->usuario->name }}</td>
                <td>{{ $reg->tipo }}</td>
                <td>{{ $reg->descricao }}</td>
            </tr>
            @endforeach

        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>

<div class="row">
    {{ $registros->links() }}
</div>

@endsection