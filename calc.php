<?php
    function boo($c) {
     if ($c=="bool(true)") {
        echo 'true';
      } else {
        echo 'false';
      }
    };

    function funNotA($a, $b) {
      $c=(!$a);
      boo($c);
    };

    function funAorB($a, $b) {
      $c=($a || $b);
      boo($c);
    };

    function funAandB($a, $b) {
      $c=($a && $b);
      boo($c);
    };

    function funAxorB($a, $b) {
      $c=($a xor $b);
      boo($c);
    };

    function flexibleComparison($a, $b) {
      $c=($a==$b);
      boo($c);
    };

    function strictComparison($a, $b) {
      $c=($a===$b);
      boo($c);
    };
?>