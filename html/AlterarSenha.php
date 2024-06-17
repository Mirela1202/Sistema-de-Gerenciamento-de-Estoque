<?php
include ("../php/protect.php")
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="../css/styleguide_alterarSenha.css" />
    <link rel="stylesheet" href="../css/style_AlterarSenha.css" />
  </head>
  <body>
    <form action="../php/AlterarSenhaUsuario.php" method="post">
    <div class="desktop">
      <div class="frame-wrapper">
        <div class="frame">
          <div class="div">
              <div class="frame-2">
                <div class="text-wrapper"></div>
                <div class="div-wrapper">
                  <div class="text-wrapper-2">Senha Atual</div>
                  <input type="password" id="senhaAtual" name="senhaAtual" placeholder="senha Atual">
                </div>
              </div>
              <div class="frame-2">
                <div class="text-wrapper"></div>
                <div class="div-wrapper">
                  <div class="text-wrapper-2"> Nova Senha</div>
                  <input type="password" id="novaSenha" name="novaSenha" placeholder="Nova Senha">
                </div>
              </div>
            </div>
            <div class="group">
              <div class="overlap-group">
                <div class="text-wrapper-3">Lager</div>
                <div class="text-wrapper-4">Kontroll</div>
              </div>
            </div>
            <div class="frame-4">
              <button type="submit" class="frame-5">
                <div class="text-wrapper-5">Alterar a senha</div>
              </button>
         
            <p class="j-possui-login">
                <a href="usuario.php"><span class="text-wrapper-6">Cancelar</span></a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </form>
  </body>
</html>
