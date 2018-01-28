<?php

$bp = mysqli_connect("localhost", "root", "", "ispit3");
if (!$bp) {
    die("Problem sa povezivanjem sa bazom podataka");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="main.css" type="text/css">
    </head>
    <body>
        <form action="racun_izmjenaDB.php" method="post">
            <?php
            
            $ID = filter_input(INPUT_GET, "ID");

            $rezultat = mysqli_query($bp, "select * from Racun where ID=$ID");
            if (!$rezultat) {
                die("Greška pri učitavanju iz tabele Roba");
            }
            if (mysqli_num_rows($rezultat) != 1) {
                die("Ne postoji takva roba");
            }
            $Racun = mysqli_fetch_object($rezultat);
            ?>
            <div id="izmeni_div">
            <input type="hidden" name="ID" id="izmeni" value="<?php echo $Racun->ID; ?>"/>
            Stanje: <input type="text" id="izmeni" name="Stanje" value="<?php echo $Racun->Stanje; ?>"/><br/>
            Vlasnik_JMBG: <select id="izmeni" name="Vlasnik_JMBG">
            
                <?php

                $rezultat = mysqli_query($bp, "select * from Vlasnik");
                if(!$rezultat){
                    die("Greška pri učitavanju tablea");
                }
              
                if($Vlasnik = mysqli_fetch_object($rezultat)) {
                        echo "<option value='{$Vlasnik->JMBG}'selected>{$Vlasnik->Ime} {$Vlasnik->Prezime} {$Vlasnik->Adresa}</option>\n";
                    }else{
                        echo "<option value='{$Vlasnik->JMBG}'>{$Vlasnik->Ime} {$Vlasnik->Prezime} {$Vlasnik->Adresa}</option>\n";
                    }                   
                
                ?>
            </select>
            <hr/>
            <button type="submit" id="izmeni">Izmjeni racun</button>
        </form>
        </div>
    </body>
</html>