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
        <div class="frame">
          <div class="text-wrapper">Quem alterou por último</div>
          <div class="frame-2">
            <div class="ultimo-acesso">
              <img class="ellipse" src="../img/dianne.png" />
              <div class="frame-3">
                <div class="nome">Dianne</div>
                <div class="text-wrapper-2">Último acesso</div>
                <div class="text-wrapper-2">16/08/2023</div>
              </div>
            </div>
            <div class="ultimo-acesso">
              <img class="ellipse" src="../img/felipe.png" />
              <div class="frame-3">
                <div class="nome">Philip</div>
                <div class="text-wrapper-2">Último acesso</div>
                <div class="text-wrapper-2">16/08/2023</div>
              </div>
            </div>
            <div class="ultimo-acesso">
              <img class="ellipse" src="../img/cristiano.png" />
              <div class="frame-3">
                <div class="nome">Kristin</div>
                <div class="text-wrapper-2">Último acesso</div>
                <div class="text-wrapper-2">16/08/2023</div>
              </div>
            </div>
            <div class="ultimo-acesso">
              <img class="ellipse" src="../img/japa.png" />
              <div class="frame-3">
                <div class="nome">Arlene</div>
                <div class="text-wrapper-2">Último acesso</div>
                <div class="text-wrapper-2">16/08/2023</div>
              </div>
            </div>
          </div>
        </div>
        <div class="overlap">
          <div class="overlap-group">
            <div class="frame-4">
              <div class="div-wrapper"><div class="text-wrapper-3">Itens na sua conta</div></div>
              <div class="frame-5"><div class="text-wrapper-4">Em falta</div></div>
            </div>
            <img class="vector" src="img/vector-1.svg" />
            <img class="img" src="img/vector-2.svg" />
          </div>
          <div class="frame-6">
            <button class="text-wrapper-5-button">Baixar lista completa</button>
        </div>
        </div>
        <div class="frame-8"><div class="text-wrapper-6">Produtos próximos do vencimento</div></div>
        <div class="frame-wrapper">
          <div class="frame-9">
            <div class="frame-10">
              <div class="lista">
                <div class="frame-11">
                  <input type="checkbox" class="checkbox"> 
                  <div class="div-2">Arroz Bernardo - 1kg</div>
                </div>
              </div>
              <div class="lista">
                <div class="frame-11">
                  <input type="checkbox" class="checkbox"> 
                  <div class="div-2">Feijão Bernardo - 1kg</div>
                </div>
              </div>
              <div class="lista">
                <div class="frame-11">
                  <input type="checkbox" class="checkbox"> 
                  <div class="div-2">Picles Bernardo - 1kg</div>
                </div>
              </div>
              <div class="lista">
                <div class="frame-11">
                  <input type="checkbox" class="checkbox"> 
                  <div class="div-2">Creatina Bernardo - 1kg</div>
                </div>
              </div>
            </div>
            <button class="button"> Ver Mais</button>
          </div>
        </div>
        <div class="frame-14">
          <div class="frame-9">
            <div class="frame-10">
              <div class="lista">
                <div class="frame-11">
                  
                  <div class="div-2">Arroz Bernardo - 1kg</div>
                </div>
                
              </div>
              <div class="lista">
                <div class="frame-11">
               
                  <div class="div-2">Feijão Bernardo - 1kg</div>
                </div>
              </div>
              <div class="lista">
                <div class="frame-11">
                  
                  <div class="div-2">Picles Bernardo - 1kg</div>
                </div>
                
              </div>
              <div class="lista">
                <div class="frame-11">
                 
                  <div class="div-2">Creatina Bernardo - 1kg</div>
                </div>
              </div>
            </div>
            <button class="button"> Ver Mais</button>
          </div>
        </div>
        <div class="frame-15">
          <div class="frame-10">
            <div class="lista">
              <div class="frame-11">
                <input type="checkbox" class="checkbox"> 
                <p class="lista-de-compras-do">
                  <span class="span">Lista de compras do </span> <span class="text-wrapper-8">usuário 1</span>
                </p>
              </div>
              <div class="frame-16"><div class="text-wrapper-9">Baixar Lista</div></div>
            </div>
            <div class="lista">
              <div class="frame-11">
                <input type="checkbox" class="checkbox"> 
                <p class="div-2">
                  <span class="text-wrapper-10">Lista de compras do </span>
                  <span class="text-wrapper-8">usuário 2</span>
                </p>
              </div>
              <div class="frame-16"><div class="text-wrapper-9">Baixar Lista</div></div>
            </div>
          </div>
          <button class="button"> Ver Mais</button>
    
        </div>
        <div class="frame-17">
          <div class="frame-18">
            <div class="frame-19">
              <div class="frame-20">
                <img class="icon-bell-ringing" src="img/icon-bell-ringing.png" />
                <div class="text-wrapper-11"><?php echo $_SESSION["nome"]?></div>
              </div>
              <div class="frame-21">
                <div class="ellipse-2"></div>
                <div class="text-wrapper-12">Lista disponível</div>
              </div>
            </div>
            <div class="ellipse-3"></div>
          </div>
        </div>
        <a href="../LISTA/LISTA.html"><div class="plus-wrapper"><img class="plus" src="../img/Group 12.svg" /></div></a>
        <div class="text-wrapper-13">Compras de Maio</div>
        <div class="group">
          <div class="overlap-group-2">
            <div class="img-wrapper"><img class="plus-2" src="../img/Plus.svg" /></div>
            <img class="ellipse-4" src="../img/dianne.png" />
          </div>
        </div>
        <img class="vector-2" src="img/vector.svg" />
        <img class="checkmark-3" src="img/checkmark-16.svg" />
      
        <button class="frame-22">
          <div class="text-wrapper-14"><a href="../html/ADICIONAR_ESTOQUE.html">Adicionar Produtos</a></div>
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
          <div class="frame-24">
            <img class="img-2" src="../img/group0.svg" />
            <div class="text-wrapper-18"><a href="../html/LISTA.html">Listas</a></div>
          </div>
          
          <div class="frame-25">
            <img class="img-2" src="../img/user-10.svg" />
            <div class="text-wrapper-18"><a href="../html/usuario.html">Usuário</a></div>
          </div>
          <div class="frame-25-1">
            <img class="img-2" src="../img/group0.svg">
            <div class="text-wrapper-18"><a href="../html/relatorio.html">Relatório</a></div>
          </div>
          <div class="frame-26">
            <div class="frame-27">
              <img class="img-2" src="../img/Vector.svg" />
              <div class="text-wrapper-19">Estoque</div>
            </div>
            <img class="img-2" src="img/arrow-drop-down-1.svg" />
          </div>
          <div class="frame-28">
            <div class="frame-27">
              <img class="img-3" src="../img/group9.svg" />
              <div class="text-wrapper-20"><a href="../html/ADICIONAR_ESTOQUE.html">Adicionar Produto</a></div>
            </div>
          </div>
          <div class="frame-29">
            <div class="frame-27">
              <img class="img-3" src="../img/eye-10.svg" />
              <div class="text-wrapper-20"><a href="../html/Ver Estoque.html">Ver Estoque</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>