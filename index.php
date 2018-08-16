<?php
 /*
Ovaj file zove 'covek.php' u akciju-uključujući jednom ...
onda kreiramo varijablu izvedenu od objekta klase-u našem sl. čovek ... ima ih 2 :
$muskarac
$zena
Onda dodajemo osobine toj instanci objekta;

*/
include_once ('covek.php');
//kreirana vraijabla od klase i objekta čovek
$muskarac = new covek();
//Dodate osobine i vrednosti
$muskarac->ime = "Dejan";
$muskarac->osobine = "Muskobanjast";

// Ova interakcija nije u zahtevu ali ja sam je namerno stavio kao međusobnu interakciju varijabli .
$muskarac->interakcija = 100;
//kreirana druga vraijabla od klase i objekta čovek
$zena = new covek();
$zena->ime = "Jelena";
$zena->osobine = "Zenstvena";
$zena->interakcija = 100;
//metoda i interakcija 
$muskarac->oniseVole ($zena);
$zena->oniseVole ($muskarac);
/*
 Da bi prikazali njihovu međusobnu interakciju onda sledi sledeće...
*/
echo 'Kada se sretnu:';
echo '<br>';
echo 'On <br>'.$muskarac->ime. "<br>sada ima".$muskarac->interakcija."<br>ljubavnih poena!<br>" ;
echo '<br>Ona<br>'.$zena->ime. "<br>sada ima".$zena->interakcija."<br>ljubavnih poena!" ;

?>