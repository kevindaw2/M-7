<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <p>
            <?php
            $Nom = 'Kevin';
            $Edad = 23;

            echo "Primera Pàgina amb PHP de $Nom $Edad";

            function canvi() {
                $Nom = 'Xavier';
                echo "<br>";
                echo "Ahora la variable '$ nom= $Nom vale $Nom";
                echo "<br>";
            }

            //Si voleu comentar una línia ho podeu fer d’aquesta manera...
            #...o bé d’aquesta altra.
            /* Però si necessiteu comentar
              més línies aquesta és la millor
              manera de fer − ho! */

            canvi();

            echo "$Nom vuelve a tener el valor de $Nom";
            echo "<br>";
            echo "Array objects";
            echo "<br>";

            $cars = array("Volvo", "BMW", "Toyota");
            $arrlength = count($cars);

            for ($x = 0; $x < $arrlength; $x++) {
                echo $cars[$x];
                echo "<br>";
            }

            /* El resultat de l'execució de les intruccions anteriors és:
              Volvo, BMW, Toyota
              1395
             */

            echo "<br>";
            echo "Exercisi Tablita <br>";

            function tablita() {

                for ($x = 0; $x < 10; $x++) {
                    echo "estamos en DAW2";
                    echo "<br>";
                }
            }

            tablita();

            function goSomeWhere($n) {

                switch ($n) {
                    case 'n':
                        echo "Go north";
                        break;
                    case 's':
                        echo "Go south";
                        break;
                    case 'e':
                        echo "Go east";
                        break;
                    case 'w':
                        echo "Go west";
                        break;
                    default:
                        echo"we dont go";
                }
            }

            $linea = readline("Comando: ");

            $c = 1;
            $myName = "Fred";
            while ($myName != "Rumplestilskin") {
                if ($myName == "Fred") {
                    $myName = "Leslie";
                } else {
                    $myName = "Marc";
                }

                $c++;

                if ($c == 3) {
                    echo $c;
                    break;
                }
            };
            echo "You lose and I get your baby!\n";
            echo "$linea";

            function ciudades() {

                $ciudades = array("Barcelona", "Madrid", "Valencia", "Sevilla");
                $arrlength = count($ciudades);

                for ($x = 0; $x < $arrlength; $x++) {
                    echo "<br>$ciudades[$x]";
                }
                echo "<br>Numero total de ciudades: $arrlength <br>";
            }

            ciudades();

            function paisesyCapitales() {

                $paises = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
                    "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava",
                    "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin",
                    "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm",
                    "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius",
                    "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga",
                    "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");

                $arrlength = count($paises);
                echo "Numero total de paises $arrlength <br>";

                foreach ($paises as $capitales => $capital) {
                 
                    echo "La capital de $capitales es $capital\n"; 
                }
            }

            paisesyCapitales();
            
            
            function afegirElementArray () {
                $array = array("1", "2", "3", "4", "5");
                echo $array; 
            }
            
            afegirElementArray(); 
            
            ?>


        </p>

    </body>
</html>