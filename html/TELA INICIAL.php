<?php
include ("../php/protect.php")
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="../css/styleguide_telainicial.css" />
    <link rel="stylesheet" href="../css/style_telainicial.css" />
  </head>
  <body>
    <div class="desktop-INICIAL">
      <div class="div">
        <div class="overlap">
          <div class="overlap-group">
            <div class="frame-4">
              <div class="div-wrapper"><div class="text-wrapper-3">Itens na sua conta</div></div>
            </div>
            <img class="vector" src="img/vector-1.svg" />
            <img class="img" src="img/vector-2.svg" />
          </div>

        </div>
        <div class="frame-8"><div class="text-wrapper-6">Estoques com Acesso</div></div>
        <div class="frame-wrapper">
          <div class="frame-9">
            <div class="frame-10">
            <?php
              include ("../php/conexao.php");
              include("../php/protect.php");

              $usu_id = $_SESSION["id"];
              $estoq_id = $_SESSION["estoque"];

              $sql_consulta = "SELECT prod_nome,prod_qtd,prod_id, DATE_FORMAT(prod_inserted_at,'%d/%m/%Y %H:%i:%s') AS dataInserida FROM produto WHERE prod_estoque = $estoq_id";
              $query = $conexao->query($sql_consulta);
              $resultados = $query->fetch_all(PDO::FETCH_ASSOC);
                  $count=0;

              echo"<div class='lista'>
                <div class='frame-11'>
                  <div class='div-2'><b>Nome do produto/Quantidade</b></div>
                </div>
              </div>";
              foreach ($resultados as $linha){
                echo "<div class='lista'>
                <div class='frame-11'>
                  <div class='div-2'>$linha[0] --</div>
                  <div class='div-2'>$linha[1]</div>
                </div>
              </div>";
              }

            ?>  
            
            
            </div>
          </div>
        </div>
        <div class="frame-14">
          <div class="frame-9">
            <div class="frame-10">
              <?php 
               $usu_id = $_SESSION["id"];

               $sql_consulta = "SELECT estoque.est_id,estoque.est_desc, usuario.usu_nome FROM filiado AS fil LEFT JOIN estoque ON fil.fil_estoq = estoque.est_id LEFT JOIN usuario ON fil.fil_master = usuario.usu_id WHERE fil_id_usuario = '$usu_id' OR fil_master = '$usu_id';";
               $query = $conexao->query($sql_consulta);
               $resultados = $query->fetch_all(PDO::FETCH_ASSOC);
               echo"<div class='lista'>
                 <div class='frame-11'>
                   <div class='div-2'><b>Nome do Estoque</b></div>
                 </div>
               </div>";
               foreach ($resultados as $linha){
                 echo "<div class='lista'>
                 <div class='frame-11'>
                   <div class='div-2'>$linha[1]</div>
                 </div>
               </div>";
               }             
              ?>
            </div>
         </div>
        </div>

        <div class="frame-17">
          <div class="frame-18">
            <div class="frame-19">
              <div class="frame-20">
                <img class="icon-bell-ringing" src="img/icon-bell-ringing.png" />
                <div class="text-wrapper-11"><?php echo $_SESSION["nome"]?></div>
              </div>
            </div>
            <div class="ellipse-3"></div>
          </div>
        </div>
        <a  ><div class="plus-wrapper"><img class="plus" src="../img/Group 12.svg" /></div></a>
        <div class="text-wrapper-13">Compras de Maio</div>
        <div class="group">
        </div>
        <img class="vector-2" src="img/vector.svg" />
        <img class="checkmark-3" src="img/checkmark-16.svg" />
      
        <button class="frame-22">
          <div class="text-wrapper-14"><a href="../html/ADICIONAR_ESTOQUE.php">Adicionar Produtos</a></div>
        </button>
        <div class="overlap-2">
          <div class="overlap-wrapper">
            <div class="overlap-3">
              <div class="text-wrapper-16">Lager</div>
              <div class="text-wrapper-17">Kontroll</div>
            </div>
          </div>
          <div class="frame-23">
            <img class="img-2" src="../img/smart-home-10.svg" />
            <div class="text-wrapper-18"><a href="../html/TELA INICIAL.php">Inicio</a></div>
          </div>
          
          <div class="frame-25-1">
            <img class="img-2" src="../img/user-10.svg" />
            <div class="text-wrapper-18"><a href="../html/usuario.php">Usuário</a></div>
          </div>
          <div class="frame-29">
            <img class="img-2" src="../img/group0.svg">
            <div class="text-wrapper-18"><a href="../html/relatorio.php">Relatório</a></div>
          </div>
          <div class="frame-24">
            <div class="frame-27">
              <img class="img-2" src="../img/Vector.svg" />
              <div class="text-wrapper-19">
                <a class="estoque" href="../html/CadastroEstoque.php">Estoque</a>  
              </div>
            </div>
          </div>
          <div class="frame-26">
            <div class="frame-27">
              <img class="img-3" src="../img/group9.svg" />
              <div class="text-wrapper-20"><a href="../html/ADICIONAR_ESTOQUE.php">Adicionar Produto</a></div>
            </div>
          </div>
          <div class="frame-28">
            <div class="frame-27">
              <img class="img-3" src="../img/eye-10.svg" />
              <div class="text-wrapper-20"><a href="../html/Ver Estoque.php">Ver Estoque</a></div>
            </div>            
          </div>
        </div>
      </div>
    </div>
  </body>
</html>