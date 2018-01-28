<?php

$bp = mysqli_connect("localhost", "root", "","ispit3");
if(!$bp){
    die("Problem sa povezivanjem sa bazom podataka");
}

$ID = filter_input(INPUT_GET, "ID");

$upit = "delete from Racun where ID='$ID'";
$rezultat = mysqli_query($bp, $upit);
if(!$rezultat){
    die("Greška pri izvršavanjue delete upita");
}

header("Location: index.php");