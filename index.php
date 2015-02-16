<?php

  $soap_client = new soapClient('https://correo1.conagua.gob.mx/google/Google.asmx?WSDL');
  /*
  $dsn      = 'mysql:dbname=conagua;host=localhost';
  $user     = 'root';
  $password = 'root';

  $dbh = new PDO($dsn, $user, $password);

  $st       = $soap_client->CatalogoEstaciones();
  $stations = json_decode($st->CatalogoEstacionesResult);

  foreach ($stations as $station){
    $sql = "INSERT INTO estaciones (estacion, nombre, lat, lng, punto) 
    VALUES('{$station->Estacion}', '{$station->Nombre}', {$station->Latitud}, {$station->Longitud}, Point({$station->Latitud},{$station->Longitud}))";
    $dbh->query($sql);
  }
  */
?>
<!doctype html>
<html>
<head></head>
<body>
 <h1>Data store</h1>

 <script src="js/bower_components/jquery/dist/jquery.min.js"></script>
 <script src="js/bower_components/underscore/underscore-min.js"></script>
 <script src="js/bower_components/backbone/backbone.js"></script>
 <script>
  
 </script>
</body>
</html>