<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserChatController extends Controller
{
    // Exibir a lista de usuários
    public function index()
    {
        $users = User::all();
        return view('componentes.index', compact('users'));
    }

    // Exibir o formulário de criação de um novo usuário
    public function create()
    {
        return view('componentes.create');
    }

    // Salvar um novo usuário
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
        ]);

        $user->save();

        return redirect('/users')->with('success', 'Usuário criado com sucesso!');
    }

    // Exibir os dados de um usuário específico
    public function show($id)
    {
        $user = User::find($id);
        return view('componentes.show', compact('user'));
    }

    // Exibir o formulário de edição de um usuário
    public function edit($id)
    {
        $user = User::find($id);
        return view('componentes.edit', compact('user'));
    }

    // Atualizar os dados de um usuário
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:6',
        ]);

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');

        if ($request->get('password')) {
            $user->password = bcrypt($request->get('password'));
        }

        $user->save();

        return redirect('/users')->with('success', 'Usuário atualizado com sucesso!');
    }

    // Deletar um usuário
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/users')->with('success', 'Usuário deletado com sucesso!');
    }
}
