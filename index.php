<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register & Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="style.css?v=1.1">
</head>

<body>
  <div class="container" id="signup" style="display:none;">
    <h1 class="form-title">Registrar</h1>
    <form method="post" action="register.php">
      <div class="input-group">
        <input type="text" name="fName" id="fName" placeholder="First Name" required>
        <label for="fname"><i class="fas fa-user"></i>Primeiro Nome</label>
      </div>
      <div class="input-group">
        <input type="text" name="lName" id="lName" placeholder="Last Name" required>
        <label for="lName"><i class="fas fa-user"></i>Ultimo nome</label>
      </div>
      <div class="input-group">
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="email"><i class="fas fa-envelope"></i>Email</label>
      </div>
      <div class="input-group">
        <input type="password" name="password" id="password" placeholder="Password" required>
        <label for="password"><i class="fas fa-lock"></i>Senha</label>
      </div>
      <div class="mae">
        <input type="submit" class="btn" value="Cadastrar" name="signUp">
      </div>
    </form>
    <p class="or">
      ----------or--------
    </p>
    <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
      <p>Já tem uma conta ?</p>
      <button id="signInButton">Login</button>
    </div>
  </div>

  <div class="container" id="signIn">
    <h1 class="form-title">Login</h1>
    <form method="post" action="register.php">
      <div class="input-group">

        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="email"><i class="fas fa-envelope"></i>Email</label>
      </div>
      <div class="input-group">

        <input type="password" name="password" id="password" placeholder="Password" required>
        <label for="password"><i class="fas fa-lock"></i>Senha</label>
      </div>
      <p class="recover">
        <a href="#">Recuperar senha</a>
      </p>
      <div class="mae">
        <input type="submit" class="btn" value="Login" name="signIn">
      </div>
    </form>
    <p class="or">
      ----------or--------
    </p>
    <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
      <p>Não tem uma conta ?</p>
      <button id="signUpButton">Cadastrar</button>
    </div>
  </div>
  <div class="no-login-container">
    <a href="menu.php" class="no-login-btn">Entrar sem login</a>
  </div>
  <script src="script.js"></script>
</body>

</html>