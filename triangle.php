<?php

function draw_triangle($line) {

    for($i = 1; $i <= $line; $i++ ) {
        $j = $i;
        while($j > 0) {
            echo '0';
            $j --;
        }
        echo '<br>';
    }
    
}

draw_triangle(15);
