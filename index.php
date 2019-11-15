<?php if (isset($_POST['email'])) {
    if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
        $erreur = "Veuillez entrer une adresse email valide";
    } else {
        $retour = mail("francois.simeonidis@bred.fr","Inscription à la newsletter","Je souhaiterais suivre votre actualité !","From: {$_POST['email']}");
        if ($retour) {
            $message = "Vous vous êtes bien inscrit ! A bientôt.";
        } else {
            $erreur = "Inscription échouée, veuillez réessayer.";
        }    
    }
}
?>
<!DOCTYPE html>
<html class="h-100">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link rel="stylesheet" href="index.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	</style>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>
<body class="d-flex flex-row h-100 align-items-center justify-content-center" style="margin-left:65px;">
   <div class="d-flex flex-column h-100 align-items-center justify-content-center">
        <div class="container m-auto h-100 d-flex flex-column align-items-center justify-content-center ml-4">
            <img src="./img/logo.jpg" class="img-fluid" alt="">
            <p class="text-center mb-4 p-4" style="font-size:2rem;"><strong>Services bancaires</strong> quotidiens adaptés aux <strong>personnes en perte d’autonomie</strong> et à <strong>leurs proches</strong> qui les accompagnent</p>
            <?php if(isset($message)): ?>
                <div class="alert alert-success">
                    <?= $message ?>
                </div>
            <?php elseif(isset($erreur)): ?>
                <div class="alert alert-danger">
                    <?= $erreur ?>
                </div>
            <?php endif ?>
            <form action="" method="post" class="form-inline mt-lg-4 mb-sm-4 d-flex flex-column flex-md-row">
                <div class="form-group mb-2 d-flex flex-column flex-md-row py-sm-2">
                    <label for="mail" class="py-sm-2">Entrez votre email pour rester informé(e) : </label>
                    <input required type="email" class="form-control ml-2" id="email" name="email" placeholder="Email">
                </div>
                <button type="submit" class="ml-2 btn btn-outline-success mb-2">Ok</button>
            </form>
        </div>

        <footer class="d-flex footer mt-auto mb-4 flex-column flex-sm-row ml-4">
        <p class="text-muted text-justify font-italic mx-2 px-2" style="font-size:small">Ce site collecte des données personnelles qui sont nécessaires à son fonctionnement et requis pour mettre en œuvre les objectifs décrits dans la Charte pour la protection des données personnelles. 
    Si vous souhaitez en savoir plus ou retirez votre accord à la collecte de vos données personnelles,veuillez vous référer à la <a href="https://www.bred.fr/medias/pdf/informations-reglementaires/rgpd-notice-informations-personnelles.pdf">notice d’information sur le traitement des données à caractère personnel.</a></p>
        <img id="footer_logo" src="img/bred.jpg" class="mx-4 px-2 " style="width:auto; height:50px" alt="">
        </footer>
    </div>
</body>
</html>