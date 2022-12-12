<!-- Creo una variabile -->
<?php

$variabile = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
Officia quasi a illo asperiores obcaecati minus, numquam fugit. 
Doloribus porro libero, placeat molestias voluptates hic excepturi 
distinctio earum incidunt tempore ducimus.Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
Officia quasi a illo asperiores obcaecati minus, numquam fugit. 
Doloribus porro libero, placeat molestias voluptates hic excepturi 
distinctio earum incidunt tempore ducimus.Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
Officia quasi a illo asperiores obcaecati minus, numquam fugit. 
Doloribus porro libero, placeat molestias voluptates hic excepturi 
distinctio earum incidunt tempore ducimus.Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
Officia quasi a illo asperiores obcaecati minus, numquam fugit. 
Doloribus porro libero, placeat molestias voluptates hic excepturi 
distinctio earum incidunt tempore ducimus.Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
Officia quasi a illo asperiores obcaecati minus, numquam fugit. 
Doloribus porro libero, placeat molestias voluptates hic excepturi 
distinctio earum incidunt tempore ducimus.";
//modifico la variabile con il GET ricevuto nell'URL
$variabileModificata = str_replace($_GET["name"], "***", $variabile);
// str_replace(porzioneDaModificare, conCosa, stringa) - sostituisce una porzione di una stringa con un nuovo valore

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- stampo la variabile -->
    <h1>bisciù in napoletano deriva da: <?php echo $variabile?> </h1>
    <!-- stampo la lunghezza della variabile -->
    <h1>La lunghezza della variabile è <?php echo strlen($variabile) ?></h1>
    <!-- stampo il paragrafo modificato -->
    <h2>Il paragrafo modificato è <?php echo $variabileModificata ?></h2>
    <!-- stampo la lunghezza del paragrafo -->
    <h1>La lunghezza del paragarfo è <?php echo strlen($variabileModificata) ?></h1>
    
</body>
</html>
<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->