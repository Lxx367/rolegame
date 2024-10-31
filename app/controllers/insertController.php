<?php
require_once '../models/Creature.php';
require_once '../../persistence/DAO/CreatureDAO.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Llamo a la función en cuanto se redirige el action a esta página mediante metodo POST
   createAction();
}
// Función encargada de crear nuevas ofertas
function createAction() {
    // Obtención de los valores del formulario
    $name = $_POST["inputName"];
    $description = $_POST["inputDescription"];
    $avatar = $_POST["inputAvatar"];
    $attackPower = $_POST["inputAttackPower"];
    $lifeLevel = $_POST["inputLifeLevel"];
    $weapon = $_POST["inputWeapon"];
    
    // Creación de objeto auxiliar   
    $creature = new Creature();
    $creature->setName($name);
    $creature->setDescription($description);
    $creature->setAttackPower($attackPower);
    $creature->setAvatar($avatar);
    $creature->setLifeLevel($lifeLevel);
    $creature->setWeapon($weapon);
    //Creamos un objeto CreatureDAO para hacer las llamadas a la BD
    $creatureDAO = new CreatureDAO();
    $creatureDAO->insert($creature);
 
    //Redirigimos a este path al usuario tras completar el código (insert creature)
    header('Location: ../../index.php');
}