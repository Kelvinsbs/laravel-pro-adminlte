@extends('layouts.default')
@section('page-title', 'Usuários')
@section('page-actions')
    <a href="{{ route('users.create') }}" class="btn btn-primary">Adicionar</a>
@endsection
@section('content')
    @session('status')
        <div class="alert alert-success">
            {{ $value }}
        </div>
    @endsession

    <form action="{{ route('users.index')}}" method="GET" class="mb-3" style="width:300px;">
        <div class="input-group input-group-sm">
            <input type="text" name="keyword" class="form-control" placeholder="Pesquisar por nome ou email" value="{{ request()?->keyword }}">
            <button class="btn btn-primary" type="submit">
                Pesquisar
            </button>
        </div>
    </form>
    Lista de Usuarios
    <h1>Listagem de Usuários</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ @$user->id }}</td>
                    <td>{{ @$user->name }}</td>
                    <td>{{ @$user->email }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
@endsection
