@extends('layout')

@section('conteudo')

<form method="post" action="/lista1/resp14">

@csrf

    <div class="mb-3">
        <label for="capital" class="form-label">Digite o capital:</label>
        <input type="number" step="0.01" id="capital" name="capital" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="juros" class="form-label">Digite o juros:</label>
        <input type="number" step="0.01" id="juros" name="juros" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="periodo" class="form-label">Digite o período:</label>
        <input type="number" step="0.01" id="periodo" name="periodo" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($resultado)

O juros composto calculado é: {{$resultado}} .

@endisset

@endsection