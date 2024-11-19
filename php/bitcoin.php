<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>investCap</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/mainstyle.css" />
    <style>
      /* Centraliza a imagem e define o tamanho máximo */
      .img-centered {
        display: block;
        margin-left: auto;
        margin-right: auto;
        max-width: 100%; /* A imagem ocupa a largura total da tela */
        height: auto;
      }

      /* Ajusta as margens laterais do conteúdo */
      .content-margin {
        margin-left: 100px;
        margin-right: 100px;
      }

      /* Estilo para a área de rodapé */
      .footer-body {
        margin-top: 30px;
        padding-top: 30px;
        background-color: #1c8787;
        padding-bottom: 30px;
      }

      .footer-content ul {
        list-style-type: none;
        padding-left: 0;
      }

      .footer-content ul li a {
        text-decoration: none;
        color: white;
      }

      .footer-content ul li a:hover {
        color: #007bff;
      }

      /* Estilo para dispositivos móveis */
      @media (max-width: 768px) {
        .content-margin {
          margin-left: 0;
          margin-right: 0;
        }

        .footer-body {
          text-align: center;
        }

        .footer-content {
          margin-bottom: 20px;
        }

        .img-centered {
          max-width: 100%; /* Ajusta a imagem para a largura total no celular */
        }

        .navbar-brand,
        .navbar-toggler {
          font-size: 18px;
        }
      }

      /* Ajusta a largura do cartão de conteúdo */
      .card {
        margin: 0 auto;
        width: 90%;
        max-width: 1000px;
      }

      /* Ajusta a aparência do título */
      .card-title {
        font-weight: bold;
        font-size: 2rem;
      }

      /* Margem interna e bordas arredondadas para dar uma aparência mais 'blog' */
      .pequenotext {
        border-radius: 15px;
        background-color: #f4f4f4;
        padding: 30px;
      }

      .pequenotext h1 {
        font-size: 2rem;
        padding-bottom: 20px;
        text-align: center;
      }
    </style>
  </head>

  <body>
    <header style="margin-bottom: 50px">
    <?php

include('../_inc/menu.php')

?>
    </header>

    <div style="display: flex; justify-content: center">
      <div
        class="card mb-3"
        style="
          max-width: 1000px;
          border-bottom-left-radius: 50px;
          border-top-left-radius: 50px;
          min-height: 50vh;
        "
      >
        <div class="row g-0">
          <div class="imagem col-lg-6 col-md-6 col-12">
            <img
              src="../img/Negocios_bitcoin_290719_GettyImages_AdamGault-e1658415656459.webp"
              style="
                width: 100%;
                height: auto;
                border-bottom-left-radius: 50px;
                border-top-left-radius: 50px;
              "
              alt=""
            />
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <div class="card-body">
              <h2 class="card-title">O que é Bitcoin?</h2>
              <p class="card-text">
                Embora o bitcoin seja a mais comum, há diversas outras moedas
                digitais em circulação no mercado. Entenda como elas funcionam,
                para que serve e como funciona.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="pequenotext content-margin my-5">
      <div class="col-12">
        <h1 style="font-weight: bold; padding-bottom: 25px">Criptomoedas</h1>
        <img
          src="../img/cripto2.webp"
          alt="stonks"
          class="img-centered"
          style="border-radius: 25px; max-width: 1000px"
        />

        <p style="padding-top: 15px">
          As criptomoedas, e um tipo de dinheiro, commo outras moedas com as
          quais convivemos cotidianamente, com a diferença de ser totalmente
          digital. E tambem ela não é emitida por nenhum governo.
        </p>

        <p>
          As criptomoedas são uma forma de dinheiro digital e, ao contrário das
          moedas tradicionais como o real, o dólar ou o euro, elas não são
          regulamentadas por um banco central ou qualquer outra autoridade
          governamental. Em vez disso, elas utilizam a tecnologia blockchain
          para garantir a segurança e a veracidade das transações.
        </p>

        <h2>Principais tipos de Criptomoedas</h2>
        <p>
          O Bitcoin foi a primeira criptomoeda criada, mas hoje em dia existem
          milhares de outras, com funções e características próprias. Algumas
          das mais conhecidas incluem:
        </p>
        <ul>
          <li>
            <strong>Bitcoin (BTC)</strong>: A primeira e mais famosa
            criptomoeda.
          </li>
          <li>
            <strong>Ethereum (ETH)</strong>: Conhecida por suas aplicações
            descentralizadas.
          </li>
          <li>
            <strong>Litecoin (LTC)</strong>: Uma moeda com transações mais
            rápidas que o Bitcoin.
          </li>
          <li>
            <strong>Ripple (XRP)</strong>: Focada em transações financeiras
            rápidas e de baixo custo.
          </li>
        </ul>

        <h2>Como as Criptomoedas Funcionam?</h2>
        <p>
          As criptomoedas funcionam utilizando uma rede de computadores (chamada
          de "nós") que valida as transações através da tecnologia blockchain.
          Cada transação é registrada em blocos de dados e, uma vez que um bloco
          é validado, ele é adicionado à cadeia de blocos, formando o que é
          conhecido como "blockchain".
        </p>

        <p>
          A segurança de uma criptomoeda é garantida pela criptografia, o que
          torna difícil a falsificação de transações. Além disso, as
          criptomoedas oferecem um grau de anonimato que não é possível com
          moedas tradicionais.
        </p>

        <h2>Investir em Criptomoedas</h2>
        <p>
          Investir em criptomoedas pode ser altamente lucrativo, mas também
          envolve riscos. O mercado de criptomoedas é altamente volátil, com
          preços que podem mudar rapidamente. Muitos investidores escolhem
          comprar criptomoedas como uma forma de diversificar seus portfólios ou
          como uma maneira de investir em uma tecnologia inovadora.
        </p>

        <h2>Riscos e Considerações</h2>
        <p>
          Antes de investir, é importante compreender os riscos. Como o mercado
          é descentralizado e não regulado, ele é suscetível a fraudes e
          manipulação de preços. Também pode ser difícil garantir o
          armazenamento seguro das criptomoedas, e as exchanges de criptomoedas
          podem ser alvos de ataques cibernéticos.
        </p>
      </div>
    </section>


    <?php

    include('../_inc/footer.php')

    ?>


    <script src="../js/bootstrap.bundle.min.js"></script>
  </body>
</html>
