@extends('layout')

@section('conteudo')

<form method="post" action="/lista1/resp8">

@csrf

    <div class="mb-3">
        <label for="base" class="form-label">Digite a base da exponenciação:</label>
        <input type="number" step="0.01" id="base" name="base" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="expoente" class="form-label">Digite o expoente da exponenciação:</label>
        <input type="number" step="0.01" id="expoente" name="expoente" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($resultado)

A potência é: {{$resultado}} .

@endisset

@endsection