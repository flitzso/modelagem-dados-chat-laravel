<!-- resources/views/componentes/create.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Criar Usuário</title>
</head>

<body>
    <h1>Criar Novo Usuário</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Salvar</button>
    </form>
</body>

</html>