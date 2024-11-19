<style>
   
      .img-centered {
        display: block;
        margin-left: auto;
        margin-right: auto;
        max-width: 100%; 
        height: auto;
      }

   
      .content-margin {
        margin-left: 100px;
        margin-right: 100px;
      }

   
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
          max-width: 100%; 
        }

        .navbar-brand,
        .navbar-toggler {
          font-size: 18px;
        }
      }

      .card {
        margin: 0 auto;
        width: 90%;
        max-width: 1000px;
      }

      .card-title {
        font-weight: bold;
        font-size: 2rem;
      }

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
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="../index.html">InvestCap</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../index.html"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../pages/sobrenós.php">Sobre Nos</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Categorias
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item active" href="../pages/bitcoin.php"
                      >Bitcoin</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="../pages/juros.php"
                      >Juros Simples e Compostos</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="../pages/empreendedorismo.php"
                      >Empreendedorismo</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="../pages/investismentos.php"
                      >Tipos de Investimento</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="../pages/startups.php"
                      >Startups</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="../pages/empresas.php"
                      >Empresas Grandes</a
                    >
                  </li>

                  <li>
                    <a class="dropdown-item" href="../pages/ias.php"
                      >Investimentos em IoT</a
                    >
                  </li>

                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-success" type="submit">
                Procurar
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>