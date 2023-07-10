<!DOCTYPE html>
<html lang="en">


<head>
    @include("layouts/head")
    <title>Document</title>
</head>
<body>

@include("layouts/navbar-user")
<div id="home">
      <div class="container-fluid d-flex justify-content-center">
        <img id="hero" class="col-11 mt-5" src="../img/burger_hero.jpg" />
        <img
          src="https://a.storyblok.com/f/171241/x/e553e85f21/beast-style-label.svg"
          class="icon"
        />
        <div class="centered text-center">MIND BLOWING<br />BITES</div>
      </div>
      <div id="button" class="d-flex justify-content-center">
        <button>
          <a href="#" class="button_top nav-link"> FIND LOCATION </a>
        </button>
      </div>
      <div class="marquee slider">
        <div class="slider-text">
          <h5 class="mx-3">TAKE A BITE</h5>
          <h5 class="marqueeText mx-3">TAKE A BITE</h5>
          <h5 class="mx-3">TAKE A BITE</h5>
          <h5 class="marqueeText mx-3">TAKE A BITE</h5>
          <h5 class="mx-3">TAKE A BITE</h5>
          <h5 class="marqueeText mx-3">TAKE A BITE</h5>
          <h5 class="mx-3">TAKE A BITE</h5>
          <h5 class="marqueeText mx-3">TAKE A BITE</h5>
          <h5 class="mx-3">TAKE A BITE</h5>
          <h5 class="marqueeText mx-3">TAKE A BITE</h5>
          <h5 class="mx-3">TAKE A BITE</h5>
          <h5 class="marqueeText mx-3">TAKE A BITE</h5>
          <h5 class="mx-3">TAKE A BITE</h5>
          <h5 class="marqueeText mx-3">TAKE A BITE</h5>
          <h5 class="mx-3">TAKE A BITE</h5>
          <h5 class="marqueeText mx-3">TAKE A BITE</h5>
        </div>
      </div>
    </div>

    <!-- home-2 -->

    <div id="home-2" class="container-fluid">
      <h4 class="text-center">HAPPINESS IN YOUR HANDS</h4>
      <h1 class="text-center display-1 pb-5">FEEL THE HYPE</h1>
      <div id="card-parent" class="row">
        <div class="card-lf col-md-4 d-flex justify-content-center">
          <div class="card">
            <img src="../img/home-2-img.jpg" class="card-img-top" />
            <div class="card-body">
              <div class="card-text">
                <h2>ABUNDANT NUTRION</h2>
                <p class="sub-text">
                  Each bite serves you with the<br class="br" />
                  healthiest local indgredients.
                </p>
                <a href="#" class="nav-link card-text-2"
                  >LEARN MORE<span
                    ><img
                      class="arrow-right"
                      src="../img/arrow-right.svg" /></span
                ></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <div class="card">
            <img src="../img/home-2-img-2.jpg" class="card-img-top" />
            <div class="card-body">
              <div class="card-text">
                <h2>HIGHER QUALITY</h2>
                <p>
                  Food is for eating, and good food is to be enjoyed<br
                    class="br"
                  />
                  I think food is, actually, very beautiful in itself.
                </p>
                <a href="#" class="nav-link card-text-2"
                  >LEARN MORE<span
                    ><img
                      class="arrow-right"
                      src="../img/arrow-right.svg" /></span
                ></a>
              </div>
            </div>
          </div>
        </div>
        <div class="card-lf col-md-4 d-flex justify-content-center">
          <div class="card">
            <img src="../img/home-2-img-3.jpg" class="card-img-top" />
            <div class="card-body">
              <div class="card-text">
                <h2>AWARD WINNING FLAVORS</h2>
                <p>
                  Our burgers have gained international<br class="br" />
                  recogition for most unique flavors.
                </p>
                <a href="#" class="nav-link card-text-2"
                  >LEARN MORE<span
                    ><img
                      class="arrow-right"
                      src="../img/arrow-right.svg" /></span
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="hr-dotted" />
    </div>

    <!-- home-3 -->

    <div id="home-3" class="container-fluid">
      <div class="row">
        <div>
          <h4 class="text-center">MADE WITH LOVE</h4>
          <h1 class="display-1 text-center">FEATURED BURGERS</h1>
          <div id="button-2" class="d-flex justify-content-center">
            <button>
              <a href="#" class="button_top nav-link"> VIEW ALL </a>
            </button>
          </div>
        </div>
        <div class="col-1 ms-5"></div>
      </div>
      <div class="burger-border">
        <div>
          <div class="row">
            <div class="burgers col-lg-4">
              <div class="burgerBG">
                <div class="d-flex justify-content-center">
                  <img src="../img/Burger-b.png" />
                </div>
                <div class="burger-text row">
                  <h4 class="col-8 ms-4">BURGER ALPHA</h4>
                  <h4 class="col-2">$25</h4>
                </div>
              </div>
            </div>
            <div class="burgers col-lg-4">
              <div class="burgerBG-2">
                <div class="d-flex justify-content-center">
                  <img src="../img/Burger-a.png" />
                </div>
                <div class="burger-text row">
                  <h4 class="col-8 ms-4">BURGER BETA</h4>
                  <h4 class="col-2">$18</h4>
                </div>
              </div>
            </div>
            <div class="burgers col-lg-4">
              <div class="burgerBG">
                <div class="d-flex justify-content-center">
                  <img src="../img/Burger-c.png" />
                </div>
                <div class="burger-text row">
                  <h4 class="col-8 ms-4">BURGER CHARLIE</h4>
                  <h4 class="col-2">$20</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="row">
            <div class="burger-2 col-lg-4">
              <div class="burgerBG-2 burger-img">
                <div class="d-flex justify-content-center">
                  <img src="../img/Burger-d.png" />
                </div>
                <div class="burger-text row">
                  <h4 class="col-8 ms-4">BURGER DELTA</h4>
                  <h4 class="col-2">$34</h4>
                </div>
              </div>
            </div>
            <div class="burger-2 col-lg-4">
              <div class="burgerBG burger-img-2">
                <div class="d-flex justify-content-center">
                  <img src="../img/Burger-e.webp" />
                </div>
                <div class="burger-text row">
                  <h4 class="col-8 ms-4">BURGER ECHO</h4>
                  <h4 class="col-2">$26</h4>
                </div>
              </div>
            </div>
            <div class="burger-2 col-lg-4">
              <div class="burgerBG-2">
                <div class="d-flex justify-content-center">
                  <img src="../img/Burger-f.png" />
                </div>
                <div class="burger-text row">
                  <h4 class="col-8 ms-4">BURGER FART</h4>
                  <h4 class="col-2">$32</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="juicy-yummy-svg">
        <img src="../img/juicy-yummy-sticker.svg" />
      </div>
      <div class="juicy-yummy-svg-2">
        <img src="../img/tasty-delish-sticker.svg" />
      </div>
    </div>

    <!-- home-4 -->

    <div id="home-4" class="container-fluid">
      <h1 class="display-1 mb-5 text-center">HEAR THE HYPE</h1>
      <div id="home-4-cardParent" class="row">
        <div class="col-3">
          <div class="home-4-card first">
            <div class="d-flex">
              <div class="star-img">
                <img src="../img/star-solid.svg" />
              </div>
              <div class="star-img">
                <img src="../img/star-solid.svg" />
              </div>
              <div class="star-img">
                <img src="../img/star-solid.svg" />
              </div>
              <div class="star-img">
                <img src="../img/star-solid.svg" />
              </div>
              <div class="star-img">
                <img src="../img/star-solid.svg" />
              </div>
            </div>
            <p class="home-4-text">
              "Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Commodi, aut. Tempore, nihil repellat!"
            </p>
            <div class="row">
              <div class="col-3 home-4-img">
                <img src="../img/sir-daiben.jpg" />
              </div>
              <div class="home-4-span col-5"><span>Daiben Sanchez</span></div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="home-4-card second">
            <div class="d-flex">
              <div class="star-img">
                <img src="../img/star-solid.svg" />
              </div>
              <div class="star-img">
                <img src="../img/star-solid.svg" />
              </div>
              <div class="star-img">
                <img src="../img/star-solid.svg" />
              </div>
              <div class="star-img">
                <img src="../img/star-solid.svg" />
              </div>
              <div class="star-img">
                <img src="../img/star-solid.svg" />
              </div>
            </div>
            <p class="home-4-text">
              "Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Commodi, aut. Tempore, nihil repellat!"
            </p>
            <div class="row">
              <div class="col-3 home-4-img">
                <img src="../img/mam-quez.jpg" />
              </div>
              <div class="home-4-span col-5"><span>Quez Fabela</span></div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="home-4-card first">
            <div class="d-flex">
              <div class="star-img">
                <img src="../img/star-solid.svg" />
              </div>
              <div class="star-img">
                <img src="../img/star-solid.svg" />
              </div>
              <div class="star-img">
                <img src="../img/star-solid.svg" />
              </div>
              <div class="star-img">
                <img src="../img/star-solid.svg" />
              </div>
              <div class="star-img">
                <img src="../img/star-solid.svg" />
              </div>
            </div>
            <p class="home-4-text">
              "Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Commodi, aut. Tempore, nihil repellat!"
            </p>
            <div class="row">
              <div class="col-3 home-4-img">
                <img src="../img/cha-arellano.jpg" />
              </div>
              <div class="home-4-span col-5"><span>Cha Mylove</span></div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="home-4-card second">
            <div class="d-flex">
              <div class="star-img">
                <img src="../img/star-solid.svg" />
              </div>
              <div class="star-img">
                <img src="../img/star-solid.svg" />
              </div>
              <div class="star-img">
                <img src="../img/star-solid.svg" />
              </div>
              <div class="star-img">
                <img src="../img/star-solid.svg" />
              </div>
              <div class="star-img">
                <img src="../img/star-solid.svg" />
              </div>
            </div>
            <p class="home-4-text">
              "Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Commodi, aut. Tempore, nihil repellat!"
            </p>
            <div class="row">
              <div class="col-3 home-4-img">
                <img src="../img/bong-revilla.jpg" />
              </div>
              <div class="home-4-span col-5"><span>Bong Revills</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- home-5 -->

    <div id="home-5" class="container-fluid" style="position: relative">
      <div class="custom-shape-divider-top-1678737717">
        <svg
          data-name="Layer 1"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 1200 120"
          preserveAspectRatio="none"
        >
          <path
            d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z"
            class="shape-fill"
          ></path>
        </svg>
      </div>
      <h1 class="display-1 text-center">TASTE THE HYPE</h1>
      <h4 class="text-center">
        COME VISIT US AT YOUR LOCAL GEEKBURGER LOCATION
      </h4>
      <div id="button-3" class="d-flex justify-content-center">
        <button>
          <a href="#" class="button_top nav-link"> FIND A LOCATION </a>
        </button>
      </div>
      <div class="container-vid">
        <video autoplay muted loop>
          <source src="../video/eating-burger.mp4" type="video/mp4" />
        </video>
      </div>
      <div class="icon-fry"><img src="../img/fry-1.svg" /></div>
      <div class="icon-fry-2"><img src="../img/fry-3.svg" /></div>
      <div class="icon-fry-3"><img src="../img/fry-2.svg" /></div>
    </div>
    @include("layouts/footer")
    <script src="../js/homeorg.js"></script>
  </body>
</html>

</body>

</html>