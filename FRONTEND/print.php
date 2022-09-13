<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="stylea.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="owl.theme.default.min.css">
    <title>Service</title>
</head>
<body>

 <!-- <SECTION HEADER> -->

 <?php include 'head.php'; ?>

 <!-- <SECTION BANIERE> -->

    <div class="slide3 min-vh-100 bg-cover d-flex align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <h6 class="text-uppercase text-white">VOTRE AGENCE DE COMMUNICATION 360º</h6>
              <h1 class=" display-4 my-3 text-white">seul media du marché dédié aux solutions de personnalisation,
                Packaging, Communication et affichage publicitaire.
                .</h1>
                <a href="#" class="btn btn-brand" data-bs-toggle="modal" data-bs-target="#exampleModal">Contactez-nous</a>
                            <a href="#" class="btn btn-brand btprint ms-md-3">Imprimez ici</a>
            </div>
          </div>
        </div>
      </div>

      <!-- <SECTION IMPRESSION> -->

        <section class="row w-100 mt-5" id="features">
          <div class="col-lg-6 col-img">
            <img  src="../media/print3.jpeg" alt="">
          </div>
          <div class="col-lg-6">
            <div class="container">
              <div class="row">
                <div class="col-md-10 offset-md-1">
                  <h5 class="text-primary">Agence Print</h5>
                  <h1>POURQUOI IMPRIMEZ CHEZ NOUS?</h1>
                  <p>Non seulement nous avons une équipe technique très qualifier, nous disposons aussi d’une gamme de machine de pointe et des imprimantes de la dernière génération pour satisfaire tous vos besoins d’impression sur tout type de supports souples (bâche, textile, papier, vinyles adhésif …) ou rigides (PVC, Dibbon, carton, plexi …). 

                    Dépliants, flyers, stop-rayons, cartes à gratter, plv de comptoirs mais également impression sur pvc, poly pro, vinyle adhésif. PLV en volume tout support (carton, pvc souple ou expansé …) Stickers, Vitrophanies, …
                    Kakémonos, toiles retro-éclairées, toiles tendues sur cadre. 
                    </p>
                    <h6>Voici vos avantages:</h6>
                    <div class="feature d-flex mt-5">
                      <div class="iconbox me-3">
                        <i class="bi bi-alarm-fill"></i>
                      </div>
                      <div>
                        <h5>Gain de temps</h5>
                        <p> La capacité d’imprimer à haute vitesse pour vous livrer à temps et ganer en temps. </p>
                      </div>
                    </div>

                    <div class="feature d-flex ">
                      <div class="iconbox me-3">
                        <i class="bi bi-printer-fill"></i>
                      </div>
                      <div>
                        <h5>Qualité superieur</h5>
                        <p> Une correspondance et une reproductibilité des couleurs les plus rapides au monde. </p>
                      </div>
                    </div>

                    <div class="feature d-flex ">
                      <div class="iconbox me-3">
                        <i class="bi bi-currency-exchange"></i>
                      </div>
                      <div>
                        <h5>Moindre coût</h5>
                        <p> Une impression intelligente et fiable, permettant de réduire les délais et les pertes. </p>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>

        </section>

        <!-- DEBUT DE LA SECTION STATISTIC -->

        <?php include 'statistic.php';?>


        <!-- <SECTION FORMULAIRE IMPRESSION EN LIGNE> -->

          <section id="inscriptionform">
            <div class="container mb-5 col-lg-8 ">
                <form class="p-5" action="registration.php" method="POST" style="box-shadow: 0px 15px 50px rgba(0, 0, 0, .2);border-radius: 10px;">
                    
                      <legend class="fw-2  p-1" style="color: #fff;; text-align: center ;border-radius: 5px;background-color: #316CF4;font-size: 20px;">COMMANDEZ VOTRE IMPRESSION EN LIGNE MAINTENANT</legend>
                      <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Nom & Prénom<span style="color: red;">*</span></label>
                        <input value="" type="text" id="disabledTextInput" class="form-control" name="nom" placeholder="Nom">
                      </div>

                      <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Numéros de télephone (avec indicatif)<span style="color: red;">*</span></label>
                        <input value="" type="tell" id="disabledTextInput" class="form-control" name="email" placeholder="(+228) 91089781">
                      </div>

                      <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Email<span style="color: red;">*</span></label>
                        <input value="" type="email" id="disabledTextInput" class="form-control" name="email" placeholder="example@gmail.com">
                      </div>
                      
                      <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Type de support<span style="color: red;">*</span></label>
                        <select id="disabledSelect"  name="support"   class="form-select">
                          <option value="">Bâche</option>
                          <option value="">Autocollant</option>
                          <option value="">One way</option>
                          <option value="">A5 Flyers</option>
                          <option value="">A4</option>
                          <option value="">A3</option>
                        </select>
                      </div>

                      
                      
                      <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Longueur (en mètre)<span style="color: red;">*</span></label>
                        <input value="" type="number" id="disabledTextInput" class="form-control" name="longueur" placeholder="">
                      </div>

                      <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Largeur (en mètre)<span style="color: red;">*</span></label>
                        <input value="" type="number" id="disabledTextInput" class="form-control" name="largeur" placeholder="">
                      </div>

                      <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Nom de copie<span style="color: red;">*</span></label>
                        <input value="" type="number" id="disabledTextInput" class="form-control" name="copie" placeholder="">
                      </div>

                      <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Ville & Quartier<span style="color: red;">*</span></label>
                        <input type="text" id="disabledTextInput" class="form-control" name="adress" placeholder="votre situation géographique">
                      </div>

                      <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Choisir un fichier<span style="color: red;">*</span></label>
                        <input type="file" id="disabledTextInput" class="form-control" name="file" placeholder="importer votre fichier ici" accept="image/*">
                      </div>

                      <fieldset class="row mb-3">
                        <!-- <legend class="col-form-label col-sm-2 pt-0">Radios</legend> -->
                        <div class="col-sm-10">
                          <div class="form-check mt-2">
                            <input  class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                              Je veut être livré à domicile (frais de livraison à partir de 500F à lomé)
                            </label>
                          </div>
                          
                          <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" checked>
                            <label class="form-check-label" for="gridRadios3">
                              Je préfère passer récuperer en agence
                            </label>
                          </div>
                        </div>
                      </fieldset>

                      

                     
                      <button type="submit" class="btn btn-primary">Commandez</button>
                    
                  </form>
            </div>
        </section>

         <!-- DEBUT DE LA SECTION PARTENAIRE -->

         <?php include 'partener.php';?>

      <!-- DEBUT DE LA SECTION CONTACT -->

      <?php include 'foot.php';?>
     
    <script src="jqeuery.min.js"></script>
    <script src="owl.carousel.min.js"></script>
    <script src="bootsrap.bundle.min.js"></script>
    <script src="app.js"></script>
</body>
</html>