@extends('layout')

@section('conteudo')


<form method="post" action="/lista1/resp3">

@csrf

    <div class="mb-3">
        <label for="temperatura" class="form-label">Insira uma temperatura em Fahrenheit:</label>
        <input type="number" id="temperatura" name="temperatura" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($temperaturaConvertida)
    A temperatura convertida é {{$temperaturaConvertida}}º C.
@endisset

@endsection