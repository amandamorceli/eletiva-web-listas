@extends('layout')

@section('conteudo')


<form method="post" action="/lista1/resp1">

    @csrf

    <div class="mb-3">
        <label for="nota" class="form-label">Informe a primeira nota:</label>
        <input type="number" step="0.01" id="nota1" name="nota1" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="nota2" class="form-label">Informe a segunda nota:</label>
        <input type="number" step="0.01" id="nota2" name="nota2" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="nota3" class="form-label">Informe a terceira nota:</label>
        <input type="number" step="0.01" id="nota3" name="nota3" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($media)
    A média é {{$media}}
@endisset

@endsection