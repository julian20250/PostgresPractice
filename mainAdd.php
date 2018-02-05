<html>
<head>
<title>Añadir Elemento</title>
</head>
<body>
  <?php
    $v_usuario=$_POST['username'];
    $v_password=$_POST['password'];
    $v_tabla=$_POST['table'];

    if ($v_tabla=="libro"){
      echo '<form>
         <CENTER><td colspan="2" align="center"><h1>Adicionar Libros</h1></td></center>
         <table align="center" width="255" cellspacing="2" cellpadding="2" border="0">
      </form>
      <form method="POST" action="tryAdd.php">
      Nombre del Libro:
      <input type="text" name="book_name">
      Editorial del libro:
      <input type="text" name="book_editorial">
      <br>
      <br>
      <input type="submit" value="ok">
      <input type="hidden" name="username" value='.$v_usuario .'>
      <input type="hidden" name="password" value='.$v_password.' >
      <input type="hidden" name="table" value="libro">
      </form>';
    };

    if($v_tabla=="usuario"){
      echo '<form>
         <CENTER><td colspan="2" align="center"><h1>Adicionar Usuarios</h1></td></center>
         <table align="center" width="255" cellspacing="2" cellpadding="2" border="0">
      </form>
      <form method="POST" action="tryAdd.php">
      Nombre del Usuario:
      <input type="text" name="user_name">
      <br>
      <br>
      <input type="submit" value="ok">
      <input type="hidden" name="username" value='.$v_usuario .'>
      <input type="hidden" name="password" value='.$v_password.' >
      <input type="hidden" name="table" value="usuario">
      </form>';
    };

    if ($v_tabla=="prestamo"){
      echo '<form>
         <CENTER><td colspan="2" align="center"><h1>Adicionar Préstamos</h1></td></center>
         <table align="center" width="255" cellspacing="2" cellpadding="2" border="0">
      </form>
      <form method="POST" action="tryAdd.php">
      Identificación Usuario:
      <input type="int" name="usuar">
      Identificación Libro:
      <input type="int" name="book">
      <br>
      <br>
      <input type="submit" value="ok">
      <input type="hidden" name="username" value='.$v_usuario .'>
      <input type="hidden" name="password" value='.$v_password.' >
      <input type="hidden" name="table" value="prestamo">
      </form>';
    };
  ?>

  <form action="controlPanel.php" method="POST">
    <input type="Submit" value="Regresar">
    <input type="hidden" name="username" value=<?php echo $v_usuario ?>>
    <input type="hidden" name="password" value=<?php echo $v_password ?>>
  </form>
</body>
</html>
