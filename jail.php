<?php

array_shift($_SERVER['argv']);

$var = implode(" ", $_SERVER['argv']);



if($var == null) die("Jail, argument missing\n");



function filter($var) {

        if(preg_match('/(`|bash|eval|nc|whoami|open|pass|require|include|file|system|\/)/i', $var)) {

                return false;

        }

        return true;

}c

if(filter($var)) {

        $result = exec($var);

        echo "$result\n";

        echo "Command executed";

} else {

        echo "Restricted characters has been used";

}

echo "\n";

?>
