<?php
    function funNotA ($a, $b) {
      echo (!$a) ? 'true' : 'false';
    };

    function funAorB($a, $b) {
      echo ($a || $b) ? 'true' : 'false';
    };

    function funAandB($a, $b) {
      echo ($a && $b) ? 'true' : 'false';
    };

    function funAxorB($a, $b) {
      echo ($a xor $b) ? 'true' : 'false';
    };

    function flexibleComparison($a, $b) {
      echo ($a == $b) ? 'true' : 'false';
    };

    function strictComparison($a, $b) {
      echo ($a === $b) ? 'true' : 'false';
    };
?>