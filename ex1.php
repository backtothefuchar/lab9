<?php

echo "<h1>Multiplication Table</h1>";
echo "<table border=1 width=90%>"; 


    echo "<tr>";
        echo "<td> </td> \n";
        for ($i=1; $i <= 10; $i++) {
            echo "<td> $i </td> \n";
        }
    echo "</tr>";

    for ($j=1; $j <= 10; $j++) { 
        echo "<tr> \n";

        echo "<td> $j </td>";

        for ($i=1; $i <= 10; $i++) {
            $p = $i * $j; 
            echo "<td> $p </td> \n";
        }

        echo "</tr>";
    }
echo "</table>"; 

?>