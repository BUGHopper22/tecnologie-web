<?php
    $contentActualPage='
    <div class="titlePage">
        <h1>Accessori</h1>
    </div>
    <div id="category">
        <div class="outer outer-accessoricuffie">
            <div class="inner">
                <h2>Accessori per Cuffie</h2>
                <p>Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Suspendisse tincidunt
                    vel risus quis euismod. Aenean id tellus
                    ut risus luctus mattis a nec mauris. .
                </p>
                <a class="button" href="./accessoriCuffie.php?ntab=Accessori" title=”Accessori per Cuffie”>Tutti i prodotti</a>
            </div>
        </div>

        <div class="outer outer-accessoricasse">
            <div class="inner dx">
                <h2>Accessori per Casse</h2>
                <p>Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Suspendisse tincidunt
                    vel risus quis euismod. Aenean id tellus
                    ut risus luctus mattis a nec mauris. .
                </p>
                <a class="button" href="./accessoriCasse.php?ntab=Accessori" title=”Accessori per Casse”>Tutti i prodotti</a>
            </div>
        </div>
    </div>';
    require_once('php/functions.php');	//è un include di function
    BuildPage("Accessori",$contentActualPage);	//funzione di buildpage dentro al file function
?>