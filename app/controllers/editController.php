<?php
//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../persistence/DAO/CreatureDAO.php');
require_once(dirname(__FILE__) . '/../models/Creature.php');
editAction();
// Función encargada de crear nuevas ofertas
function editAction() {
    // Obtención de los valores del formulario y validación    
    $idCreature = $_POST["idCreature"];
    $name = $_POST["inputName"];
    $description = $_POST["inputDescription"];
    $avatar = $_POST["inputAvatar"];
    $attackPower = $_POST["inputAttackPower"];
    $lifeLevel = $_POST["inputLifeLevel"];
    $weapon = $_POST["inputWeapon"];
    // Creación de objeto auxiliar   
    $creature = new Creature();
    $creature->setIdCreature($idCreature);
    $creature->setName($name);
    $creature->setDescription($description);
    $creature->setAvatar($avatar);
    $creature->setAttackPower($attackPower);
    $creature->setLifeLevel($lifeLevel);
    $creature->setWeapon($weapon);
    //Creamos un objeto CreatureDAO para hacer las llamadas a la BD
    $creatureDAO = new CreatureDAO();
    $creatureDAO->update($creature);

    header('Location: ../../index.php');
}

?>

