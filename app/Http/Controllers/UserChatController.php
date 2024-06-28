<?php

namespace App\Http\Controllers;

use App\Models\UserChat;
use Illuminate\Http\Request;


class UserChatController extends Controller
{
    /*
    *O componente index blablabla...
    *
    */
    public function index()
    {
        $userchats = UserChat::all();
        return view('userchats.index', compact('userchats'));
    }

    /*
    *O componente create blablabla...
    *
    */
    public function create()
    {
        return view('userchat.create');
    }

    /*
    *O componente store blablabla...
    *
    */

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|',
            'password' => 'required|min:6',
        ]);

        UserChat::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('userchat.index')
            ->with('success', 'Usuário de Chat criado com sucesso.');
    }

    /*
    *O componente show blablabla...
    *
    */
    public function show(UserChat $userchat)
    {
        return view('userchat.show', compact('userchat'));
    }

    /*
    *O componente edit blablabla...
    *
    */
    public function edit(UserChat $userchat)
    {
        return view('userchat.edit', compact('userchat'));
    }

    /*
    *O componente update blablabla...
    *
    */

    public function update(Request $request, UserChat $userchat)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:user_chats,email,' . $userchat->id,
            'password' => 'nullable|min:6',
        ]);

        if ($request->has('password')) {
            $userchat->password = bcrypt($request->password);
        }

        $userchat->update($request->only('name', 'email'));

        return redirect()->route('userchat.index')
            ->with('success', 'Usuário de Chat atualizado com sucesso.');
    }

    /*
    *O componente destroy blablabla...
    *
    */
    public function destroy(UserChat $userchat)
    {
        $userchat->delete();

        return redirect()->route('userchat.index')
            ->with('success', 'Usuário de Chat excluído com sucesso.');
    }
}
