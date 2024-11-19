<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>InvestCap</title>

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
              src="../img/empresas2.webp"
              style="
                width: 100%;
                height: auto;
                border-bottom-left-radius: 50px;
                border-top-left-radius: 50px;
              "
              alt="Imagem de Grandes Empresas"
            />
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <div class="card-body">
              <h2 class="card-title">O que são Grandes Empresas?</h2>
              <p class="card-text">
                Grandes empresas são aquelas com uma estrutura corporativa
                sólida, com grandes volumes de operações, recursos e presença em
                diversos mercados. Elas geralmente são líderes no setor em que
                atuam e têm uma base de clientes global.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="pequenotext content-margin my-5">
      <div class="col-12">
        <h1 style="font-weight: bold; padding-bottom: 25px">
          Grandes Empresas e o Mercado
        </h1>
        <img
          src="../img/empresas.jpg"
          alt="Grandes Corporações"
          class="img-centered"
          style="border-radius: 25px; max-width: 1000px"
        />

        <p style="padding-top: 15px">
          Grandes empresas têm um impacto significativo na economia global,
          gerando uma quantidade substancial de empregos, inovação e
          competitividade. Elas são geralmente multinacionais com operações em
          vários países e mercados.
        </p>

        <p>
          A operação dessas empresas envolve departamentos distintos, como
          recursos humanos, financeiro, jurídico, marketing, e operações. Sua
          capacidade de inovação e adaptação ao mercado é crucial para manter
          sua posição de liderança.
        </p>

        <h2>Características das Grandes Empresas</h2>
        <p>
          As grandes empresas se distinguem por algumas características
          importantes:
        </p>
        <ul>
          <li>
            <strong>Escalabilidade:</strong> Elas possuem a capacidade de
            expandir rapidamente, com grande base de clientes e produtos.
          </li>
          <li>
            <strong>Capacidade de Investimento:</strong> Grandes empresas
            possuem vastos recursos financeiros, o que lhes permite investir em
            pesquisa, desenvolvimento e aquisições.
          </li>
          <li>
            <strong>Presença Global:</strong> Muitas dessas empresas atuam em
            mercados internacionais, com filiais em diversos países.
          </li>
          <li>
            <strong>Inovação Constante:</strong> Apesar de sua grande escala,
            elas continuam investindo em inovação para manter sua
            competitividade.
          </li>
        </ul>

        <h2>Como as Grandes Empresas Funcionam?</h2>
        <p>
          O modelo de negócios de grandes empresas é muito mais estruturado do
          que em pequenas empresas ou startups. Elas têm uma hierarquia complexa
          e sistemas de gestão robustos para coordenar suas operações em larga
          escala.
        </p>

        <p>
          A tomada de decisões em grandes empresas geralmente envolve diversos
          níveis hierárquicos, desde diretores executivos até equipes
          operacionais. Isso garante um controle rigoroso sobre suas atividades.
        </p>

        <h2>Investir em Grandes Empresas</h2>
        <p>
          Investir em grandes empresas pode ser uma boa estratégia para quem
          busca estabilidade e um fluxo constante de dividendos. Empresas com
          forte desempenho financeiro e uma longa história de crescimento
          costumam ser atrativas para investidores conservadores.
        </p>

        <h2>Desafios Enfrentados pelas Grandes Empresas</h2>
        <p>
          As grandes empresas enfrentam desafios únicos, como a necessidade de
          manter a inovação contínua em mercados saturados, gerenciar uma força
          de trabalho diversa e adaptar-se às mudanças regulatórias e
          econômicas.
        </p>

        <p>
          Outro desafio significativo é a gestão de sua reputação, visto que
          grandes corporações estão constantemente sob escrutínio público e
          enfrentam uma pressão significativa para atender a expectativas de
          clientes, acionistas e governos.
        </p>
      </div>
    </section>


    <?php

    include('../_inc/footer.php')

    ?>
    <script src="../js/bootstrap.bundle.min.js"></script>
    </body>
</html>
