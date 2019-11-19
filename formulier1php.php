<?php
/**
 * Created by PhpStorm.
 * User: misch
 * Date: 15-11-2019
 * Time: 10:14
 */

$dbh = new PDO('mysql:host=localhost;dbname=apen;port=8889', 'root', 'root');


if(isset($_GET{'apensoort'})) {
 $soort= $_GET{'apensoort'};
  $omschrijving = $_GET{'omschrijving'};
  $sql = "insert into aap (soort) values ($soort)";
    $sql = "insert into leefgebied (omschrijving) values ('$omschrijving')";
  $dbh->query($sql);
}

//SELECT * FROM aap join aap_has_leefgebied on aap.idaap = aap_has_leefgebied.idaap;

//query leefgebieden
//SELECT * FROM aap_has_leefgebied join leefgebied on leefgebied.idleefgebied = leefgebied.idleefgebied;

//$boodschappen = $dbh->query('SELECT * from product');
//foreach ($boodschappen as $boodschap) {
   // echo "<li>".$boodschap{'omschrijving'}."</li>";
//}

//if(isset($_GET{'idboodschap'})) {
   // $idproduct = $_GET{'idproduct'};
  //  $omschrijving = $_GET{'omschrijving'};
  //  $sql = "insert into boodschappen2 (idproduct, omschrijving) values ($idproduct, '$omschrijving')";
  //  $dbh->query($sql);
//}