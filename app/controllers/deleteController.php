<?php
//Es necesario que importemos los ficheros creados con anterioridad porque los vamos a utilizar desde este fichero.
require_once(dirname(__FILE__) . '/../../persistence/DAO/CreatureDAO.php');
require_once(dirname(__FILE__) . '/../models/Creature.php');

$creatureDAO = new CreatureDAO();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
//Llamo que hace la edición contra BD
    deleteAction();
}

function deleteAction() {
    $idCreature = $_GET["id"];

    $creatureDAO = new CreatureDAO();
    $creatureDAO->delete($idCreature);

    header('Location: ../../index.php');
}
?>

