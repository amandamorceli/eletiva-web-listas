@extends('layout')
@section('principal')

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow" style="width: 100%; max-width: 400px;">

      <h3 class="text-center mb-4">Alterar Dados</h3>

      @if(session('erro'))
        <p class="text-danger">{{session('erro')}}</p>
      @endif

      <form action="/editar" method="post">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input value="{{ Auth::user()->name }}" name="name" type="name" class="form-control" id="name" placeholder="Digite seu nome" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input value="{{ Auth::user()->email }}" name="email" type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Informe a senha anterior</label>
          <input name="confirm-password" type="password" class="form-control" id="confirm-password" placeholder="Digite sua senha" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Informe a noma senha</label>
          <input name="password" type="password" class="form-control" id="password" placeholder="Digite sua senha" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Cadastrar</button>

      </form>

    </div>
  </div>

@endsection