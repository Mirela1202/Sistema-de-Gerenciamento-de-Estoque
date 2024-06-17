<?php
session_start();
include ("../php/protect.php");
include("../php/conexao.php");

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="../css/styleguide_adicionarestoque.css" />
    <link rel="stylesheet" href="../css/style_adicionarestoque.css" />
  </head>
  <body>
    <div class="desktop-ADICIONAR">
      <div class="div">
        <div class="overlap">
          <div class="overlap-group">
          <form action="../php/CadastroEstoque.php" method="POST">
            <div class="overlap-2">
                <div class="frame-9"><input type="text" class="text-wrapper-7" id="descricao" name="descricao" placeholder="Nome do Estoque"></div>

            </div>
            <div class="frame-14">
              <button type="submit" class="button-1"> Criar o Estoque</button>
            </div>
          <div class="overlap-4">
           
            <div class="frame-wrapper">
              <div class="frame-16"><div class="text-wrapper-11">Criar Estoque</div></div>
            </div>
            <img class="vector" src="../img/vector-3.svg" />
            <img class="img" src="../img/vector-4.svg" />
          </div>
          </form>
            <div class="div-wrapper"><p class="p">Estoques Cadastrados</p></div>
            <div class="frame-4">
              <div class="frame-5">

                  <form action = "../php/selecionarEstoque.php" method="POST">
                  <button class="button" type="SUBMIT"> Selecionar Estoque </button>



<?php 
                $usu_id = $_SESSION["id"];

                $sql_consulta = "SELECT estoque.est_id,estoque.est_desc, usuario.usu_nome FROM filiado AS fil LEFT JOIN estoque ON fil.fil_estoq = estoque.est_id LEFT JOIN usuario ON fil.fil_master = usuario.usu_id WHERE fil_id_usuario = '$usu_id' OR fil_master = '$usu_id';";
                $query = $conexao->query($sql_consulta);
                $resultados = $query->fetch_all(PDO::FETCH_ASSOC);
                echo "<div class='lista'>
                    <div class='frame-6'>
                      <div class='text-wrapper-3'>NOME DO ESTOQUE</div>
                      </div>
                      <div class='frame-6'><div class='text-wrapper-4'>USUARIO QUE CRIOU</div></div>
                    </div>";

                foreach ($resultados as $linha){
                  echo "
                  <div class='lista'>
                    <div class='frame-6'>
                      <input type='radio' id='estoque' name='estoque' value=$linha[0]> 
                      <div class='text-wrapper-3'>$linha[1]</div>
                      </div>
                      <div class='frame-6'><div class='text-wrapper-4'>$linha[2]</div></div>
                    </div>
                    
";
                } 
               
?>
                </form>
                </div>             
            </div>
          </div>

        </div>
        <div class="frame-17">
          <div class="frame-18">
            <div class="frame-19">
              <div class="frame-20">
                <img class="icon-bell-ringing" src="../img/icon-bell-ringing.png" />
                <div class="text-wrapper-12"><?php echo $_SESSION["nome"]?></div>
              </div>
              <div class="frame-21">
                <div class="ellipse-2"></div>
                <div class="text-wrapper-13">Lista disponível</div>
              </div>
            </div>
            <div class="ellipse-3"></div>
          </div>
        </div>
        <div class="frame-22">
          <div class="frame-23">
            <img class="img-2" src="../img/group9.svg" />
            <div class="text-wrapper-14">Criar um novo Estoque</div>
          </div>
        </div>
      </div>
      <div class="overlap-5">
          <img class="checkmark-3" src="../img/checkmark-16.svg" />
          <div class="rectangle"></div>
          <div class="group">
            <div class="overlap-group-2">
              <div class="text-wrapper-15">Lager</div>
              <div class="text-wrapper-16">Kontroll</div>
            </div>
          </div>
          <div class="frame-24">
            <img class="img-3" src="../img/smart-home-10.svg" />
            <div class="text-wrapper-17"><a href="../html/TELA INICIAL.php">Inicio</a></div>
          </div>
          <div class="frame-25">
            <img class="img-3" src="../img/group0.svg" />
            <div class="text-wrapper-17"><a href="../html/LISTA.php">Listas</a></div>
          </div>
          <div class="frame-26">
            <img class="img-3" src="../img/user-10.svg" />
            <div class="text-wrapper-17"><a href="../html/usuario.php">Usuário</a></div>
          </div>
          <div class="frame-27">
            <div class="frame-28">
              <img class="img-3" src="../img/Vector.svg" />
              <div class="text-wrapper-18">Estoque</div>
            </div>
          </div>
          <div class="frame-29">
            <div class="frame-28">
              <img class="img-2" src="../img/group9.svg" />
              <div class="text-wrapper-19"><a href="../html/ADICIONAR_ESTOQUE.php">Adicionar Estoque</a></div>
            </div>
          </div>
          <div class="frame-30">
            <div class="frame-28">
              <img class="img-2" src="../img/eye-10.svg" />
              <div class="text-wrapper-19"><a href="../html/Ver Estoque.php">Ver Estoque</a></div>
            </div>
          </div>
          <div class="rectangle"></div>
          <div class="frame-31">
            <img class="img-3" src="../img/group0.svg"/>
            <div class="text-wrapper-17"><a href="../html/relatorio.php">Relatório</a></div>

          </div>
        </div>
    </div>

    
  </body>
</html>

