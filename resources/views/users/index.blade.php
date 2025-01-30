@extends('layouts.default')
@section('page-title', 'Usuários')
@section('page-actions')
    <a href="" class="btn btn-primary">Adicionar</a>
    @endsection
@section('content')
    Lista de USuarios
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
            @foreach($users as $user)
            <tr>
                <td>{{ @$user->id }}</td>
                <td>{{ @$user->name }}</td>
                <td>{{ @$user->email }}</td>
                <td>
                    <a href="" class="btn btn-primary btn-sm">Editar</a>
                    <form action="" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
