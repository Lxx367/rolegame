<?php
//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '\..\..\persistence\DAO\CreatureDAO.php');
require_once(dirname(__FILE__) . '\..\models\Creature.php');
//Compruebo que me llega por GET el parámetro
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $CreatureDAO = new CreatureDAO();
    $creature = $CreatureDAO->selectById($id);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Artean</title>
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    </head>
    <body>
        <!-- Page Content -->
        <div class="container">
            <div class="card" >
                <div class="card-block">
                    <h2 class="card-title">Name: <?php  
                            echo (isset($_GET["id"])? $creature->getName() : "") ;                    
                     ?></h2>
                    <i class=" card-text description">Description: <?php 
                            echo (isset($_GET["id"])? $creature->getDescription() : "") ;    
                    ?></i>
                    <p class=" card-text description"><img src="<?php echo (isset($_GET["id"])? $creature->getAvatar() : ""); ?>" class="img-thumbnail" alt="img-thumbnail"></p> 
                    <p class=" card-text description">Attack Power: <?php 
                            echo (isset($_GET["id"])? $creature->getAttackPower() : "") ;    
                    ?></p>
                    <p class=" card-text description">Life Level: <?php 
                            echo (isset($_GET["id"])? $creature->getLifeLevel() : "") ;    
                    ?></p> 
                    <p class=" card-text description">Weapon: <?php 
                            echo (isset($_GET["id"])? $creature->getWeapon() : "") ;    
                    ?></p> 
                </div>
                
                <div  class=" btn-group card-footer" role="group">
                    <a type="button" class="btn btn-success" href="edit.php?id=<?php 
                            echo (isset($_GET["id"])? $creature->getIdCreature() : "") ;    
                    ?><">Modificar</a> 
                    <a type="button" class="btn btn-danger" href="../controllers/deleteController.php?id=<?php 
                            echo (isset($_GET["id"])? $creature->getIdCreature() : "") ;    
                    ?><?>">Borrar</a> 
                </div>
       
            </div>

        </div>
        <!-- /.container -->
        <!-- Java Script Boostrap-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" ></script>
    </body>
</html>