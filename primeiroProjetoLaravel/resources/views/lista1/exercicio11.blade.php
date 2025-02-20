@extends('layout')

@section('conteudo')

<form method="post" action="/lista1/resp11">

@csrf

    <div class="mb-3">
        <label for="peso" class="form-label">Digite o peso em kg:</label>
        <input type="number" step="0.01" id="peso" name="peso" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="altura" class="form-label">Digite a altura em metros:</label>
        <input type="number" step="0.01" id="altura" name="altura" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($resultado)

O IMC calculado é: {{$resultado}} .

@endisset

@endsection