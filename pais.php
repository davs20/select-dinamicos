<?php
/**
 * Created by PhpStorm.
 * User: Jonatan Moncada
 * Date: 26/6/2018
 * Time: 6:11 p.m.
 */

//conexion
$conexion=mysqli_connect("127.0.0.1","root","","paises");

//parametro
$el_continente=$_POST['continente'];

//query
$query=$conexion->query("select * from paises WHERE id_continente=$el_continente");

echo'<option value="0">Seleccione</option>';

while($row=$query->fetch_array())
{
    echo '<option value="'.$row['id_pais'].'">'.$row['nombre'].'</option>'."\n";
}