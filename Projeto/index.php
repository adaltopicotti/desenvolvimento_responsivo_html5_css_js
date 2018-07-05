<?php include('partes/cabecalho.php'); ?>
      <header class="cabecalho-home">
        <h2 class="cabecalho-home__titulo">Texto grande bem aqui!</h2>
        <p class="cabecalho-home__subtitulo">Texto menorzinho aqui</p>
        <a class="cabecalho-home__role" href="#servicos">role para ver mais</a>
      </header>
      <section class="servicos" id="servicos"> <!-- Seção Serviços -->
        <div class="container">
          <h2 class="home__titulo">O que fazemos</h2>
          <section class="servicos__item">
            <img src="img/icone-desenvolvimento-web.png" alt="Ícone planeta terra">
            <h3>Desenvolvimento Web</h3>
            <p class="servicos__texto">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante.</p>
          </section>
          <section class="servicos__item">
            <img src="img/icone-carrinho-compras.png" alt="Ícone carrinho e compras">
            <h3>E-commerce</h3>
            <p class="servicos__texto">Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, ornare ac, nonummy non, lobortis a, enim. Nunc tincidunt ante vitae massa. </p>
          </section>
          <section class="servicos__item">
            <img src="img/icone-cafe.png" alt="Ícone cafe">
            <h3>Café</h3>
            <p class="servicos__texto">In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor.</p>
          </section>
        </div>
      </section><!-- Fim seção Serviços -->
      <section class="depoimentos"><!-- Seção Depoimentos -->
        <div class="container">
          <h2 class="home__titulo home__titulo--branco">O que falam de nós</h2>
          <div class="depoimentos__caixa">
            <section class="depoimentos__item">
              <img class="depoimentos__img" src="img/depoimentos/pessoa-1.jpg" alt="Foto da Pessoa">
              <p class="depoimentos__texto">Morbi leo mi, nonummy eget, tristique non, rhoncus non, leo. Nullam faucibus mi quis velit. Integer in sapien.</p>
              <p class="depoimentos__pessoa">Nome Pessoa - Cargo</p>
            </section>
            <section class="depoimentos__item">
                <img class="depoimentos__img" src="img/depoimentos/pessoa-1.jpg" alt="Foto da Pessoa">
                <p class="depoimentos__texto">Morbi leo mi, nonummy eget, tristique non, rhoncus non, leo. Nullam faucibus mi quis velit. Integer in sapien.</p>
                <p class="depoimentos__pessoa">Nome Pessoa - Cargo</p>
              </section>
              <section class="depoimentos__item">
                <img class="depoimentos__img" src="img/depoimentos/pessoa-1.jpg" alt="Foto da Pessoa">
                <p class="depoimentos__texto">Morbi leo mi, nonummy eget, tristique non, rhoncus non, leo. Nullam faucibus mi quis velit. Integer in sapien.</p>
                <p class="depoimentos__pessoa">Nome Pessoa - Cargo</p>
              </section>
          </div> <!-- fim depoimentos__caixa -->
        </div> <!--Fim Container-->
      </section><!-- Fim seção depoimentos -->
<?php include('partes/rodape.php'); ?>
