<html>
<head>
  <title>Eliminación</title>
</head>

<body>
  <?php
    $v_usuario=$_POST['username'];
    $v_password=$_POST['password'];
    $v_tabla=$_POST['table'];

    $conexion=pg_connect("host=localhost port=5432 dbname=postgres user=$v_usuario password=$v_password");
    $id=$_POST['id'];
    if($v_tabla=="libro"){
      $sql ="DELETE FROM libro WHERE book_id=".$id;
      $result = pg_Exec($conexion, $sql);
    };

    if($v_tabla=="usuario"){
      $sql ="DELETE FROM usuario WHERE user_id=".$id;
      $result = pg_Exec($conexion, $sql);
    };

    if($v_tabla=="prestamo"){
      $sql ="DELETE FROM prestamo WHERE lend_id=".$id;
      $result = pg_Exec($conexion, $sql);
    };

  ?>
  Hecho, revise si eliminó el objeto en cuestión.
  <form action="controlPanel.php" method="POST">
    <input type="Submit" value="Regresar">
    <input type="hidden" name="username" value=<?php echo $v_usuario ?>>
    <input type="hidden" name="password" value=<?php echo $v_password ?>>
  </form>
</body>
</html>
