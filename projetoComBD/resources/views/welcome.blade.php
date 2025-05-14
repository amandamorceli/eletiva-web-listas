<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Ecommerce</title>
  <!-- Link para o CSS do Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
  <!-- Banner -->
  <div class="container-fluid p-0">
    <img src="sua-imagem-do-banner.jpg" alt="Banner Ecommerce" class="w-100">
  </div>

  <!-- Cards de Produtos -->
  <div class="container mt-5">
    <h2 class="text-center mb-4">Nossos Produtos</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <!-- Card 1 -->
       @foreach($produtos as $p)
        <div class="col">
            <div class="card h-100">
            <img src="{{asset('storage/'.$p->foto)}}" class="card-img-top" alt="Produto 1">
            <div class="card-body">
                <h5 class="card-title">{{ $p->nome }}</h5>
                <p class="card-text">{{$p->descricao}}</p>
            </div>
            <div class="card-footer text-center">
              <form action="carrinho/add" method="post">
                @csrf
                <input type="hidden" name="produto_id" value="{{$p->id}}">
                <button type="submit" class="btn btn-primary">Comprar</button>
              </form>
            </div>
            </div>
        </div>
      @endforeach

    </div>
  </div>

  <!-- Link para o JavaScript do Bootstrap 5 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
