@extends('layout')

@section('conteudo')

<h4 class="mt-4">Exercício 5</h4>

<form method="post" action="/lista2/resp5">

    @csrf

    <div class="mb-3">
        <label for="numero" class="form-label">Informe um valor associado a um mês:</label>
        <input type="number" id="numero" name="numero" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($mes)
    <h3 class="mt-3">
        O mês associado é {{$mes}}.
    </h3>
@endisset

@endsection