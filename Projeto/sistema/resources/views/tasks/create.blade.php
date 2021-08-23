@extends('main')

@section('content')

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nome">Task</label>
        <input type="text" class="form-control" placeholder="New Task..." name="nome" id="nome">
    </div>
    <div class="form-group">
        <input type="hidden" name="user_id" id="user_id" value="1">
    </div>
    <div class="text-right">
        <input type="submit" value="Adicionar" class="btn btn-sm btn-outline-primary">
    </div>
</form>

@endsection