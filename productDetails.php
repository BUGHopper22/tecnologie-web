<?php

    // if(isset($_REQUEST["modello"])){
    //     echo ("modello è definito");
        $modello=$_REQUEST["modello"];
        $marca=$_REQUEST["marca"];
        $img=$_REQUEST["img"];
        $descrizione=$_REQUEST["descrizione"];
        $prezzo=$_REQUEST["prezzo"];
        // $categoria=$_REQUEST["categoria"];
        // $ntab=$_REQUEST["ntab"];
        
    // }
    // else
    //     echo("modello non è definito");


    


    $contentActualPage='
    <h1>'.$modello.'</h1>
    <div id="productContainer">
        <div class="imgContainer">
            <img class="productImg" src="./img/prodotti/'.$img.'" alt="'.$modello.'" >
        </div>
        <div class="descriptionContainer">
            <div class="product">
                <p>
                    Marca: '.$marca.'<br>
                    Descrizione: '.$descrizione.'<br>
                </p>
            </div>
            <div class="buyContainer">
                <div class="productPrice">
                    <h3>Pezzo: '.$prezzo.'€</h3>
                </div>
                <a class="button" href="">Aggiungi al carrello</a>
            </div>
        </div>
    </div>';
    require_once('php/functions.php');	//è un include di function
    BuildPage($modello,$contentActualPage);	//funzione di buildpage dentro al file function
?>