<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Novo Usuário</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark">

  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow" style="width: 100%; max-width: 400px;">

      <h3 class="text-center mb-4">Novo Usuário</h3>

      @if(session('erro'))
        <p class="text-danger">{{session('erro')}}</p>
      @endif

      <form action="/cadastro" method="post">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input name="name" type="name" class="form-control" id="name" placeholder="Digite seu nome" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input name="email" type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input name="password" type="password" class="form-control" id="password" placeholder="Digite sua senha" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Cadastrar</button>

      </form>
      <div class="mb-3">
        <a href="/login" class="btn btn-secondary w-100" >
          Voltar para login
        </a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>