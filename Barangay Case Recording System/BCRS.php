<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <linkrel="stylesheet
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="assets/css/Style.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="assets/Img/logoo.png">
    <body>
  <div class="main">
    <header class="header" style="background-image: url(assets/Img/BGIMG.png);">
      <nav>
        <div class="nav__bar">
          <div class="logo nav__logo">
            <a href="#"><img src="assets/Img/logoo.png" alt="logo" /></a>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <i style="font-size:24px" class="fa">&#xf0c9;</i>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a href="#home">HOME</a></li>
          <!--<li><a href="#about">SERVICE</a></li>-->
          <li><a href="#service">ABOUT</a></li>
          <li><a href="#location">LOCATION</a></li>
          <li><a href="#contact">CONTACT</a></li>
          <a href="Login.php"><button class="btn">Login</i></button></a>
        </ul>
      </nav>
      <div class="section__container header__container" id="home" >
        <div class="header__content">
          <h1>Welcome to Barangay Cuta</h1>
        </div>
      </div>
    </header>
 
    <div class="container__service">
      <div class="row">
        <div class="services">
          <h2>Announcement and Information</h2>
          <div class="news">
          <p>The latest information and announcements from Barangay Cuta,this section is for updates on upcoming events, community projects, and important notices. Stay informed about local initiatives and connect with your community through the online</p>
        </div>
        <div class="slideshow-container">
            <div class="mySlides fade">
              <div class="numbertext">1 / 7</div>
              <img src="assets/Img/cuta.jpg" style="width:60%" height="50%" >
              <div class="text"> </div>
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">2 / 7</div>
              <img src="assets/Img/7.jpg" style="width:60%" height="50%" >
              <div class="text"> </div>
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">3 / 7</div>
              <img src="assets/Img/wellness.png" style="width:60%" height="50%" >
              <div class="text"> </div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">4 / 7</div>
              <img src="assets/img/disposal.jpg" style="width:60%" height="50%" >
              <div class="text"> </div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">5 / 7</div>
              <img src="assets/img/waste.avif" style="width:60%" height="50%" >
              <div class="text"> </div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">6 / 7</div>
              <img src="assets/img/projects.jpg" style="width:60%" height="50%" >
              <div class="text"> </div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">7 / 7</div>
              <img src="assets/img/environment.jpg" style="width:60%" height="50%" >
              <div class="text"> </div>
            </div>
            </div>
            </div>
            <br>
            
            <div class="dot"style="text-align:center">
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
            </div>
            </div>
            
            <script>
            let slideIndex = 0;
            showSlides();
            
            function showSlides() {
              let i;
              let slides = document.getElementsByClassName("mySlides");
              let dots = document.getElementsByClassName("dot");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}    
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
              setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
            </script>
            
        </div>
      </div>
    </div>
  </section>

    <section class="service" id="service">
      <div class="section__container service__container">
        <p class="section__subheader">OUR BARANGAY OFFICIALS</p>

        <div class="service__grid">
          <div class="service__card">
            <img src="assets/Img/3.png" alt="M"/>
            <h4>HON. RAMIL L. CASEDA</h4>
            <p>
              BRGY. CHAIRMAN
            </p>
          </div>
          <div class="service__card">
            <img src="assets/Img/1.png" alt="M" />
            <h4>KAG. NOEL SONNY S. AGUILA</h4>
            <p>
              BRGY. CHAIRMAN
            </p>
            <p>
              Committee on Appropriations Bids and Awards Committee, Committee on law and Ordinan
            </p>
          </div>
          <div class="service__card">
            <img src="assets/Img/2.png" alt="M" />
            <h4>KAG. JAY AR G. FABRERO</h4>
            <p>
              BRGY. CHAIRMAN
            </p>
            <p>
              Committee on Education/Sports and Youth Development
            </p>
          </div>
          <div class="service__card">
            <img src="assets/Img/logo_female.png" alt="F" />
            <h4>KGWD. SONIA B. DIMACULANGAN</h4>
            <p>
              BRGY. CHAIRMAN
            </p>
            <p>
              Committee on Family and Women
            </p>
          </div>
          <div class="service__card">
            <img src="assets/Img/4.png" alt="M" />
            <h4>KAG. RICARDO O. HERRERA</h4>
            <p>
              BRGY. CHAIRMAN
            </p>
            <p>
              Committee on Environmental Management, Committee on Clean and Green
            </p>
          </div>
          <div class="service__card">
            <img src="assets/Img/5.png" alt="M" />
            <h4>KGWD. CELSO S. PEREZ</h4>
            <p>
              BRGY. CHAIRMAN
            </p>
            <p>
              Committee on Disaster Management
            </p>
          </div>
          <div class="service__card">
            <img src="assets/Img/6.png" alt="M" />
            <h4>KGWD NELSON S. LACSAMANA</h4>
            <p>
              BRGY. CHAIRMAN
            </p>
            <p>
              Committee on Agriculture
            </p>
          </div>
          <div class="service__card">
            <img src="assets/Img/7.png" alt="F"/>
            <h4>KGWD. MARY ANNE R. BONIFACIO</h4>
            <p>
              BRGY. CHAIRMAN
            </p>
            <p>
              Committee on Health
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="customisation">
      <div class="section__container customisation__container">
        <p class="section__subheader">About Us</p>
        <h2 class="section__header">
          Some Details about Barangay Cuta
        </h2>
        <p class="section__description">
            Cuta is a barangay in Batangas City, in the province of Batangas. Its population as determined by the 2020 Census was 14,071. This represented 4.00% of the total population of Batangas City. Demographics
        </p>
        <div class="customisation__grid">
          <div class="customisation__card">
            <h4>14,213</h4>
            <p>Total Population</p>
          </div>
          <div class="customisation__card">
            <h4>3,700</h4>
            <p>Total Households</p>
          </div>
          <div class="customisation__card">
            <h4>145.9829</h4>
            <p>Total Land Area</p>
          </div>
          <div class="customisation__card">
            <h4>8,000</h4>
            <p>Total Registered Voters</p>
          </div>
        </div>
      </div>
    </section>

    <section class="contact" id="location">
      <h2>Barangay Cuta's Location</h2>
      <div class="location">
      <p>M.H.Del Pilar, 4200 Batangas, Philippines</p>
      </div>
      <div class="section__container contact__container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15502.276862613613!2d121.05492164999998!3d13.74451115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd0523c3d8f651%3A0x7b3b380c24869f9c!2sCuta%2C%20Batangas!5e0!3m2!1sen!2sph!4v1699163835055!5m2!1sen!2sph"
      width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>
    <footer class="footer" id="contact">
      <div class="section__container subscribe__container">

      <div class="section__container footer__container">
      <div class="footer__col">
      <h4>Emergency Hotlines</h4>
          <ul class="footer__links">
            <li>
                <p> Mayor's Action Center:<span> 723-1511</span></p>
            </li>
            <li>
              <p> BFP Batangas City: <span>425-7163/301-7996
                09156021984</span></p>
            </li>
            <li>
              <p> PNP Batangas City: <span>723-2030</span></p>
            </li>
            <li>
              <p>Hospitals:</p>
            </li>
            <li>
              <p> Batangas Medical Center: <span>723-0911</span></p>
            </li>
            <li>
              <p>St. Patrick’s Hospital & Medical Center : <span>723-1605</span></p>
            </li>
            <li>
              <p>   Jesus of Nazareth Hospital: <span>723-4144</span></p>
            </li>
            <li>
              <p>  Golden Gate General Hospital: <span>723-2508</span></p>
            </li>
            <li>
              <p> City Disaster Risk Reduction and Management Office: <span>702-3902</span></p>
            </li>
            <li>
              <p>LTO Batangas City: <span>740-9738</span></p>
            </li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Contact Info</h4>
          <ul class="footer__links">
            <li>
                <p>Location: <span>M.H.Del Pilar, 4200 Batangas, Philippines.</span></p>
            </li>
            <li>
              <p>Phone: <span>+63437233470</span></p>
            </li>
            <li>
              <p>Email: <span>barangaycuta@gmail.com</span></p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    </footer>
    <div class="footer__bar">
      Copyright © 2023 Barangay Cuta. All rights reserved.
    </div>

    <script src="https://unpkg.com/scrollreveal"></script>
   <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script> -->
    <script src="assets/js/script.js"></script>
  </div>
  </body>
</html>