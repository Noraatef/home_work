<?php

$string = 'Go to Nawa!';

// var_dump(stripos($string, 'Go'));
if (stripos($string, 'Go') === 0) {
    echo '"Go" is in the first in the string';
} else {
    echo "Not found";
}
