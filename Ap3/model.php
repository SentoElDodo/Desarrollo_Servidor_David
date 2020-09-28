<?php


/* Conectar base de datos */
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


function seleccion(){

$sql = "SELECT contenido FROM diccionario";
$result = $conn->query($sql);

switch($seleccion){
    case 1:
        $sql="SELECT contenido FROM diccionario";
}
return $sql;
/* if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "titulo_pagina" . $row["titulo_pagina"]. " titulo " . $row["titulo"]. " contenido " . $row["contenido"]. "enlace". $row["enlace"]. " texto_enlace ". $row["texto_enlace"]. " enlace3 ".$row["enlace3"]. "enlace_foto1 ". $row["enlace_foto1"]. "<br>";
    }
  } else {
    echo "0 results";
  } */

}
  $conn->close();



$diccionario=array(
    'titulo_pagina'=>'Ejemplo de MVC',
    'titulo'=>'Articulo 123',
    'contenido'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt eius aut eaque aspernatur illo modi. Ipsa omnis vero, quo iusto fuga adipisci sapiente cupiditate, sed atque hic distinctio, tempora necessitatibus.',
    'enlace'=>'http://www.google.es',
    'texto_enlace'=>'Google',
    'enlace3'=>'controller.php',
    'enlace_foto1'=>'foto'
);
$diccionario2=array(
    'titulo_pagina'=>'Foto MVC',
    'titulo_foto'=>'foto de MVC en PHP',
    'foto'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1024px-PHP-logo.svg.png',
    'enlace_foto'=>'https://www.php.net/',
    'enlace_foto1'=>'foto'
);
$diccionario3=array(
    'titulo_pagina'=>'Manolo',
    'titulo_foto'=>'Illloooo Manueeee',
    'foto'=>'JaumeElGuapo.jpg',
    'enlace_foto'=>'https://www.php.net/',
    'NIF'=>'34568524R',
    'Razon_Social'=>'Arquitecto Molon',
    'Direccion'=>'C/Alpargata 7',
    'Telefono'=>'739829014',
    'enlace3'=>'controller.php',
    'enlace1'=>'controller.php/articulo',
    'texto_enlace'=>'articulo',
    'enlace_foto1'=>'controller.php/foto'
);
?>