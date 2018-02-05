<html>
<head>Préstamo de libros</head>
<BR>
  <body>
    <?php
      $v_usuario=$_POST['username'];
      $v_password=$_POST['password'];
      $v_tabla=$_POST['table'];

      $conexion=pg_connect("host=localhost port=5432 dbname=postgres user=$v_usuario password=$v_password");
      echo "Datos de la tabla $v_tabla";
      echo "<BR>";

      $sql="select * from $v_tabla";
      $resultado_set = pg_query($conexion, $sql);
      if($v_tabla=="libro"){
        echo '<table align="center" width="600" cellspacing="2" cellpadding="2" border="0">';
        echo '<tr><td>Identificación</td><td>Nombre</td><td>Editorial</td></tr>';
        while($row=pg_fetch_array($resultado_set)){
            echo "<tr>";
            echo "<td>".$row["book_id"] . "</td><td>" . $row["book_name"] . "</td><td>" . $row["book_editorial"]."</td>";
            echo "</tr>";
        }
        echo "</table>";
      };
      if ($v_tabla=="usuario") {
        echo '<table align="center" width="600" cellspacing="2" cellpadding="2" border="0">';
        echo '<tr><td>Identificación</td><td>Nombre</td></tr>';
        while($row=pg_fetch_array($resultado_set)){
            echo "<tr><td>".$row["user_id"] . "</td><td>" . $row["user_name"]."</td></tr>";

        }
        echo "</table>";
      };

      if ($v_tabla=="prestamo"){
        $sql="select user_id, user_name, book_id, book_name, lend_id from prestamo,usuario,libro
        where user_id=usuar and book_id=book";
        $resultado_set = pg_query($conexion, $sql);
        echo '<table align="center" width="600" cellspacing="2" cellpadding="2" border="0">';
        echo '<tr><td>Identificación</td><td>Usuario (ID, Nombre)</td><td>Libro (ID, Nombre)</td></tr>';
        while($row=pg_fetch_array($resultado_set)){
            echo "<tr><td>".$row["lend_id"]."</td><td>(".$row["user_id"].", ".$row["user_name"].")</td><td>(" . $row["book_id"].", ".$row["book_name"].")</td></tr>";

        }
      };
      pg_close($conexion);
    ?>
    <form action="controlPanel.php" method="POST">
      <input type="Submit" value="Regresar">
      <input type="hidden" name="username" value=<?php echo $v_usuario ?>>
      <input type="hidden" name="password" value=<?php echo $v_password ?>>
    </form>

  </body>
</html>
