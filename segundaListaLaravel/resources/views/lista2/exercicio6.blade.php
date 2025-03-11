@extends('layout')

@section('conteudo')

<h4 class="mt-4">Exercício 6</h4>

<form method="post" action="/lista2/resp6">

    @csrf

    <div class="mb-3">
        <label for="numero" class="form-label">Digite um número:</label>
        <input type="number" id="numero" name="numero" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($numeros)
    <h3 class="mt-3">
        {{implode(", ", $numeros)}}.
    </h3>
@endisset

@endsection