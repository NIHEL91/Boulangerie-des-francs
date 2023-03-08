<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Boulangerie des francs</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="css/<?= $css; ?>.css">
        <link href="../css/header.css" rel="stylesheet" type="text/css" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https : //fonts.googleapis.com/css2?family=Danse+Script & display = swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    
<header>
    <nav class="navbar navbar-expand-lg  ">
        <div class="container-fluid">
            <img src="../public/img/logo.png" class="logo"/>

            <a class="navbar-brand px-3" href="index.php"><h5>Accueil</h5></a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active  px-3" aria-current="page" href="#"><h5>Anniversaires</h5></a>
                </li>
                <li class="nav-item">
                <a class="nav-link   px-3" href="#">Mariage</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle   px-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Gateaux aux thémes
                    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Princesses><img src="../public/img/cake_logo.jpeg"></a></li>
                            <li><a class="dropdown-item" href="#">Football</a></li>
                            <li><a class="dropdown-item" href="#">Coeur</a></li>
                            <li><a class="dropdown-item" href="#">Fleurs</a></li>
                            <li><a class="dropdown-item" href="#">Amours</a></li>
                        </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link   px-3" href="#" >Contacter</a>
                </li>
            </ul>

            <form class="d-flex">
             <?php
               if($_SESSION['role'] === 'visiteur'): ?> <!-- si aucun utilisateur n'est pas connecté -->
                <a class="btn btn-secondary" href="index.php?entite=users&action=connect">Connexion</a>
            
                <a class="btn btn-secondary" href="index.php?entite=users&action=createUser">Créer un compte</a>
                <?php endif; ?>
                <?php if($_SESSION['role'] === 'client'): ?>
                    <?php echo '<span> Bonjour : '.$_SESSION['lastname'].'</span><br>' ?>
                    <a href="index.php?entite=users&action=logout" class="btn btn- btn-sm">Déconnexion</a></span><br><!-- si l'utilisateur connecté a le rôle CLIENT -->
                    <a href="#"  class="btn  btn-sm me-2 "><img src="../public/img/panier.png" class="panier"/></a>
                    <?php endif ?> <!-- fin de si -->
                   <?php if($_SESSION['role'] === 'admin'): ?> <!-- si l'utilisateur connecté a le rôle ADMIN -->
                        <a class="btn btn-warning" href="index.php?entite=users&action=createUser"  role="button" >
                            Gérer les les produits </a>                    
                    <?php endif ?> <!-- fin de si -->                    
                    <span class="badge badge-secondary text-warning"> <?php echo date('l d.m.Y'); ?></span>
                    <!--<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>-->
            
            </form>
        </div>
    </nav>

        <div class="row">
            <div class="col-8">
            </div>
            
            <div class="col-4">
                
                <!--mettre  la date avec le php-->
            </div>
            

</header>

    <main class="container-fluid">
        <?php include $vue . '.php'; ?>
    </main>
    


    </body>
