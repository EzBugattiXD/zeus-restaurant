<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta
    name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
  >
  <meta
    http-equiv="X-UA-Compatible"
    content="ie=edge"
  >
  <title>Zeus</title>

  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous"
  >

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"
    integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o="
    crossorigin="anonymous"
  />


  <link
    rel="stylesheet"
    href="css/main.css"
  >

</head>
<body>


<nav class="navigation">
  <div>
    <ul class="mainMenu">
      <li><a
          class="nav-link"
          href="#"
        >Home</a></li>
      <li><a
          class="nav-link"
          href="#about-us"
        >About us</a></li>
      <li><a
          class="nav-link"
          href="#menu"
        >Menu</a></li>
      <li><a
          class="nav-link"
          href="#delivery"
        >Delivery</a></li>
      <li><a
          class="nav-link"
          href="#table"
        >Reservation</a></li>
      <li><a
          class="nav-link"
          href="#footer"
        >Contact</a></li>

      <?php
      session_start();
      if(isset($_SESSION["username"])){?>
        <li><a
            class="nav-link"
            href="/views/private-page.php"
          ><?=$_SESSION["username"] ?></a></li>
      <?php } else{ ?>
        <li><a
            class="nav-link"
            href="/views/login-form.php"
          >Login</a></li>
      <?php }

      ?>

    </ul>
  </div>
  <div class="hamburger">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
  </div>
</nav>


<div class="logo">
  <div class="container">
    <a href="#">
      <img
        src="img/Logo-Header.png"
        alt="logo"
        class="img-fluid"
      >
    </a>
  </div>
</div>


<section class="top">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <article>
          <h3>Tasty & Fast delivery</h3>
          <header>
            <h1>Quality food</h1>
            <h1>Served!</h1>
          </header>
          <main>
            Introducing Zeus, restaurant that will blow your mind.
          </main>
          <footer>
            <button>
              <a href="#menu">Order now!</a>
            </button>
          </footer>
        </article>
      </div>
      <div class="col-6">
        <div class="top_images">
          <div class="top_img1">
            <img
              src="img/top_image1.png"
              alt="img1"
              class="img-fluid"

            >
          </div>
          <div class="top_img2">
            <img
              src="img/top_image2.png"
              alt="img2"
              class="img-fluid"

            >
            <img
              src="img/top_image3.png"
              alt="img3"
              class="img-fluid"

            >
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>


<section
  id="about-us"
  class="about-us"
>
  <div
    class="container"
  >
    <div class="row">
      <header>
        <h3>Who are we?</h3>
        <h1>About us</h1>
        <div>
          <img
            src="img/header-vector.png"
            alt="header"
            class="img-fluid"
          >
        </div>
      </header>
      <div class="col-lg-6">
        <img
          src="img/AboutUsImage.png"
          alt="Chef"
          class="img-fluid chef"
        >
      </div>
      <div class="col-lg-6 col-md-12">
        <article>
          <main>
            <div class="line-1"></div>
            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Integer nec porttitor mauris. Aliquam sodales ultricies faucibus.
              Quisque feugiat risus tortor, eget luctus lectus luctus et. Sed feugiat neque lacus,
              ut eleifend purus rutrum vel. In pharetra rutrum consequat. Nam viverra volutpat
              vehicula.
              Vestibulum suscipit varius velit at ullamcorper.
            </div>
          </main>
          <main>
            <div class="line-2"></div>
            <ul>
              <li><img
                  src="img/AboutUsChecks.png"
                  alt="check"
                  class="img-fluid check"
                >Lorem ipsum dolor sit amet.
              </li>
              <li><img
                  src="img/AboutUsChecks.png"
                  alt="check"
                  class="img-fluid check"
                >Nunc facilisis fermentum bibendum. Vestibulum id.
              </li>
              <li><img
                  src="img/AboutUsChecks.png"
                  alt="check"
                  class="img-fluid check"
                >Integer nec porttitor mauris, aliquam sodales.
              </li>
              <li><img
                  src="img/AboutUsChecks.png"
                  alt="check"
                  class="img-fluid check"
                >Nam viverra volutpat vehicula, Vestibulum suscipit.
              </li>
            </ul>
          </main>
        </article>
      </div>
    </div>
  </div>
</section>

<section class="our_offer">
  <div class="container">
    <div class="row">
      <header>
        <h3>Tasty & Crunchy</h3>
        <h1>Our offer</h1>
        <div>
          <img
            src="img/header-vector.png"
            alt="header"
            class="img-fluid"
          >
        </div>
        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis velit et vel condimentum quam
          dolor.
          At sed est venenatis leo ut. Tempor varius commodo, sit viverra elementum. </h4>
      </header>
      <div class="col-lg-6 col-md-12 col-sm-12">
        <main>
          <div class="images">
            <img
              src="img/offer-img1.png"
              alt="offer_1"
              class="img-fluid"
            >
          </div>
          <div>
            <h2>Quality food</h2>
            <p>
              Lorem ipsum dolor sitamet, consectetur adipiscing elit,
              seddo eiusmod. Lorem ipsum dolor Tur adipiscing elit,
              sed do eiusmod consectetur.
            </p>
          </div>
        </main>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12">
        <main>
          <div class="images">
            <img
              src="img/offer-img2.png"
              alt="offer_2"
              class="img-fluid"
            >
          </div>
          <div>
            <h2>Wonderful taste</h2>
            <p>Lorem ipsum dolor sitamet, consectetur adipiscing elit,
              seddo eiusmod. Lorem ipsum dolor Tur adipiscing elit,
              sed do eiusmod consectetur.</p>
          </div>
        </main>
      </div>
    </div>
  </div>
</section>

<section
  id="menu"
  class="menu"
>
  <div class="container">
    <header>
      <h3>Made out of quality ingredients</h3>
      <h1>Menu</h1>
      <div class="header">
        <img
          src="img/header-vector.png"
          alt="header"
          class="img-fluid"
        >
      </div>
    </header>
    <?php
    if(isset($_POST["food_btn"])){
      echo "You added meal to cart";

    } else{
      echo "";
    }
    ?>
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card">
          <img
            src="img/menu1.png"
            alt="menu1"
            class="card-img-top"
          >

          <div class="card-body">
            <div class="price">
              <div><img
                  src="img/Rating.png"
                  alt="rating"
                ></div>
              €10,99
            </div>
            <h5 class="card-title">Spicey meatballs</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet,
              consectetur adipiscing elit.
              Integer nec porttitor mauris.
              Aliquam sodales ultricies faucibus.
            </p>
            <button><a href="/views/cart.php/?id=1">Order now</a></button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card">
          <img
            src="img/menu2.png"
            alt="menu1"
            class="card-img-top"
          >

          <div class="card-body">
            <div class="price">
              <div><img
                  src="img/Rating.png"
                  alt="rating"
                ></div>
              €7,99
            </div>
            <h5 class="card-title">Fruity Dream</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet,
              consectetur adipiscing elit.
              Integer nec porttitor mauris.
              Aliquam sodales ultricies faucibus.
            </p>
            <button><a href="/views/cart.php/?id=2">Order now</a></button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 menu-mobile">
        <div class="card">
          <img
            src="img/menu3.png"
            alt="menu1"
            class="card-img-top"
          >

          <div class="card-body">
            <div class="price">
              <div><img
                  src="img/Rating.png"
                  alt="rating"
                ></div>
              €15,99
            </div>
            <h5 class="card-title">Chicken Plate</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet,
              consectetur adipiscing elit.
              Integer nec porttitor mauris.
              Aliquam sodales ultricies faucibus.
            </p>
            <button><a href="/views/cart.php/?id=3">Order now</a></button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 menu-tablet">
        <div class="card">
          <img
            src="img/menu4.png"
            alt="menu1"
            class="card-img-top"
          >

          <div class="card-body">
            <div class="price">
              <div><img
                  src="img/Rating.png"
                  alt="rating"
                ></div>
              €14,99
            </div>
            <h5 class="card-title">Fishy Cloud</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet,
              consectetur adipiscing elit.
              Integer nec porttitor mauris.
              Aliquam sodales ultricies faucibus.
            </p>
            <button><a href="/views/cart.php/?id=4">Order now</a></button>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card">
          <img
            src="img/menu5.png"
            alt="menu1"
            class="card-img-top"
          >

          <div class="card-body">
            <div class="price">
              <div><img
                  src="img/Rating.png"
                  alt="rating"
                ></div>
              €13,99
            </div>
            <h5 class="card-title">Vegetarian Heaven</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet,
              consectetur adipiscing elit.
              Integer nec porttitor mauris.
              Aliquam sodales ultricies faucibus.
            </p>
            <button><a href="/views/cart.php/?id=5">Order now</a></button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card">
          <img
            src="img/menu6.png"
            alt="menu1"
            class="card-img-top"
          >

          <div class="card-body">
            <div class="price">
              <div><img
                  src="img/Rating.png"
                  alt="rating"
                ></div>
              €12,99
            </div>
            <h5 class="card-title">American Burger</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet,
              consectetur adipiscing elit.
              Integer nec porttitor mauris.
              Aliquam sodales ultricies faucibus.
            </p>
            <button><a href="/views/cart.php/?id=6">Order now</a></button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 menu-mobile">
        <div class="card">
          <img
            src="img/menu7.png"
            alt="menu1"
            class="card-img-top"
          >

          <div class="card-body">
            <div class="price">
              <div><img
                  src="img/Rating.png"
                  alt="rating"
                ></div>
              €24,99
            </div>
            <h5 class="card-title">Homemade Pot</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet,
              consectetur adipiscing elit.
              Integer nec porttitor mauris.
              Aliquam sodales ultricies faucibus.
            </p>
            <button><a href="/views/cart.php/?id=7">Order now</a></button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 menu-tablet">
        <div class="card">
          <img
            src="img/menu8.png"
            alt="menu1"
            class="card-img-top"
          >

          <div class="card-body">
            <div class="price">
              <div><img
                  src="img/Rating.png"
                  alt="rating"
                ></div>
              €8,99
            </div>
            <h5 class="card-title">Pizza Capri</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet,
              consectetur adipiscing elit.
              Integer nec porttitor mauris.
              Aliquam sodales ultricies faucibus.
            </p>
            <button><a href="/views/cart.php/?id=8">Order now</a></button>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom-button">
      <button><a href="#menu">Explore menu</a></button>
    </div>
  </div>
</section>

<section
  id="delivery"
  class="delivery"
>
  <div class="container">
    <div class="row">
      <header>
        <h3>Fast & Reliable</h3>
        <h1>Delivery</h1>
        <div>
          <img
            src="img/header-vector.png"
            alt="header"
            class="img-fluid"
          >
        </div>
      </header>
      <div class="col-xl-6 col-lg-12">
        <main>
          <div class="images_delivery">
            <div>
              <img
                src="img/delivery1.png"
                alt="delivery_image"
                class="img-fluid"
              >
            </div>
            <div>
              <img
                src="img/delivery2.png"
                alt="delivery_image"
                class="img-fluid"

              >
              <img
                src="img/delivery3.png"
                alt="delivery_image"
                class="img-fluid"

              >
            </div>
          </div>
        </main>
      </div>
      <div class="col-xl-6 col-lg-12">
        <article>
          <div>

            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Integer nec porttitor mauris. Aliquam sodales ultricies faucibus.
              Quisque feugiat risus tortor, eget luctus lectus luctus et.
              Sed feugiat neque lacus, ut eleifend purus rutrum vel.
              In pharetra rutrum consequat. Nam viverra volutpat vehicula.
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Integer nec porttitor mauris. Aliquam sodales ultricies faucibus.
              Quisque feugiat risus tortor, eget luctus lectus luctus et.
              Sed feugiat neque lacus, ut eleifend purus rutrum vel.
              In pharetra rutrum consequat. Nam viverra volutpat vehicula.
            </p>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<section
  id="table"
  class="table"
>
  <div class="container">
    <div class="row">
      <header>
        <h3>Check out our place</h3>
        <h1>Book your table</h1>
        <div>
          <img
            src="img/header-vector.png"
            alt="header"
            class="img-fluid"
          >
        </div>
        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel erat sem. Vestibulum sollicitudin nisi
          mauris,
          sit amet ultrices magna tempus mollis. Sed quis diam dapibus ante sollicitudin tincidunt.</h4>
      </header>
      <div class="col">


        <form class="row g-3" method="post" action="/servlets/reserve-table.php" id="reserve" name="reserve">
          <div class="col-md-12">
            <label
              for="name"
              class="form-label"
            ></label>
            <?php

            if(isset($_SESSION["username"])){ ?>
              <input
                type="text"
                class="form-control"
                name="name"
                id="name"
                placeholder="Name"
                required
                value="<?=$_SESSION["username"]?>"
                readonly
              >
            <?php } else { ?>
              <input
                type="text"
                class="form-control"
                name="name"
                id="name"
                placeholder="Name"
                required
              >
            <?php }
            ?>

          </div>
          <div class="col-md-12">
            <label
              for="email"
              class="form-label"
            ></label>
            <?php

            if(isset($_SESSION["username"])){ ?>
              <input
                type="email"
                class="form-control"
                id="email"
                name="email"
                placeholder="Email"
                value="<?=$_SESSION["email"]?>"
                readonly
              >
            <?php } else { ?>
              <input
                type="email"
                class="form-control"
                id="email"
                name="email"
                placeholder="Email"
              >
            <?php }
            ?>
          </div>

          <div class="col-md-6 col-6">
            <label
              for="phone"
              class="form-label"
            ></label>
            <input
              type="tel"
              class="form-control"
              id="phone"
              name="phone"
              placeholder="Phone Number"
            >

          </div>
          <div class="col-md-6 col-6">
            <label
              for="people"
              class="form-label"
            ></label>
            <input
              type="number"
              step="1"
              class="form-control phone-email"
              id="people"
              name="people"
              placeholder="Number of people"
              min="1"

            >
          </div>


          <div class="col-md-6 col-6">
            <label
              for="date"
              class="form-label"
            ></label>
            <input
              type="date"
              class="form-control phone-email"
              id="date"
              name="date"
            >
          </div>
          <div class="col-md-6 col-6">
            <label
              for="time"
              class="form-label"
            ></label>
            <input
              type="time"
              class="form-control"
              id="time"
              name="time"
              min="10:00"
              max="22:00"

              required
            >
          </div>

          <div class="col-md-12">
            <label
              for="message"
              class="form-label"
            ></label>
            <textarea
              name="message"
              id="message"
              rows="5"
              class="form-control"
              placeholder="Your message"
            ></textarea>
          </div>
          <div>
            <div class="col-12 table-button">
              <button
                type="submit"
              >Book the table
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


<section
  class="gallery"
  id="gallery"
>
  <div class="container">
    <div class="row">
      <header>
        <h3>Check our work</h3>
        <h1>Gallery</h1>
        <div>
          <img
            src="img/header-vector.png"
            alt="header"
            class="img-fluid"
          >
        </div>
      </header>
      <div class="col-12">
        <main class="video">
          <iframe
            width="560"
            height="315"
            src="https://www.youtube.com/embed/78ixbqwFLbc"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
        </main>
      </div>
      <div class="col-12">
        <main class="images">
          <div>
            <div>
              <img
                src="img/gallery1.png"
                alt="delivery"
                class="img-fluid"
              >
              <img
                src="img/gallery2.png"
                alt="delivery"
                class="img-fluid"
              >
              <img
                src="img/gallery3.png"
                alt="delivery"
                class="img-fluid img-tablet"
              >
            </div>
            <div>
              <img
                src="img/gallery4.png"
                alt="delivery"
                class="img-fluid"
              >
              <img
                src="img/gallery5.png"
                alt="gallery5"
                class="img-fluid"
              >
              <img
                src="img/gallery6.png"
                alt="gallery6"
                class="img-fluid img-tablet"
              >
            </div>
          </div>
        </main>
      </div>
      <div class="gallery-button">
        <div class="col-12">
          <button
          ><a href="#gallery">See more</a>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>


<section
  id="footer"
  class="footer"
>
  <div class="discount">
    <div class="rectangle">
      <main>
        <header>
          <h2>Get special discount</h2>
        </header>
        <p>
          Subscribe to our newsletter and youll be informed
          about new stuff and plus you'll get reward!
        </p>
        <div>
          <input
            type="email"
            placeholder="name@example.com"
            id="footer_email"
          >
          <input
            type="submit"
            value="Sign up"
            id="footer_email_btn"
          >
        </div>
      </main>
    </div>
  </div>

  <div class="container">
    <div class="footer_wrap">
      <div class="footer_col1">
        <div class="footer_logo">
          <img
            src="img/Logo_Footer.png"
            alt="Zeus"
          >
        </div>
        <div class="footer_socials">
          <h2>Follow us</h2>
          <ul class="socials">
            <li><a
                href="https://sk-sk.facebook.com/"
                target="_blank"
              >
                <img
                  src="img/facebook.png"
                  alt="facebook"
                >
              </a></li>
            <li><a
                href="https://twitter.com/?lang=sk"
                target="_blank"
              ><img
                  src="img/twitter.png"
                  alt="twitter"
                ></a></li>
            <li><a
                href="https://www.instagram.com/"
                target="_blank"
              ><img
                  src="img/instagram.png"
                  alt="instagram"
                ></a></li>
            <li><a
                href="https://www.linkedin.com/"
                target="_blank"
              ><img
                  src="img/linkedin.png"
                  alt="linkedin"
                ></a></li>
          </ul>
        </div>
      </div>
      <div class="footer_col2">
        <h2>Contact</h2>
        <div class="contact">
          <p><img
              src="img/gps.png"
              alt="location"
            >35 W 46th Street, Wall Road
            New York, USA</p>
          <p><img
              src="img/phone.png"
              alt="phone"
            >+421 944 346 798</p>
          <p><img
              src="img/email.png"
              alt="email"
            >info@zeus.com</p>
        </div>
      </div>
      <div class="footer_col2">
        <h2>Support</h2>
        <p><a href="#">FAQ</a></p>
        <p><a href="#">Complains</a></p>
        <p><a href="#">Contact us</a></p>
        <p><a href="#">Our partners</a></p>
      </div>
      <div class="footer_col2">
        <h2>More</h2>
        <p><a href="#">Testimonials</a></p>
        <p><a href="#">Our restaurants</a></p>
        <p><a href="#">Gallery</a></p>
        <p><a href="#">Blog</a></p>

      </div>
    </div>
  </div>
</section>

<div class="bottom_footer">
  <p>Copyright © 2021 Zeus | All Rights Reserved </p>
</div>

<div class="back_to_top">
  <a href="#">
    <img
      src="img/Back-to-top.png"
      alt="backtotop"
    >
  </a>
</div>


<script src="main.js"></script>
</body>
</html>

<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script>
    $( "#reserve" ).validate({
        rules: {
            phone: {
                required: true,
                minlength:10,
                maxlength:10
            },
            email: {

            },
            people: {
                required: true,
                range:[1, 12]
            },
            date:{
                required:true
            }
        }
    });
</script>