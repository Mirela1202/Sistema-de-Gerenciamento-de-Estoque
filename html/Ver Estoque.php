<?php
include ("../php/protect.php")
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
            <img class="img" src="../img/eye-10.svg" />
            <div class="ver-estoque">Ver Estoque</div>
          </div>
        </div>
        <img class="checkmark" src="img/checkmark-16.svg" />
        <div class="overlap">
          <div class="frame-9">
            <div class="frame-10"><p class="p">Todos os itens do Estoque</p></div>
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
          <div class="frame-12">
            <img class="img-2" src="../img/group0.svg" />
            <div class="text-wrapper-7"><a href="../html/LISTA.php">Listas</a></div>
          </div>
          <div class="frame-13-1">
            <img class="img-2" src="../img/user-10.svg" />
            <div class="text-wrapper-7"><a href="../html/usuario.php">Usuário</a></div>
          </div>
          <div class="frame-13">
            <img class="img-2" src="../img/group0.svg"/>
            <div class="text-wrapper-7"><a href="../html/relatorio.php">Relatório</a></div>
          </div>
          <div class="frame-14">
            <div class="frame-8">
              <img class="img-2" src="../img/group0.svg" />
              <div class="text-wrapper-8"><a href="../html/CadastroEstoque.php">Estoque</a></div>
            </div>
          </div>
          <div class="frame-15">
            <div class="frame-8">
              <img class="img" src="../img/group9.svg" />
              <div class="text-wrapper-9"><a href="../html/ADICIONAR_ESTOQUE.php">Adicionar Estoque</a></div>
            </div>
          </div>
          <div class="frame-16">
            <div class="frame-8">
              <img class="img" src="../img/eye-10.svg" />
              <div class="text-wrapper-9"><a href="../html/Ver Estoque.php">Ver Estoque</a></div>
            </div>
          </div>
          <div class="rectangle"></div>
        </div>
        <div class="frame-17">
          <div class="frame-18">
<!-- Começa bagunca -->
<?php

?>
<!-- Acaba BAGUNÇA -->
            <div class="frame-19">
              <div class="lista">
                <div class="frame-20">
                 
                  <div class="text-wrapper-10">Arroz Tio João- 1kg</div>
                </div>
                <div class="frame-21">
                  <div class="frame-22">
                    
                    
                    <div class="text-wrapper-11">
                      <button id="decrease1">-</button>
                      <input type="number" id="count1" value="0" min="0">
                      <button id="increase1">+</button>
                    </div>
                  </div>
                  <div class="frame-23"><div class="text-wrapper-12">Remover</div></div>
                </div>
              </div>
              <div class="lista-2">
                <div class="frame-20">
                  
                  <div class="text-wrapper-10">Refrigerante (chiuau)</div>
                </div>
                <div class="frame-21">
                  <div class="frame-22">
                    
                    <div class="text-wrapper-11">
                      <button id="decrease2">-</button>
                      <input type="number" id="count2" value="0" min="0">
                      <button id="increase2">+</button>
                    </div>
                  </div>
                
                  <button class="frame-23">
                    <div class="text-wrapper-12">Remover</div>
                  </button>
                
                </div>
              </div>
              <div class="lista-2">
                <div class="frame-20">
                 
                  <div class="text-wrapper-10">Feijão Carioca</div>
                </div>
                <div class="frame-21">
                  <div class="frame-22">
                    
                    
                    <div class="text-wrapper-11">
                      <button id="decrease3">-</button>
                      <input type="number" id="count3" value="0" min="0">
                      <button id="increase3">+</button>
                    </div>
                  </div>
                  <div class="frame-23"><div class="text-wrapper-12">Remover</div></div>
                </div>
              </div>
              <div class="lista-2">
                <div class="frame-20">
                  
                  <div class="text-wrapper-10">Água de coco (West)</div>
                </div>
                <div class="frame-21">
                  <div class="frame-22">
                    
                    
                    <div class="text-wrapper-11">
                      <button id="decrease4">-</button>
                      <input type="number" id="count4" value="0" min="0">
                      <button id="increase4">+</button>
                    </div>
                    
                  </div>
                  <div class="frame-23"><div class="text-wrapper-12">Remover</div></div>
                </div>
              </div>
            </div>
            <div class="frame-24">
              <div class="lista-2">
                <div class="frame-20">
                 
                  <div class="text-wrapper-10">Arroz Tio João- 1kg</div>
                </div>
                <div class="frame-21">
                  <div class="frame-22">
                    
                    
                    <div class="text-wrapper-11">
                      <button id="decrease5">-</button>
                      <input type="number" id="count5" value="0" min="0">
                      <button id="increase5">+</button>
                    </div>
                    
                  </div>
                  <div class="frame-23"><div class="text-wrapper-12">Remover</div></div>
                </div>
              </div>
              <div class="lista-2">
                <div class="frame-20">
                  
                  <div class="text-wrapper-13">Molho de Tomate(Elefante)</div>
                </div>
                <div class="frame-21">
                  <div class="frame-22">
                    
                    
                    <div class="text-wrapper-11">
                      <button id="decrease6">-</button>
                      <input type="number" id="count6" value="0" min="0">
                      <button id="increase6">+</button>
                    </div>
                    
                  </div>
                  <div class="frame-23"><div class="text-wrapper-12">Remover</div></div>
                </div>
              </div>
              <div class="lista-2">
                <div class="frame-20">
                  
                  <p class="text-wrapper-10">Carne Bovina - (Acem Moído)</p>
                </div>
                <div class="frame-21">
                  <div class="frame-22">
                    
                    
                    <div class="text-wrapper-11">
                      <button id="decrease7">-</button>
                      <input type="number" id="count7" value="0" min="0">
                      <button id="increase7">+</button>
                    </div>
                    
                  </div>
                  <div class="frame-23"><div class="text-wrapper-12">Remover</div></div>
                </div>
              </div>
              <div class="lista-2">
                <div class="frame-20">
                  
                  <p class="text-wrapper-10">Carne de Frango - (Asinha)</p>
                </div>
                <div class="frame-21">
                  <div class="frame-22">
                   
                    
                    <div class="text-wrapper-11">
                      <button id="decrease8">-</button>
                      <input type="number" id="count8" value="0" min="0">
                      <button id="increase8">+</button>
                    </div>
                    
                  </div>
                  <div class="frame-23"><div class="text-wrapper-12">Remover</div></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="../js/java_verestoque.js"></script>
</html>
