<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--Bootstrap-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <!--Links usados-->

    <!--ICONS-->
    <link rel="stylesheet" href="./icomoon/style.css" />

    <!--FONTS-->
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <link href="{{ mix('client/css/app.css') }}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Anton&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    <!--Swiper-->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />

    <link rel="stylesheet" href="./style.css" />

    <title>Lanziloti</title>
  </head>
  <body>
    <header id="header">
      <nav class="container">
        <div class="icon-search"></div>
        <a class="logo" href="#">lanziloti</a>
        <h1 class="menu">
          <ul class="grid">
            <li class="title"><a href="">Ternos</a></li>
            <li class="title"><a href="">Camisas</a></li>
            <li class="title"><a href="">Camisetas</a></li>
            <li class="title"><a href="">Polos</a></li>
            <li class="title"><a href="">Sapatos</a></li>
            <li class="title"><a href="">Contatos</a></li>
          </ul>
        </h1>
        <div class="toggle icon-menu"></div>
        <div class="toggle icon-close"></div>
      </nav>
    </header>
    <main>
      <section class="section" id="home">
        <div class="container grid">
          <div class="image">
            <img src="./assets/camisa-preta.jpg" alt="" />
          </div>
          <p class="title">
            O <b>icone é você</b> quem faz, <br />conheça as coleções e descubra
            o seu.
          </p>
          <a class="button" href="#Contatos">Descobrir</a>
        </div>
      </section>
      <section class="section-2" id="categories">
        <div class="container-2">
          <header>
            <h1 class="title">Navegue por categorias</h1>
          </header>

          <div
            id="carouselExampleControls"
            class="carousel slide"
            data-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  class="./assets/camisa-preta.jpg"
                  src="..."
                  alt="camisa preta"
                />
              </div>
              <div class="carousel-item">
                <img
                  class="./assets/camisa-preta.jpg"
                  src="..."
                  alt="camisa preta"
                />
              </div>
              <div class="carousel-item">
                <img
                  class="./assets/camisa-preta.jpg"
                  src="..."
                  alt="camisa preta"
                />
              </div>
            </div>
            <a
              class="carousel-control-prev"
              href="#carouselExampleControls"
              role="button"
              data-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a
              class="carousel-control-next"
              href="#carouselExampleControls"
              role="button"
              data-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <dvi class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <blockquote>
                  <img src="./assets/camisa-beji.jpg" alt="Camisa social" />
                </blockquote>
                <a href="">Camisas</a>
              </div>
              <div class="swiper-slide">
                <blockquote>
                  <img src="./assets/POLO.jpg" alt="Camisas Polo" />
                </blockquote>
                <a href="">Polos</a>
              </div>
              <div class="swiper-slide">
                <blockquote>
                  <img src="./assets/Sapato.jpg" alt="Sapatos/sapatênis" />
                </blockquote>
                <a href="">Calçados</a>
              </div>
              <div class="swiper-slide">
                <blockquote>
                  <img src="./assets/CAMISA.jpg" alt="Acessorios" />
                </blockquote>
                <a href="">Acessórios</a>
              </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </dvi>
        </div>
      </section>
      <section class="section-3" id="new-colection">
        <div class="container grid">
          <img src="./assets/LINHA-DE-TERNOS-1.jpg" alt="" />
        </div>
        <h1 class="title">Nova coleção</h1>
        <p class="text">
          Novas cores, novos modelos. <br />Tudo pra ser a sua cara
        </p>
        <a href="" class="button">Descubra</a>
      </section>
      <section class="section-4" id="categories-2">
        <div class="container grid">
          <header>
            <h1 class="title">Do seu jeito</h1>
          </header>
          <div class="image">
            <img src="./assets/POLO.jpg" alt="" />
          </div>
          <h1 class="title">Polos</h1>
          <a href="" class="button">" -> "</a>
        </div>
        <div class="container grid">
          <header>
            <h1 class="title">Do seu jeito</h1>
          </header>
          <div class="image">
            <img src="./assets/camisa-verde.jpg" alt="" />
          </div>
          <h1 class="title">Camisas</h1>
          <a href="" class="button">" -> "</a>
        </div>
        <div class="container grid">
          <header>
            <h1 class="title">Do seu jeito</h1>
          </header>
          <div class="image">
            <img src="./assets/BLAZER-2.jpg" alt="" />
          </div>
          <h1 class="title">Ternos</h1>
          <a href="" class="button">" -> "</a>
        </div>
      </section>
      <section class="section-5" id="partners">
        <header>
          <h1 class="brands">- Marcas -</h1>
        </header>
        <dvi class="swiper">
          <div class="swiper-wrapper">
            <div class="image swiper-slide">
              <img src="./assets/brands/apa.jpg" alt="" />
            </div>
            <div class="image swiper-slide">
              <img src="./assets/brands/catucci.jpg" alt="" />
            </div>
            <div class="image swiper-slide">
              <img src="./assets/brands/Frilley.jpg" alt="" />
            </div>
            <div class="image swiper-slide">
              <img src="./assets/brands/Guilherme-Ludwer.jpg" alt="" />
            </div>
            <div class="image swiper-slide">
              <img src="./assets/brands/Raffer.jpg" alt="" />
            </div>
            <div class="image swiper-slide">
              <img src="./assets/brands/raphy.jpg" alt="" />
            </div>
            <div class="image swiper-slide">
              <img src="./assets/brands/resumo.jpg" alt="" />
            </div>
            <div class="image swiper-slide">
              <img src="./assets/brands/sg.jpg" alt="" />
            </div>
            <div class="image swiper-slide">
              <img src="./assets/brands/traymon.jpg" alt="" />
            </div>
            <div class="image swiper-slide">
              <img src="./assets/brands/zatrick.jpg" alt="" />
            </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </dvi>
      </section>
      <section class="contact" id="contacts">
        <div class="container grid">
          <h1 class="title">Entre em contato conosco !</h1>
          <a
            href="https://api.whatsapp.com/send?phone=+551239228927&text=Ola, tudo bem?"
            class="button"
            target="_blank"
            ><i class="icon-whatsapp"></i> Entrar em contato</a
          >
        </div>
        <div class="links">
          <ul class="grid">
            <li><i class="icon-phone"></i>12 3922-8927</li>
            <li><i class="icon-map-pin"></i>Location</li>
            <li><i class="icon-mail"></i>lanzilotimodamasculina@hotmail.com</li>
          </ul>
        </div>
      </section>
    </main>
    <footer class="section" id="#footer">
      <div class="container grid">
        <div class="brand">
          <div class="logo">
            <h1>lanziloti</h1>
          </div>
          <p>©2091 - Lanziloti Moda Masculina</p>
        </div>
        <div class="social grid">
          <a href="https://www.instagram.com/lanzilotioficial/" target="_blank">
            <i class="icon-instagram"> </i>
          </a>
          <a href="https://facebook.com" target="_blank">
            <i class="icon-facebook"></i>
          </a>
        </div>
      </div>
    </footer>

    <a href="#home" class="back-to-top"><i class="icon-arrow-up"></i></a>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="main.js"></script>
  </body>
</html>
