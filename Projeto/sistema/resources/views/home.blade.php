@extends('main')

@section('conteudo')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sistema</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <span>Você está logado!</span>

                </div>

                <div class="card-footer text-end">
                    <a href="{{ route('tasks.index') }}" class="btn btn-outline-primary">ir para Tasks</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection