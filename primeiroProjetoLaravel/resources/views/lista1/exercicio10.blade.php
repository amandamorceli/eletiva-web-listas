@extends('layout')

@section('conteudo')

<form method="post" action="/lista1/resp10">

    @csrf

    <div class="mb-3">
        <label for="kms" class="form-label">Digite um valor em quilômetros: </label>
        <input type="number" id="kms" name="kms" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($milhas)

Convertido é: {{$milhas}} milhas.

@endisset

@endsection