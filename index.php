<!doctype html>
<html lang="en">
  <head>
    <title>Home-page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Assurez-vous d'inclure Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">        
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="shortcut icon" href="../images/favicon.png">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="shortcut icon" href="../images/favicon.png">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/index.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-xl-2">
          <img src="images/logo.png" alt="logo" class="responsive-logo">
          <!-- <h1 class="mb-0 site-logo"><a href="index.html" class="h5 mb-0"><span style="color: #FF3131;">US</span>Bank<span class="text-primary">.</span></a></h1> -->
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Accueil</a></li>
                <li class="has-children">
                  <a href="#about-section" class="nav-link">À propos</a>
                  <ul class="dropdown">
                    <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                    <li><a href="#services-section" class="nav-link">Services</a></li>
                    <li><a href="#testimonials-section" class="nav-link">Témoignages</a></li>
                  </ul>
                </li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
                <li><a href="verification.php" target="_self" class="nav-link">statut</a></li>
              </ul>
            </nav>
          </div>
          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;">
            <a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
    </header>
    
    <div class="site-blocks-cover overlay" style="background-image: url(images/imageb5.jpg); background-repeat: no-repeat; background-size: cover;" data-aos="fade" id="home-section">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-10 mt-lg-5">
                <div class="single-text owl-carousel">

                    <!-- Premier slide -->
                    <div class="slide" id="slide1">
                        <h1 class="text-uppercase text-center" data-aos="fade-up" style="margin-top: 20px;">Une banque qui vous simplifie la vie.</h1>
                        <p class="mb-4 desc text-center" data-aos="fade-up" data-aos-delay="100">Des solutions financières simples et transparentes, conçues pour vous accompagner à chaque étape de votre parcours.</p>
                    </div>

                    <!-- Deuxième slide -->
                    <div class="slide">
                        <h1 class="text-uppercase text-center" data-aos="fade-up" style="margin-top: 20px;">Des services adaptés</h1>
                        <p class="mb-4 desc text-center" data-aos="fade-up" data-aos-delay="100">Découvrez nos offres pour vous accompagner dans vos projets, que ce soit pour vos comptes ou vos prêts.</p>
                    </div>

                    <!-- Troisième slide -->
                    <div class="slide">
                        <h1 class="text-uppercase text-center" data-aos="fade-up" style="margin-top: 20px;">Financement rapide</h1>
                        <p class="mb-4 desc text-center" data-aos="fade-up" data-aos-delay="100">Obtenez un financement sur mesure pour vos projets personnels ou professionnels.</p>
                     </div>

                    <!-- Quatrième slide -->
                    <div class="slide">
                        <h1 class="text-uppercase text-center" data-aos="fade-up" style="margin-top: 20px;">Épargnez avec nous</h1>
                        <p class="mb-4 desc text-center" data-aos="fade-up" data-aos-delay="100">Profitez de taux compétitifs pour faire fructifier votre épargne.</p>
                    </div>
                    
                </div>

                <div class="fixed-form mt-4">
                  <div>
                      <h2 class="mb-2">Avez-vous un code SWIFT ?</h2>  <!-- H2 for better size -->
                      <p>Veuillez vérifier si votre transaction a été initiée.</p>
                  </div>
                  <button class="btn btn-primary"><a href="verification.php">Vérifier Votre Statut</a></button> <!-- Improved button styling -->
               </div>                
            </div>
        </div>
    </div>

    </div>

<script>  
    function statut(){
       window.location.href ="html/verification.html";
    }

</script>

<div class="site-section cta-big-image" id="about-section">
  <div class="container">
    <div class="row mb-5 justify-content-center">
      <div class="col-md-8 text-center">
        <h2 class="section-title mb-3" data-aos="fade-up">Une Expérience Inoubliable</h2>
        <p class="lead" data-aos="fade-up" data-aos-delay="100">
          Chez UBSb, nous réinventons votre quotidien avec un accompagnement personnalisé, une technologie intuitive et une attention de chaque instant. Votre tranquillité d’esprit est au cœur de nos priorités.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 mb-5" data-aos="fade-up">
        <figure class="circle-bg">
          <img src="images/assistant.png" alt="UBSb" class="img-fluid">
        </figure>
      </div>
      <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
        <h3 class="text-black mb-4" style="color: #FF3131;">Des Solutions Qui Vous Ressemblent</h3>
        <p>
          Parce que chaque personne est unique, nous prenons le temps de vous écouter pour vous proposer des réponses simples, claires et parfaitement adaptées à vos projets, petits ou grands.
        </p>
        <p>
          UBSb, c’est la promesse d’un service humain, d’une relation de confiance, et d’une équipe à vos côtés à chaque étape de votre parcours.
        </p>
      </div>
    </div>
  </div>
</div>

<div class="site-section" id="next">
  <div class="row mb-5 justify-content-center">
    <div class="col-md-8 text-center">
      <h2 class="section-title mb-3" data-aos="fade-up" style="color: #FF3131;">Un Engagement Sincère pour un Monde Meilleur</h2>
      <p class="lead" data-aos="fade-up" data-aos-delay="100">
        Nous croyons au pouvoir de l’action collective. C’est pourquoi nous soutenons activement des projets qui font la différence, et qui participent à construire un avenir plus solidaire et plus juste.
      </p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-5" data-aos="fade-up">
        <figure class="circle-bg">
          <img src="images/imageb5.jpg" alt="UBSb Community Engagement" class="img-fluid">
        </figure>
      </div>
      <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
        <div class="mb-4">
          <h3 class="h3 mb-4 text-black">Nos Valeurs : Proximité et Impact Positif</h3>
          <p>
            Nous mettons tout en œuvre pour accompagner des initiatives porteuses d’espoir et de changement. Chaque geste compte, chaque action est pensée pour durer.
          </p>
        </div>
        <div class="mb-4">
          <ul class="list-unstyled ul-check success">
            <li>Appui aux projets citoyens et locaux</li>
            <li>Encouragement à l'apprentissage pour tous</li>
            <li>Collaboration avec des acteurs engagés</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- Section d'inscription avec image de fond -->
  <section class="signup-section" style="background-image: url(images/imagebank3.jpg); background-repeat: no-repeat; background-size: cover;">
    <div class="container">
      <div class="row align-items-center justify-content-center" style="height: 60vh;"> <!-- Ajustement de la hauteur -->
        <div class="col-md-8 text-center">
          <h1 class="text-uppercase text-white" data-aos="fade-up">Avez-vous un code SWIFT ?</h1>
          <p class="mb-4 desc text-white" data-aos="fade-up" data-aos-delay="100" style="color:#000;">Verifier votre statut, pour savoir si la transaction a été initié.</p>
          
          <!-- Formulaire d'inscription avec champ email et bouton -->
          <div class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <form action="html/verification.html" class="sign-up-form d-flex align-items-center" data-aos="fade-up" data-aos-delay="200" style="background-color: rgb(255, 255, 255,0.6); padding: 10px; border-radius: 10px;">
              <input type="submit"  value="UBS BANK" style="background-color: #FF3131; color: white; padding: 10px 20px; border-radius: 5px; border: none;">
            </form>                
          </div>
        </div>
      </div>
    </div>
  </section>


    
    <section class="site-section border-bottom bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-3" >Nos Services</h2>
            <p class="lead">Explorez nos solutions financières sur mesure, conçues pour répondre à vos attentes et simplifier la gestion de vos finances.</p>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/flaticon-svg/svg/001-wallet.svg" alt="Compte courant" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3>Compte courant</h3>
                <p>Gérez facilement vos finances quotidiennes grâce à notre compte courant, offrant un accès rapide et sécurisé à votre argent à tout moment.</p>
                <p><a href="#"  style="color: #FF3131;">En savoir plus</a></p>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/flaticon-svg/svg/003-notes.svg" alt="Compte d'épargne" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3>Compte d'épargne</h3>
                <p>Faites fructifier vos économies avec un taux d’intérêt attractif tout en assurant la sécurité de vos fonds pour vos projets futurs.</p>
                <p><a href="#" style="color: #FF3131;">En savoir plus</a></p>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/flaticon-svg/svg/002-rich.svg" alt="Prêts personnalisés" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3>Prêts Personnalisés</h3>
                <p>Financer vos projets n’a jamais été aussi simple. Obtenez un prêt sur mesure, adapté à vos besoins et à vos ambitions.</p>
                <p><a href="#" style="color: #FF3131;">En savoir plus</a></p>
              </div>
            </div>
          </div>
    
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/flaticon-svg/svg/003-notes.svg" alt="Cartes de crédit" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3>Services de cartes de crédit</h3>
                <p>Accédez à des cartes de crédit flexibles et profitez d’avantages exclusifs pour simplifier la gestion de vos paiements.</p>
                <p><a href="#" style="color: #FF3131;">En savoir plus</a></p>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/flaticon-svg/svg/004-cart.svg" alt="Paiement en ligne" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3>Paiement de factures en ligne</h3>
                <p>Réglez vos factures en ligne de manière rapide et sécurisée, où que vous soyez, grâce à notre plateforme intuitive.</p>
                <p><a href="#" style="color: #FF3131;">En savoir plus</a></p>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/flaticon-svg/svg/005-megaphone.svg" alt="Outils d'épargne et planification" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3>Outils d'épargne et de planification financière</h3>
                <p>Planifiez sereinement votre avenir financier avec nos outils spécialisés qui vous aident à épargner et investir de manière efficace.</p>
                <p><a href="#" style="color: #FF3131;">En savoir plus</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
            
  


    <section class="site-section">
      <div class="container">
    
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="" >Comment ça marche</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Chez nous, nous avons conçu un parcours client intuitif et sécurisé pour simplifier la gestion de vos finances. Faites-nous confiance pour un accompagnement sur-mesure à chaque étape.</p>
          </div>
        </div>
        
        <div class="row align-items-lg-center">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <div class="owl-carousel slide-one-item-alt">
              <img src="images/fille2.jpg" alt="Image" class="img-fluid">
              <img src="images/imagesecu.jpg" alt="Image" class="img-fluid">
              <img src="images/assistant.png" alt="Image" class="img-fluid">
            </div>
            <div class="custom-direction">
              <a href="#" class="custom-prev" ><span><span class="icon-keyboard_backspace"></span></span></a><a href="#" class="custom-next"><span><span class="icon-keyboard_backspace"></span></span></a>
            </div>
          </div>
    
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="owl-carousel slide-one-item-alt-text">
              <div>
                <h2 class="section-title mb-3" style="color: #000;">01. Démarche 100% en ligne</h2>
                <p>Ouvrez un compte ou faites une demande de prêt directement en ligne en quelques clics. Notre interface intuitive garantit un processus simple et rapide, sans tracas.</p>
                <p><a href="#" class="btn btn-primary mr-2 mb-2" style="color: #fff;">En savoir plus</a></p>
              </div>
              
              <div>
                <h2 class="section-title mb-3" style="color: #000;">02. Sécurité et validation rapide</h2>
                <p>Votre demande est traitée avec les plus hauts standards de sécurité. Nos équipes valident rapidement vos informations pour vous offrir un service réactif et fiable.</p>
                <p><a href="#" class="btn btn-primary mr-2 mb-2" style="color: #fff;">En savoir plus</a></p>
              </div>
              
              <div>
                <h2 class="section-title mb-3" style="color: #000;">03. Offres personnalisées</h2>
                <p>Bénéficiez d’offres sur mesure, adaptées à vos objectifs. Que vous souhaitiez épargner ou emprunter, nous vous accompagnons avec des solutions flexibles et avantageuses.</p>
                <p><a href="#" class="btn btn-primary mr-2 mb-2" style="color: #fff;">En savoir plus</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
        

    <section class="site-section testimonial-wrap" id="testimonials-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3" style="color: #000;">Témoignages</h2>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
        
        <div>
          <div class="testimonial">
            <blockquote class="mb-5">
              <p>&ldquo;Grâce à UBSb, j'ai pu gérer mes finances avec une tranquillité d'esprit totale. Leurs solutions sont fiables et adaptées à mes besoins spécifiques.&rdquo;</p>
            </blockquote>
            <figure class="mb-4 d-flex align-items-center justify-content-center">
              <div><img src="images/fille1.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
              <div>
                <h3>Caroline Dupuis</h3>
                <p>Entrepreneuse</p>
              </div>
            </figure>
          </div>
        </div>
    
        <div>
          <div class="testimonial">
            <blockquote class="mb-5">
              <p>&ldquo;En tant qu'ingénieur, je recherche l'efficacité et la rapidité. UBSb a parfaitement compris mes attentes avec un service rapide et des conseils précis.&rdquo;</p>
            </blockquote>
            <figure class="mb-4 d-flex align-items-center justify-content-center">
              <div><img src="images/person_1.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
              <div>
                <h3>Thomas Bernard</h3>
                <p>Ingénieur</p>
              </div>
            </figure>
          </div>
        </div>
    
        <div>
          <div class="testimonial">
            <blockquote class="mb-5">
              <p>&ldquo;Leurs solutions financières sur mesure m'ont permis de réaliser mes projets de manière fluide. UBSb est plus qu'un simple partenaire financier, c'est un véritable soutien.&rdquo;</p>
            </blockquote>
            <figure class="mb-4 d-flex align-items-center justify-content-center">
              <div><img src="images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
              <div>
                <h3>Anne Dubois</h3>
                <p>Architecte</p>
              </div>
            </figure>
          </div>
        </div>
    
        <div>
          <div class="testimonial">
            <blockquote class="mb-5">
              <p>&ldquo;Le service client est exceptionnel. Je me sens écouté, et mes besoins sont toujours pris en compte. C'est exactement ce que je recherchais dans une banque.&rdquo;</p>
            </blockquote>
            <figure class="mb-4 d-flex align-items-center justify-content-center">
              <div><img src="images/home1.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
              <div>
                <h3>Paul Martin</h3>
                <p>Médecin</p>
              </div>
            </figure>
          </div>
        </div>
    
      </div>
    </section>
       
    <section class="site-section" id="about-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
              <img src="images/imagesecu.jpg" alt="UBSb" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="row">
              <div class="col-12 mb-4" data-aos="fade-up" data-aos-delay="">
                <div class="unit-4 d-flex">
                  <div class="unit-4-icon mr-4 mb-3"><span class="text-primary flaticon-head"></span></div>
                  <div>
                    <h3>Prêts bancaires flexibles</h3>
                    <p>Chez nous, nous comprenons que chaque projet est unique. Nos prêts personnalisés vous offrent la flexibilité nécessaire pour réaliser vos ambitions, que ce soit pour une nouvelle maison, un investissement ou une entreprise.</p>
                    <p class="mb-0"><a href="#" style="color: #FF3131;">En savoir plus</a></p>
                  </div>
                </div>
              </div>
              <div class="col-12 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="unit-4 d-flex">
                  <div class="unit-4-icon mr-4 mb-3"><span class="text-primary flaticon-smartphone"></span></div>
                  <div>
                    <h3>Conseils bancaires sur mesure</h3>
                    <p>Nos experts sont là pour vous accompagner dans toutes vos décisions financières. Nous proposons des consultations bancaires adaptées à vos besoins, avec des solutions innovantes et sécurisées pour garantir votre succès financier.</p>
                    <p class="mb-0"><a href="#" style="color: #FF3131;">En savoir plus</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      

    <section class="site-section" id="faq-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3" style="color: #000;">Questions Fréquentes</h2>
          </div>
        </div>
    
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="h-entry">
              <h2 class="font-size-regular"><a href="#" style="color: #FF3131;" >Pourquoi devrais-je choisir UBSb ?</a></h2>
              <p>UBSb combine une expertise financière de premier plan avec des solutions flexibles adaptées à vos besoins. Que vous soyez un particulier ou une entreprise, nous vous offrons la sécurité, la rapidité et la personnalisation pour gérer vos finances avec confiance.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="h-entry">
              <h2 class="font-size-regular"><a href="#" style="color: #FF3131;">Comment puis-je obtenir un prêt facilement ?</a></h2>
              <p>Avec UBSb, il vous suffit de soumettre votre demande en ligne. Nos experts traiteront votre dossier rapidement pour vous offrir des solutions de prêt personnalisées, avec des conditions flexibles et adaptées à votre situation.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="h-entry">
              <h2 class="font-size-regular"><a href="#" style="color: #FF3131;">La banque propose-t-elle des services numériques ?</a></h2>
              <p>Absolument ! Notre plateforme numérique vous permet de gérer vos comptes, suivre vos transactions, et effectuer des paiements en toute sécurité depuis votre smartphone ou ordinateur, où que vous soyez.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="signup-section" style="background-image: url(images/imagebank3.jpg); background-repeat: no-repeat; background-size: cover;">
      <div class="container">
        <div class="row align-items-center justify-content-center" style="height: 60vh;"> <!-- Ajustement de la hauteur -->
          <div class="col-md-8 text-center">
            <h1 class="text-uppercase text-white" data-aos="fade-up" >Avez-vous un code SWIFT ?</h1>
            <p class="mb-4 desc text-white" data-aos="fade-up" data-aos-delay="100" style="color:#000;">Verifier votre statut, pour savoir si la transaction a été initié.</p>
            
            <!-- Formulaire d'inscription avec champ email et bouton -->
            <div class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
              <form action="html/verification.html" class="sign-up-form d-flex align-items-center" data-aos="fade-up" data-aos-delay="200" style="background-color: rgb(255, 255, 255,0.6); padding: 10px; border-radius: 10px;">
                <input type="submit" class="btn"  value="UBS BANK" style="background-color: #FF3131; color: white; padding: 10px 20px; border-radius: 5px; border: none;">
              </form>                
            </div>
          </div>
        </div>
      </div>
    </section>
  
  
      <footer class="site-footer" id="contact-section">
      <div class="container">
        <div class="row">
    
          <!-- À Propos Section -->
          <div class="col-md-5 mb-4">
            <h2 class="footer-heading">À propos de nous</h2>
            <p>UBSb vous accompagne dans toutes vos démarches bancaires avec des solutions adaptées à vos besoins, que vous soyez particulier ou professionnel.</p>
          </div>
    
          <!-- Navigation Section -->
          <div class="col-md-3 ml-auto mb-4">
            <h2 class="footer-heading">Navigation</h2>
            <ul class="list-unstyled">
              <li><a href="#about-section" class="smoothscroll">À propos</a></li>
              <li><a href="#services-section" class="smoothscroll">Nos Services</a></li>
              <li><a href="#testimonials-section" class="smoothscroll">Témoignages</a></li>
              <li><a href="#contact-section" class="smoothscroll">Contactez-nous</a></li>
            </ul>
          </div>
    
          <!-- Contact Section -->
          <div class="col-md-4 mb-4">
            <h2 class="footer-heading">Contactez-nous</h2>
            <div class="social-icons">
              <h3>Suivez-nous :</h3>
              <a href="#home-section" class="social-icon"><i class="fab fa-facebook-f"></i></a>
              <a href="#home-section" class="social-icon"><i class="fab fa-twitter"></i></a>
              <a href="#home-section" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
              <a href="#home-section" class="social-icon"><i class="fab fa-instagram"></i></a>
            </div>
          </div>    
        </div>
    
        <!-- Footer Bottom Section -->
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-4">
              <p>&copy; 2019 UBSb. Tous droits réservés.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
  </div> <!-- .site-wrap -->
  <script>
    // JavaScript pour gérer le défilement
    const forms = document.querySelectorAll('.sign-up-form input[type="text"]');
    forms.forEach(form => {
      form.addEventListener('focus', () => {
        document.querySelector('.single-text').classList.add('no-scroll');
      });
      form.addEventListener('blur', () => {
        document.querySelector('.single-text').classList.remove('no-scroll');
      });
    });
  
  </script>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>

  
  <script src="js/main.js"></script>
  
  </body>
</html>