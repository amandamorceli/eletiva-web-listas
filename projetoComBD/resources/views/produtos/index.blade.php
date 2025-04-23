@extends('layout')
@section('principal')

<h3>Usuário: {{Auth::user()->name}}</h3>

<form method="post" action="/logout">
    @csrf
    <button type="submit" class="btn btn-danger">Sair</button>
</form>

<h1>Produtos</h1>

@if(session('erro'))
<div class="alert alert-danger">
    {{ session('erro') }}
</div>
@endif

@if(session('sucesso'))
<div class="alert alert-success">
    {{ session('sucesso') }}
</div>
@endif

<h2>Registro de Produtos</h2>
<a class="btn btn-success" href="/produtos/create">Novo Registro</a>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome do Produto</th>
            <th>Nome da Categoria</th>
            <th>Foto do produto</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produtos as $p)
        <tr>
            <td> {{ $p->id }} </td>
            <td> {{ $p->nome }} </td>
            <td> {{ $p->categoria->nome }} </td>
            <td> <img src="{{ asset('storage/'.$p->foto) }}" height="50"> </td>
            <td>
                <a href="/produtos/{{ $p->id }}/edit" class="btn btn-warning">Editar</a>
                <a href="/produtos/{{ $p->id }}" class="btn btn-info">Consultar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection