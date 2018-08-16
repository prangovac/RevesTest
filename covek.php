<?php
 /*
 Prvo pravimo Class file ;Komentari i imena su data na srpskom jeziku!
 Ime klase je isto kao ime fajla,Zatim dodeljuljemo osobine -properies koje mogu biti javne ,privatne i zašticene,izabrao sam javnu koja se odnosi na klasu ,zatim sledi metod tj.f-ja koja se vezana za klasu;
 Za prebacivanje ove aplikacije treba izraditi i bazu sa svim osobinama koje su u korelaciji sa klasama ,a to smo ranije radili 
 preko DB 
 require_once 'Class/db.php';

	$db = new DB();
	$conn = $db->getConnection(); 
		
	try {	
	
					
		$sql = "SELECT * FROM baze";
		$result = $conn->query($sql);
		$automobili = $result->fetchall( PDO::FETCH_ASSOC );
ali ima nacina prenosa i zahtev je da ne vrsi upis u bazu ...
		
*/
class covek {
 
	public $ime;
	public $osobine;
    public $interakcija;
    public function oniseVole($ciljano){ // $ciljano se odnosi na varijablu na koju se vrši neka funkcija
        $tekuce_stanje = $ciljano->interakcija;
        $milovanja = rand (10,20);// rand f-ja preko koje vršimo odnos 
        if ($this->osobine == "Muskobanjast"){//ovde je subjekrivno data mala "prednost" muškom rodu u iskazivanju ljubavi preko varijable $this koja je nacin kako objekt se odnosi preko metode -oniseVole i onda imamo pristup ka obe varijable.
            $tekuce_stanje += 10;//dodaje ženi,a oduzima coveku 
            
            
        }
        $ciljano->interakcija = $tekuce_stanje - $milovanja;
        
        
    }
}

 
?>