<?php
include ("../php/protect.php");
include ("../php/conexao.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="../css/styleguide_verestoque.css" />
    <link rel="stylesheet" href="../css/style_verestoque.css" />
  </head>
  <body>
    <div class="desktop-VER-ESTOQUE">
      <div class="div">
        <div class="frame-wrapper">
          <div class="frame-4">
            <div class="frame-5">
              <div class="frame-6">
                <img class="icon-bell-ringing" src="img/icon-bell-ringing.png" />
                <div class="text-wrapper-3"><?php echo $_SESSION["nome"]?></div>
              </div>

            </div>
            <div class="ellipse-3"></div>
          </div>
        </div>
        <div class="div-wrapper">
          <div class="frame-8">
            <img class="img" src="../img/eye-10.svg" />
            <div class="ver-estoque">Ver Estoque</div>
          </div>
        </div>
        <img class="checkmark" src="img/checkmark-16.svg" />
        <div class="overlap">
          <div class="frame-9">
            <div class="frame-10"><p class="p">Todos os itens do Estoque <b><?php echo $_SESSION['nome_estoque']?></b></p></div>
          </div>
          <img class="vector" src="img/vector-3.svg" />
          <img class="vector-2" src="img/vector-4.svg" />
        </div>
        <div class="overlap-group">
          <div class="group">
            <div class="overlap-group-2">
              <div class="text-wrapper-5">Lager</div>
              <div class="text-wrapper-6">Kontroll</div>
            </div>
          </div>
          <div class="frame-11">
            <img class="img-2" src="../img/smart-home-10.svg" />
            <div class="text-wrapper-7"><a href="../html/TELA INICIAL.php">Inicio</a></div>
          </div>

          <div class="frame-13">
            <img class="img-2" src="../img/user-10.svg" />
            <div class="text-wrapper-7"><a href="../html/usuario.php">Usuário</a></div>
          </div>
          <div class="frame-16">
            <img class="img-2" src="../img/group0.svg"/>
            <div class="text-wrapper-7"><a href="../html/relatorio.php">Relatório</a></div>
          </div>
          <div class="frame-12">
            <div class="frame-8">
              <img class="img-2" src="../img/Vector.svg" />
              <div class="text-wrapper-8"><a href="../html/CadastroEstoque.php">Estoque</a></div>
            </div>
          </div>
          <div class="frame-14">
            <div class="frame-8">
              <img class="img" src="../img/group9.svg" />
              <div class="text-wrapper-9"><a href="../html/ADICIONAR_ESTOQUE.php">Adicionar Produto</a></div>
            </div>
          </div>
          <div class="frame-15">
            <div class="frame-8">
              <img class="img" src="../img/eye-10.svg" />
              <div class="text-wrapper-9"><a href="../html/Ver Estoque.php">Ver Estoque</a></div>
            </div>
          </div>
          <div class="rectangle"></div>
        </div>
        <div class="frame-17">
          <div class="frame-18">
          <div class='frame-24'>

<?php

                $usu_id = $_SESSION["id"];
                $estoq_id = $_SESSION["estoque"];

                $sql_consulta = "SELECT prod_nome,prod_qtd,prod_id, DATE_FORMAT(prod_inserted_at,'%d/%m/%Y %H:%i:%s') AS dataInserida FROM produto WHERE prod_estoque = $estoq_id";
                $query = $conexao->query($sql_consulta);
                $resultados = $query->fetch_all(PDO::FETCH_ASSOC);
                    $count=0;
                foreach ($resultados as $linha){
                  $count= $count + 1;
                  echo "<div class='lista-2'>
                          <div class='frame-20'>
                            <div class='text-wrapper-10'>$linha[0]</div>
                            </div>
                            <div class='frame-21'><div class='frame-22'>
                    <div class='text-wrapper-11'>
                      <button id='decrease$count'>-</button>
                      <input type='number' id='count$count' value='$linha[1]' min='0'>
                      <button id='increase$count'>+</button>
                    </div>
                  </div>
                  <div class='frame-23'><div class='text-wrapper-12'>
                    <form action='../php/removerProduto.php' method='post'>
                      <input type='hidden' name='id' value='$linha[2]'>
                      <button type='submit' value='Remover'>Excluir</button>
                    </form>
                    
                    </div></div>
                    <div class='frame-23-diferente'><div class='text-wrapper-12'>
                    <form action='../php/SalvarProduto.php' method='post'>
                      <input type='hidden' name='id' value='$linha[2]'>
                      <input type='hidden' name='qtd' id=quantidade$count value='$linha[1]'>
                      <button type='submit' value='Remover'>Salvar</button>
                    </form>
                    
                    </div></div>
                </div>
                <script>
                document.getElementById('increase$count').addEventListener('click', function() {
                    var countInput = document.getElementById('count$count');
                    var countInput2 = document.getElementById('quantidade$count');
                    countInput2.value = parseInt(countInput2.value) + 1;
                    countInput.value = parseInt(countInput.value) + 1;
                  });

                  document.getElementById('decrease$count').addEventListener('click', function() {
                    var countInput = document.getElementById('count$count');
                    var countInput2 = document.getElementById('quantidade$count');
                    var countValue = parseInt(countInput.value);
                    if (countValue > 0) {
                      countInput.value = countValue - 1;
                      countInput2.value = countValue - 1;
                    }
                  });
                  </script>

                </div>
 ";
                }
?>

            </div>

          </div>

        </div>
      </div>
    </div>
  </body>
</html>
