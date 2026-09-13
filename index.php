<?php

// 1. Definisci 4 variabili con i tipi richiesti
$integro = 25;              // Integer
$decimale = 18.5;           // Float
$testo = "Ciao Hackademy";  // String
$booleano = true;           // Boolean

// 2. Fai comparire a schermo il tipo di dato di ciascuna variabile
var_dump($integro);
var_dump($decimale);
var_dump($testo);
var_dump($booleano);

echo "\n-------------------\n";

// 3. Dichiara una costante chiamata "nome" con valore "Donato"
const NOME = "Donato"; // Oppure: define("NOME", "Donato");

// 4. Visualizza a schermo il valore della costante
echo "Il valore della costante è: " . NOME . "\n";

// 5. Prova a cambiare il valore della costante
// NOME = "Giuseppe"; 
// NOTA: Se decommenti la riga sopra, PHP genererà un ERRORE di sintassi (Parse/Fatal Error) 
// perché le costanti non possono essere riassegnate dopo la loro definizione.