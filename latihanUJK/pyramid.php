<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        if ($j == 5) {
            echo $i."*"; 
        } else {
            echo $i." ";   
        }  
    }  echo "<br/>";
}
