
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Cadastro / Login</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <div class="form-box">
    <h2>Cadastro / Login</h2>

    <?php if (isset($_GET['erro'])): ?>
      <div style="color:red"><?= htmlspecialchars($_GET['erro']) ?></div>
    <?php endif; ?>

    <form method="POST" action="classes/config.php">
      <input type="text" name="nome" placeholder="Nome Completo">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="senha" placeholder="Senha" required>
      <select name="idioma" id="idioma">
        <option value="pt">Português</option>
        <option value="en">Inglês</option>
      </select><br>
      <label><input type="radio" name="tema" value="Claro" checked> Claro</label>
      <label><input type="radio" name="tema" value="Escuro"> Escuro</label><br><br>

      <button type="submit" name="acao" value="entrar">Entrar</button>
      <button type="submit" name="acao" value="cadastrar">Cadastrar</button>
    </form>
  </div>

  <script src="scripts/local.js"></script>
</body>
</html>
