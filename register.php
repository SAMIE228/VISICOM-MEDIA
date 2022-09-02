<?php
require_once('./includes/db.php');
require_once('./includes/functions.php');
if (!empty ($_POST)){

    $errors = [];

    //Pseudo

    if (empty($_POST['username']) || !preg_match("#^[a-zA-Z0-9_]+$#" ,$_POST ['username'])) {
        $errors['username'] = "Votre pseudo n'est pas valide";
   
   
}else{
    // SELECT * FROM users WHERE username = post
    $query="SELECT * FROM users WHERE username = ?";
    $req = $pdo->prepare($query);
    $req->execute([$_POST['username']]);
    if ($req->fetch()){
        $errors['username'] = "Ce pseudo n'est plus disponible";
    }
}

   // Email

   if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Votre email n'est pas valide";


} else{
    // SELECT * FROM users WHERE username = post
    $query="SELECT * FROM users WHERE email = ?";
    $req = $pdo->prepare($query);
    $req->execute([$_POST['email']]);
    if ($req->fetch()){
        $errors['email'] = "Ce email est déjà pris";
    }

}

  // Password

  if (empty($_POST['Password']) || $_POST['Password']!==$_POST['Password_confirm']) {
    $errors['Password'] = "Vous devez rentrer un mot de passe valide et confirmé";
} 
if (empty($errors)) {
   $query = "INSERT INTO users (username,email,password,confirmation_token) VALUES (?,?,?,?)";
   $req = $pdo->prepare($query);
   $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
   
   $token = generatetoken(100);
   
   $req->execute([$_POST['username'],$_POST['email'],$password, $token]);
   $userId = $pdo->lastInsertId();
   var_dump($userId);
   die();
}
}
?>
<?php
require_once './includes/header.php';
?>

    <section class="form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <img src="./media/visicom_contact.jpg" class="img-fluid" alt="">
                </div>
                    <div class="col-lg-6 px-5 pt-5">
                        <h1>Inscription</h1>
                        <h4>Veuillez créer un compte</h4>
                        <fieldset>
                        <form action="register.php" method="post">

                            <div class="form-row">
                                <div class="col-lg-8">
                                    <input type="text" placeholder="Nom d'utilisateur" id="pseudo" class="form-control my-3 p-3" name="username">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-lg-8">
                                    <input type="email" placeholder="Email" id="email" class="form-control my-3 p-3" name="email" >
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-lg-8">
                                    <input type="password" placeholder="Mot de passe" id="password" class="form-control my-3 p-3" name="password" >
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-lg-8">
                                    <input type="password" placeholder="Confirmer le mot de passe" id="password" class="form-control my-3 p-3" name="password_confirm" >
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-lg-8">
                                <button type="submit" class="btn1 mb-5 ">S'inscrire</button>
                                <!--<input type="submit" class="btn btn-primary" value="S'inscrire"> -->
                                </div>
                            </div>

                            <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
                            </div>

                            <a  href="">Mot de passe oublié?</a> 

                            <p class="mt-3">Voulez-vous avoir un compt partenaire? <a href="">inscrivez-vous ici</a></p>

                        </form>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <?php
require_once './includes/footer.php';
?>
