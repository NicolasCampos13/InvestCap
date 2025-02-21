<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>InvestCap - Juros</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/mainstyle.css" />
    <style>
      .img-centered {
        display: block;
        margin-left: auto;
        margin-right: auto;
        max-width: 100%;
        max-height: 1000px;
        height: auto;
      }

      .footer-body {
        padding: 20px 0;
      }

      .footer-content ul {
        list-style-type: none;
        padding: 0;
      }
    </style>
  </head>

  <body>
    <header style="margin-bottom: 50px">
      <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"
            >investCap - Seu Site de Investimentos</a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="offcanvas offcanvas-end"
            tabindex="-1"
            id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel"
          >
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                investCap - Seu Site de Investimentos
              </h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
              ></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="../index.html"
                    >Home</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="bitcoin.html">Criptomoedas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="investismentos.html"
                    >Investimentos</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="juros.html">Juros</a>
                </li>
              </ul>
              <form class="d-flex mt-3" role="search">
                <input
                  class="form-control me-2"
                  type="search"
                  placeholder="Search"
                  aria-label="Search"
                />
                <button class="btn btn-outline-success" type="submit">
                  Search
                </button>
              </form>
            </div>
          </div>
        </div>
      </nav> -->

      <?php

      include('../_inc/menu.php')

      ?>

      <style>
        .dropdown-item.active {
          font-weight: bold;
          font-size: 18px;
        }
      </style>
    </header>

    <div class="container my-5">
      <h1 class="text-center font-weight-bold mb-4">
        O que é Juros Simples e Juros Compostos:
      </h1>
      <img
        src="../img/juros.png"
        alt="Representação de juros"
        class="img-centered rounded mb-4"
      />

      <p>
        É muito importante entender sobre juros simples e compostos para nos
        organizarmos melhor financeiramente. Isso é útil na hora de fechar
        contratos como financiamentos, empréstimos, parcelamentos, entre outros.
      </p>
      <p>
        Você quer entender tudo sobre <b>juros simples e compostos?</b> Então
        você está no site certo! Aqui, você vai aprender o que eles são, qual a
        fórmula e como calcular cada um deles.
      </p>

      <h2>Primeiramente, o que são Juros?</h2>
      <p>
        A palavra juros refere-se a uma quantia de dinheiro a mais aplicada em
        algumas operações financeiras. Durante nossas vidas, você pode tanto
        pagar quanto receber juros, dependendo do tipo de aplicação financeira
        que escolher.
      </p>

      <h3>Quando pagamos Juros?</h3>
      <p>
        Pagamos juros ao atrasar o pagamento de uma conta, onde são cobrados
        juros pelo atraso, ou seja, um valor a mais do que inicialmente
        pagaríamos. Essa cobrança é uma compensação pelo período em que alguém
        (normalmente a instituição financeira) arcou com o prejuízo do atraso.
      </p>

      <h2>Quando recebemos Juros?</h2>
      <p>
        Quando uma pessoa faz um investimento, recebe juros por "emprestar"
        dinheiro ao banco ou a uma empresa. Nessa situação, é um exemplo de
        quando recebemos juros, que são chamados de rendimentos.
      </p>

      <h2>Como calcular o Juros Simples:</h2>
      <p>
        Os juros simples não mudam durante uma operação. Se você assinou um
        contrato com uma determinada porcentagem de juros, pagará ou receberá
        esse valor até o final do contrato.
      </p>
      <p>Os juros simples são calculados aplicando a seguinte fórmula:</p>
      <p class="fórmulaJuros">J = C * i * t</p>
      <p>
        Sendo: <br />
        J: Juros <br />
        C: Valor inicial da transação (capital) <br />
        i: Taxa de juros (valor normalmente expresso em porcentagem) <br />
        t: Período de transação
      </p>

      <figure class="text-center">
        <img
          src="../img/juros2.jpg"
          alt="Fórmula dos juros"
          class="img-centered"
        />
      </figure>

      <p>
        Esse valor é chamado de montante, que é igual à soma do capital com os
        juros, ou seja:
      </p>
      <p class="fórmulaJuros">M = C + J</p>
      <p>
        Podemos substituir o valor de J na fórmula acima e encontrar a seguinte
        expressão para o montante: <br />
        M = C + C * i * t <br />
        M = C(1 + i * t)
      </p>

      <h2>Fórmula do Juros Compostos</h2>
      <p>
        O montante capitalizado a juros compostos é encontrado aplicando a
        seguinte fórmula:
      </p>
      <p class="fórmulaJuros">M = C (1 + i)<sup>t</sup></p>
      <p>
        Sendo: <br />
        M: Montante <br />
        C: Capital <br />
        i: Taxa de juros <br />
        t: Período de tempo
      </p>
      <p>
        Diferente dos juros simples, neste tipo de capitalização, a fórmula para
        o cálculo do montante envolve uma variação exponencial, o que explica o
        aumento considerável do valor final.
      </p>
      <p>
        Assim, poderemos calcular qualquer operação matemática que envolva
        porcentagem, utilizando o aprendizado para a vida em empréstimos,
        investimentos, etc. É importante saber como utilizar e quando aplicá-la
        de forma eficiente e sem complicações.
      </p>
    </div>


    <?php

    include('../_inc/footer.php')

    ?>

    <script src="../js/bootstrap.bundle.min.js"></script>
  </body>
</html>
