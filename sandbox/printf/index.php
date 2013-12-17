<?php
$name = "Jianyang";
$age = 26;
// $say_hello = "Hello! $name\n";
// echo $say_hello;
// $greeting = printf("Hello %s, you are %d years old.\n","Jianyang", 26);
sscanf("vendrdi, 09 août 2013", "%[^,], %d %s %d", $jour_de_la_semaine, $jour, $mois, $annee);
echo $jour_de_la_semaine . "\n" . $jour . "\n" . $mois . "\n" .$annee . "\n";
echo $jour + $annee . "\n";
 ?>