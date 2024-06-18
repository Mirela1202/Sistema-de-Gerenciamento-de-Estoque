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
                <div class="text-wrapper-3"><?php echo "$_SESSION[nome]"?></div>
              </div>
            </div>
            <div class="ellipse-3"></div>
          </div>
        </div>
        <div class="div-wrapper">
          <div class="frame-8">
            <img class="img" src="../img/group9.svg" />
            <div class="text-wrapper-5">Relatorio</div>
          </div>
        </div>
        <img class="checkmark" src="../img/checkmark-16.svg" />

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
          <div class="frame-21-1">
            <img class="img-2" src="../img/user-10.svg" />
            <div class="text-wrapper-13"><a href="../html/usuario.php">Usuário</a></div>
          </div>
          <div class="frame-24">
            <img class="img-2" src="../img/group0.svg"/>
            <div class="text-wrapper-13"><a href="../html/relatorio.php">Relatório</a></div>
          </div>
          <div class="frame-20">
            <div class="frame-8">
              <img class="img-2" src="../img/Vector.svg" />
              <div class="text-wrapper-14"><a href="../html/CadastroEstoque.php">Estoque</a></div>
            </div>
          </div>
          <div class="frame-22">
            <div class="frame-8">
              <img class="img" src="../img/group9.svg" />
              <div class="text-wrapper-15"><a href="../html/ADICIONAR_ESTOQUE.php">Adicionar Produto</a></div>
            </div>
          </div>
          <div class="frame-23">
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
