<?php
require '../controller/ReclamC.php';
session_start();
if($_SESSION['role']='admin')
$admin=$_SESSION['id'];
$reclamd=new reclamc();
$reclams=$reclamd->chercher_message_par_id($_GET['id_reclamation']);
 
$langue=0;
if (isset($_GET["lang"])) 
$langue=$_GET["lang"];

$afflanguage=array("Français","English");
$add_reclam=array("Ajouter réclamation","Add claim");
$serachi=array("CHERCHER","SERACH");
$whatdoyou=array("Faites vos recherches","what do you need ?");
$allcatego=array("Tous les catégories","all categories");
$HOME=array("Accueil","HOME");
$PRODUITS=array("Produits","Our products");
$Services=array("Services","Our Services");
$Reclamation=array("Réclamation","Claim");
$Reclamations=array("Réclamations","Claims");
$economiservotre=array("Economisez votre énergie","Economize your energy");
$login=array("Connexion","Login");
$noussommes=array("Nous sommes à votre service","We are in your service");
$liensutiles=array("Liens utiles","Useful Links");
$tel=array("Télephone","Phone");
$adresse=array("Adresse","Adress");
$activite=array("Notre activité","Our activity");
$worktime=array("10:00 am à 23:00 pm","10:00 am until 23:00 pm");
$imprimer=array("imprimer reçu","Print");
$tridesc=array("Tri descendant des réclamations","descending sort of claims");
$triaesc=array("Tri ascendant des réclamations","ascending sort of claims");
$nom=array("Nom","First name");
$prenom=array("Prenom","Last name");
$idreclam=array("ID réclamation","ID claim");
$Datee=array("Date de reclamation","date of the claim");
$chercherladis=array("chercher la disccussion relative","search the relatif discussion");
$modifier=array("modifier","modify");
$supprimer=array("supprimer","delete");


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
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
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
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> Eco-life@esprit.tn</li>
                <li><?php echo $economiservotre[$langue]; ?></li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
   <!-- Header Section Begin -->
   <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> Eco-life@esprit.tn</li>
                                <li><?php echo $economiservotre[$langue]; ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <div class="header__top__right__language">
                            <div><?php if($afflanguage[$langue]=="Français") { ?> <img src="img/francais.png" alt=""> <?php } else { ?> <img src="img/language.png" alt=""> <?php } ?> 
                                <div><?php echo $afflanguage[$langue]; ?> </div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="?lang=0">Français</a></li>
                                    <li><a href="?lang=1">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> <?php echo $login[$langue]; ?></a>
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
                            <li><a href="../../../page_accueil/index - Copie.html"><?php echo $HOME[$langue]; ?></a></li>
                            <li><a href="../../../backsarra/view/afficherproduit.php"><?php echo $PRODUITS[$langue]; ?></a></li>
                            <li><a href="../../../testmalek/malek/shop-grid.php"><?php echo $Services[$langue]; ?></a>
                            </li>
                            <li class="active"><a href="./afficherListeReclams.php"><?php echo $Reclamation[$langue]; ?></a></li>
                            <li class=""><a href="">Forum</a></li>

                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> </a></li>
                        </ul>
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
    
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2><?php echo $Reclamation[$langue]; ?></h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html"><?php echo $HOME[$langue]; ?></a>
                            <span><?php echo $Reclamation[$langue]; ?></span>
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
      <body>
          <div class="container">
          <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-2">Messagerie de l'ID réclamation Num°<?php echo $_GET['id_reclamation']; ?></h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr  align="center">
                    <th scope="col">CIN</th>
                    <th scope="col">Date</th>
                    <th scope="col">Message</th>
                    <th scope="col">modifier</th>
                    <th scope="col">supprimer</th>
                  </tr>
                </thead>
              
                <tbody>
                  <?php 
                  foreach($reclams as $value){
                                      ?>
                  <tr  align="center">
                  <td>  <?php if ($value["CINM"]==$admin) { ?> <a> <img src="./assets/admin.png" width='50px' height='50px'></a> <?php } else echo $value["CINM"]; ?>  </td> 
                      <td> <?php echo $value["datee"]; ?>  </td>
                      <td> <?php echo $value["messagee"]; ?>   </td>

                      <td> <a href="modifiermessageclient.php ?id_message=<?php echo $value['id_message']; ?> ">  <?php if ($value["CINM"]!=$_admin) { ?> <img src="./assets/modifier.png" width='30px' height='30px'> <?php } ?></a>  </td>
                    <td> <a href="supprimermessageclient.php?id_message=<?php echo $value['id_message']; ?>  "> <?php if ($value["CINM"]!=$_admin) { ?> <img src="./assets/supprimer.png" width='30px' height='30px'> <?php } ?> </a> </td>
                    
                  </tr>
                  <?php
}
?>
                  
                </tbody>
              </table>
            </div>
           
          </div>
        </div>
      </div>





              <br>
              <a href="ajouterrmessageclient.php" class="btn btn-primary">Ajouter message </a>
              <a href="afficherListeReclamspourclient.php" class="btn btn-primary">Consulter les réclamations</a>  

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
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Produits</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Réclamation</a></li>
                            <li><a href="#">Forum</a></li>
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