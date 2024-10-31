<?php
require_once(dirname(__FILE__) . '/../../persistence/DAO/CreatureDAO.php');
require_once(dirname(__FILE__) . '/../../app/models/Creature.php');

// Obtención de la lista completa de criaturas
function indexAction() {
    $creatureDAO = new CreatureDAO();
    return $creatureDAO->selectAll();
}

?>