<?php 

$connect = mysqli_connect("localhost", "root", "", "foodlust"); 

if (!$connect) {
	echo "Error db connection";
}
