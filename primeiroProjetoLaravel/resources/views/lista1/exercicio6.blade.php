@extends('layout')

@section('conteudo')

<form method="post" action="/lista1/resp6">

@csrf

    <div class="mb-3">
        <label for="largura" class="form-label">Digite a largura de um retângulo em metros:</label>
        <input type="number" step="0.01" id="largura" name="largura" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="altura" class="form-label">Digite a altura de um retângulo em metros:</label>
        <input type="number" step="0.01" id="altura" name="altura" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($perimetro)

O perímetro do retângulo é: {{$perimetro}} .

@endisset

@endsection