<?php
    if (!isset($_SESSION)){
        session_start();
    }

    if (!isset($_SESSION["id"])){
        die(header("Location: ../html/protect.php"));
        // die("Você não está logado. Para acessar esta pagina acesse o seu login. <p><a href = \"login.html\">Entrar</a></p>");
    }
