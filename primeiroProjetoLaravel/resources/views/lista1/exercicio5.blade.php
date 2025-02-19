@extends('layout')

@section('conteudo')

<form method="post" action="/lista1/resp5">

    @csrf

    <div class="mb-3">
        <label for="raio" class="form-label">Insira o raio do círculo: </label>
        <input type="number" id="raio" name="raio" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($area)

A área do círculo é de: {{$area}} .

@endisset

@endsection