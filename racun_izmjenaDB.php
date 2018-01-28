<?php


$bp = mysqli_connect("localhost", "root", "","ispit3");
if(!$bp){
    die("Problem sa povezivanjem sa bazom podataka");
}

$ID = filter_input(INPUT_POST, "ID");
$Vlasnik_JMBG = filter_input(INPUT_POST, "Vlasnik_JMBG");
$Stanje = filter_input(INPUT_POST, "Stanje");


$upit = "update Racun set Vlasnik_JMBG='$Vlasnik_JMBG',Stanje='$Stanje' where ID='$ID'";
$rezultat = mysqli_query($bp, $upit);
if(!$rezultat){
    die("Greška pri izvršavanju upita za update");
}
header("Location: index.php");

