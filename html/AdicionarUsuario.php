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
    <form action="../php/AdicionarUsuarioEstoque.php" method="post">
    <div class="desktop">
      <div class="frame-wrapper">
        <div class="frame">
          <div class="div">
              <div class="frame-2">
                <div class="text-wrapper"></div>
                <div class="div-wrapper">
                  <div class="text-wrapper-2">Novo usuário</div>
                  <input type="text" id="id_novo_usuario" name="id_novo_usuario" placeholder="ID Novo Usuario">
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
                <div class="text-wrapper-5">Adicionar Usuario</div>
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
