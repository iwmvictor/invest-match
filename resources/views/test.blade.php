<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>InvestMatch - Innovator and Investor Matching Platform</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- FontAwesome CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>




  <!-- styles -->
  <link rel="stylesheet" href="/css/home.css" />


  <!-- icons -->
  <script src="https://kit.fontawesome.com/627b5e26a3.js" crossorigin="anonymous"></script>

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
</head>

<body>
  <header>
    <div class="container">
      <nav class="navbar">
        <div class="brand">
          <h3 class="logo"><i class="fa-solid fa-link"></i>InvestMatch</h3>
        </div>
        <ul>
          <li><a href="#home">home</a></li>
          <li><a href="#about">about us</a></li>
          <li><a href="#how">how it works</a></li>
          <li><a href="#blog">resources</a></li>
          <li><a href="#contact">contact</a></li>
        </ul>
        <div class="nav-btn">
          <a href="authentication" class="btn"><span>sign in</span></a>
        </div>
      </nav>
    </div>
  </header>
  <main>
    <section class="hero" id="home">
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
    <section class="about" id="about">
      <div class="container">
        <div class="row">
          <div class="col-5">
            <img src="{{ asset('image/about.png')}}" style="width: 100%; filter: brightness(.8);" />
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

    <section class="how-it-works" id="how">
      <div class="container">
        <div class="row pb-5">
          <div class="text-center col-md-8 mx-auto">
            <div class="section-title">
              <h1>How it Works</h1>
              <p>At InvestLink, our approach to connecting entrepreneurs with investors is designed to be seamless, transparent, and empowering. We believe in fostering meaningful collaborations and ensuring that great ideas find the support they need to flourish.</p>
            </div>
          </div>
        </div>

        <div class="row content">
          <div class="row pb-5">

            <div class="col-md-6 mt-2 mt-md-0 p-2 pl-4 box mb-3">
              <div class="d-flex p-3 bg-white align-items-center justify-content-between">
                <div class="p-1">
                  <span>Step 1: Idea Submission</span>
                  <h3 class="h4 mt-3 ">Investor Matching Begins</h3>
                  <p class="mt-3">Entrepreneurs kickstart the process by submitting their innovative business ideas through our user-friendly platform. This marks the beginning of our robust investor matching journey.</p>
                </div>
              </div>
            </div>

            <div class="col-md-6 mt-2 mt-md-0 p-2 pl-4 box mb-3">
              <div class="d-flex p-3 bg-white align-items-center justify-content-between">
                <div class="p-1">
                  <span>Step 2: In-Depth Analysis</span>
                  <h3 class="h4 mt-3 ">Matching Algorithm at Work </h3>
                  <p class="mt-3">Our advanced matching algorithm analyzes investor preferences and business idea attributes, ensuring a tailored and efficient matchmaking process that aligns with each user's unique goals and criteria.</p>
                </div>
              </div>
            </div>

            <div class="col-md-6 mt-2 mt-md-0 p-2 pl-4 box mb-3">
              <div class="d-flex p-3 bg-white align-items-center justify-content-between">
                <div class="p-1">
                  <span>Step 3: Recommendations</span>
                  <h3 class="h4 mt-3 ">Curated Match Recommendations</h3>
                  <p class="mt-3">Investors receive curated match recommendations based on their preferences. These carefully selected matches represent opportunities with high compatibility, facilitating efficient decision-making.</p>
                </div>
              </div>
            </div>

            <div class="col-md-6 mt-2 mt-md-0 p-2 pl-4 box mb-3">
              <div class="d-flex p-3 bg-white align-items-center justify-content-between">
                <div class="p-1">
                  <span>Step 4: Communication Hub</span>
                  <h3 class="h4 mt-3 ">Secure Communication Channels</h3>
                  <p class="mt-3"> Upon expressing interest, investors and entrepreneurs engage in secure and private communication channels within the platform. This ensures the confidentiality of discussions and protects sensitive information.</p>
                </div>
              </div>
            </div>

            <div class="col-md-6 mt-2 mt-md-0 p-2 pl-4 box mb-3">
              <div class="d-flex p-3 bg-white align-items-center justify-content-between">
                <div class="p-1">
                  <span>Step 5: Investor Review</span>
                  <h3 class="h4 mt-3 ">Investor Review and Expression of Interest</h3>
                  <p class="mt-3">Investors thoroughly review proposed business ideas and express their interest in potential collaborations. This stage marks a crucial intersection where exciting opportunities are explored and partnerships begin to take shape.</p>
                </div>
              </div>
            </div>

            <div class="col-md-6 mt-2 mt-md-0 p-2 pl-4 box mb-3">
              <div class="d-flex p-3 bg-white align-items-center justify-content-between">
                <div class="p-1">
                  <span>Step 6: Successful Collaboration</span>
                  <h3 class="h4 mt-3 ">Facilitating Successful Collaborations</h3>
                  <p class="mt-3">InvestLink aims to witness the success of collaborations as investors and entrepreneurs join forces, leveraging mutual strengths to turn innovative ideas into thriving businesses. We celebrate each success as a testament to the power of collaborative innovation.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>


    <section class="blog_section" id="blog">
      <div class="container">
        <div class="section-title">
          <h1>Blog and Resources</h1>
          <p>we provide a wealth of valuable information and tools to empower entrepreneurs and investors on their journey to success. Explore the diverse range of resources curated to enhance your understanding, skills, and strategies in the world of entrepreneurship and investment.</p>
        </div>
        <div class="blog_content">
          <div class="owl-carousel owl-theme row">
            <div class="blog_item col-4">
              <div class="blog_image">
                <img class="img-fluid" src="https://cdn.pixabay.com/photo/2019/03/10/18/31/hong-kong-4046913_960_720.jpg" alt="images not found">
                <span><i class="icon ion-md-create"></i></span>
              </div>
              <div class="blog_details">
                <div class="blog_title">
                  <h5><a href="#">We are best for any industrial & business solution.</a></h5>
                </div>
                <ul>
                  <li><i class="icon ion-md-person"></i>Elia Muyizere</li>
                  <li><i class="icon ion-md-calendar"></i>December 21, 2023</li>
                </ul>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem...</p>
                <a href="#">Read More<i class="icofont-long-arrow-right"></i></a>
              </div>
            </div>
            <div class="blog_item col-4">
              <div class="blog_image">
                <img class="img-fluid" src="https://cdn.pixabay.com/photo/2015/07/09/22/45/tree-838667_960_720.jpg" alt="images not found">
                <span><i class="icon ion-md-create"></i></span>
              </div>
              <div class="blog_details">
                <div class="blog_title">
                  <h5><a href="#">We are best for any industrial & business solution.</a></h5>
                </div>
                <ul>
                  <li><i class="icon ion-md-person"></i>Elia Muyizere</li>
                  <li><i class="icon ion-md-calendar"></i>December 21, 2023</li>
                </ul>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem...</p>
                <a href="#">Read More<i class="icofont-long-arrow-right"></i></a>
              </div>
            </div>
            <div class="blog_item col-4">
              <div class="blog_image">
                <img class="img-fluid" src="https://cdn.pixabay.com/photo/2015/10/30/20/13/sunrise-1014712_960_720.jpg" alt="images not found">
                <span><i class="icon ion-md-create"></i></span>
              </div>
              <div class="blog_details">
                <div class="blog_title">
                  <h5><a href="#">We are best for any industrial & business solution.</a></h5>
                </div>
                <ul>
                  <li><i class="icon ion-md-person"></i>Elia Muyizere</li>
                  <li><i class="icon ion-md-calendar"></i>December 21, 2023</li>
                </ul>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem...</p>
                <a href="#">Read More<i class="icofont-long-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="contact" id="contact">
      <div class="container">
        <div class="contact-form">
          <div class="form-title">
            <h1>contact us</h1>
            <p>Hello there! feel free to leave us a message</p>
          </div>
          <hr>
          <form>
            <div class="row">
              <div class="form-input col-6">
                <span class="input-box">
                  <input type="text" class="input" placeholder="Fullname">
                </span>
              </div>
              <div class="form-input col-6">
                <span class="input-box">
                  <input type="email" class="input" placeholder="Email">
                </span>
              </div>
            </div>
            <div class="row">
              <div class="form-input col-6">
                <span class="input-box">
                  <span class="icon"></span>
                  <input type="tel" class="input" placeholder="Phone Number">
                </span>
              </div>
              <div class="form-input col-6">
                <span class="input-box">
                  <span class="icon"></span>
                  <input type="text" class="input" placeholder="Topic | Subject">
                </span>
              </div>
            </div>
            <div class="row">
              <div class="form-input col-12">
                <span class="input-box">
                  <span class="icon"></span>
                  <textarea name="message" cols="30" rows="4" class="input" placeholder="Message*"></textarea>
                </span>
              </div>
            </div>
            <div class="form-btn col-12">
              <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </section>



  </main>


  <footer class="footer-section" id="footer">
    <div class="container">
      <div class="footer-cta pt-5 pb-5">
        <div class="row">
          <div class="col-xl-4 col-md-4 mb-30">
            <div class="single-cta">
              <i class="fas fa-map-marker-alt"></i>
              <div class="cta-text">
                <h4>Find us</h4>
                <span>KN 12 ST, Kigali, Rwanda</span>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-4 mb-30">
            <div class="single-cta">
              <i class="fas fa-phone"></i>
              <div class="cta-text">
                <h4>Call us</h4>
                <span>1234567890</span>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-4 mb-30">
            <div class="single-cta">
              <i class="far fa-envelope-open"></i>
              <div class="cta-text">
                <h4>Mail us</h4>
                <span>info@investmatch.com</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-content pt-5 pb-5">
        <div class="row">
          <div class="col-xl-4 col-lg-4 mb-50">
            <div class="footer-widget">
              <div class="footer-logo">
                <a href="index.html">
                  <img src="data:image/png;base64,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" class="img-fluid" alt="logo">
                </a>
              </div>
              <div class="footer-text">
                <p>We are Gateway to Seamless Collaboration, Connecting Entrepreneurs with Potential Investors for Innovative Ventures.</p>
              </div>
              <div class="footer-social-icon">
                <span>Follow us</span>
                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
            <div class="footer-widget">
              <div class="footer-widget-heading">
                <h3>Useful Links</h3>
              </div>
              <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#how">services</a></li>
                <li><a href="#footer">testimonials</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#footer">Gallery</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#how">Expert Team</a></li>
                <li><a href="#footer">Admin? Login</a></li>
                <li><a href="#blog">Latest News</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
            <div class="footer-widget">
              <div class="footer-widget-heading">
                <h3>Subscribe</h3>
              </div>
              <div class="footer-text mb-25">
                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
              </div>
              <div class="subscribe-form">
                <form action="#">
                  <input type="text" placeholder="Email Address">
                  <button><i class="fab fa-telegram-plane"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright-area">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-6 text-center text-lg-left">
            <div class="copyright-text">
              <p>Copyright &copy; 2023, All Right Reserved <a href="https://youtube.com/>Invest Match</a></p>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
            <div class="footer-menu">
              <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#footer">Terms</a></li>
                <li><a href="#footer">Privacy</a></li>
                <li><a href="#footer">Policy</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>



  <script src="/js/script.js"></script>
  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <!-- bootstrap -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!-- carousel -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

</body>

</html>






/* Custom scrollbar for WebKit browsers (Chrome, Safari) */
::-webkit-scrollbar {
    width: 12px;
}

/* Track */
::-webkit-scrollbar-track {
    background: var(--secondary-color);
}

/* Handle */
::-webkit-scrollbar-thumb {
    background: var(--primary-color);
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: var(--accent-color);
}

/* global css */

body {
    background: var(--primary-color);
}

a {
    text-decoration: none;
    font-size: 16px;
}
p {
    font-size: 16px;
}
h1 {
    font-size: 48px;
}
h2 {
    font-size: 36px;
}
h3 {
    font-size: 32px;
}
h4 {
    font-size: 21px;
}

/* re-usable css */

.container {
    width: 90%;
    margin: auto;
}

ul li {
    list-style: none;
}

.btn {
    background: var(--accent-color);
    color: var(--primary-color);
    border: none;
    outline: none;
    line-height: 26px;
    padding: 10px 30px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    height: 50px;
    text-transform: capitalize;
    position: relative;
    cursor: pointer;
    overflow: hidden;
    transition: var(--transition);
    z-index: 2;
}

.btn::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: var(--secondary-color);
    transform: scaleY(0);
    transform-origin: bottom;
    transition: transform 0.95s cubic-bezier(0.23, 1, 0.23, 1);
    z-index: -1;
}

.btn:hover {
    color: var(--accent-color);
    box-shadow: var(--box-shadow);
}

.btn:hover::before {
    transform: scaleY(1);
    transform-origin: top;
}

.button {
    color: var(--accent-color);
    border: 1px solid var(--accent-color);
    outline: none;
    line-height: 26px;
    padding: 10px 30px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    height: 50px;
    text-transform: capitalize;
    position: relative;
    cursor: pointer;
    overflow: hidden;
    transition: var(--transition);
    z-index: 2;
}

.button::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: var(--accent-color);
    transform: scaleY(0);
    transform-origin: bottom;
    transition: transform 0.95s cubic-bezier(0.23, 1, 0.23, 1);
    z-index: -1;
}

.button:hover {
    color: var(--primary-color);
    box-shadow: var(--box-shadow);
}

.button:hover::before {
    transform: scaleY(1);
    transform-origin: top;
}

.row,
.vrow,
.hrow {
    display: flex;
    align-items: center;
}

.vrow {
    flex-direction: column;
}

.hrow {
    flex-direction: row;
}

.col-12,
.col-11,
.col-10,
.col-9,
.col-8,
.col-7,
.col-6,
.col-5,
.col-4,
.col-3,
.col-2,
.col-1 {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}

.col-1 {
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
}

.col-2 {
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
}

.col-3 {
    flex: 0 0 25%;
    max-width: 25%;
}

.col-4 {
    max-width: 33.333333%;
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
}

.col-5 {
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
}

.col-6 {
    flex: 0 0 50%;
    max-width: 50%;
}

.col-7 {
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
}

.col-8 {
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
}

.col-9 {
    flex: 0 0 75%;
    max-width: 75%;
}

.col-10 {
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
}

.col-11 {
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
}

.col-12 {
    flex: 0 0 100%;
    max-width: 100%;
}

.sec-title {
    font-size: 16px;
    font-weight: 400;
    text-transform: uppercase;
}

section {
    padding: 40px 0;
}

/* header  */
header {
    padding: 20px;
    background: var(--primary-color);
    box-shadow: var(--box-shadow);
    user-select: none;
}

.navbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.navbar ul {
    display: flex;
}

.navbar ul li a {
    color: var(--accent-color);
    text-transform: capitalize;
    padding: 10px 15px;
    transition: var(--transition);
}

.navbar ul li a:hover {
    background: rgb(0 131 173 / 40%);
}

.brand h3.logo {
    color: var(--accent-color);
}

/* hero  */
.hero {
    background-size: cover;
    background-position: center;
    background-image: linear-gradient(
            to right,
            rgb(0 131 173 / 90%),
            rgb(0 131 173 / 60%)
        ),
        url("/image/home-bg.jpg");
}

.hero .container .hrow {
    display: flex;
    justify-content: space-between;
}

.hero-content {
    padding: 80px 10px 80px 30px;
    color: var(--accent-color);
}

.hero-content h2 {
    padding: 10px 0;
}

.hero-btn {
    padding: 20px 0;
}

.hero-box-wp {
    background: var(--primary-color);
    color: var(--accent-color);
    padding: 20px;
    margin-bottom: -40px;
}

.hero-box {
    padding: 10px;
}

.hero-box:last-child {
    border-left: 1px solid var(--accent-color);
}

.about {
    background: var(--secondary-color);
    color: var(--accent-color);
    width: 100%;
}

.about-content h3 {
    text-transform: capitalize;
}

.about-content p {
    padding: 10px 0;
}

.about-btn .btn:hover {
    background: var(--primary-color);
}

section {
    padding-bottom: 60px;
    background-color: var(--primary-color);
}

.how-it-works h2 {
    margin-top: 60px;
    margin-bottom: 1.8rem;
}

.how-it-works .box {
    text-align: left;
    border-left: 18px solid var(--primary-color);
    background-color: #fff;
}

.box::before {
    content: "\f058";
    color: #d60e96;
    font-family: FontAwesome;
    font-weight: 400;
    font-style: normal;
    display: block;
    position: absolute;
    left: -15px;
    top: 50%;
    margin-top: -25px;
    font-size: 2.5rem;
}

@media (min-width: 600px) {
    .how-it-works .d-flex {
        display: flex;
        justify-content: space-between;
    }

    .box.col-md-6 {
        width: 47%;
        max-width: 47%;
    }
}

.blog_section {
    padding-top: 5rem;
    padding-bottom: 3rem;
    background: var(--secondary-color);
}
.blog_section .blog_content .blog_item {
    margin-bottom: 30px;
    box-shadow: 0 0 11px 0 rgba(6, 22, 58, 0.14);
    position: relative;
    border-radius: 2px;
    overflow: hidden;
    background: #f1f1f1;
}

.owl-carousel.owl-theme.row {
    justify-content: space-between;
}

.blog_item.col-4 {
    max-width: 32%;
    -ms-flex: 0 0 32%;
    flex: 0 0 32%;
}

.blog_section .blog_content .blog_item:hover .blog_image img {
    transform: scale(1.1);
}
.blog_section .blog_content .blog_item .blog_image {
    overflow: hidden;
    padding: 0;
}
.blog_section .blog_content .blog_item .blog_image img {
    width: 100%;
    transition: transform 0.5s ease-in-out;
}
.blog_section .blog_content .blog_item .blog_image span i {
    position: absolute;
    z-index: 2;
    color: #fff;
    font-size: 18px;
    width: 38px;
    height: 45px;
    padding-top: 7px;
    text-align: center;
    right: 20px;
    top: 0;
    -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 50% 79%, 0 100%);
    clip-path: polygon(0 0, 100% 0, 100% 100%, 50% 79%, 0 100%);
    background-color: var(--secondary-color);
}
.blog_section .blog_content .blog_item .blog_details {
    padding: 25px 20px 30px 20px;
}
.blog_section .blog_content .blog_item .blog_details .blog_title h5 a {
    color: #020d26;
    margin-top: 0;
    margin-bottom: 10px;
    font-size: 25px;
    line-height: 32px;
    font-weight: 400;
    transition: all 0.3s;
    text-decoration: none;
}
.blog_section .blog_content .blog_item .blog_details .blog_title h5 a:hover {
    color: var(--secondary-color);
}
.blog_section .blog_content .blog_item .blog_details ul {
    padding: 0 3px 10px 0;
    margin: 0;
}
.blog_section .blog_content .blog_item .blog_details ul li {
    display: inline-block;
    padding-right: 15px;
    position: relative;
    color: #7f7f7f;
}
.blog_section .blog_content .blog_item .blog_details ul li i {
    padding-right: 7px;
}
.blog_section .blog_content .blog_item .blog_details p {
    border-top: 1px solid #e5e5e5;
    margin-top: 4px;
    padding: 20px 0 4px;
}
.blog_section .blog_content .blog_item .blog_details a {
    font-size: 16px;
    display: inline-block;
    color: var(--secondary-color);
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s;
}
.blog_section .blog_content .blog_item .blog_details a:hover {
    color: #020d26;
}
.blog_section .blog_content .blog_item .blog_details a i {
    vertical-align: middle;
    font-size: 20px;
}
.blog_section .blog_content .owl-nav {
    display: block;
}
.blog_section .blog_content .owl-nav .owl-prev {
    position: absolute;
    left: -27px;
    top: 33%;
    border: 5px solid #fff;
    text-align: center;
    z-index: 5;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    outline: 0;
    background: var(--secondary-color);
    transition: all 0.3s;
    color: #fff;
}
.blog_section .blog_content .owl-nav .owl-prev span {
    font-size: 25px;
    margin-top: -6px;
    display: inline-block;
}
.blog_section .blog_content .owl-nav .owl-prev:hover {
    background: #fff;
    border-color: var(--secondary-color);
    color: var(--secondary-color);
}
.blog_section .blog_content .owl-nav .owl-next {
    position: absolute;
    right: -27px;
    top: 33%;
    border: 5px solid #fff;
    text-align: center;
    z-index: 5;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    outline: 0;
    background: var(--secondary-color);
    color: #fff;
    transition: all 0.3s;
}
.blog_section .blog_content .owl-nav .owl-next span {
    font-size: 25px;
    margin-top: -6px;
    display: inline-block;
}
.blog_section .blog_content .owl-nav .owl-next:hover {
    background: #fff;
    border-color: var(--secondary-color);
    color: var(--secondary-color);
}

@media only screen and (max-width: 577px) {
    .blog_section .owl-nav .owl-prev {
        left: -17px !important;
    }
    .blog_section .owl-nav .owl-next {
        right: -17px !important;
    }
}

.section-title {
    padding: 20px 0;
    text-align: center;
    color: var(--accent-color);
    max-width: 700px;
    margin: auto;
}

.section-title h1 {
    text-transform: capitalize;
    text-shadow: 0 0 8px #020d26;
}

.section-title p {
    text-transform: capitalize;
}

footer ul {
    margin: 0px;
    padding: 0px;
}
.footer-section {
    background: var(--primary-color);
    position: relative;
}
.footer-cta {
    border-bottom: 1px solid var(--secondary-color);
}
.single-cta i {
    color: var(--primary-color);
    padding: 8px;
    background: var(--accent-color);
    font-size: 30px;
    float: left;
    margin-top: 8px;
}
.cta-text {
    padding-left: 15px;
    display: inline-block;
}
.cta-text h4 {
    color: #fff;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 2px;
}
.cta-text span {
    color: #f1f1f1;
    font-size: 15px;
}
.footer-content {
    position: relative;
    z-index: 2;
}
.footer-pattern img {
    position: absolute;
    top: 0;
    left: 0;
    height: 330px;
    background-size: cover;
    background-position: 100% 100%;
}
.footer-logo {
    margin-bottom: 30px;
}
.footer-logo img {
    max-width: 200px;
}
.footer-text p {
    margin-bottom: 14px;
    font-size: 14px;
    color: #f1f1f1;
    line-height: 28px;
}
.footer-social-icon span {
    color: #fff;
    display: block;
    font-size: 20px;
    font-weight: 700;
    font-family: "Poppins", sans-serif;
    margin-bottom: 20px;
}
.footer-social-icon a {
    color: #fff;
    font-size: 16px;
    margin-right: 15px;
}
.footer-social-icon i {
    height: 40px;
    width: 40px;
    text-align: center;
    line-height: 38px;
    border-radius: 50%;
}
.facebook-bg {
    background: #3b5998;
}
.twitter-bg {
    background: #55acee;
}
.google-bg {
    background: #dd4b39;
}
.footer-widget-heading h3 {
    color: #fff;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 40px;
    position: relative;
}
.footer-widget-heading h3::before {
    content: "";
    position: absolute;
    left: 0;
    bottom: -15px;
    height: 2px;
    width: 50px;
    background: var(--secondary-color);
}
.footer-widget ul li {
    display: inline-block;
    float: left;
    width: 50%;
    margin-bottom: 12px;
}
.footer-widget ul li a:hover {
    color: var(--secondary-color);
}
.footer-widget ul li a {
    color: #f1f1f1;
    text-transform: capitalize;
}
.subscribe-form {
    position: relative;
    overflow: hidden;
}
.subscribe-form input {
    width: 100%;
    padding: 14px 28px;
    background: var(--accent-color);
    border: 1px solid var(--accent-color);
    color: #fff;
}
.subscribe-form button {
    position: absolute;
    right: 0;
    background: var(--secondary-color);
    padding: 13px 20px;
    border: 1px solid var(--secondary-color);
    top: 0;
}
.subscribe-form button i {
    color: #fff;
    font-size: 22px;
    transform: rotate(-6deg);
}
.copyright-area {
    background: var(--secondary-color);
    padding: 25px 0;
}
.copyright-text p {
    margin: 0;
    font-size: 14px;
    color: #f1f1f1;
}
.copyright-text p a {
    color: var(--secondary-color);
}
.footer-menu li {
    display: inline-block;
    margin-left: 20px;
}
.footer-menu li:hover a {
    color: var(--secondary-color);
}
.footer-menu li a {
    font-size: 14px;
    color: #f1f1f1;
}

.contact {
    padding: 50px 0;
    background-size: cover;
    background-position: center;
    background-image: linear-gradient(
            to right,
            rgb(0 131 173 / 90%),
            rgb(0 131 173 / 60%)
        ),
        url("/image/home-bg.jpg");
}

input,
input:focus,
button,
button:focus {
    outline: none;
}

.contact-form {
    margin: auto;
    max-width: 900px;
    background: #0082ad84;
    padding: 40px 20px;
}

.contact-form form {
    width: 100%;
}

.input-box .input {
    border: 0;
    width: 100%;
    padding: 5px;
    outline: none;
    font-size: 18px;
    color: #020d26;
    background: rgba(255, 255, 255, 0.719);
}

/* .contact-form .input-box{
  margin-bottom: 30px;
} */

form {
    display: block;
}

form .row {
    margin-bottom: 30px;
}

textarea.input {
    resize: none;
    height: 120px;
    display: block;
}

.form-title {
    color: var(--accent-color);
}

.form-title h1{
  text-transform: capitalize;
}

.form-title p{
  font-weight: normal;
  text-transform: capitalize;
}

.contact-form hr{
  margin: 20px 0;
  background: #f1f1f1;
}



header{
  position: fixed;
  width: 100%;
  z-index: 1000;
}