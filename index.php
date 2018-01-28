<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Upravljanje bankarskim poslovanjem</title>
        <link rel = "stylesheet" href="main.css"/>
    </head>
    <body>
        <div id="big_wrapper">
        <div id="vlasnik">
            <table>
                <thead>
                    <tr>
                        <th>JMBG</th>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Adresa</th>
                        <th>Izmjeni</th>
                        <th>Ukloni</th>
                    </tr>
                </thead>
                <?php

                $bp = mysqli_connect("localhost", "root", "", "ispit3");
                if (!$bp) {
                    die(mysqli_error($bp));
                }

                $upit = "select * from Vlasnik";
                $rezultat = mysqli_query($bp, $upit);
                if (!$rezultat) {
                    die(mysqli_error($bp));
                }
                
                while ($red = mysqli_fetch_object($rezultat)) {
                    echo "<tr>\n";
                    echo "<td>{$red->JMBG}</td>\n";
                    echo "<td>{$red->Ime}</td>\n";
                    echo "<td>{$red->Prezime}</td>\n";
                    echo "<td>{$red->Adresa}</td>\n";
                    echo "<td><a href= 'vlasnik_izmjena.php?JMBG={$red->JMBG}'>Izmena</a></td>\n";
                    echo "<td><a href='#' onclick='if(confirm(\"Jeste li sigurni da želite izbrisati ovo?\")) "
                    . "location.href=\"vlasnik_brisanjeDB.php?JMBG={$red->JMBG}\";'> Uklanjanje </a></td> \n";
                }
                ?>
            </table>

            <a id="dodavanje" href="vlasnik_dodaj.php">Dodaj vlasnika</a>
        </div>
        <br/>
        <br/>
        <br/>
        <br/>
        <div id="racun">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Vlasnik_JMBG</th>
                        <th>Stanje</th>
                        <th>Izmjeni</th>
                        <th>Ukloni</th>
                    </tr>
                </thead>
                <?php

                $bp = mysqli_connect("localhost", "root", "", "ispit3");
                if (!$bp) {
                    die(mysqli_error($bp));
                }

                $upit = "select * from Racun";
                $rezultat = mysqli_query($bp, $upit);
                if (!$rezultat) {
                    die(mysqli_error($bp));
                }

                while ($red = mysqli_fetch_object($rezultat)) {
                    echo "<tr>\n";
                    echo "<td>{$red->ID}</td>\n";
                    echo "<td>{$red->Vlasnik_JMBG}</td>\n";
                    echo "<td>{$red->Stanje}</td>\n";
                    echo "<td><a href= 'racun_izmjena.php?ID={$red->ID}'>Izmena</a></td>\n";
                    echo "<td><a href='#' onclick='if(confirm(\"Jeste li sigurni da želite izbrisati ovo?\")) "
                    . "location.href=\"racun_brisanjeDB.php?ID={$red->ID}\";'> Uklanjanje </a></td> \n";
                }
                
                ?>
            </table>
            <a id="dodavanje" href="racun_dodaj.php">Dodaj racun</a>
        </div>
        </div>
    </body>
</html>
