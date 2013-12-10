<?php
$apples = rand(1, 50);
$orange = rand(10, 60);
if($apples > $orange ) {
    echo PHP_EOL."Plus de pomme: ".$apples." que d'orange ".$orange.PHP_EOL;
} 
if($orange > $apples) {
    echo PHP_EOL."Plus d'orange: ".$orange." que de pomme ".$apples.PHP_EOL;
}
if($apples == $orange) {
    echo PHP_EOL."Autant de pomme: ".$apples." que d'orange: ".$orange.PHP_EOL;
}