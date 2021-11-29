<?php
require '../controller/ReclamC.php';

$reclamd=new reclamc();
$reclams=$reclamd->tri_reclamtion_descendant();
 
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">

    <title>Eco-life.tn</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
       <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Réclamation</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> Eco-life@esprit.tn</li>
                <li>Economisez votre énergie</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> Eco-life@esprit.tn</li>
                                <li>Economisez votre énergie</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" height="100" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./index.html">Home</a></li>
                            <li><a href="./shop-grid.html">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li class="active"><a href="./contact.html">Réclamer</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+216 27 938 360</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Réclamation</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Réclamation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Télephone</h4>
                        <p>+216 27 938 360</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Adresse</h4>
                        <p> Ariana,El-Ghazela,Esprit</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Notre activité </h4>
                        <p>10:00 am à 23:00 pm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>Eco-life.tn@esprit.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Contact Form Begin -->
    
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/cssform/font-awesome.min.css">
      
      <link rel="stylesheet" href="cssform/style.css">
  
      </head>
      <script src="reclamation.js"></script>
      <body>
          <div class="container">
          <div class="row">

        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-2">Réclamations</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                <tr align="center">
                    <th scope="col">CIN</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Num_tel</th>
                    <th scope="col">Date_de_reclamation</th>
                    <th scope="col">Id_produit</th>
                    <th scope="col">Id_service</th>
                    <th scope="col">Statut</th>
                    <th scope="col">chercher la disccussion relative</th>
                    <th scope="col">modifier</th>
                    <th scope="col">supprimer</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
              
                <tbody>
                  <?php 
                  foreach($reclams as $value){
                                      ?>
                  <tr align="center">
                    <th> <?php echo $value["CIN"]; ?>  </th>
                 
                      <th> <?php echo $value["Nom"]; ?>  </th>

                    
                      <th> <?php echo $value["Prenom"]; ?>   </th>

                    
                    <th>
                        <?php echo $value["Email"]; ?> 
                     
                    </th>
                    <th> <?php echo $value["Num_tel"]; ?>  </th>
                    <th> <?php echo $value["Date_de_reclamation"]; ?>  </th>
                    <th>  <?php if ($value["id_sujet"]!="VIDE") {?> <input type="image" id="id_sujet" name="id_sujet" src="<?php echo ("./assets/".$value["id_sujet"].".png");?>" width="150px" height="150px" > <?php } ?>  <br>   <?php echo $value["id_sujet"]; ?> </th>           



                    <th>   <?php if ($value["id_sujet2"]!="VIDE") {?> <input type="image" id="id_sujet2" name="id_sujet2" src="<?php echo ("./assets/".$value["id_sujet2"].".png");?>" width="150px" height="150px" value="<?php echo ($value["id_sujet2"]);?>">  <?php } ?>  <br>  <?php echo $value["id_sujet2"]; ?></th>           
                   
                   
                    <th> <?php echo $value["Statut"]; ?> 
                    <?php if ($value["Statut"] =="traité") { ?> 
                    <img src="./assets/traite.png" width='30px' height='30px' id="traite" style="display:block">  <img src="./assets/encours.png" width='30px' height='30px' id="encours" style="display:none">   <img src="./assets/pastraite.png" width='30px' height='30px' id="encours" style="display:none"> 
<?php } else if ($value["Statut"] =="en cours de traitement") {?>
  <img src="./assets/traite.png" width='30px' height='30px' id="traite" style="display:none">  <img src="./assets/encours.png" width='30px' height='30px' id="encours" style="display:block"> <img src="./assets/pastraite.png" width='30px' height='30px' id="encours" style="display:none">  
  <?php } else {?>
  <img src="./assets/traite.png" width='30px' height='30px' id="traite" style="display:none">  <img src="./assets/encours.png" width='30px' height='30px' id="encours" style="display:none"> <img src="./assets/pastraite.png" width='30px' height='30px' id="encours" style="display:block">  

  <?php } ?> </th>

                    <th> <a href="chercher_messages_client.php ?id_sujet=<?php echo $value['id_sujet'];?> & id_sujet2=<?php echo $value['id_sujet2'];?>"> <img src="./assets/chercher.png" width='30px' height='30px'></a>  </th>
               
                   
                    <th>   <?php if ($value["Statut"] =="en cours de traitement")  { ?>  
                           <a href="modifierreclamclient.php ?CIN=<?php echo $value['CIN']; ?>" style="display:none">   <img src="./assets/modifier.png" width='30px' height='30px' style="display:none"></a> 
                    
                           <?php } else if ($value["Statut"] =="traité") { ?>  
                           <a href="modifierreclamclient.php ?CIN=<?php echo $value['CIN']; ?>" style="display:none">   <img src="./assets/modifier.png" width='30px' height='30px' style="display:none"></a> 

                           <?php } else  {?> 
                            <a href="modifierreclamclient.php ?CIN=<?php echo $value['CIN']; ?>" style="display:block">   <img src="./assets/modifier.png" width='30px' height='30px' style="display:block"></a> 
                            <?php } ?>

                    </th>

                    <th>    
                    <?php if ($value["Statut"] =="en cours de traitement")  {?>      
                    <a href="supprimerreclamclient.php?CIN=<?php echo $value['CIN']; ?>" style="display:none">  <img src="./assets/supprimer.png" width='30px' height='30px'style="display:none"> </a> 

                    <?php } else if  ($value["Statut"] =="traité") {?>      
                    <a href="supprimerreclamclient.php?CIN=<?php echo $value['CIN']; ?>" style="display:none">  <img src="./assets/supprimer.png" width='30px' height='30px'style="display:none"> </a> 
                    <?php } else  {?> 
                        <a href="supprimerreclamclient.php?CIN=<?php echo $value['CIN']; ?>" style="display:block">  <img src="./assets/supprimer.png" width='30px' height='30px' style="display:block"> </a> 
                        <?php } ?>

                </th>

                  </tr>
                 

                  <?php } ?>

                  
                </tbody>
              </table>
            </div>
           
          </div>
        </div>
      </div>



<br>
      <a href="triascreclamclient.php" class="btn btn-primary">Tri ascendant des réclamations </a> 
          <a href="tridescreclamclient.php" class="btn btn-primary">Tri descendant des réclamations </a>

              <br>
              <a href="ajouterreclamclient.php" class="btn btn-primary">Ajouter réclamation </a>
              <a href="afficherListemessagesclient.php" class="btn btn-primary">Consulter les messages</a>  

          </div>
  
      </body>
  </html>
  
  
    <!-- Contact Form End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Adresse: Ariana,El-Ghazela,Esprit</li>
                            <li>Téléphone: +65 11.188.888</li>
                            <li>Email: Eco-life@esprit.tn</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Réclamation</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Eco-life.tn</h6>
                        <p>Nous sommes toujours à votre service.</p>

                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>