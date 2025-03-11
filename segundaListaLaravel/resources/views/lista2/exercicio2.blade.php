@extends('layout')

@section('conteudo')

<h4 class="mt-4">Exercício 2</h4>

<form method="post" action="/lista2/resp2">

    @csrf

    <div class="mb-3">
        <label for="valorA" class="form-label">Informe o valor de A:</label>
        <input type="number" step="0.01" id="valorA" name="valorA" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="valorB" class="form-label">Informe o valor de B:</label>
        <input type="number" step="0.01" id="valorB" name="valorB" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($resultado)
    <h3 class="mt-3">
        {{$resultado}}.
    </h3>
@endisset

@endsection