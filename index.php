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

            echo "<br>";

            function dibuixaAsteriscs() {

                $n = 5; //nombre de columnes que te la piramide

                for ($x = 0; $x <= $n; $x++) {
                    for ($j = 0; $j < $x; $j++) {
                        echo "*"; //imprime *, salta con br y vuelve a imprimir ** 
                    }
                    echo "<br>"; //salto de linea 
                }

                for ($x = $n; $x >= 0; $x--) {//desde 5 a 0 
                    for ($j = 1; $j <= $x; $j++) {
                        echo "*"; //imprime *m salta y vuelve a imprimir * 
                    }
                    echo "<br>"; //salto de linea 
                }
            }

            dibuixaAsteriscs();

            //ORDENACIO D'ARRAYS//
            /*
              de menor a major i de major a menor per claus (keys)
             *  de menor a major i de major a menor per valors (values)
             *             
             */

            function ordenaArrays() {

                $fruites = array("3 lemon", "2 orange", "1 strawberry", "9 watermelon");

                /*
                  sort($fruites); // sort ordena la matriu de menor a major
                  rsort($fruites); //rsort ordena la matriu de major a menor, asigna noves claus pels elements de la matriu, elimina totes les claus existents
                  asort($fruites);  //asort ordena la matriu mantenin la relacio dels indexs amb els elements de la matriu, principalment per ordenar valors reals significatius
                  arsort($fruites); //arsort ordena la matriu segons els ultims valors pasats
                  ksort($fruites); // ksort ordena una matriu per clau, mantenin la clau, util per arrays associatives
                  krsort($fruites); //krsort ordena al reves que ksort
                 *                  */

                natsort($fruites); //natsort ordena cadenes alfanumeriques amb un ornden natrual, 1,2,3,4
                
                echo "\n Natural order sorting\n";print_r($fruites); 
                echo "<br>"; 
               
                function print_caps(Iterator $iterator) { //function imprime en mayusculas 
                    echo strtoupper($iterator->current()) . "\n";
                    return TRUE;
                }

                $it = new ArrayIterator($fruites); //creacio objecte per iterar l'array
                iterator_apply($it, "print_caps", array($it)); //LEMON ORANGE STRAWEBERRY WATERMELON
            }
 
            ordenaArrays();
            
            function ordenaClausArray () {
                echo "<br>";
                                
                $fruites = array("lemon"=>"3", "orange" =>"9", "strawberry"=>"10", "watermelon"=>"6");
                ksort($fruites);
                
                echo "keys: lemon, orange, strawberry, watermelon <br>";
                echo "\n Array ordenada per claus de menor a major [l][o][s] ";print_r($fruites);
                
                krsort($fruites); 
                
                echo "keys: lemon, orange, strawberry, watermelon";
                echo "\n Array ordenada per claus de major a menor [w][s][l]"; print_r($fruites);
            }
            
            function ordenaValorsArray (){
                echo '<br>';
                
                $personas = array("Pedro"=>"23","Juan"=>"55", "Carlos"=>"29");
                natsort($personas); 
                
                echo "\n Array ordenada por valores de menor a mayor\n"; print_r($personas);
                
                arsort($personas); 
                echo "\n Array ordenada por valores de menor a mayor\n"; print_r($personas); 
            }
           
            ordenaClausArray();
            ordenaValorsArray(); 
            
            function comprovaMinuscules ($str) {
                
                for($x = 0; $x < strlen($str); $x++){ //itera en cada letra de la frase 
                    echo $str[$x]; //vocal de la frase
                    if(ord($str[$x]) >= 'A' && ord($str[$x]) <= 'Z'){
                        echo "no hi han mayuscules "; 
                        
                    } else {
                        echo "hi han minusucules";
                    }
                }
            }
            comprovaMinuscules("abcdefgh"); 
            ?>

        </p>

    </body>
</html>