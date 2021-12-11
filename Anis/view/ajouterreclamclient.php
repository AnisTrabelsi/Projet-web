<?php
require_once '../controller/ReclamC.php';
require_once '../Model/Reclam.php';
include 'contact.php'; 
session_start();
if (isset($_POST['CIN']) && isset($_POST['Nom']) && isset($_POST['Prenom']) && isset($_POST['Email']) && isset($_POST['Num_tel'])&& isset($_POST['id_sujet'])&& isset($_POST['id_sujet2'])&& isset($_POST['Date_de_reclamation'])&& isset($_POST['Description'])&& isset($_POST['Statut']))
{$reclamsaisie= new reclam($_POST['CIN'],$_POST['Nom'],$_POST['Prenom'],$_POST['Email'],$_POST['Num_tel'],$_POST['id_sujet'],$_POST['id_sujet2'],$_POST['Date_de_reclamation'],$_POST['Description'],$_POST['Statut']);
$reclamcc= new reclamc();
$reclamcc->ajouterreclam($reclamsaisie);
// header('Location:afficherListeReclamspourclient.php');
}
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
                            <li><a href="./index.html"><?php echo $HOME[$langue]; ?></a></li>
                            <li><a href="./shop-grid.html"><?php echo $PRODUITS[$langue]; ?></a></li>
                            <li><a href="#"><?php echo $Services[$langue]; ?></a>
                            </li>
                            <li class="active"><a href=""><?php echo $Reclamation[$langue]; ?></a></li>
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
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span><?php echo $PRODUITS[$langue]; ?></span>
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
                                <?php echo $allcatego[$langue]; ?>
                                 <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="<?php echo $whatdoyou[$langue]; ?>">
                                <button type="submit" class="site-btn"><?php echo $serachi[$langue]; ?></button>
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
                        <h4><?php echo $tel[$langue]; ?></h4>
                        <p>+216 27 938 360</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4><?php echo $adresse[$langue]; ?></h4>
                        <p> Ariana,El-Ghazela,Esprit</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4><?php echo $activite[$langue]; ?> </h4>
                        <p><?php echo $worktime[$langue]; ?> </p>
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


        <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/cssform/font-awesome.min.css">

        <link rel="stylesheet" href="cssform/style.css">

    </head>
    <script src="reclamation.js"></script>

    <body>
        <div class="container">
            <a href="afficherListeReclamspourclient.php" class="btn btn-primary">Afficher les réclamations</a>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Passer une réclamation </h3>
                                    <div id="form-message-warning" class="mb-4"></div>
                                    <script src="reclamation.js"></script>

                                    <form method="POST" action="" onsubmit="return verif();">
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                   <script src="reclamation.js"></script>
                                                    <fieldset width="2">

                                                        <label for="name">CIN:
                                                        </label>
                                                        <input type="number" id="CIN"  class="form-control" name="CIN"
                                                            required minlenght="3" maxlength="20" size="10" value=<?php echo $_SESSION['id'] ?>>
                                                        <div id="msgDiv14" class="message" style='color:red'></div>
                                                        <div id="msgDiv152" class="message" style='color:red'></div>
                                                        <br>

                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="name">Nom:
                                                </label>
                                                <input type="text" id="Nom" class="form-control" name="Nom" required
                                                    minlenght="3" maxlength="20" size="10">
                                                <div id="msgDiv1" class="message" style='color:red'></div>
                                                <div id="msgDiv12" class="message" style='color:red'></div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Prenom:
                                                    </label>
                                                    <input type="text" id="Prenom" class="form-control" name="Prenom"
                                                        required minlenght="3" maxlength="20" size="10">
                                                    <div id="msgDiv2" class="message" style='color:red'></div>
                                                    <div id="msgDiv22" class="message" style='color:red'></div>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Email:
                                                    </label>
                                                    <input type="text" id="Email" class="form-control" name="Email"
                                                        required minlenght="3"  size="10">
                                                    <div id="msgDiv3" class="message" style='color:red'></div>

                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Numéro telephone:
                                                    </label>
                                                    <input type="Number" id="Num_tel" class="form-control"
                                                        name="Num_tel" required minlenght="3" maxlength="20" size="10">
                                                    <div id="msgDiv244" class="message" style='color:red'></div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">

                                                    <label for="Date_de_reclamation">Date_de_reclamation:
                                                    </label>
                                                    <input type="datetime-local" id="Date_de_reclamation"
                                                        name="Date_de_reclamation" class="form-control" required
                                                        minlenght="3" maxlength="20" size="10">
                                                    <div id="msgDiv6" class="message" style='color:red'></div>
                                                    <br>
                                                </div>
                                            </div>




                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="id_sujet" id="id_sujet">
                                                    </label>
                                                    <select name="id_sujet"><br>
                                                        <option selected value="VIDE">choisissez l'id produit</option>
                                                        <option value="001">Panneaux solaires</option>
                                                        <option value="002">Helices</option>
                                                        <option value="003">Moteur</option>

                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="id_sujet2" id="id_sujet2">
            </label>
            <select name=" id_sujet2">
                                                        <option selected value="VIDE">choisissez l'id service
                                                        </option>
                                                        <option value="112">Réparation</option>
                                                        <option value="111">Installation</option>
                                                        <option value="110">Maintenance</option>

                                                        </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <br><label for="Description ">Description:
                                                    </label>
                                                    <textarea id="Description" name="Description" class="form-control"
                                                        rows="7" cols="33">
              </textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                            <label for="Statut" style="display:none">
                                                    </label>
                                            <input type="text" id="Statut" class="form-control" name="Statut"
                                            style="display:none" value="pas traité">
  </div>
                                            </div>


                                            <div class="col-md-12">


                                                <input type="submit" name="submit" value="Envoyer" class="btn btn-primary">
                                                <input type="reset" value="Effacer" id="effacer"
                                                    class="btn btn-primary">


                                            </div>

                                        </div>
                                      
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                                    <h3>Passer une réclamation</h3>
                                    <p class="mb-4">Nous sommes à votre service</p>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-map-marker"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Adresse: Ariana,El-ghazela,Esprit</span></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-phone"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Telehone:</span> <a href="tel://1234567920">+ 216 27938360</a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-paper-plane"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Email:</span> <a
                                                    href="mailto:info@yoursite.com">Eco-life@esprit.tn</a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-globe"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Website</span> <a href="#">Eco-life.tn</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

        </div>
        <script type="text/javascript">
        if(window.history.replaceState){
window.history.replaceState(null,null,window.location.href);
        }
        </script>

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
                            <li>Téléphone: +216 27 938 360</li>
                            <li>Email: Eco-life@esprit.tn</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6><?php echo $liensutiles[$langue]; ?> </h6>
                        <ul>
                            <li><a href="#"><?php echo $HOME[$langue]; ?> </a></li>
                            <li><a href="#"><?php echo $PRODUITS[$langue]; ?> </a></li>
                            <li><a href="#"><?php echo $Services[$langue]; ?> </a></li>
                            <li><a href="#"><?php echo $Reclamation[$langue]; ?> </a></li>
                            
                        </ul>
                     
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Eco-life.tn</h6>
                        <p><?php echo $noussommes[$langue]; ?></p>

                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                       
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