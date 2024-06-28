<!-- resources/views/componentes/index.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Lista de Usuários</title>
</head>

<body>
    <h1>Lista de Usuários</h1>

    <a href="{{ route('users.create') }}">Criar Novo Usuário</a>

    @if ($users->isEmpty())
    <p>Nenhum usuário encontrado.</p>
    @else
    <table>
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
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('users.show', $user->id) }}">Ver</a>
                    <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</body>

</html>