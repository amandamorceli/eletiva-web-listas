@extends('layout')

@section('conteudo')

<form method="post" action="/lista1/resp12">

@csrf

    <div class="mb-3">
        <label for="preco" class="form-label">Digite o preço:</label>
        <input type="number" step="0.01" id="preco" name="preco" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="desconto" class="form-label">Digite o percentual de desconto:</label>
        <input type="number" step="0.01" id="desconto" name="desconto" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($resultado)

O preço com desconto é: R$ {{$resultado}}.

@endisset

@endsection