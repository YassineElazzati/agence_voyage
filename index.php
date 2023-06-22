<?php

$bdd = new PDO('mysql:dbname=agence_voyage;host=127.0.0.1','root', '');
$queryExec = $bdd->query("SELECT * FROM circuit");
$circuits = $queryExec->fetchAll();

$queryExec = $bdd->query("SELECT * FROM client");
$clients = $queryExec->fetchAll();

$queryExec = $bdd->query("SELECT * FROM composer");
$composers = $queryExec->fetchAll();

$queryExec = $bdd->query("SELECT * FROM etape");
$etapes = $queryExec->fetchAll();

$queryExec = $bdd->query("SELECT * FROM reservation");
$reservations = $queryExec->fetchAll();

$queryExec = $bdd->query("SELECT * FROM lieuxavisiter");
$lieuxavisiters = $queryExec->fetchAll();

$queryExec = $bdd->query("SELECT * FROM role");
$roles = $queryExec->fetchAll();

$queryExec = $bdd->query("SELECT * FROM utilisateur");
$users = $queryExec->fetchAll();


/////////////////////////////////////////////////////////////////////     Circuit ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
include('circuit.php');

$tableau_circuits= array();

foreach($circuits as $circuit){

$lescircuits= new circuit ($circuit['Id_Circuit'],$circuit['Descriptif'],$circuit['VilleDepart'],$circuit['VilleArrivee'],$circuit['PaysDepart'],$circuit['PaysArrivee'],$circuit['PrixInscription'],$circuit['DateDepart'],$circuit['DateDepart'],$circuit['Duree']);
 
    array_push($tableau_circuits,$lescircuits);
}



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


include('client.php');



include('composer.php');



include('etape.php');



include('lieuxavisiter.php');



include('reservation.php');



include('role.php');




/////////////////////////////////////////USer                     /////////////////////////////////////////////////////////////////////////////////
include('user.php');

$tableau_users= array();

foreach ($users as $user) {

   $lesusers= new user ($user['Id_Utilisateur'],$user['login'],$user['Mdp']);


   array_push($tableau_users,$lesusers);
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body>
    <!-- /////////////////////////////////////////////////////////////////////////////////Tableau User//////////////////////////////////////////////////////////////////////// -->
      <h1>Tableau user</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id-User</th>
                <th scope="col">Login</th>
                <th scope="col">Password</th>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
               <?php $lesusers= new user ($user['Id_Utilisateur'],$user['login'],$user['Mdp']); ?>
            <tr>
                <td scope="row"><?php echo $lesusers->getId_Utilisateur(); ?></td>
                <td><?php echo $lesusers->getlogin(); ?></td>
                <td><?php echo $lesusers->getMdp(); ?></td>
                <td> 
                    <a href="modifier.php?id=<?php echo $lesusers->getId_Utilisateur ();?>">
                        <i class="bi bi-pencil-square"></i> Modifier 
                    </a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<!-- //////////////////////////////////////////////////////////////////////////////////////////Fin Tableau User///////////////////////////////////////////////////////////////////////////// -->
 <h1>Tableau circuits</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id_Circuit</th>
                <th scope="col">Descriptif</th>
                <th scope="col">VilleDepart</th>
                <th scope="col">VilleArrivee</th>
                <th scope="col">PaysDepart</th>
                <th scope="col">PaysArrivee</th>
                <th scope="col">DateDepart</th>
                <th scope="col">Duree</th>
                <th scope="col">PrixInscription</th>
        </thead>
        <tbody>
            <?php foreach($circuits as $circuit): ?>
               <?php $lescircuits= new circuit ($circuit['Id_Circuit'],$circuit['Descriptif'],$circuit['VilleDepart'],$circuit['VilleArrivee'],$circuit['PaysDepart'],$circuit['PaysArrivee'],$circuit['PrixInscription'],$circuit['DateDepart'],$circuit['DateDepart'],$circuit['Duree']); ?>
            <tr>
                <td scope="row"><?php echo $lescircuits->getId_Circuit(); ?></td>
                <td><?php echo $lescircuits->getDescriptif();  ?></td>
                <td><?php echo $lescircuits->getVilleDepart();  ?></td>                 
                <td><?php echo $lescircuits->getVilleArrivee();?></td>
                <td><?php echo $lescircuits->getPaysDepart();  ?></td>
                <td><?php echo $lescircuits->getPaysArrivee(); ?></td>
                <td><?php echo $lescircuits->getDateDepart();  ?></td>
                <td><?php echo $lescircuits->getDuree();       ?></td>
                <td><?php echo $lescircuits->getPrixInscription(); ?></td>
                <td> 
                    <a href="modifier.php?id=<?php echo $lescircuits->getId_Circuit ();?>">
                        <i class="bi bi-pencil-square"></i> Modifier 
                    </a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table> 
</body>
</html>
