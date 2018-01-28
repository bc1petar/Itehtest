<?php


$bp = mysqli_connect("localhost", "root", "","ispit3");
if(!$bp){
    die("Problem sa povezivanjem sa bazom podataka");
}

$Vlasnik_JMBG = filter_input(INPUT_POST, "Vlasnik_JMBG");
$Stanje = filter_input(INPUT_POST, "Stanje");

$upit = "Insert into Racun (Vlasnik_JMBG, Stanje) values ('$Vlasnik_JMBG','$Stanje');";
$rezultat = mysqli_query($bp, $upit);
if(!$rezultat){
    die("Greška pri upisivanju u tabelu");
}
header("Location: index.php");