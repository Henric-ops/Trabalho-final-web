<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="Login.css" />
  </head>

  <body>
    <form name="entrada" method="post" action="LoginConfere.php">
      <img src="imgCapaa.png" alt="Logo" class="logo" />

      <label>Nome: <input type="text" name="nome" /></label><br /><br />
      <label>Senha: <input type="password" name="senha" /></label><br /><br />
      <input type="submit" value="Entrar" />
      <input type="submit" value="Cadastrar" formaction="indexUsu.html"/>
    </form>
  </body>
</html>


  <?php
  if(isset($_GET['erro'])) {
      if($_GET['erro'] == 1) echo "<p style='color:s;'>Senha incorreta!</p>";
      if($_GET['erro'] == 2) echo "<p style='color:red;'>Usuário não encontrado!</p>";
  }
  ?>