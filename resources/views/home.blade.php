<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>InvestMatch - Innovator and Investor Matching Platform</title>
  <!-- favicon -->
  <link rel="shortcut icon" href="image/hero-img.png" type="image/x-icon">
  <!-- style css -->
  <link rel="stylesheet" href="/css/home.css" />
  <!-- icons -->
  <script src="https://kit.fontawesome.com/627b5e26a3.js" crossorigin="anonymous"></script>

  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

</head>

<body>
  <header>
    <!-- Navbar -->
    <nav>
      <div class="container">
        <div class="navbar">
          <div class="brand">
            <a href="#footer"><img src="{{asset('image/logo.png')}}" oncontextmenu="return false" ondragstart="return false;" alt="Invest Match"></a>
          </div>
          <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#how">how it works</a></li>
            <li><a href="#about">about us</a></li>
            <li><a href="#blog">our blog</a></li>
            <li><a href="#contact">Contact Us</a></li>
          </ul>
          <div class="cta">
            <a href="authentication" class="btn">get started</a>
          </div>
        </div>
      </div>
    </nav>
    <div class="hero">
      <div class="container">
        <div class="hero-content">
          <p>empowering innovators and investors</p>
          <h2>Join the network of leading startups in Africa today.</h2>
          <button class="btn btn--primary">Get Started Now</button>
        </div>
      </div>
    </div>
  </header>
  <main>
    <!-- why us section -->
    <section id="about" class="why-us">
      <div class="container">
        <div class="row col-12">
          <div class="content col-6">
            <span class="subtitle">Why InvestMatch?</span>
            <h3>We are a platform that connects innovative companies with investors who believe
              in their vision, but lack access to capital.</h3>
            <p>InvestMatch is your gateway to discover and support innovative projects. We connect aspiring entrepreneurs with investors eager to fuel the next big idea. Join us in shaping the future.</p>
          </div>
          <div class="video col-6">
            <iframe src="https://www.youtube.com/embed/n5BWEhRadT4?si=AA81cil9znOmnS9i&amp;controls" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="col-12"></iframe>
          </div>
        </div>
      </div>
    </section>

    <!-- how it works section -->
    <section id="how" class="how-it-works">
      <div class="container">
        <span class="subtitle">How InvestMatch Works?</span>
        <div class="innovator">
          <h2>Look for opportunities as an innovator</h2>
          <div class="row">
            <div class="col-4">
              <div class="step">
                <h4>submit your idea</h4>
                <span class="subheading">Share your visionary business idea with us</span>
                <p>Submit your project details and let us guide you through the process</p>
              </div>
            </div>
            <div class="col-4">
              <div class="step">
                <h4>expert evaluation</h4>
                <span class="subheading">Our experts access your idea</span>
                <p>Our team of industry experts will evaluate your project, providing valuable insights to enhance its potential.</p>
              </div>
            </div>
            <div class="col-4">
              <div class="step">
                <h4>Match making</h4>
                <span class="subheading">Connect with Investors</span>
                <p>Once approved, your project enters our marketplace, where investors can discover and support ideas aligned with their interests.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="investor">
          <h2>Look for opportunities as an investor</h2>
          <div class="process row">
            <div class="col-4">
              <div class="step">
                <div class="circle"></div>
                <div class="content">
                  <h4>Find Companies</h4>
                  <p>Browse through our extensive listings or search by category. We’re
                    constantly adding new businesses so be sure to check back often!</p>
                </div>
              </div>
            </div>
            <div class="arrow"></div>
            <div class="col-4">
              <div class="step">
                <div class="circle"></div>
                <div class="content">
                  <h4>Connect With a Company</h4>
                  <p>Once you find a company that aligns with your interests, reach out to them
                    directly via email or phone. Our team will match you with an investor from
                    our network for further discussion.</p>
                </div>
              </div>
            </div>
            <div class="arrow"></div>
            <div class="col-4">
              <div class="step">
                <div class="circle"></div>
                <div class="content">
                  <h4>Invest and Grow Together<br />with the Company</h4>
                  <p>If the company accepts your offer, join the funding round as an investor
                    alongside the founders. As the company grows, your ownership stake will also grow.
                    You'll have direct control over the company's future success and can vote on key decisions.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- featured projects section -->
    <section id="projects" class="featured">
      <div class="container">
        <h2>Explore Featured Projects</h2>
        <p>Discover a curated selection of innovative projects spanning various industries. Find the next big opportunity to invest in.</p>
        <ul class="project-list col-12 row">
          <li class="col-3">
            <h4>Innovation Hub - Technology:</h4>
            <p>Unleash visionary tech ideas, where innovators pioneer the future, and investors eagerly seek cutting-edge opportunities.</p>
            <p><a href="#">Learn more</a></p>
          </li>
          <li class="col-3">
            <h4>Agricultural Advancements</h4>
            <p>Cultivate innovation in agriculture, where minds introduce sustainable solutions, attracting investors ready to sow seeds of success.</p>
            <p><a href="#">Learn more</a></p>
          </li>
          <li class="col-3">
            <h4>Commerce & Trade Opportunities</h4>
            <p>Revolutionize commerce with creative minds driving innovative concepts; investors play a pivotal role in exploring diverse market opportunities.</p>
            <p><a href="#">Learn more</a></p>
          </li>
          <li class="col-3">
            <h4>Diverse Sectors for Success</h4>
            <p>Explore education, health, and more, where inventive ideas and investment opportunities abound for aspiring entrepreneurs.</p>
            <p><a href="#">Learn more</a></p>
          </li>
        </ul>
    </section>

    <!-- get started section -->
    <section id="getstarted" class="getstarted">
      <div class="container">
        <div class="row">
          <div class="col-7">
            <h1>Ready to Get Started?</h1>
            <p>Whether you're an entrepreneur with a game-changing idea or an investor seeking exciting opportunities, InvestMatch is the platform for you. Join now and be part of the innovation revolution.</p>
          </div>
          <div class="col-5">
            <!-- action="/invest/create" method="post" -->
            <form>
              <input type="text" name="name" placeholder="eg: John Doe" required />
              <input type="text" name="phone" placeholder="eg: +25078888888" required />
              <input type="email" name="email" placeholder="eg: johndoe@gmail.com" />
              <button class="btn btn-primary">Get Started Now!</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- join now cta -->
    <section class="join-cta">
      <div class="container text-center">
        <p>Join the Investment Club Today!</p>
        <h2>Start your journey towards innovation and growth.</h2>
        <a href="#" class="btn btn-outline">sign up now</a>
      </div>
    </section>

    <!-- our blog -->
    <section id="blog" class="blog">
      <div class="container">
        <div class="blog-sec-title">
          <h1>Our Blog</h1>
          <p>Explore insightful articles that illuminate diverse perspectives and inspire informed discussions in our engaging blog section.</p>
        </div>
        <div class="row">
          <div class="col-3">
            <div class="article">
              <div class="header-image">
                <img src="{{asset('image/event-12.jpg')}}" alt="News Header Image">
              </div>
              <div class="blog-content">
                <h4 class="blog-title">this is the blog title</h4>
                <div class="blog-detail">
                  <span class="writter">E.Muyi</span>
                  <span class="date">jan 15, 2024</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum libero itaque quisquam consectetur excepturi.</p>
              </div>
              <div class="blog-action">
                <a href="#">read more</a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="article">
              <div class="header-image">
                <img src="{{asset('image/event-12.jpg')}}" alt="News Header Image">
              </div>
              <div class="blog-content">
                <h4 class="blog-title">this is the blog title</h4>
                <div class="blog-detail">
                  <span class="writter">E.Muyi</span>
                  <span class="date">jan 15, 2024</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum libero itaque quisquam consectetur excepturi.</p>
              </div>
              <div class="blog-action">
                <a href="#">read more</a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="article">
              <div class="header-image">
                <img src="{{asset('image/event-12.jpg')}}" alt="News Header Image">
              </div>
              <div class="blog-content">
                <h4 class="blog-title">this is the blog title</h4>
                <div class="blog-detail">
                  <span class="writter">E.Muyi</span>
                  <span class="date">jan 15, 2024</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum libero itaque quisquam consectetur excepturi.</p>
              </div>
              <div class="blog-action">
                <a href="#">read more</a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="article">
              <div class="header-image">
                <img src="{{asset('image/event-12.jpg')}}" alt="News Header Image">
              </div>
              <div class="blog-content">
                <h4 class="blog-title">this is the blog title</h4>
                <div class="blog-detail">
                  <span class="writter">E.Muyi</span>
                  <span class="date">jan 15, 2024</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum libero itaque quisquam consectetur excepturi.</p>
              </div>
              <div class="blog-action">
                <a href="#">read more</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- CONTACT US -->
    <section id="contact" class="contact">
      <div class="row contactus">
        <div class="col-6">
          <div class="form">
            <span class="subtitle">Contact us</span>
            <h4>Hello There! Feel Free to Leave us a Message</h4>
            <form>
              <input type="text" name="" placeholder="eg: John Doe">
              <input type="text" name="" placeholder="eg: johndoe@gmail.com">
              <input type="text" name="" placeholder="Title/Subject/Reason">
              <textarea name="" rows="6" placeholder="Write your message"></textarea>
              <button class="button">send message</button>
            </form>
          </div>
        </div>
        <div class="col-6">
          <div class="ourcontact">
            <div class="social">
              <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
            <div class="address">
              <h3>Reach to Us </h3>
              <p class="fas fa-map-marker-alt"><a href="">Kigali - Rwanda</a></p>
              <p class="far fa-envelope"><a href="mailto:info@example.com">info@example.com</a></p>
              <p class="fa fa-phone"><a href="callto:2507891239876">+2507891239876</a></p>
            </div>
            <div class="map">
              <iframe style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d119926.72338413346!2d29.6427512!3d-1.5091822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1642157740583!5m2!1sen!2suk"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <footer id="footer">
    <div class="container">
      <div class="row upper-class">
        <div class="col-4">
          <div class="footer-widget">
            <div class="fabt">
              <h3>About Us</h3>
              <img src="{{asset('image/logo-nbg.png')}}" alt="INVEST MATCH">
              <p>We are Gateway to Seamless Collaboration, Connecting Entrepreneurs with Potential Investors for Innovative Ventures.</p>
            </div>
            <div class="fsocial">
              <h4>Follow us</h4>
              <ul>
                <li><a href="" class="fab fa-facebook-f facebook-bg"></a></li>
                <li><a href="" class="fab fa-twitter twitter-bg"></a></li>
                <li><a href="" class="fab fa-instagram instagram-bg"></a></li>
                <li><a href="" class="fab fa-linkedin-in linkedin-bg"></a></li>
                <li><a href="" class="fab fa-google-plus-g google-bg"></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="footer-widget useful">
            <h3>Useful Links</h3>
            <ul>
              <li><a href="">about us</a></li>
              <li><a href="">contact us</a></li>
              <li><a href="">our blog</a></li>
              <li><a href="">login</a></li>
              <li><a href="">signup</a></li>
            </ul>
          </div>
        </div>
        <div class="col-4">
          <div class="footer-widget sub">
            <h3>Follow Us & Subscribe</h3>
            <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
            <div class="subscribe-form">
              <form>
                <div class="input">
                  <input type="email" name="mail" placeholder="Email address" class="col-10">
                  <button class="col-2"><i class="fab fa-telegram-plane"></i></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="container">
      <div class="row footer-down">
        <div class="copyright">
          <p>Copyright © 2024, All Right Reserved</p>
        </div>
        <div class="term">
          <ul>
            <li><a href="">home</a></li>
            <li><a href="">terms & conditions</a></li>
            <li><a href="">privacy policy</a></li>
            <li><a href="">contacts</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>



</body>

</html>