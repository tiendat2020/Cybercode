<?php

function answer()
{

    for ($i = 1; $i <= 100; $i++) {
        $a = $i / 10;
        $b = $i / 10;
        if ($i % 15 == 0 ){
            echo $i. "Fizz Buzz". '<br>';
        } else if ($i % 3 == 0) {
            echo $i . " " . "Fizz".'<br>';
        } else if ($a > 3 && $a < 4) {
            echo $i . " " . "Fizz".'<br>';
        } else if ($i % 5 == 0) {
            echo $i . " " . "Buzz ".'<br>';
        } else if ($b > 5 && $b < 6) {
            echo $i . " " . "Buzz ".'<br>';
        } else if ($i % 3 === 0 && $b == 5) {
            echo "Fizz" . "Buzz".'<br>';
        } else {
            echo $i . " ".'<br>';
        }
    }
}
echo answer();
?>
