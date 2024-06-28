<!-- resources/views/componentes/show.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Detalhes do Usuário</title>
</head>

<body>
    <h1>Detalhes do Usuário</h1>

    <p>ID: {{ $user->id }}</p>
    <p>Nome: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>

    <a href="{{ route('users.edit', $user->id) }}">Editar</a>
    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit">Deletar</button>
    </form>
    <a href="{{ route('users.index') }}">Voltar</a>
</body>

</html>