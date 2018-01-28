<?php

$bp = mysqli_connect("localhost", "root", "","ispit3");
if(!$bp){
    die("Problem sa povezivanjem sa bazom podataka");
}

$JMBG = filter_input(INPUT_POST, "JMBG");
$Ime = filter_input(INPUT_POST, "Ime");
$Prezime = filter_input(INPUT_POST, "Prezime");
$Adresa = filter_input(INPUT_POST, "Adresa");


$upit = "update Vlasnik set Ime='$Ime',Prezime='$Prezime',Adresa='$Adresa' where ID='$ID'";
$rezultat = mysqli_query($bp, $upit);
if(!$rezultat){
    die("Greška pri izvršavanju upita za update");
}
header("Location: index.php");

