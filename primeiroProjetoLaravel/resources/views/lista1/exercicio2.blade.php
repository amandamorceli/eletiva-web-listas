@extends('layout')

@section('conteudo')


<form method="post" action="/lista1/resp2">

    @csrf

    <div class="mb-3">
        <label for="temperatura" class="form-label">Insira uma temperatura em Celsius: </label>
        <input type="number" step="0.01" id="temperatura" name="temperatura" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>


@isset($temperaturaConvertida)
    A temperatura convertida é {{$temperaturaConvertida}}º F.
@endisset
@endsection