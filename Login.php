<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="Login.css" />
  </head>

  <body>
    <main class="page-shell">
      <section class="page-card">
        <img src="imgCapaa.png" alt="Logo" class="logo" />
        <form name="entrada" method="post" action="LoginConfere.php">
          <label>
            Nome
            <input type="text" name="nome" />
          </label>

          <label>
            Senha
            <input type="password" name="senha" />
          </label>

          <input type="submit" value="Entrar" class="btn-action" />
          <input type="submit" value="Cadastrar" formaction="indexUsu.html" class="btn-secondary" />
        </form>
        <?php
        if (isset($_GET['erro'])) {
            if ($_GET['erro'] == 1) {
                echo "<p style='color:#ffb8a5; margin-top:16px; text-align:center;'>Senha incorreta!</p>";
            }
            if ($_GET['erro'] == 2) {
                echo "<p style='color:#ffb8a5; margin-top:16px; text-align:center;'>Usuário não encontrado!</p>";
            }
        }
        ?>
      </section>
    </main>
  </body>
</html>
