<!-- resources/views/componentes/edit.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Editar Usuário</title>
</head>

<body>
    <h1>Editar Usuário</h1>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" value="{{ $user->name }}" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}" required>

        <label for="password">Senha (deixe em branco para manter a senha atual):</label>
        <input type="password" id="password" name="password">

        <button type="submit">Atualizar</button>
    </form>
    <a href="{{ route('users.index') }}">Voltar</a>
</body>

</html>