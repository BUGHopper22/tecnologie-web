<?php
    $contentActualPage='
    <div id="formContainer">
        <div class="loginContainer">
            <h2>Accedi</h2>
            <form  class="formCenter" method="post" action="php/insertUser.php">
                <p>Username:</p>
                <input type="text" name="userid">
                <p>Password:</p>
                <input type="password" name="psw">
                <input type="hidden" name="tasto" value="loginTasto">
                <input  class="formBtn" type="submit" value="Accedi">
            </form>
        </div>
        <div class="registerContainer">
            <h2>Registrati</h2>
            <form class="formCenter" method="post" action="php/insertUser.php">
                <p>Inserisci un nome:</p>
                <input type="text" name="name" placeholder="inserisci il nome">
                <p>Inserisci un cognome:</p>
                <input type="text" name="surname" placeholder="inserisci il cognome">
                <p>Inserisci un username:</p>
                <input type="text" name="userId" placeholder="inserisci il nome utente">
                <p>Inserisci una email:</p>
                <input type="email" name="email" placeholder="inserisci email">
                <p>Scegli la tua password:</p>
                <input type="password" name="psw1" placeholder="inserisci password">
                <p>Conferma la password:</p>
                <input type="password" name="psw2" placeholder="inserisci password">
                <input type="hidden" name="tasto" value="registerTasto">
                <!-- <button type="button" type="submit" class="formBtn">Registrati</button> -->
                <input  class="formBtn" type="submit" value="Registrati">

            </form>
        </div> 
    </div>';
    require_once('php/functions.php');	//è un include di function
    BuildPage("Login",$contentActualPage);	//funzione di buildpage dentro al file function
?>