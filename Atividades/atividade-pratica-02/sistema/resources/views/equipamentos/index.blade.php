@extends('principal')

@section('conteudo')

<div class="row">
    <div class="col"></div>
    <div class="col">
        <a href="{{ route('equipamentos.create') }}" class="btn btn-outline-primary">Cadastrar</a>
    </div>
    <div class="col"></div>
</div>

<div class="row">
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
                <td><a href="{{route('equipamentos.show', $eq->id)}}" class="btn btn-outline-info">Exibir</a></td>
            </tr>
            @endforeach

        </tbody>
        <tfoot>

        </tfoot>
    </table>

</div>

<div class="row">
    {{ $equipamentos->links() }}
</div>

@endsection