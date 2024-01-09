<?php
    function treeGenerator($treeSize)
    {
        $blankSpaces = $treeSize;
        $asterisks = 1;
        for($i = 0; $i<$treeSize; $i++){
            for($j = 0; $j< ($blankSpaces - 1); $j++) {
                echo '&nbsp';
            }
            for($k = 0; $k<$asterisks; $k++){
                echo "⭐";
            }
            echo "<br>";
            $asterisks++;
            $blankSpaces--;
        }
    }
    $treeSize = $_POST["treeSize"];
    echo "Haz generado una cantidad $treeSize estrellas<br><br>";
    treeGenerator($treeSize);
    ?>
  