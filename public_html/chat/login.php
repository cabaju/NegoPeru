<link href="css/styles.css" type="text/css" rel="stylesheet"/ >
<?php
session_start();
if (isset($_SESSION['unique_id'])) {
  header("location: users.php");
}
?>

<?php include_once "header.php"; ?>


<body bg= "green">

<img src="img/chat1.png" width="200" height="200">
  <div class="wrapper">
    <section class="form login">
      <header>Chat en Línea NEGOPERU</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Dirección de Correo Electrónico</label>
          <input type="text" name="email" placeholder="Ingresa tu Correo Registrado" required>
        </div>
        <div class="field input">
          <label>Contraseña</label>
          <input type="password" name="password" placeholder="Ingresa tu Contraseña" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Ingresar al Chat"><a href="index.php">
            <div text-aling="center"<a href="index.php">  Universidad Autonoma del Peru</a></div>
        </div>
      </form>
      <div class="link">Aún no te has registrado? <a href="index.php">Regístrate acá</a></div>
      <div class="link"><a href="../index.html">Regresar a pagina principal</a></div>
      <br />
      <div align="center"><img src="img/logo1.png"></div>
      
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>
  <br />
  <img src="img/chat2.png" width="200" height="200">
  
</body>


</html>