<?php
  global $tituloPagina;
  $tituloPagina = 'Contato';
  include('partes/cabecalho.php');

  $nome = '';
  $email = '';
  $mensagem = '';
  $erroFormulario = '';
  $sucessoFormulario = '';
  if( isset($_POST['submit']) ){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem']; 
    if($nome != '' && $email != '' && $mensagem != ''){
      // usuario preencheu corretamente
      $mensagemEmail = 'Nome: ' . $nome . ' - ';
      $mensagemEmail .= 'Email: ' . $email . ' - ';
      $mensagemEmail .= 'Mensagem: ' . $mensagem . ' - ';
      if(mail('adaltopicotti.jr@gmail.com','Mensagem de contato', $mensagemEmail)){
        // email enviado
        $sucessoFormulario = "Mensagem enviada com sucesso.";
      }
      else {
        // email não enviado
        $erroFormulario = "Falha ao enviar mensagem, tente mais tarde ou através do e-mail xx@xx.com.";
      }
    }
    else{
      // usuario não preencheu todos os campos
      $erroFormulario = "Por favor, verifique o preenchimento dos campos.";
    }
  }

?>
      <header class="pagina-cabecalho">
        <h1 class="pagina-cabecalho__titulo">Contato</h1>
        <?php echo $nome ?>
      </header>
      <section class="pagina-conteudo">
        <p class="text-center">Morbi leo mi, nonummy eget, tristique non, rhoncus non, leo.</p>
        <form action="contato.php" class="formulario" method="post">
          <?php if($erroFormulario != ''): ?>
            <div class="formulario__erro">
              <?php echo $erroFormulario ?>
            </div>
          <?php endif; ?>
          <?php if($sucessoFormulario != ''): ?>
          <div class="formulario__sucesso">
              <?php echo $sucessoFormulario ?>
            </div>
          <?php endif; ?>
          <div class="formulario__grupo formulario__grupo--coluna-esq">
            <label class="formulario__label" for="nome">Nome</label><br>
            <input class="formulario__campo" id="nome" type="text" name="nome">
          </div>
          <div class="formulario__grupo formulario__grupo--coluna-dir">
            <label class="formulario__label" for="email">E-mail</label><br>
            <input class="formulario__campo" id="email" type="email" name="email">
          </div>
          <div class="formulario__grupo">
            <label class="formulario__label" for="mensagem">Mensagem</label><br>
            <textarea class="formulario__campo" id="mensagem" name="mensagem" rows="8" cols="80"></textarea>
          </div>
          <input class="formulario__botao" type="submit" value="Enviar" name="submit">
        </form>
        <p class="text-center">
          Etiam posuere quam ac quam. Maecenas aliquet accumsan leo.<br>
          Nullam dapibus fermentum ipsum.
        </p>
      </section>
      <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d17255.461704528076!2d-51.9633081!3d-23.42872695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1spt-BR!2sbr!4v1528732761265" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
<?php include('partes/rodape.php'); ?>