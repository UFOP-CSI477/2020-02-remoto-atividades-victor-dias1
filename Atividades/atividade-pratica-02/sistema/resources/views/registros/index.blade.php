@extends('principal')

@section('conteudo')

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
            <td>{{ $reg->user }}</td>
            <td>{{ $reg->tipo }}</td>
            <td>{{ $reg->descricao }}</td>
        </tr>
        @endforeach

    </tbody>
    <tfoot>

    </tfoot>
</table>

{{ $registros->links() }}

@endsection