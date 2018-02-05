<html>
  <head>
    <title>Inserción</title>
  </head>

  <body>
    <?php
      $v_usuario=$_POST['username'];
      $v_password=$_POST['password'];
      $v_tabla=$_POST['table'];

      $conexion=pg_connect("host=localhost port=5432 dbname=postgres user=$v_usuario password=$v_password");

      if($v_tabla=="libro"){
        $v_book_name="'".$_POST['book_name']."'";
        $v_book_editorial="'".$_POST['book_editorial']."'";
        $sql ="INSERT INTO libro(book_name, book_editorial) VALUES($v_book_name, $v_book_editorial)";
        $result = pg_Exec($conexion, $sql);
      };

      if($v_tabla=="usuario"){
        $v_user_name="'".$_POST['user_name']."'";
        $sql ="INSERT INTO usuario(user_name) VALUES($v_user_name)";
        $result = pg_Exec($conexion, $sql);
      };

      if($v_tabla=="prestamo"){
        $v_usuar=$_POST['usuar'];
        $v_book=$_POST['book'];

        $sql ="INSERT INTO prestamo(usuar, book) VALUES($v_usuar, $v_book)";
        $result = pg_Exec($conexion, $sql);
      };

    ?>
    Hecho, revise si añadió el objeto en cuestión.
    <form action="controlPanel.php" method="POST">
      <input type="Submit" value="Regresar">
      <input type="hidden" name="username" value=<?php echo $v_usuario ?>>
      <input type="hidden" name="password" value=<?php echo $v_password ?>>
    </form>
  </body>
</html>
