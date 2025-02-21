<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>investCap</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/mainstyle.css" />
    <style>
      .img-centered {
        display: block;
        margin-left: auto;
        margin-right: auto;
        max-width: 100%; /* Ajustado para ser 100% da largura disponível */
        height: auto;
      }

      .content-margin {
        margin: 0 15px; /* Ajuste para responsividade */
      }

      .footer-body {
        padding: 20px 0;
      }

      .footer-content ul {
        list-style-type: none;
        padding: 0;
      }

      @media (min-width: 768px) {
        .content-margin {
          margin: 0 250px; /* Margem lateral em telas maiores */
        }
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
      <div class="card mb-3">
        <div class="row g-0">
          <div class="imagem col-lg-6 col-md-6 col-12">
            <img src="../img/cartipdeinvest.webp" alt="" class="img-centered" />
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <div class="card-body">
              <h2 class="card-title">O que é Economia?</h2>
              <p class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos
                modi, earum commodi, error rem iste similique hic dolor, sit sed
                nemo voluptates cupiditate! Illum accusantium quibusdam itaque
                quas modi repellat.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="pequenotext content-margin my-5">
      <div class="col-12">
        <h1 style="font-weight: bold; padding-bottom: 25px">
          Tipos de investimentos
        </h1>
        <img
          src="../img/tipdeinvestimento.jpg"
          alt="stonks"
          class="img-centered"
          style="border-radius: 25px"
        />

        <p style="padding-top: 15px">
          Investimentos são fundamentais para a construção de riqueza e a
          realização de objetivos financeiros ao longo da vida. Eles envolvem
          alocar recursos, geralmente dinheiro, em ativos com a expectativa de
          obter retornos futuros. O conceito básico é simples: ao investir, você
          busca fazer seu dinheiro trabalhar para você.
        </p>
        <p>
          Existem várias formas de investimento, cada uma com seu próprio perfil
          de risco e potencial de retorno. Entre as opções mais comuns, estão:
        </p>
        <ul>
          <li>
            <strong>Ações:</strong> Comprar ações significa adquirir uma pequena
            parte de uma empresa. Esse tipo de investimento pode ser bastante
            lucrativo, mas também é volátil.
          </li>
          <li>
            <strong>Renda fixa:</strong> Títulos públicos e privados são
            exemplos de investimentos em renda fixa, onde o investidor recebe
            uma taxa de juros previamente definida.
          </li>
          <li>
            <strong>Fundos de investimento:</strong> Esses veículos reúnem
            recursos de vários investidores para aplicar em uma variedade de
            ativos, oferecendo diversificação e gestão profissional.
          </li>
          <li>
            <strong>Imóveis:</strong> Investir em propriedades pode gerar renda
            passiva através de aluguéis e também potencial valorização a longo
            prazo.
          </li>
          <li>
            <strong>Criptomoedas:</strong> Relativamente novas no cenário de
            investimentos, as criptomoedas têm atraído atenção pela sua alta
            volatilidade e potencial de retorno.
          </li>
        </ul>
        <p>
          Ao decidir onde investir, é essencial considerar fatores como seu
          perfil de risco, horizonte de investimento e objetivos financeiros.
        </p>

        <figure style="display: flex; justify-content: center">
          <img src="../img/dividendos.webp" alt="" class="img-centered" />
        </figure>

        <p>
          Diversificação é uma estratégia chave em investimentos. Ao distribuir
          seu capital entre diferentes classes de ativos, você pode reduzir o
          risco geral da sua carteira.
        </p>
        <p>
          A educação financeira é um pilar essencial para qualquer investidor.
          Compreender os conceitos básicos e buscar informações de fontes
          confiáveis são passos importantes para fazer escolhas mais informadas.
        </p>
      </div>
    </section>

    <?php

    include('../_inc/footer.php')

    ?>

    <script src="../js/bootstrap.bundle.min.js"></script>
  </body>
</html>
