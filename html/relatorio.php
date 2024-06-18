<?php
include ("../php/protect.php")
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="../css/styleguide_relatorio.css" />
    <link rel="stylesheet" href="../css/style_relatorio.css" />
    <style>
      .input-field {
        margin-bottom: 10px;
      }
    </style>
  </head>
  <body>
    <div class="desktop-RELATORIO-DE">
      <div class="div">
        <div class="frame-wrapper">
          <div class="frame-4">
            <div class="frame-5">
              <div class="frame-6">
                <img class="icon-bell-ringing" src="../img/icon-bell-ringing.png" />
                <div class="text-wrapper-3"><?php echo "$_SESSION[nome] -- ID:$_SESSION[id]"?></div>
              </div>
              <div class="frame-7">
                <div class="ellipse-2"></div>
                <div class="text-wrapper-4">Lista disponível</div>
              </div>
            </div>
            <div class="ellipse-3"></div>
          </div>
        </div>
        <div class="div-wrapper">
          <div class="frame-8">
            <img class="img" src="../img/group9.svg" />
            <div class="text-wrapper-5">Adicionar Produtos</div>
          </div>
        </div>
        <img class="checkmark" src="../img/checkmark-16.svg" />
        <div class="frame-9">
          <div class="frame-10">
            <label for="data-inicial" class="text-wrapper-6">Data Inicial</label>
            <input type="date" id="data-inicial" name="data-inicial" class="input-field" />
          </div>
        </div>
        <div class="frame-11">
          <div class="frame-10">
            <label for="data-final" class="text-wrapper-6">Data Final</label>
            <input type="date" id="data-final" name="data-final" class="input-field" />
            
          </div>
          
        </div>
        <div class="frame-15">
          <button type="submit" class="text-wrapper-8">Carregar Relatório</button>
        </div>
         <div class="frame-12">
<?php
  include ("../php/conexao.php");
  include ("../php/protect.php");

  $estoque = $_SESSION["estoque"];
  $data_inicial ='' ;
  $data_fim='';
  
      $sql_code = "SELECT DATE_FORMAT(mov_data,'%d/%m/%Y') as DATA,
	mov_qtd AS quantidade,
	case
	when mov_tipo = 1 then 'Entrada'
	when mov_tipo = 0 then 'Saida'
	Else 'desconhecido'
	end as tipoMovimento,
  produto.prod_nome
  from movimentacao
  left join produto on movimentacao.mov_prod = produto.prod_id where mov_est = $estoque;";

$query = mysqli_query($conexao,$sql_code);
$resultados =[];

while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
  $resultados[] = $row;
}
echo "<table>
      <tr>
        <th>Data Movimento</th>
        <th>Quantidade</th>
        <th>Tipo de Movimentaçõa</th>
        <th>Produto Movimentado</th>";
foreach($resultados as $resultado){
  echo"<tr>
          <td>$resultado[DATA]</td>
          <td>$resultado[quantidade]</td>
          <td>$resultado[tipoMovimento]</td>
          <td>$resultado[prod_nome]</td>
        </tr>
        ";
}
echo "</table>";
?>

        </div>
        </div>
        <!-- <div class="frame-12">
          <div class="frame-13"><div class="text-wrapper-7">Lista</div></div>
          <input type="text" class="input-field" placeholder="Digite a lista que deseja" />
        </div>
        <div class="frame-14">
          <div class="frame-13"><div class="text-wrapper-7">Usuário</div></div>
          <input type="text" class="input-field" placeholder="Digite o nome do usuário que deseja" />
        </div> -->

        <div class="overlap">
          <div class="frame-16">
            
            <div class="frame-18"><p class="text-wrapper-10">Relatório de entrada e Saída</p></div>
          </div>
          <img class="vector" src="../img/vector-5.svg" />
          <img class="vector-2" src="../img/vector-6.svg" />
        </div>
        <div class="overlap-group">
          <div class="group">
            <div class="overlap-group-2">
              <div class="text-wrapper-11">Lager</div>
              <div class="text-wrapper-12">Kontroll</div>
            </div>
          </div>
          <div class="frame-19">
            <img class="img-2" src="../img/smart-home-10.svg" />
            <div class="text-wrapper-13"><a href="../html/TELA INICIAL.php">Inicio</a></div>
          </div>
          <div class="frame-20">
            <img class="img-2" src="../img/group0.svg" />
            <div class="text-wrapper-13"><a href="../html/LISTA.php">Listas</a></div>
          </div>
          <div class="frame-21">
            <img class="img-2" src="../img/user-10.svg" />
            <div class="text-wrapper-13"><a href="../html/usuario.php">Usuário</a></div>
          </div>
          <div class="frame-21-1">
            <img class="img-2" src="../img/group0.svg"/>
            <div class="text-wrapper-13"><a href="../html/relatorio.php">Relatório</a></div>
          </div>
          <div class="frame-22">
            <div class="frame-8">
              <img class="img-2" src="../img/Vector.svg" />
              <div class="text-wrapper-14"><a href="../html/CadastroEstoque.php">Estoque</a></div>
            </div>
          </div>
          <div class="frame-23">
            <div class="frame-8">
              <img class="img" src="../img/group9.svg" />
              <div class="text-wrapper-15"><a href="../html/ADICIONAR_ESTOQUE.php">Adicionar Estoque</a></div>
            </div>
          </div>
          <div class="frame-24">
            <div class="frame-8">
              <img class="img" src="../img/eye-10.svg" />
              <div class="text-wrapper-15"><a href="../html/Ver Estoque.php">Ver Estoque</a></div>
            </div>
          </div>
          <div class="rectangle"></div>
        </div>
      </div>
    </div>
  </body>
</html>
