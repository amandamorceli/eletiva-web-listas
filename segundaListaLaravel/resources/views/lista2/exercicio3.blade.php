@extends('layout')

@section('conteudo')

<h4 class="mt-4">Exercício 3</h4>

<form method="post" action="/lista2/resp3">

    @csrf

    <div class="mb-3">
        <label for="valor" class="form-label">Informe o valor do produto:</label>
        <input type="number" step="0.01" id="valor" name="valor" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($valor)
    <h3 class="mt-3">
        O produto custará R$ {{$valor}}.
    </h3>
@endisset

@endsection