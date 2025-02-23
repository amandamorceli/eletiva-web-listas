@extends('layout')

@section('conteudo')

<form method="post" action="/lista1/resp9">

    @csrf

    <div class="mb-3">
        <label for="metros" class="form-label">Insira um valor em metros: </label>
        <input type="number" step="0.01" id="metros" name="metros" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($centimetros)

Convertido é: {{$centimetros}} cm(s).

@endisset

@endsection