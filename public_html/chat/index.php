<?php
session_start();
if (isset($_SESSION['unique_id'])) {
  header("location: users.php");
}
?>

<?php include_once "header.php"; ?>

<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Registro de Usuario</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        
          <div class="field input">
            <label>Nombres</label>
            <input type="text" name="fname" placeholder="Nombres" required>
          </div>
        
        <div class="field input">
            <label>Apellidos</label>
            <input type="text" name="lname" placeholder="Apellidos" required>
          </div>
        <div class="field input">
          <label>Correo</label>
          <input type="text" name="email" placeholder="tucorreo@correo.com" required>
        </div>
        <div class="field input">
          <label>Contraseña</label>
          <input type="password" name="password" placeholder="Ingresa tu contraseña" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Tu Avatar</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Acceder al Chat">
        </div>
      </form>
      <div class="link"><a href="login.php">Ingresa al chat</a></div>
      <div class="link"><a href="../index.html">Regresar a pagina principal</a></div>
    </section>
    
      <div align="center"><img src="img/logo1.png"></div>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>

</html>