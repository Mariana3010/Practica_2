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
  <table>
    <tr>
      <th>id</th>
      <th>codigo</th>
      <th>asentamiento</th>
      <th>tipo_asenta</th>
      <th>municipio</th>
      <th>estado</th>
      <th>ciudad</th>
    </tr>
    @foreach ($index as $codigos)
    <tr>
      <td>{{ $codigos->id}}</td>
      <td>{{ $codigos->codigo}}</td>
      <td>{{ $codigos->asentamiento}}</td>
      <td>{{ $codigos->tipo_asenta}}</td>
      <td>{{ $codigos->municipio}}</td>
      <td>{{ $codigos->estado}}</td>
      <td>{{ $codigos->ciudad}}</td>
    </tr>
    @endforeach
  </table>
</center>
</body>
</html>