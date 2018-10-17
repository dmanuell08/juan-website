<!doctype html>
<html lang="en">
    <head>
        <title>Contact for Design Projects - Juan Carmona</title>
        <meta name="description" content="Contact me for Web Design, App Design, Web Development, Graphic Design or Branding Projects. I work remotely on Freelance or Contract Basis providing Design Solutions to Companies, Agencies and Professionals around the Globe.">
        <link rel="icon" type="image/png" href="img/favicon-16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="img/favicon-32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="img/favicon-64.png" sizes="64x64">
        <link rel="icon" type="image/png" href="img/favicon-144.png" sizes="144x144">        
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <!-- Our css -->
        <link rel="stylesheet" href="css/main.css">               
        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400|Open+Sans:300,400,500" rel="stylesheet">
        <!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118457722-1"></script>
    <script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-118457722-1');
		</script>

    </head>
    <body>    
      <div class="Top-line"></div>  
        <!-- Main Menu -->
        <nav id="Menu" class="Menu-container">
            <div class="Shape-menu_bg">
                <img src="img/Waves-Small-Right.svg" alt="Waves-Small-Left" class="Shape-menu Shape-menu_1">
                <img src="img/Waves-Small-Right.svg" alt="Waves-Small-Right" class="Shape-menu Shape-menu_2">
            </div>
            <a href="index.php">
                    <img src="img/Logo.svg" alt="Juan Carmona Logo" class="Menu-logo">
                </a>
                <h2 class="Title Subtitle">Juan Carmona</h2>
            <ul class="Menu-list">
                <li class="Menu-item">
                    <a href="https://www.juancarmona.co/" class="">Home</a>
                </li>
                <li class="Menu-item">
                    <a href="https://www.juancarmona.co#Home-projets" class="">Projects</a>
                </li>
                <li class="Menu-item">
                    <a href="https://www.juancarmona.co#Home-services" class="">Services</a>
                </li>
                <li class="Menu-item Menu-item_active">
                    <a href="https://www.juancarmona.co/contact" class="Page_active">Contact</a>
                </li>                        
            </ul>
            <a href="mailto:hello@juancarmona.co" class="Email-menu">Hello@juancarmona.co</a>
        </nav>
        <!-- Main Menu -->
          <div id="Hamb-btn" class="Hamburger-container_btn">
            <span class="Hamb-line Hamb-line1"></span>
            <span class="Hamb-line Hamb-line2"></span>
            <span class="Hamb-line Hamb-line3"></span>
          </div>  

        <section id="Contact-container" class="Contact-container">
          <img src="img/Waves-Full-Center.svg" alt="" class="img-fluid Waves_bg-contact">
          <div class="container">
                <div class="row Row_form">
                      <div class="col-lg-6 col-12 Col1_form">
                        <h1 class="Title animated fadeInUp"><span>Contact me</span></h1>
                        <div class="Parrafo_contact-container">
                          <p class="Parrafo animated fadeInUp">I am always up for new projects. Get in touch and let’s work together.</p>
                        </div>
                            <?php require 'contact-form.php'; ?>
                      </div>
                      <div class="col-lg-6 col-12 Col2_form">
                        <div class="Container_img-contact">

                          <img src="img/Juan-Carmona-Profile.png" 
                          srcset="img/Juan-Carmona-Profile.png 1x,
                          img/Juan-Carmona-Profile@2x.png 2x"
                          alt="Juan Carmona - UI/UX Designer"
                          class="img-fluid Juan-Profile_img">
                        </div>
                        <h1 class="Title Subtitle">Juan Carmona</h1>
                        <p class="Parrafo animated fadeInUp">UI/UX Designer & Web Developer</p>
                        <div class="Social-contact">
                          <a href="https://dribbble.com/juancarmona">
                            <i class="fab fa-dribbble Social-icon Social-icon_1"></i>
                          </a>
                          <a href="https://www.linkedin.com/in/juancarmona-design/">
                            <i class="fab fa-linkedin-in Social-icon Social-icon_2"></i>
                          </a>
                          <a href="https://www.instagram.com/juancarmona.co/">
                            <i class="fab fa-instagram Social-icon Social-icon_3"></i>
                          </a>
                        </div>
                      </div>
                </div>
          </div>
          
        </section>
        <!-- Footer -->
        <?php require'footer.php';?>
        <!-- Footer -->
        <!-- AOS css -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- Animate css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">                                       
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <!-- AOS javascript -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <!-- Move elements on mouse  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/utils/Draggable.min.js"></script>        
        <!-- Our javascript -->
        <script type="text/javascript" src="js/all.js"></script>    
    </body>
</html>