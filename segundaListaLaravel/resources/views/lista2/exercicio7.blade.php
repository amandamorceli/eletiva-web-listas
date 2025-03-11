@extends('layout')

@section('conteudo')

<h4 class="mt-4">Exercício 7</h4>

<form method="post" action="/lista2/resp7">

    @csrf

    <div class="mb-3">
        <label for="numero" class="form-label">Digite um número:</label>
        <input type="number" id="numero" name="numero" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($soma)
    <h3 class="mt-3">
        A soma é {{$soma}}.
    </h3>
@endisset

@endsection