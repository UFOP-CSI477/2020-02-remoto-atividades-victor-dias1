@extends('principal')

@section('conteudo')

<table class="table table-bordered table-hover table-striped">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Data de Atualização</th>
        </tr>
    </thead>
    <tbody>

        @foreach($equipamentos as $eq)
        <tr>
            <td>{{ $eq->id }}</td>
            <td>{{ $eq->nome }}</td>
            <td>{{ $eq->updated_at }}</td>
        </tr>
        @endforeach

    </tbody>
    <tfoot>

    </tfoot>
</table>

{{ $equipamentos->links() }}

@endsection