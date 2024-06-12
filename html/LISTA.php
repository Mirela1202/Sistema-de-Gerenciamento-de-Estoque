<?php
include ("../php/protect.php")
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="../css/styleguide_lista.css" />
    <link rel="stylesheet" href="../css/style_lista.css" />
    
 
  </head>
  <body>
    <div class="desktop-LISTA">
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
        <div class="frame-wrapper">
          <div class="frame-4">
            <div class="frame-5">
              <div class="frame-6">
                <img class="icon-bell-ringing" src="../img/icon-bell-ringing.png" />
                <div class="text-wrapper-3">J HOPE</div>
              </div>
              <div class="frame-7">
                <div class="ellipse-2"></div>
                <div class="text-wrapper-4">Lista disponível</div>
              </div>
            </div>
            <div class="ellipse-3"></div>
          </div>
        </div>
        <div class="frame-8">
          <img class="img" src="../img/group0.svg" />
          <div class="text-wrapper-5">Listas</div>
        </div>
        <div class="overlap">
          <div class="div-wrapper">
            <input type="text" class="text-wrapper-6" id="productNameInput" placeholder="Nome do produto">
          </div>
        </div>
        <div class="frame-9">
          <input type="number" class="text-wrapper-6" id="quantityInput" placeholder="Quantidade de itens">
        </div>
        <div class="frame-10">
          <div class="text-wrapper-7">Lista completa</div>
          <div class="frame-11">
            <button type="submit" class="text-wrapper-8">Baixar lista completa</button>
          </div>
        </div>
        <div class="overlap-group">
          <div class="frame-13">
            <img class="img" src="../img/smart-home-10.svg" />
            <div class="text-wrapper-9"><a href="../html/TELA INICIAL.php">Inicio</a></div>
          </div>
          <div class="frame-14">
            <img class="img" src="../img/group0.svg" />
            <div class="text-wrapper-9"><a href="LISTA.php">Listas</a></div>
          </div>
          <div class="frame-15">
            <img class="img" src="../img/user-10.svg" />
            <div class="text-wrapper-9"><a href="../html/usuario.php">Usuário</a></div>
          </div>
          <div class="frame-15-1">
            <img class="img" src="../img/group0.svg">
            <div class="text-wrapper-9"><a href="../html/relatorio.php">Relatório</a></div>
          </div>
          <div class="frame-16">
            <div class="frame-17">
              <img class="img" src="../img/Vector.svg" />
              <div class="text-wrapper-10">Estoque</div>
            </div>
          </div>
          <div class="frame-18">
            <div class="frame-17">
              <img class="img-2" src="../img/group9.svg" />
              <div class="text-wrapper-11"><a href="../html/ADICIONAR_ESTOQUE.php">Adicionar Estoque</a></div>
            </div>
          </div>
          <div class="frame-19">
            <div class="frame-17">
              <img class="img-2" src="../img/eye-10.svg" />
              <div class="text-wrapper-11"><a href="../html/Ver Estoque.php">Ver Estoque</a></div>
            </div>
          </div>
          <div class="group">
            <div class="overlap-group-2">
              <div class="text-wrapper-12">Lager</div>
              <div class="text-wrapper-13">Kontroll</div>
            </div>
          </div>
        </div>
        <div class="frame-20">
          <div class="frame-21">
            <div class="frame-22">
              <div class="lista">
                <div class="frame-23">
                  
                  <div class="text-wrapper-14">Arroz Tio João- 1kg</div>
                </div>
                <div class="frame-24">
                  <div class="frame-25">
                    
                    <div class="text-wrapper-15">
                      <button id="decrease">-</button>
                      <input type="number" id="count" value="0" min="0">
                      <button id="increase">+</button>
                    </div>
                    
                  </div>
                  <div class="frame-26">
                    <button class="text-wrapper-16">Remover</button>
                  </div>
                </div>
              </div>
              <div class="lista-2">
                <div class="frame-23">
                  
                  <div class="text-wrapper-14">Refrigerante (chiuau)</div>
                </div>
                <div class="frame-24">
                  <div class="frame-25">
                   
                    <div class="text-wrapper-15">
                      <button id="decrease1">-</button>
                      <input type="number" id="count1" value="0" min="0">
                      <button id="increase1">+</button>
                    </div>
                    
                  </div>
                  <div class="frame-26">
                    <button class="text-wrapper-16">Remover</button>
                  </div>
                </div>
              </div>
              <div class="lista-2">
                <div class="frame-23">
                  
                  <div class="text-wrapper-14">Feijão Carioca</div>
                </div>
                <div class="frame-24">
                  <div class="frame-25">
                    
                    <div class="text-wrapper-15">
                      <button id="decrease2">-</button>
                      <input type="number" id="count2" value="0" min="0">
                      <button id="increase2">+</button>
                    </div>
                    
                  </div>
                  <div class="frame-26">
                    <button class="text-wrapper-16">Remover</button>
                  </div>
                </div>
              </div>
              <div class="lista-2">
                <div class="frame-23">
                  
                  <div class="text-wrapper-14">Água de coco (West)</div>
                </div>
                <div class="frame-24">
                  <div class="frame-25">
                    
                    <div class="text-wrapper-15">
                      <button id="decrease3">-</button>
                      <input type="number" id="count3" value="0" min="0">
                      <button id="increase3">+</button>
                    </div>
                    
                  </div>
                  <div class="frame-26">
                    <button class="text-wrapper-16">Remover</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="frame-27">
              <div class="lista-2">
                <div class="frame-23">
                  
                  <div class="text-wrapper-14">Arroz Tio João- 1kg</div>
                </div>
                <div class="frame-24">
                  <div class="frame-25">
                    
                    <div class="text-wrapper-15">
                      <button id="decrease4">-</button>
                      <input type="number" id="count4" value="0" min="0">
                      <button id="increase4">+</button>
                    </div>
                    
                  </div>
                  <div class="frame-26">
                    <button class="text-wrapper-16">Remover</button>
                  </div>
                </div>
              </div>
              <div class="lista-2">
                <div class="frame-23">
                
                  <div class="text-wrapper-17">Molho de Tomate(Elefante)</div>
                </div>
                <div class="frame-24">
                  <div class="frame-25">
                  
                    <div class="text-wrapper-15">
                      <button id="decrease5">-</button>
                      <input type="number" id="count5" value="0" min="0">
                      <button id="increase5">+</button>
                    </div>
                   
                  </div>
                  <div class="frame-26">
                    <button class="text-wrapper-16">Remover</button>
                  </div>
                </div>
              </div>
              <div class="lista-2">
                <div class="frame-23">
                  
                  <p class="text-wrapper-14">Carne Bovina - (Acem Moído)</p>
                </div>
                <div class="frame-24">
                  <div class="frame-25">
                    
                    <div class="text-wrapper-15">
                      <button id="decrease6">-</button>
                      <input type="number" id="count6" value="0" min="0">
                      <button id="increase6">+</button>
                    </div>
                    
                  </div>
                  <div class="frame-26">
                    <button class="text-wrapper-16">Remover</button>
                  </div>
                </div>
              </div>
              <div class="lista-2">
                <div class="frame-23">
                  
                  <p class="text-wrapper-14">Carne de Frango - (Asinha)</p>
                </div>
                <div class="frame-24">
                  <div class="frame-25">
                    
                    <div class="text-wrapper-15">
                      <button id="decrease7">-</button>
                      <input type="number" id="count7" value="0" min="0">
                      <button id="increase7">+</button>
                    </div>
                    
                  </div>
                  <div class="frame-26">
                    <button class="text-wrapper-16">Remover</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="frame-28">
          
          
          <div class="text-wrapper-18">
            <button id="decrease8">-</button>
            <input type="number" id="count8" value="0" min="0">
            <button id="increase8">+</button>
          </div>
          
        </div>
      </div>
    </div>
  </body>
  <script src="../js/java_lista.js"></script>
</html>
