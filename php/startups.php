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
              src="../img/startup1.jpg"
              style="
                width: 100%;
                height: auto;
                border-bottom-left-radius: 50px;
                border-top-left-radius: 50px;
              "
              alt="Imagem de Startup"
            />
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <div class="card-body">
              <h2 class="card-title">O que é uma Startup?</h2>
              <p class="card-text">
                Startups são empresas inovadoras que buscam soluções escaláveis
                e repetíveis para um mercado específico. Elas costumam focar em
                tecnologias ou modelos de negócios disruptivos, com alto
                potencial de crescimento.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="pequenotext content-margin my-5">
      <div class="col-12">
        <h1 style="font-weight: bold; padding-bottom: 25px">
          Startups e Empreendedorismo
        </h1>
        <img
          src="../img/startup2.jpg"
          alt="Investindo em Startups"
          class="img-centered"
          style="border-radius: 25px; max-width: 1000px"
        />

        <p style="padding-top: 15px">
          Startups são empresas que nascem com a intenção de crescer
          rapidamente, muitas vezes utilizando inovação tecnológica ou novas
          abordagens para resolver problemas antigos. O empreendedorismo nas
          startups envolve risco, mas também oportunidades de altos lucros.
        </p>

        <p>
          O processo de criação de uma startup envolve identificar uma ideia
          inovadora, validar essa ideia no mercado e buscar financiamento para
          expandir rapidamente. Muitas startups começam pequenas, mas podem
          crescer exponencialmente em um curto período de tempo.
        </p>

        <h2>Principais Tipos de Startups</h2>
        <p>
          Existem diferentes tipos de startups, dependendo do mercado, da
          inovação e do modelo de negócio. Alguns dos tipos mais comuns incluem:
        </p>
        <ul>
          <li>
            <strong>Startups de Tecnologia</strong>: Focadas em soluções
            inovadoras com base em tecnologia.
          </li>
          <li>
            <strong>Startups de Saúde</strong>: Buscam inovações para melhorar
            os cuidados com a saúde e bem-estar.
          </li>
          <li>
            <strong>Startups de Finanças</strong>: Criam soluções financeiras
            para atender a nichos de mercado ou melhorar o sistema financeiro
            tradicional.
          </li>
          <li>
            <strong>Startups Sociais</strong>: Focam em problemas sociais e
            buscam soluções sustentáveis para impactar positivamente a
            sociedade.
          </li>
        </ul>

        <h2>Como as Startups Funcionam?</h2>
        <p>
          As startups operam com uma mentalidade de "produto mínimo viável"
          (MVP), o que significa que elas começam com uma versão simples de seu
          produto ou serviço e, à medida que validam seu modelo de negócios, vão
          melhorando e escalando.
        </p>

        <p>
          A chave para o sucesso de uma startup está em encontrar um nicho de
          mercado com demanda significativa e uma solução que se destaque da
          concorrência.
        </p>

        <h2>Investir em Startups</h2>
        <p>
          Investir em startups pode ser uma oportunidade emocionante, mas também
          envolve riscos. Muitos investidores buscam startups em estágio inicial
          com potencial de crescimento explosivo. Plataformas de crowdfunding e
          investidores-anjo são algumas formas de apoio a esses negócios
          inovadores.
        </p>

        <h2>Riscos e Considerações</h2>
        <p>
          Antes de investir em uma startup, é importante entender os riscos
          envolvidos, como a alta taxa de falha de novas empresas e a
          dificuldade de obter lucros rápidos. Além disso, a falta de
          regulamentação e a volatilidade do mercado podem afetar a estabilidade
          das startups.
        </p>
      </div>
    </section>


    <?php

    include('../_inc/footer.php')

    ?>
        <script src="../js/bootstrap.bundle.min.js"></script>

  </body>
</html>
