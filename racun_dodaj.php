<!DOCTYPE html>

<html>
    <head>
        <title>Dodaj racun</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css" type="text/css">
    </head>
    <body>
        <div id="izmeni_div">
            <form action="racun_dodajDB.php" method="post">
                <fieldset>
                    <legend>Racun</legend>
                Stanje: <input type="text" id="izmeni" name="Stanje"/><br/>
                Vlasnik_JMBG: <select id="izmeni" name="Vlasnik_JMBG">
                    <?php

                    $bp = mysqli_connect("localhost", "root", "", "ispit3");
                    if (!$bp) {
                        die("Problem sa povezivanjem sa bazom podataka");
                    }
                    $rezultat = mysqli_query($bp, "Select * from Vlasnik");
                    if (!$rezultat) {
                        die("Problem pri izvršavanju upita za učitavanje podataka");
                    }
               
                    while ($Vlasnik = mysqli_fetch_object($rezultat)) {
                        echo "<option value='{$Vlasnik->JMBG}'>{$Vlasnik->Ime} {$Vlasnik->Prezime} {$Vlasnik->Adresa}</option>\n";
                    }
                    ?>
                </select>
                </fieldset>
                <hr/>
                <button type="submit" id="izmeni">Dodaj racun</button>
            </form>
        </div>
    </body>
</html>

