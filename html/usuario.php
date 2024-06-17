<?php
include ("../php/protect.php");
include ("../php/conexao.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="../css/styleguide_usuario.css" />
    <link rel="stylesheet" href="../css/style_usuario.css" />
  </head>
  <body>
    <div class="desktop-usuario">
      <div class="div">
        <div class="frame">
          <div class="frame-2">
            <div class="frame-3">
              <div class="frame-4">
                <img class="icon-bell-ringing" src="img/icon-bell-ringing.png" />
                <div class="text-wrapper"><?php echo $_SESSION["nome"]?></div>
              </div>
              <div class="frame-5">
                <div class="ellipse"></div>
                <div class="text-wrapper-2">Lista disponível</div>
              </div>
            </div>
            <div class="ellipse-2"></div>
          </div>
        </div>
        <div class="frame-6">
          <div class="text-wrapper-3">Usuários com Acesso ao Estoque <?php echo "<b>".$_SESSION['nome_estoque']."</b>"?></div>
          <button class="div-wrapper">
            <div class="text-wrapper-4">Adicionar Usuários</div>
          </button>
        </div>
        <div class="frame-11">
          <div class="frame-wrapper">
            <div class="frame-12">
              <img class="img" src="../img/autism 1.svg" />
              <div class="text-wrapper-8">Acessibilidade</div>
            </div>
          </div>
          <div class="frame-wrapper">
            <div class="frame-12">
              <img class="img-2" src="../img/chat-bot 1.svg" />
              <div class="text-wrapper-8">Fale Conosco</div>
            </div>
          </div>
          <div class="frame-13">
            <div class="frame-12">
              <img class="img-2" src="../img/comment-alt-question 1.svg" />
              <div class="text-wrapper-8">Ajuda e perguntas frequentes</div>
            </div>
            <img class="chevron-double-right" src="img/chevron-double-right-1.svg" />
          </div>
          <div class="frame-13">
            <div class="frame-14">
              <img class="img" src="../img/password-check 1.svg" />
              <div class="text-wrapper-8"><a class="sair" href="../html/AlterarSenha.php">Alterar senha</a></div>
            </div>
          </div>
          <div class="frame-13">
            <div class="frame-12">
              <img class="img-2" src="../img/user-circle 1.svg" />
              <p class="conectado-como-usu">
                <span class="span">Conectado como: </span> <span class="text-wrapper-9"><?php echo $_SESSION["nome"]?></span>
              </p>
            </div>
            <div class="frame-15">
              <div class="text-wrapper-10">
              <a href="../php/logout.php" class="sair">Sair</a>
              </div>
              <img class="logout-arrow-exit" src="../img/Group (1).svg" />
            </div>
          </div>
        </div>
        <div class="frame-7">

<!--  -->
<?php  
  $id_estoq = $_SESSION["estoque"];
  $sql = "SELECT usuario.usu_nome,DATE_FORMAT(fil_inserted_at,'%d/%m/%Y %H:%i:%s') as DATACRIADO FROM filiado LEFT JOIN usuario ON filiado.fil_id_usuario = usuario.usu_id WHERE fil_estoq = $id_estoq;";
  $result = mysqli_query($conexao, $sql);
  $resultados = [];
  
  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $resultados[] = $row;
}

  foreach($resultados as $resultado){
  echo "<div class='frame-8'>
            <div class='ellipse-3'></div>
            <div class='frame-9'>
              <div class='text-wrapper-5'>$resultado[usu_nome]</div>
              <div class='text-wrapper-6'>$resultado[DATACRIADO]</div>
            </div>
            <div class='frame-10'><div class='text-wrapper-7'> Remover Usuário</div></div>
          </div>";
  
  }


?>

<!--  -->
        </div>
        <img class="vector" src="img/vector-3.svg" />
        <img class="vector-2" src="img/vector-4.svg" />
        <div class="overlap">
          <div class="overlap-group-wrapper">
            <div class="overlap-group">
              <div class="text-wrapper-15">Lager</div>
              <div class="text-wrapper-16">Kontroll</div>
            </div>
          </div>
          <div class="frame-25">
            <img class="img-5" src="../img/smart-home-10.svg" />
            <div class="text-wrapper-17"><a href="../html/TELA INICIAL.php">Inicio</a></div>
          </div>
          <div class="frame-26">
            <img class="img-5" src="../img/group0.svg" />
            <div class="text-wrapper-17"><a href="../html/LISTA.php">Listas</a></div>
          </div>
          <div class="frame-27">
            <img class="img-5" src="../img/user-10.svg" />
            <div class="text-wrapper-17"><a href="../html/usuario.php">Usuário</a></div>
          </div>
          <div class="frame-28">
            <img class="img-5" src="../img/group0.svg">
            <div class="text-wrapper-17"><a href="../html/relatorio.php">Relatório</a></div>
          </div>
          <div class="frame-29">
            <div class="frame-30">
              <img class="img-5" src="../img/Vector.svg" />
              <div class="text-wrapper-18"><a href="../html/CadastroEstoque.php">Estoque</a></div>
            </div>
            <img class="img-5" src="img/arrow-drop-down-1.svg" />
          </div>
          <div class="frame-31">
            <div class="frame-30">
              <img class="img-6" src="../img/group9.svg" />
              <div class="text-wrapper-19"><a href="../html/ADICIONAR_ESTOQUE.php">Adicionar Estoque</a></div>
            </div>
          </div>
          <div class="frame-32">
            <div class="frame-30">
              <img class="img-6" src="../img/eye-10.svg" />
              <div class="text-wrapper-19"><a href="../html/Ver Estoque.php">Ver Estoque</a></div>
            </div>
          </div>
          <div class="rectangle-4"></div>
        </div>
      </div>
    </div>
  </body>
</html>
