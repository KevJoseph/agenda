<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html"; charset="UTF-8">
    <title>Agenda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery.validate.min.js"></script>
    <script src="messages_es.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
</head>
<body>
    <?php
     include ("mostrardatos.php");
    ?>
   <br>
    <div class="container">
        <h1>Mi agenda:</h1>
        
<table class="table">
  <thead>
    <tr>
      <th>Nº</th>
      <th>Nombre</th>
      <th>Apellidos</th>
      <th>Celular</th>
      <th>Correo</th>
    </tr>
  </thead>
  <tbody>
    <?php
        while($reg = mysql_fetch_array($registro)){
        echo "<tbody>";
        echo "<tr>";
        echo "<td>".$reg['id']."</td>";
        echo "<td>".$reg['nombre']."</td>";
        echo "<td>".$reg['apellido']."</td>";
        echo "<td>".$reg['celular']."</td>";
        echo "<td>".$reg['correo']."</td>";
        echo "</tr>";
        echo "</tbody>";
    }  
    ?>
   
  </tbody>
</table>
    </div>
</body>
</html>