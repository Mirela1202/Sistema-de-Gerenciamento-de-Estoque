<?php
include ("../php/conexao.php");
include ("../php/protect.php");
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
            <div class="div-wrapper"><p class="p">Produtos adicionados recentemente ao estoque</p>
            </div>
            <div class="frame-4">
              <div class="frame-5">
 <!-- Aqui começa a bagunça -->
 <?php
                    $usu_id = $_SESSION["id"];
                    $estoq_id = $_SESSION["estoque"];

                    $sql_consulta = "SELECT prod_nome,DATE_FORMAT(prod_inserted_at,'%d/%m/%Y %H:%i:%s') FROM produto WHERE prod_estoque = $estoq_id order by prod_inserted_at desc limit 8;";
                    $query = $conexao->query($sql_consulta);
                    $resultados = $query->fetch_all(PDO::FETCH_ASSOC);
                    echo "<div class='lista'>
                        <div class='frame-6'>
                          <div class='text-wrapper-3'>Produto</div>
                          </div>
                          <div class='frame-6'><div class='text-wrapper-4'>Quando foi Adicionado</div></div>
                        </div>";
    
                    foreach ($resultados as $linha){
                      echo "
                      <div class='lista'>
                        <div class='frame-6'>
                          <div class='text-wrapper-3'>$linha[0]</div>
                          </div>
                          <div class='frame-6'><div class='text-wrapper-4'>$linha[1]</div></div>
                        </div>";
                    }
?>


              </div>
             </div>
          </div>
          <form action="../php/CadastrarProduto.php" method="post">
            <div class="overlap-2">
              <div class="frame-9"><input type="text" class="text-wrapper-7" id="NomeProduto" name="NomeProduto" placeholder="Nome do produto"></div>
              
            </div>
            <div class="overlap-3">
              <div class="frame-10">
                
                <input type="number" class=" text-wrapper-7" id="Quantidade" name="Quantidade" placeholder="Quantidade de itens">
            </div>
           
            </div>
          

            <div class="frame-14">
              <button class="button-1" type="SUBMIT"> Adcionar o item</button>
            </div>
            <div class="overlap-4">
          </form>

            <div class="frame-wrapper">
              <div class="frame-16"><div class="text-wrapper-11">Adicionar Produtos no estoque <b><?php echo $_SESSION['nome_estoque'] ?></b></div></div>
            </div>
            <img class="vector" src="../img/vector-3.svg" />
            <img class="img" src="../img/vector-4.svg" />
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
            <div class="text-wrapper-14">Adicionar Produtos no Estoque</div>
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
              <div class="text-wrapper-18"><a href="../html/CadastroEstoque.php">Estoque</a></div>
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
    </div>
  </body>
</html>