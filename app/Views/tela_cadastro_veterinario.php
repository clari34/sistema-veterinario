<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Veterinário</title>
    <link rel="stylesheet" href="../Estilo/estilo2.css" />
  </head>
  
  <h1>Bem-vindo ao Health & Paws</h1>
  <body>
    <main>
      <div class="card">
        <form action="cadastro.php" method="GET">
          <h3>Cadastro</h3>
          <div class="group">
            <label>Nome:</label>
            <input name="nome" required/>
          </div>
          <br>
          <div class="group">
            <label>CPF:</label>
            <input name="cpf" required/>
          </div>
          <br>
          <div class="group">
            <label>CRMV:</label>
            <input name="crmv" required/>
          </div>
          <br>
          <div class="group">
            <label>Usuário:</label>
            <input name="usuario" required/>
          </div>
          <br>
          <div class="group">
            <label>E-mail:</label>
            <input type="email" name="email" required/>
          </div>
          <br>
          <div class="group">
            <label>Senha:</label>
            <input name="password" type="password" required/>
          </div>
          <br>
          <button type="submit">Cadastrar Conta</button>
        </form>
      </div>
    </main>
  </body>
</html>