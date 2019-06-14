<style>
  body {
    margin:9px 9px 0 9x;
    padding:0;}
  #level0 {
    background:#FC0;
    width:100%;}
  #level1 {
    margin-left:143px;
    padding-left:9px;
    background:#FFF;}
  #level2 {
    background:#FFF3AC;
    position:relative;
    width:inherit;}
  #main {
    margin-right:9em;
    padding-right:9px;
    background:#FFF;}
  #topBar{
    background:#FC0;}
  #advBar{
    background:#FFF3AC;}
  #tipDay{
    float:right;
    width:175px;
    background:#FFF3AC;
    position:relative;}
  #lftBar {
    position:absolute;
    width:143px;
    top:9px;
    left:9px;}
  #rgtBar {
    position:absolute;
    width:9em;
    top:0;
    right:0;}
  #main h1 {
    margin:0;
    padding-left:.3em;
    font:1.25em Verdana,Helvetica,Arial;
    color:#609;
    background:#FC0;}
  #main dt {
    font-weight:bold;
    font-size:120%;
    margin-top:.8em}
  #rgtBar h3 {
    margin:0;
    padding:3px;
    background:#FC0;
    font-weight:bold;
    font-size:1em;
    text-align:center;}
  #topBar form {
    float:right;
    width:10.5em;
    text-align:right;}
</style>
...
<head>
<title>Sistema </title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="/files/style0105.css" media="screen" />
</head>

<body>

  <div id="lftBar">
<img src="scripts/sonrie.jpg" width="59" height="57"><br />
<br>
<a href="http://nutservao.com/articulos.php">Recetas mas solicitadas </a> 
  </div>
  <div id="level0">
    <div id="level1">
      <div id="topBar">
        <form method=get action="">
          <input type="text" name="query" size="12">
          <input type="submit" value="Buscar">
        </form>
        This is the top navigation bar.
        <div id="advBar">
<img src="scripts/logobox.jpg" width="840" height="200"><br />
        </div>
      </div>
      <div id="level2">
<br>
<a href="http://nutservao.com/articulos.php">Recetas mas solicitadas </a> 
<br>
      <div id="rgtBar">
        <h3>Webs Recomendadas</h3>
<a href="http://nutseo.com/web_css3w.php">Inicio de Sistema</a><br />
<br />
<a href="http://twitter.com/#search?q=Peru" target ="_blank">Twitter Peru</a><br />
<br />
<img src="scripts/ayuda.GIF" width="145" height="120"><br />
      
        
        <h3>Expertos</h3>
<a href="http://localht/clinica/menutienda1.php">Inicio de Sistema</a><br />
<br />
      </div>
        <div id="main">

<?php
$servername = "sql301.epizy.com";
$username = "epiz_24342";
$password = "n0qwQ07";
$dbname = "epiz_24023342_admin";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
date_default_timezone_set("America/Lima");

$today = date('Y-m-d');
$today1 = date('m');
$today2 = date('d');
$hora1 = date('h');
$hora2 = date('i');
$hora3 = date('a');
//echo $today;
echo "<br>";
//echo $hora1.":".$hora2.$hora3;
$hora4 = $hora1.":".$hora2.$hora3;
//echo $hora4;



?>
<h1><div align="center">Datos del sistema </div></h1>
<br>

<?php 

$tipo = $_POST["acodi11"]; 
//$tipo1 = $_POST["acodi12"]; 
$tipo2 = $_POST["acodi13"];
$tipo3 = $_POST["acodi14"]; 
//$tipo4 = $_POST["acodi15"];
//'SELECT * FROM rece2010 where cod_prep like \'%P%\' order by cod_prep ';
echo 'datos para codigo '.$tipo;
$today = date('Y-m-d');

echo 'para dia '.$today;

//$sql = "INSERT INTO egresos //(codigo,articulo,habitacion,monto,local,fecha,hora) VALUES //('$dni','$nombre','$habit','$monto','$local','$today','$hora4')";
//$result = $conn->query($sql);


$sql = mysqli_query($conn,"SELECT nombre AS 'aanom' from articulo WHERE codigo = '$tipo' GROUP BY articulo.codigo");
$row = mysqli_fetch_array($sql);
$sum = $row['aanom'];
echo "nombre: ";
echo $sum;
echo "<br>";

//$totala = mysqli_query($conn,"SELECT nombre AS 'aanom' from articulo WHERE codigo = '$tipo' GROUP BY articulo.codigo ") or die(mysql_error()); 

//$data2= mysqli_result($totala, 0 );
//echo "<br>";
//echo "<b> Producto; </b>".$data2;
//$data2=trim($data2);

mysqli_query($conn,"INSERT INTO ventas (codigo,nombre, cantidad,precio,fecha ) VALUES ('$tipo', '$sum', '$tipo2', '$tipo3', '$today')");

$sql = mysqli_query($conn,"SELECT SUM( cantidad ) AS tcosto from compras 
WHERE compras.codigo LIKE  '$tipo' GROUP BY compras.codigo ") ;
$row = mysqli_fetch_array($sql);
$tcompras = $row['tcosto'];
echo "total compras: ";
echo $tcompras;
echo "<br>";

$sql = mysqli_query($conn,"SELECT SUM( cantidad ) AS tcosto1 from ventas 
WHERE ventas.codigo LIKE  '$tipo' GROUP BY ventas.codigo ") ;
$row = mysqli_fetch_array($sql);
$tventas = $row['tcosto1'];
echo "total ventas: ";
echo $tventas;
echo "<br>";

$tsaldo = $tcompras-$tventas;
echo "<b> Saldo; </b>".$tsaldo;

mysqli_query($conn,"DELETE FROM saldo where codigo LIKE '$tipo' "); 

mysqli_query($conn,"INSERT INTO saldo(codigo,nombre, compras, ventas, saldo,fecha) VALUES ('$tipo','$sum','$tcompras','$tventas','$tsaldo','$today')" );

$data_p = mysqli_query($conn,"SELECT * FROM ventas where codigo LIKE '$tipo' ") or die(mysql_error()); 
echo '<table border=\'1\'>';
echo '<tr> <th>Codigo</th> <th>Descripcion</th><th>ventas</th>
<th>precio</th><th>fecha</th> </tr>';
while($info = mysqli_fetch_array( $data_p )) 
{ 
echo "<tr><td>"; 
Print $info['codigo']; 
echo "</td><td>"; 
Print $info['nombre']; 
echo "</td><td>"; 
Print $info['cantidad']; 
echo "</td><td>"; 
Print $info['precio']; 
echo "</td><td>"; 
Print $info['fecha'];
echo "</td></tr>"; 
//echo "<br>";
} 
echo "<p>";
echo "</table>";
?> 


 
<br>
<br>

          <div id="tipDay">
            "Consejo del dia" Comer 5 frutas o verduras al dia
          </div>
          <dl>
            <dt>Si tomas productos milagro para adelgazar, lo unico que bajara de peso sera tu cartera </dt>
            <dd>Hay que desconfiar de las pastillas para adelgazar</dd>
            ...
          </dl>
          <h1>Menu 2</h1>
<br>
<a href="http://www.killerphp.com/videos/php-sessions-part1.php">php objetos </a>
<br>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
