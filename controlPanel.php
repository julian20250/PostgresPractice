<html>
<head>
  <title>Panel de Control</title>
</head>
<body>
  <?php
    $v_usuario=$_POST["username"];
    $v_password=$_POST["password"];

  ?>
  <CENTER><td colspan="2" align="center"><h1>Opciones</h1></td></CENTER>
  <table align="center" width="225" cellspacing="2" cellpadding="2" border="0">
    <tr>
      <td> Libros </td>
      <td> Usuarios </td>
      <td> Préstamos </td>
    </tr>

    <tr>
      <td><form action="mainConsult.php" method="POST">
        <input type="Submit" value="Consultar Libros">
        <input type="hidden" name="username" value=<?php echo $v_usuario ?>>
        <input type="hidden" name="password" value=<?php echo $v_password ?>>
        <input type="hidden" name="table" value="libro">
        </form></td>

        <td><form action="mainConsult.php" method="POST">
          <input type="Submit" value="Consultar Usuarios">
          <input type="hidden" name="username" value=<?php echo $v_usuario ?>>
          <input type="hidden" name="password" value=<?php echo $v_password ?>>
          <input type="hidden" name="table" value="usuario">
          </form></td>

          <td><form action="mainConsult.php" method="POST">
            <input type="Submit" value="Consultar Préstamos">
            <input type="hidden" name="username" value=<?php echo $v_usuario ?>>
            <input type="hidden" name="password" value=<?php echo $v_password ?>>
            <input type="hidden" name="table" value="prestamo">
            </form></td>
    </tr>

    <tr>
      <td><form action="mainAdd.php" method="POST">
        <input type="Submit" value="Añadir Libros">
        <input type="hidden" name="username" value=<?php echo $v_usuario ?>>
        <input type="hidden" name="password" value=<?php echo $v_password ?>>
        <input type="hidden" name="table" value="libro">
        </form></td>

        <td><form action="mainAdd.php" method="POST">
          <input type="Submit" value="Añadir Usuarios">
          <input type="hidden" name="username" value=<?php echo $v_usuario ?>>
          <input type="hidden" name="password" value=<?php echo $v_password ?>>
          <input type="hidden" name="table" value="usuario">
          </form></td>

          <td><form action="mainAdd.php" method="POST">
            <input type="Submit" value="Añadir Préstamos">
            <input type="hidden" name="username" value=<?php echo $v_usuario ?>>
            <input type="hidden" name="password" value=<?php echo $v_password ?>>
            <input type="hidden" name="table" value="prestamo">
            </form></td>
    </tr>

    <tr>
      <td><form action="mainErase.php" method="POST">
        <input type="Submit" value="Eliminar Libros">
        <input type="hidden" name="username" value=<?php echo $v_usuario ?>>
        <input type="hidden" name="password" value=<?php echo $v_password ?>>
        <input type="hidden" name="table" value="libro">
        </form></td>

        <td><form action="mainErase.php" method="POST">
          <input type="Submit" value="Eliminar Usuarios">
          <input type="hidden" name="username" value=<?php echo $v_usuario ?>>
          <input type="hidden" name="password" value=<?php echo $v_password ?>>
          <input type="hidden" name="table" value="usuario">
          </form></td>

          <td><form action="mainErase.php" method="POST">
            <input type="Submit" value="Eliminar Préstamos">
            <input type="hidden" name="username" value=<?php echo $v_usuario ?>>
            <input type="hidden" name="password" value=<?php echo $v_password ?>>
            <input type="hidden" name="table" value="prestamo">
            </form></td>
    </tr>

  </table>

<h2>Recomendaciones</h2>
<UL>
  <li>Un libro sólo puede ser prestado a una persona a la vez.</li>
  <li>Recuerde que se le asigna una llave primaria secuencial a todos los datos, por lo que no
  será requerida.</li>
  <li>Si al hacer alguna consulta no le aparece nada, cerciórese de que haya
  escrito bien sus credenciales, y de estar trabajando en una base de Datos
  llamada "postgres".</li>
  <li>Si no tiene la base de datos configurada en su perfil, copie, pegue y
  ejecute los contenidos de database.sql en su perfil de postgres, en una
  base de datos previamente creada llamada postgres.</li>
  <li>Debe usar la versión de Postgres 9.6, o más antiguas.</li>
  <li>Verifique la Identificación del objeto que eliminará, la necesitará
  para realizar este procedimiento.</li>
  <li>Asimismo, verifique la Identificación del libro y usuario con los que
  desea realizar un préstamo.</li>
  <li>No podrá borrar un libro o usuario si está asignado a un préstamo.</li>
</UL>



</body>

</html>
