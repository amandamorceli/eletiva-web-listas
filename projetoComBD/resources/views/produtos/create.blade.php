@extends('layout')
@section('principal')
<h1>Novo Produto</h1>

<form method="post" action="/produtos">
    @csrf

    <div class="mb-3">
        <label for="nome" class="form-label">Informe o Nome:</label>
        <input type="text" id="nome" name="nome" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="descricao" class="form-label">Informe a Descrição:</label>
        <textarea id="descricao" name="descricao" class="form-control" rows="4" required=""></textarea>
    </div>

    <div class="mb-3">
        <label for="preco" class="form-label">Informe o Preço:</label>
        <input type="number" step="0.01" id="preco" name="preco" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="estoque" class="form-label">Informe o Estoque:</label>
        <input type="number" id="estoque" name="estoque" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="categoia" class="form-label">Informe a Categoria:</label>
        <select id="categoria_id" name="categoria_id" class="form-select" required="">
            @foreach ($categorias as $c)
            <option value="{{ $c->id }}">
                {{ $c->nome }}
            </option>
            @endforeach
        </select>
    </div>


    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@endsection