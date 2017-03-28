<?php
$number = htmlspecialchars($_GET["number"]);
if(is_numeric($number) && $number > 0 && $number < 100){
    echo "<table>";
    for($i=0; $i<7; $i++){
        echo "<tr>";
            echo "<td>$number x $i</td>";
            echo "<td>=</td>";
            echo "<td>" . $number * $i . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else{
    echo "<p>Please enter a number between 0 and 100.</p>";
}
?>