<?php
require_once '../controller/ReclamC.php';
require_once '../Model/Reclam.php';
include 'contactmodifier.php'; 

$reclamV=new reclamc();

if (isset($_POST['CIN']) && isset($_POST['Nom']) && isset($_POST['Prenom']) && isset($_POST['Email']) && isset($_POST['Num_tel'])&& isset($_POST['id_sujet'])&& isset($_POST['id_sujet2'])&& isset($_POST['Date_de_reclamation'])&& isset($_POST['Descriptionn'])&& isset($_POST['Statut']))
{$reclamsaisie= new reclam($_POST['CIN'],$_POST['Nom'],$_POST['Prenom'],$_POST['Email'],$_POST['Num_tel'],$_POST['id_sujet'],$_POST['id_sujet2'],$_POST['Date_de_reclamation'],$_POST['Descriptionn'],$_POST['Statut']);
$reclamV->modifierreclam($reclamsaisie,$_GET['id_reclamation']));

header('Location:afficherListeReclams.php');
}else 
{
    $a=$reclamV->getreclambyid($_GET['id_reclamation']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
Eco-life.tn  </title>
  <!-- Favicon -->
  <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="./assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="../index.html">
        <img src="./assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
  
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="../examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="../examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="../examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="../examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="../index.html">
                <img src="./assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item  active ">
            <a class="nav-link " href="../index.html">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="afficherListemessages.php">
              <i class="ni ni-planet text-blue"></i>Consulter les messages 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="afficherListeReclams.php">
              <i class="ni ni-pin-3 text-orange"></i> Consulter les réclamations
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link   " href="ajouterreclam.php">
              <i class="ni ni-single-02 text-yellow"></i> Ajouter une réclamation
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="ajoutermessage.php">
              <i class="ni ni-bullet-list-67 text-red"></i> ajouter message
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="triascreclam.php">
              <i class="ni ni-key-25 text-info"></i> Tri ascendant des réclamations  
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tridescreclam.php">
              <i class="ni ni-circle-08 text-pink"></i>Tri descendant des réclamations
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="\website\frontoffice\Colo Shop\indextry.html">
              <i class="ni ni-shop text-green"></i> Ma boutique
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./examples/afficherclaim.php">
              <i class="ni ni-bell-55 text-green"></i> claims
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Documentation</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
              <i class="ni ni-spaceship"></i> Getting started
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
              <i class="ni ni-palette"></i> Foundation
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html">
              <i class="ni ni-ui-04"></i> Components
            </a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item active active-pro">
            <a class="nav-link" href="../examples/upgrade.html">
              <i class="ni ni-send text-dark"></i> Upgrade to PRO
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="../index.html">Admin</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                </span>
               
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(./assets/img/theme/bff.png); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Modifier une réclamation tant que Admin </h1>
            <p class="text-white mt-0 mb-5">Service réclamation</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
    
            <div class="card-body">
            <script src="reclamation.js"></script>

              <form method="POST" action=""  onsubmit="return verif();" >
                <h6 class="heading-small text-muted mb-4">Réclamation</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <script src="reclamation.js"></script>
                        <label for="name" class="form-control-label">CIN:
                        </label>
                        <input type="number" id="CIN"  class="form-control form-control-alternative" name="CIN" required minlenght="3" maxlength="20" size="10" Value="<?php echo $a['CIN'];?>">
                        <div id="msgDiv14" class="message" style='color:red'></div>
                        <div id="msgDiv152" class="message" style='color:red'></div>
                        <br>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
             <label for="name" class="form-control-label">Nom:
                   </label>
                    <input type="text" id="Nom"   class="form-control form-control-alternative"  name="Nom" required minlenght="3" maxlength="20" size="10" Value="<?php echo $a['Nom'];?>">
                <div id="msgDiv1" class="message" style='color:red'></div>
                     <div id="msgDiv12" class="message" style='color:red'></div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                <label for="name" class="form-control-label">Prenom:
                                                      </label>
                                                      <input type="text" id="Prenom" class="form-control form-control-alternative" name="Prenom" required minlenght="3" maxlength="20" size="10" Value="<?php echo $a['Prenom'];?>">
                                                      <div id="msgDiv2" class="message" style='color:red'></div>
                                                      <div id="msgDiv22" class="message" style='color:red'></div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="name" class="form-control-label">Email:
                        </label>
                        <input type="text" id="Email" class="form-control form-control-alternative" name="Email" required minlenght="3" maxlength="50" size="10" Value="<?php echo $a['Email'];?>">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="name" class="form-control-label">Numéro telephone:
                        </label>
                        <input type="Number" id="Num_tel" class="form-control form-control-alternative" name="Num_tel" required minlenght="3" maxlength="20" size="10" Value="<?php echo $a['Num_tel'];?>">
                        <div id="msgDiv2" class="message" style='color:red'></div>
                        <div id="msgDiv22" class="message" style='color:red'></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                    
              <label for="Date_de_reclamation" class="form-control-label">Date_de_reclamation:
              </label>
              <input type="datetime-local" id="Date_de_reclamation" class="form-control form-control-alternative" name="Date_de_reclamation" required minlenght="3"
                  maxlength="20" size="10" Value="<?php echo $a['Date_de_reclamation'];?>">
              <div id="msgDiv6" class="message" style='color:red'></div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                      <label for="id_sujet" id="id_sujet"  class="form-control-label">choisissez l'id produit:
                                                    </label>
                                                    <select name="id_sujet"   class="form-control form-control-alternative" ><br>
                                                        <option selected value="<?php echo $a['id_sujet'];?>"> <?php echo $a['id_sujet'];?></option>
                                                        <option value="001">Panneaux solaires</option>
                                                        <option value="002">Helices</option>
                                                        <option value="003">Moteur</option>

                                                    </select>
                  
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                      <label for="id_sujet2" id="id_sujet2" name=" id_sujet2" class="form-control-label">choisissez l'id service:
            </label>
            <select name=" id_sujet2" class="form-control form-control-alternative" >
                                                        <option selected value="<?php echo $a['id_sujet2'];?>"><?php echo $a['id_sujet'];?>
                                                        </option>
                                                        <option value="112">Réparation</option>
                                                        <option value="111">Installation</option>
                                                        <option value="110">Maintenance</option>

                                                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4" >Description</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    
					<label for="Description ">Description:
            </label>
            <input type="text" id="Descriptionn" name="Descriptionn"  required minlenght="3" class="form-control form-control-alternative" maxlength="20" size="10" placeholder="Descriptionn" Value="<?php echo $a['Descriptionn'];?>" >
                  </div>
                </div>

                <div class="col-lg-4">
                      <div class="form-group">
                      <label for="Statut" id="Statut" class="form-control-label">Le statut:
                                                    </label>
                                                    <select name="Statut" id="Statut"  class="form-control form-control-alternative" ><br>
                                                        <option selected value="<?php echo $a['Statut'];?>"><?php echo $a['Statut'];?></option>
                                                        <option value="pas traité">pas traité</option>
                                                        <option value="en cours de traitement">en cours de traitement</option>
                                                        <option value="traité">traité</option>

                                                    </select>
                  
                      </div>
                    </div>

				<div class="pl-lg-4">
                  <div class="form-group">
				<input type="submit" name="submit" value="Envoyer"  class="btn btn-primary" onclick="verif()"  >
        <input type="reset" value="Effacer" id="effacer" class="btn btn-primary" >
													  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        if(window.history.replaceState){
window.history.replaceState(null,null,window.location.href);
        }
        </script>

      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core   -->
  <script src="./assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="./assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="./assets/js/argon-dashboard.min.js?v=1.1.2"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>
