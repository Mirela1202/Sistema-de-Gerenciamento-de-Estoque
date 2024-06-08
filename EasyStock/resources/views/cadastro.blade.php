<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link href="{{ asset('/css/style_cadastro.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/styleguide_cadastro.css') }}" rel="stylesheet">
  </head>
  <body>
    <form action="../php/CadastroUsuario.php" method="post">
    <div class="desktop">
      <div class="frame-wrapper">
        <div class="frame">
          <div class="div">
            <div class="frame-2">
              <div class="text-wrapper"></div>
              <div class="div-wrapper">
               
                  <div class="text-wrapper-2">Nome Completo</div>
                  <input type="text" id="nome" name="nome" placeholder="Nome Completo">
                </div>
              </div>
              <div class="frame-2">
                <div class="text-wrapper"></div>
                <div class="div-wrapper">
                  <div class="text-wrapper-2">Email</div>
                  <input type="email" id="email" name="email" placeholder="Email">
                </div>
              </div>
              <div class="frame-2">
                <div class="text-wrapper"></div>
                <div class="div-wrapper">
                  <div class="text-wrapper-2">Usuário</div>
                  <input type="text" id="usuario" name="usuario" placeholder="Usuário">
                </div>
              </div>
              <div class="frame-2">
                <div class="text-wrapper"></div>
                <div class="div-wrapper">
                  <div class="text-wrapper-2">Senha</div>
                  <input type="password" id="senha" name="senha" placeholder="Senha">
                </div>
              </div>
              <div class="frame-2">
                <div class="text-wrapper"></div>
                <div class="div-wrapper">
                  <div class="text-wrapper-2">Confirme sua senha</div>
                  <input type="password" id="confirme-senha" name="confirme-senha" placeholder="Confirme sua senha">
                </div>
              </div>
            </div>
            <div class="frame-3">
              <div class="rectangle">
                <input type="checkbox" id="termos" name="termos">
              </div>
              <label for="termos" class="p">Aceitar os termos de uso e privacidade de usuário</label>
            </div>
            <div class="group">
              <div class="overlap-group">
                <div class="text-wrapper-3">Lager</div>
                <div class="text-wrapper-4">Kontroll</div>
              </div>
            </div>
            <div class="frame-4">
              <button type="submit" class="frame-5">
                <div class="text-wrapper-5">Cadastrar</div>
              </button>
         
            <p class="j-possui-login">
              <span class="span">Já possui </span> <span class="text-wrapper-6">login?</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </form>
  </body>
</html>
