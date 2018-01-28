<!DOCTYPE html>

<html>
    <head>
        <title>Izmjeni vlasnika</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css" type="text/css">
    </head>
    <body>
        <?php
        $bp = mysqli_connect("localhost", "root", "", "ispit3");
        if (!$bp) {
            die(mysqli_error($bp));
        }

        $JMBG = filter_input(INPUT_GET, "JMBG");


        $rezultat = mysqli_query($bp, "select * from Vlasnik where JMBG=$JMBG");
        if (!$rezultat) {
            die("Greška pri izvršavanju upita");
        }
        if (mysqli_num_rows($rezultat) != 1) {
            die("Greška pri učitavanju tablu");
        }

        $Vlasnik = mysqli_fetch_object($rezultat);
        ?>
        <div id="izmeni_div">
            <form action="vlasnik_izmjenaDB.php" method="post">
                JMBG: <input type="text" id="izmeni" name="JMBG" value="<?php echo $Vlasnik->JMBG; ?>" readonly/><br/>
                Ime: <input type="text" id="izmeni" name="Ime" value="<?php echo $Vlasnik->Ime; ?>"/><br/>
                Prezime: <input type="text" id="izmeni" name="Prezime" value="<?php echo $Vlasnik->Prezime; ?>"/><br/>
                Adresa: <input type="text" id="izmeni" name="Adresa" value="<?php echo $Vlasnik->Adresa; ?>"/><br/>
                <hr/>
                <button type="submit" id="izmeni">Izmjeni</button>
            </form>
        </div>
    </body>