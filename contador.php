<?php
function incrementarContador() {
    $arquivo = 'contador.txt';

    if (!file_exists($arquivo)) { // verificando se o arquivo existe, 
        file_put_contents($arquivo, '0'); // se não existir, cria um e inicializa com 0
    }

    $contador = (int)file_get_contents($arquivo); // lendo valor do contador
    
    $contador++; // incrementa o contador, soma 1 ao contador 
    
    file_put_contents($arquivo, $contador); // salva valor do contador
    
    return $contador; // retorna valor atual
}
?>
