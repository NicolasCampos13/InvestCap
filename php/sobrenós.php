<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sobre Nós</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/mainstyle.css" />
    <style>
      .card {
        margin-top: 25px;
      }

      .card-img {
        max-height: 300px;
        object-fit: cover;
      }

      .titulosobre h2 {
        border-bottom: 2px solid #093e32;
        font-weight: 600;
        padding-bottom: 5px;
      }

      footer {
        text-align: center;
        padding: 10px;
        background-color: #1c8787;
        margin: 0 auto;
      }

      @media (max-width: 992px) {
        .card-img {
          max-height: 200px;
        }
      }

      @media (max-width: 768px) {
        .titulosobre {
          margin: 15px;
        }

        .card-img {
          max-height: 150px;
        }

        .navbar-nav a {
          margin: 0 5px;
        }
      }

      @media (max-width: 576px) {
        .card-img {
          max-height: 120px;
        }
      }
    </style>
  </head>

  <body>
    <header style="margin-bottom: 50px">
    <?php

include('../_inc/menu.php')

?>
    </header>

    <div class="titulosobre container mt-5">
      <h2>Conheça nossa equipe</h2>
    </div>

    <main class="container mt-5">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-12">
          <div class="card">
            <figure>
              <img
                src="../img/saulo.png"
                alt="Saulo Elias de Oliveira Santos"
                class="card-img"
              />
            </figure>
            <div class="m-3">
              <h2 class="h5">Saulo Santos</h2>
              <p>Responsavel pela Administração do Grupo e Programação</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-12">
          <div class="card">
            <figure>
              <img
                src="..."
                alt="Thales"
                class="card-img"
              />
            </figure>
            <div class="m-3">
              <h2 class="h5">Thales Vieira</h2>
              <p>Responsavel pela Programação e Estilização</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-12">
          <div class="card">
            <figure>
              <img
                src="../img/nicolas custo.png"
                alt="Nicolas Custódio de Campos"
                class="card-img"
              />
            </figure>
            <div class="m-3">
              <h2 class="h5">Nicolas Custódio</h2>
              <p>Responsavel pela Programação e Estilização</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-12">
          <div class="card">
            <figure>
              <img
                src="../img/luiz_miguel.jpg"
                alt="Yan"
                class="card-img"
              />
            </figure>
            <div class="m-3">
              <h2 class="h5">Yan</h2>
              <p>Responsavel pela Programação e Estilização</p>
            </div>
          </div>
        </div>
      </div>
    </main>


    <?php

    include('../_inc/footer.php')

    ?>

    <script src="../js/bootstrap.bundle.min.js"></script>
  </body>
</html>
