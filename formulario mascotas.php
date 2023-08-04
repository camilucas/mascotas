<!DOCTYPE html>
<html>
<head>
  <title>Formulario de Adopción de Mascotas</title>
</head>
<body>

<h2>Formulario de Adopción de Mascotas</h2>

<form action="procesar_formulario.php" method="POST">
  <label for="nombre">Nombre:</label><br>
  <input type="text" id="nombre" name="nombre" required><br><br>

  <label for="cedula">Cédula:</label><br>
  <input type="text" id="cedula" name="cedula" required><br><br>

  <label for="fecha">Fecha:</label><br>
  <input type="date" id="fecha" name="fecha" required><br><br>

  <label for="raza">Raza:</label><br>
  <input type="text" id="raza" name="raza" required><br><br>

  <input type="submit" value="Enviar">
</form>

</body>
</html>
