@extends('main')

@section('content')

<div class="text-center">
    <a href="{{ route('tasks.create') }}" class="btn btn-outline-primary">Criar Task</a>
</div>

<!-- <ul class="nav nav-pills todo-nav">
    <li role="presentation" class="nav-item all-task active">
        <a href="" class="nav-link">Todas</a>
    </li>
    <li role="presentation" class="nav-item active-task">
        <a href="#" class="nav-link">Ativas</a>
    </li>
    <li role="presentation" class="nav-item completed-task">
        <a href="#" class="nav-link">Completadas</a>
    </li>
</ul> -->
<div class="todo-list">
    @foreach ($tasks as $t)
    <div class="todo-item">
        <div class="checker"><span class=""><input type="checkbox"></span></div>
        <span>
            {{ $t->nome }}
        </span>
        <div class="col" style="text-align: right;">
            <form name="formDelete" action="{{route('tasks.destroy', $t->id)}}" method="post" onsubmit="return confirm('Confirma a exclusão do estado?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-default">
                    <i class="bi bi-x-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" style="color: red;" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z" />
                        </svg>
                    </i>
                </button>
            </form>
            <a href="javascript:void(0);" class="float-right remove-todo-item"><i class="icon-close"></i></a>
        </div>
    </div>
    @endforeach
</div>
@endsection