<html>
<head>
<title>Eliminar Elemento</title>
</head>
<body>
  <?php
    $v_usuario=$_POST['username'];
    $v_password=$_POST['password'];
    $v_tabla=$_POST['table'];
    echo 'Eliminar '.$v_tabla.'<br>
    <form method="POST" action="tryErase.php">
    Identificación: <input type="int" name="id">
    <br>
    <input type="submit" value="ok">
    <input type="hidden" name="username" value='.$v_usuario .'>
    <input type="hidden" name="password" value='.$v_password.' >
    <input type="hidden" name="table" value='.$v_tabla.'>
    </form>
    ';

  ?>



  <form action="controlPanel.php" method="POST">
    <input type="Submit" value="Regresar">
    <input type="hidden" name="username" value=<?php echo $v_usuario ?>>
    <input type="hidden" name="password" value=<?php echo $v_password ?>>
  </form>
</body>
<html>
