<?php

if (session_status() != 2) {
    session_start();
} 

?>

    <div class="text-center gameblock container">
        <img src="images/gamestuff.png" class="rounded h-10" alt="Logotipo do site, quatro círculos coloridos, alinhados em diagonal, dois círculos em cada diagonal" style="max-width: 100%; max-heght:100%;"/>    
        <form method="GET" action="includes/createsession.php">
            <div class="lang">
                <span>Idioma / Language:</span>
                <!-- ESCOLHE IDIOMA -->
                <button type="submit" value="pt-BR" id="PT" name="lang" aria-label="Selecionar idioma português"><img src='images/brazil.png' alt='Bandeira do Brasil'/></button>
                <button type="submit" value="en" id="EN" name="lang" aria-label="Select english language"><img src='images/usa.png' alt='Bandeira dos Estados Unidos'/></button>
            </div>
        </form>
        <!-- HR -->
        <div class="separator mt-4 mb-4"></div>
    </div>