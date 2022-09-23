<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #F5F5F5;
        }
        .row{
            background-color: white;
            border-radius: 30px;
            box-shadow: 12px 12px 22px gray;
        }
        img{
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
            height: 1320px;
            width: 100%;
        }
        .btn1{
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: #316cf4;
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }
        .btn1:hover{
            background-color: white;
            border: 1px solid;
            color: #316cf4;
        }
    </style>
    <title>Document</title>
</head>
<body>

<div class="container">

<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Visicom Média</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="inscription.php">Inscription</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="connexion.php">Se connecter</a>
        </li>
        <li style="color:white ;" class="nav-item">
          <a class="nav-link " href="deconnexion.php">Déconnexion</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-default recherche" type="submit">Rechercher</button>
      </form>
    </div>
  </div>
</nav>
</div>

<section class="form my-4 mx-5">
<div class="container">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <img src="../media/connexion.png" class="img-fluid" alt="">
                </div>
                    <div class="col-lg-6 px-5 pt-5">
                        <?php
                             if(isset($_GET['reg_err']))
                             {
                                 $err = htmlspecialchars($_GET['reg_err']);
                                 switch($err)
                                 {
                                     case 'success':
                                        ?>
                                           <div class="alert alert-succes text-primary">
                                               <strong>Succès</strong> inscription réussie!
                                           </div>
                                        <?php
                                        break;

                                        case 'password':
                                            ?>
                                               <div class="alert alert-succes text-danger">
                                                   <strong>Erreur</strong> mot de passe different
                                               </div>
                                            <?php
                                            break;

                                            case 'email':
                                                ?>
                                                   <div class="alert alert-succes text-danger">
                                                       <strong>Erreur</strong> email non valide
                                                   </div>
                                                <?php
                                                break;

                                                case 'email_length':
                                                    ?>
                                                       <div class="alert alert-succes text-danger">
                                                           <strong>Erreur</strong> email trop long
                                                       </div>
                                                    <?php
                                                    break;

                                                    case 'pseudo_length':
                                                        ?>
                                                           <div class="alert alert-succes text-danger">
                                                               <strong>Erreur</strong> pseudo trop long
                                                           </div>
                                                        <?php
                                                        break;

                                                        case 'already':
                                                            ?>
                                                               <div class="alert alert-succes text-danger">
                                                                   <strong>Erreur</strong> compte déjà existant
                                                               </div>
                                                            <?php
                                                            break;
                                 }
                             }
                        ?>
                        <h1>Inscription</h1>
                        <h4>Veuillez créer un compte</h4>
                        <fieldset>
                        <form action="inscription_traitement.php" method="post">

                            <div class="form-row">
                                <div class="col-lg-8">
                                    <input type="text" placeholder="Pseudo" id="email" class="form-control my-3 p-3" name="pseudo" required="required" autocomplete="off" >
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-lg-8">
                                    <input type="email" placeholder="Email" id="email" class="form-control my-3 p-3" name="email" required="required" autocomplete="off" >
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-lg-8">
                                    <input type="password" placeholder="Mot de passe" id="password" class="form-control my-3 p-3" name="password" required="required" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-lg-8">
                                    <input type="password" placeholder="Confirmez le Mot de passe" id="password" class="form-control my-3 p-3" name="password_retype" required="required" autocomplete="off">
                                </div>
                            </div>

                            

                            <div class="form-row">
                                <div class="col-lg-8">
                                <button type="submit" class="btn1 mb-5 ">Inscription</button>
                                <!--<input type="submit" class="btn btn-primary" value="S'inscrire"> -->
                                </div>
                            </div>

                            
                        </form>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>

    </section>
    </body>

    </html>
