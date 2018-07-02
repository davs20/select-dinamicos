<?php 
$conexion=mysqli_connect("127.0.0.1","root","","paises");
$id_departamento=$_POST["id_departamento"];
$query=$conexion->query("select * from municipios where id_departamento=$id_departamento");
echo'<option value="0">Seleccione</option>';

while($row=$query->fetch_array())
{
    echo '<option value="'.$row['id_municipio'].'">'.$row['nombre'].'</option>'."\n";
}
 ?>