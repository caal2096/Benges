<?php
$conexion = mysqli_connect("localhost","root","","bienesnacionales");

$query = $conexion->query("SELECT * FROM tsede ORDER BY nombresede ASC");

echo '<option value="">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['idsede']. '" >' . $row['nombresede'] . '</option>' . "\n";
}
