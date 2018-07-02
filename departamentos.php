<?php
/**
 * Created by PhpStorm.
 * User: Jonatan Moncada
 * Date: 28/6/2018
 * Time: 3:21 p.m.
 */

$conexion=mysqli_connect("127.0.0.1","root","","paises");
$id_pais=$_POST["id_pais"];
$query=$conexion->query("select * from departamentos where id_pais=$id_pais");
echo'<option value="0">Seleccione</option>';

while($row=$query->fetch_array())
{
    echo '<option value="'.$row['id_departamento'].'">'.$row['nombre'].'</option>'."\n";
}