@extends('layout')

@section('conteudo')

<h4 class="mt-4">Exercício 1</h4>

<form method="post" action="/lista2/resp1">

    @csrf

    <div class="mb-3">
        <label for="valor1" class="form-label">Informe o primeiro valor:</label>
        <input type="number" step="0.01" id="valor1" name="valor1" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="valor2" class="form-label">Informe o segundo valor:</label>
        <input type="number" step="0.01" id="valor2" name="valor2" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($resultado)
    <h3 class="mt-3">
        O resultado é {{$resultado}}.
    </h3>
@endisset

@endsection