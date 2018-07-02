<?php
/**
 * Created by PhpStorm.
 * User: Jonatan Moncada
 * Date: 26/6/2018
 * Time: 6:11 p.m.
 */
//conexion
$conexion=mysqli_connect("127.0.0.1","root","","paises");
//query
$query=$conexion->query("select * from continentes");

echo'<option value="0">Seleccione</option>';

while($row=$query->fetch_array())
{
    echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>'."\n";
}