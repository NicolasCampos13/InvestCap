<footer class="text-center">
      <div class="footer-body row">
        <div class="footer-content col-lg-4 col-12">
          <h5>Equipe</h5>
          <ul>
            <li><a href="#">Sobre nós</a></li>
            <li><a href="#">Como funciona</a></li>
            <li><a href="#">Equipe</a></li>
          </ul>
        </div>

        <div class="footer-content col-lg-4 col-12">
          <h5>Contato</h5>
          <p>Telefone: +55 (12) 98765-4321</p>
          <p>E-mail: investcap@gmail.com</p>
        </div>

        <div class="footer-content col-lg-4 col-12">
          <h5>Conteúdo</h5>
          <ul>
            <li><a href="bitcoin.php">Bitcoin</a></li>
            <li><a href="investismentos.php">Investimentos</a></li>
            <li><a href="juros.php">Juros</a></li>
            <li><a href="sartups.php">Startups</a></li>
            <li><a href="empresas.php">Grandes Empresas</a></li>
          </ul>
        </div>
      </div>
    </footer>
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