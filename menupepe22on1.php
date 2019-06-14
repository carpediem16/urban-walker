<!DOCTYPE html>
<html>
<head>
  <title>Menu Pepe</title>
</head>
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
<body>
  <div id="lftBar">

<?php
// Make a MySQL Connection
$servername = "sql301.epizy.com";
$username = "epiz_24023342";
$password = "n0qwY4JPQ07";
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
//echo "<br>";
//echo $hora1.":".$hora2.$hora3;
$hora4 = $hora1.":".$hora2.$hora3;
//echo $hora4;

$data_p = mysqli_query($conn,"SELECT * FROM articulo order by nombre,fecha ") or die(mysql_error()); 
echo '<table border=\'1\'>';
echo '<tr> <th>Codigo</th> <th>Descripcion</th>  </tr>';
while($info = mysqli_fetch_array( $data_p )) 
{ 
echo "<tr><td>"; 
Print $info['codigo']; 
echo "</td><td>"; 
Print $info['nombre']; 
echo "</td></tr>"; 
//echo "<br>";
} 
echo "<p>";
echo "</table>";

?>
<img src="scripts/sonrie.jpg" width="59" height="57"><br />
<br>
<a href="http://twitter.com/#search?q=peru" target ="_blank">Twitter Peru</a><br />
  </div>
  <div id="level0">
    <div id="level1">
      <div id="topBar">
        <form method=get action="">
          <input type="text" name="query" size="12">
          <input type="submit" value="Buscar">
        </form>
        Una sonrisa no cuesta nada. El cliente siempre tiene la razon.
        <div id="advBar">
<!..<img src="scripts/logobox.jpg" width="840" height="200"><br />
        </div>
      </div>
      <div id="level2">
<br>
<a href="http://twitter.com/#search?q=peru" target ="_blank">Twitter Peru</a><br />
<br>
      <div id="rgtBar">
        <h3>Webs Recomendadas</h3>
<a href="http://caminante16.epizy.com/menupepe22on.php">Inicio de Sistema</a><br />
<br />
<a href="http://twitter.com/#search?q=peru" target ="_blank">Twitter Peru</a><br />
<br />
<img src="scripts/ayuda.GIF" width="145" height="120"><br />
      
        
        <h3>Expertos</h3>
<a href="http://twitter.com/#search?q=peru" target ="_blank">Twitter Peru</a><br />
      </div>
        <div id="main">
<?php
$data_p = mysqli_query($conn,"SELECT * FROM saldo order by nombre ") or die(mysql_error()); 
echo '<table border=\'1\'>';
echo '<tr> <th>Codigo</th> <th>Descripcion</th><th>compras</th>
<th>ventas</th><th>saldo</th><th>fecha</th>  </tr>';
while($info = mysqli_fetch_array( $data_p )) 
{ 
echo "<tr><td>"; 
Print $info['codigo']; 
echo "</td><td>"; 
Print $info['nombre']; 
echo "</td><td>"; 
Print $info['compras']; 
echo "</td><td>"; 
Print $info['ventas']; 
echo "</td><td>"; 
Print $info['saldo']; 
echo "</td><td>"; 
Print $info['fecha'];
echo "</td></tr>"; 
//echo "<br>";
} 
echo "<p>";
echo "</table>";


?>



<br />
<form action="ventas20191.php" method="post"> 
Ingresar codigo: <input type="text" name="acodi11" VALUE= "1" size="4"> 
Ingresar cantidad: <input type="text" name="acodi13" VALUE= "24" size="4">
Ingresar precio: <input type="text" name="acodi14" size="4">
<input type="submit" value="Entrar"> 
</form> 



<h1><div align="center">Menu del sistema de Hostal</div></h1>
<a href="http://caminante16.epizy.com/saldo_totalpepe4on.php">Saldo Total de todos los negocios</a>
<br>
<a href="http://caminante16.epizy.com/saldo_totalpepe5on.php">Saldo Total de todos los negocios del mes </a>
<br>
<a href="http://caminante16.epizy.com/totalion.php">Saldo Total de ingresos de todos los negocios por codigo</a>
<br>
<a href="http://caminante16.epizy.com/total1on.php">Saldo Total de gastos de todos los negocios por codigo</a>
<br>
<a href="http://caminante16.epizy.com/form_insclion.php">agregar ingresos</a>
<br>
<a href="http://caminante16.epizy.com/form_insgastopepe.php">agregar Gastos </a>
<br>
<br>
<a href="http://caminante16.epizy.com/compras2019.php">agregar compras stock </a>
<br>
<a href="http://caminante16.epizy.com/ventas2019.php">agregar ventas stock </a>
<br>
<br>
<a href="http://caminante16.epizy.com/tenlastingon.php">10 ultimos ingresos</a>
<br>
<a href="http://caminante16.epizy.com/tenlastegreon.php">10 ultimos gastos</a>
<br>
<a href="http://caminante16.epizy.com/cierraingppcon.php">cerrar mes ingresos</a>
<br>
<a href="http://caminante16.epizy.com/cierragasppcon.php">cerrar mes gastos</a>

</h3>
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
<a href="http://twitter.com/#search?q=peru" target ="_blank">Twitter Peru</a><br />
<br>
<br>
        </div>
      </div>
    </div>
  </div>
</body>
</html>