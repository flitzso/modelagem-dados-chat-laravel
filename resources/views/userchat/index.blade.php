<!-- resources/views/userchat/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Lista de Usuários de Chat</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Bug de $userchats no lugar de $userchat -->
                            @foreach ($userchat as $userchats)
                            <tr>
                                <td>{{ $userchat->id }}</td>
                                <td>{{ $userchat->name }}</td>
                                <td>{{ $userchat->email }}</td>
                                <td>
                                    <a href="{{ route('userchat.show', $userchat->id) }}" class="btn btn-info">Ver</a>
                                    <a href="{{ route('userchat.edit', $userchat->id) }}" class="btn btn-primary">Editar</a>
                                    <form action="{{ route('userchat.destroy', $userchat->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este usuário de chat?')">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection