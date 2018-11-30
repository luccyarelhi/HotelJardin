<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="views/login/estilos.css">
    <link rel="stylesheet" href="views/login/fonts.css">
  </head>
  <body>
    <div class="contenedor">

      <header>
        <h1 id="letra" class="title">Hotel Jardin</h1>
      </header>
      <div class="login">
        <article class="fondo">
          <img src="views/login/img/LogoHJ.png" alt="User">
          <h3 id="barra">Inicio de Sesión</h3>
          <form class="" action="index.html" method="post">
            <span class="icon-user"></span><input class="inp" type="text" name="user" value=""><br>
            <span class="icon-key"></span><input class="inp" type="password" name="pass" value=""><br>
            <a  class="he">He olvidado mi contraseña</a>
            <input id="paginaPrincipal" data-control="controlAdminLTE" class="boton inicio"  value="Ingresar">
          </form>
        </article>
      </div>
    </div>
     <script src="recursos/js/sistema.js"></script>
  </body>
</html>
