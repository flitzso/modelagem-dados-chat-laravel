<!-- resources/views/userchats/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalhes do Usuário de Chat</h2>
    <p><strong>Nome:</strong> {{ $userchat->name }}</p>
    <p><strong>Email:</strong> {{ $userchat->email }}</p>
    <p><strong>Criado em:</strong> {{ $userchat->created_at->format('d/m/Y H:i:s') }}</p>
    <p><strong>Atualizado em:</strong> {{ $userchat->updated_at->format('d/m/Y H:i:s') }}</p>
    <a href="{{ route('userchats.index') }}" class="btn btn-secondary">Voltar</a>

</div>
@endsection