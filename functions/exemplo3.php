<?php

function fazerCafe($tipo = "capuccino"){
    return "fazendo uma xícara de: $tipo <br>";
}

echo fazerCafe("expresso");
echo fazerCafe();

?>