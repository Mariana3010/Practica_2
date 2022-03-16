<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Codigos Postales</title>
</head>
<body>
<center>
  <h1>Codigos Postales</h1>
    <form action="codigos_p" method="POST">
      @csrf
      <label for="Codigo Postal"></label>
      <input type="text" name="codigo" id="" placeholder="ingresa un codigo postal">
      <button type="submit">Siguiente</button>
    </form>
</center>
</body>
</html>