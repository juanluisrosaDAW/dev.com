<?php



	$a = 1;
	while ($a < 8)
		$a += 3;
	print $a; // el valor obtenido es 10
        
        
        $a = 5;
	do
		$a -= 3;
	while ($a > 10);
	print $a; // el bucle se ejecuta una sola vez, con lo que el valor obtenido es 2

        for ($a = 5; $a<10; $a+=3) {
          print $a; // Se muestran los valores 5 y 8
          print "<br />";
     }
        
        
        ?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

