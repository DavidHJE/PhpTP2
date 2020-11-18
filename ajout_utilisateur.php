<?php
include('Client.php');
include('configBdd.php');

if(isset($_POST["nom"])){
$client=new Client();
$client->setId($_POST["id"]);
$client->setNom($_POST["nom"]);
$client->setPrenom($_POST["prenom"]);
$client->setVille($_POST["ville"]);
$client->setTelephone($_POST["telephone"]);
$client->setDate_dernier_achat(  date("Y-m-d"));
$client->setPortefeuille($_POST["portefeuille"]);

$requete=$db->prepare("INSERT INTO client (id,nom,prenom,ville,telephone,date_dernier_achat,portefeuille) values (:id,:nom,:prenom,:ville,:telephone,:date_dernier_achat,:portefeuille)");
$requete->execute(dismount($client));
}
//var_dump($utilisateur2);

function dismount($object) {
    $reflectionClass = new ReflectionClass(get_class($object));
    $array = array();
    foreach ($reflectionClass->getProperties() as $property) {
        $property->setAccessible(true);
        $array[$property->getName()] = $property->getValue($object);
        $property->setAccessible(false);
    }
    return $array;
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <style>
        .divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-facebook {
    background-color: #405D9D;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
}
    </style>
</head>

<body>
    <div class="container">
       





        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 400px;">
                <h4 class="card-title mt-3 text-center">Créez un utilisateur</h4>

               
                <p class="divider-text">
                    <span class="bg-light">OR</span>
                </p>
                <form action="ajout_utilisateur.php" method="post">
                <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="id" class="form-control" placeholder="Id" type="number">
                    </div> <!-- form-group// -->
                <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="nom" class="form-control" placeholder="Nom" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="prenom" class="form-control" placeholder="Prenom" type="text">
                    </div> <!-- form-group// -->
                    
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="telephone" class="form-control" placeholder="telephone" type="number">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input name="ville" class="form-control" placeholder="Ville" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input name="portefeuille" class="form-control" placeholder="portefeuille" type="number">
                    </div>
                    <div class="form-group">
                        <button name="sub" type="submit" class="btn btn-primary btn-block"> Créer un utilisateur </button>
                    </div> <!-- form-group// -->
                              </form>
            </article>
        </div> <!-- card.// -->

    </div>
    <!--container end.//-->

   
    </article>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>



<?php
//$utilisateur1 = new Utilisateur(0, "Manglou", "Sebastien", "seb@seb.fr", "motdepassesecret");
//$utilisateurs[$utilisateur1->getId()] = $utilisateur1;





?>