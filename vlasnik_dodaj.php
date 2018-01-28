<!DOCTYPE html>

<html>
    <head>
        <title>Dodaj vlasnika</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css" type="text/css">
    </head>
    <body>
        <div id="izmeni_div">
            <form action="vlasnik_dodajDB.php" method="post">
                <fieldset>
                    <legend>Vlasnik</legend>
                JMBG: <input type="text" id="izmeni" name="JMBG"/><br/>
                Ime: <input type="text" id="izmeni" name="Ime"/><br/>
                Prezime: <input type="text" id="izmeni" name="Prezime"/><br/>
                Adresa: <input type="text" id="izmeni" name="Adresa"/><br/>
                    <?php
                  
                    $bp = mysqli_connect("localhost", "root", "", "ispit3");
                    if (!$bp) {
                        die("Problem sa povezivanjem sa bazom podataka");
                    }
                   
                    $rezultat = mysqli_query($bp, "Select * from Vlasnik");
                    if (!$rezultat) {
                        die("Problem pri izvršavanju upita za učitavanje podataka");
                    }
                  
                    ?>
                </fieldset>
                <hr/>
                <button type="submit" id="izmeni">Dodaj racun</button>
            </form>
        </div>
    </body>
</html>

