<?php
    function displayBool($c) {
      if ($c == 1) {
        echo 'true';
        } else if ($c == 0) {
        echo 'false';
        } else {
        echo 'none';
        };
    };

    function funNotA($a, $b) {
      $c = (!$a);
      displayBool($c);
    };

    function funAorB($a, $b) {
      $c = $a || $b;
      displayBool($c);
    };

    function funAandB($a, $b) {
      $c = ($a && $b);
      displayBool($c);
    };

    function funAxorB($a, $b) {
      $c = ($a xor $b);
      displayBool($c);
    };

    function flexibleComparison($a, $b) {
      $c = ($a == $b);
      displayBool($c);
    };

    function strictComparison($a, $b) {
      $c = ($a === $b);
      displayBool($c);
    };
?>