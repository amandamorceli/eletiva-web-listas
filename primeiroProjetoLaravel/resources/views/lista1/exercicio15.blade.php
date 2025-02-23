@extends('layout')

@section('conteudo')

<form method="post" action="/lista1/resp15">

    @csrf

    <div class="mb-3">
        <label for="dias" class="form-label">Insira um valor em dias: </label>
        <input type="number" step="0.01" id="dias" name="dias" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($resultado)

Convertido em horas, minutos e segundos são: {{$resultado}} .

@endisset

@endsection