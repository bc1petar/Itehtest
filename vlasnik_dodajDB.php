<?php

$bp = mysqli_connect("localhost", "root", "","ispit3");
if(!$bp){
    die("Problem sa povezivanjem sa bazom podataka");
}

$JMBG = filter_input(INPUT_POST, "JMBG");
$Ime = filter_input(INPUT_POST, "Ime");
$Prezime = filter_input(INPUT_POST, "Prezime");
$Adresa = filter_input(INPUT_POST, "Adresa");

$upit = "Insert into Vlasnik (JMBG, Ime, Prezime, Adresa) values ('$JMBG','$Ime','$Prezime', '$Adresa');";
$rezultat = mysqli_query($bp, $upit);
if(!$rezultat){
    die("Greška pri upisivanju u tabelu");
}

header("Location: index.php");