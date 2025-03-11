@extends('layout')

@section('conteudo')

<h4 class="mt-4">Exercício 4</h4>

<form method="post" action="/lista2/resp4">

    @csrf

    <div class="mb-3">
        <label for="numero" class="form-label">Informe um número:</label>
        <input type="number" id="numero" name="numero" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($primos)
    <h3 class="mt-3">
        Número primos até {{$numero}}: {{implode(", " , $primos)}}
    </h3>
@endisset

@endsection