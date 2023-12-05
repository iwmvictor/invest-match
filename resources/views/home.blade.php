<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>InvestMatch - Innovator and Investor Matching Platform</title>

    <!-- styles -->
    <link rel="stylesheet" href="/css/home.css" />

    <!-- icons -->
    <script
      src="https://kit.fontawesome.com/627b5e26a3.js"
      crossorigin="anonymous"
    ></script>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <div class="container">
        <nav class="navbar">
          <div class="brand">
            <h3 class="logo"><i class="fa-solid fa-link"></i>InvestMatch</h3>
          </div>
          <ul>
            <li><a href="">home</a></li>
            <li><a href="">about us</a></li>
            <li><a href="">how it works</a></li>
            <li><a href="">resources</a></li>
            <li><a href="">contact</a></li>
          </ul>
          <div class="nav-btn">
            <a href="authentication" class="btn"><span>sign in</span></a>
          </div>
        </nav>
      </div>
    </header>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero-content col-6">
            <h2>Connecting Innovators with Investors</h2>
            <p>
              Unlocking Opportunities for Ambitious Entrepreneurs and Visionary
              Funders
            </p>
            <div class="hero-btn">
              <a href="" class="btn">get started</a>
              <a href="" class="button">learn more</a>
            </div>
          </div>
          <div class="hero-box-wp">
            <div class="hrow">
              <div class="hero-box col-4">
                <h4>Welcome to Your Investment Journey</h4>
                <p>Where Dreams Meet Capital, and Innovation Finds Fuel</p>
              </div>
              <div class="hero-box col-8">
                <p>
                  Where Ambitious Entrepreneurs Meet Visionary Funders. Join
                  InvestLink, the trusted bridge to growth and investment
                  opportunities.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="about">
        <div class="container">
          <div class="row">
            <div class="col-5">
              <img src="{{ asset('image/about.png')}}" style="width: 100%; filter: brightness(.8);"  />
            </div>
            <div class="about-content col-6">
              <span class="sec-title">who we are</span>
              <h3>where dreams meet capital, and innovation finds fuel</h3>
              <p>
                At InvestLink, we're not just a platform; we're the catalyst for
                your financial success. Our mission is to empower entrepreneurs
                and investors alike, providing a bridge that connects visionary
                ideas with the capital they need to flourish.
              </p>
              <p>
                With a network of over 800 financing parties, we've spent a
                decade perfecting the art of matching the right investor,
                venture capitalist, or financier with ambitious entrepreneurs.
                We're critical, decisive, and unrelenting in our commitment to
                your success.
              </p>
              <div class="about-btn">
                <a href="" class="btn">learn more</a>
                <a href="" class="button">meet the team</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </body>
</html>