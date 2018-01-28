<?php

$bp = mysqli_connect("localhost", "root", "","ispit3");
if(!$bp){
    die("Problem sa povezivanjem sa bazom podataka");
}

$JMBG = filter_input(INPUT_GET, "JMBG");

$upit = "delete from Vlasnik where JMBG='$JMBG'";
$rezultat = mysqli_query($bp, $upit);
if(!$rezultat){
    die("Greška pri izvršavanjue delete upita");
}

header("Location: index.php");