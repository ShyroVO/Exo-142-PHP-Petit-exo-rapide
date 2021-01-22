<?php
// 1
echo "Le texte de votre choix.";
echo "<br>";

// 2
$uneVariable = "Le texte de votre choix.";
echo $uneVariable;
echo "<br>";

// 3
$unTableau = ["chat", "chien", "cheval", "aigle"];
echo $unTableau[1];
echo "<br>";

// 4
for ($i = 0; $i < count($unTableau); $i++){
    echo "valeur " . $i . " = " . $unTableau[$i] . "<br>";
}

//5
?>
<br>
<ul>
    <?php

    foreach ($unTableau as $value){
        echo "<li>" . $value . "</li>";
    }

    ?>
</ul>
