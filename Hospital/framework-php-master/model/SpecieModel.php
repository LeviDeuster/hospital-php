<?php

function getSpecies($id)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species WHERE species_id = :id";
	$query = $db->prepare($sql);

    $params = array(':id' => $id);
    $query->execute($params);



	$db = null;

	return $query->fetch();
}

function getAllSpecies()
{
	$db = openDatabaseConnection();

    $sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function editSpecies()
{
    $species = isset($_POST['species_description']) ? $_POST['species_description'] : null;
    $id = isset($_POST['species_id']) ? $_POST['species_id'] : null;

    if (strlen($species) == 0 || strlen($id) == 0) {
        return false;
    }

    $db = openDatabaseConnection();

    $sql = "UPDATE species SET species_description = :description WHERE species_id = :id";
    $query = $db->prepare($sql);

    $params = array(
        ':description' => $species,
        ':id' => $id);

    $query->execute($params);

    $db = null;


    return true;
}

function deleteSpecies($id = null)
{

    if (!$id) {
        return false;
    }

    $db = openDatabaseConnection();
    $sql = "DELETE FROM species WHERE species_id=:id";
    $query = $db->prepare($sql);

    $params = array(':id' => $id);
    $query->execute($params);


    $db = null;

    return true;
}

function createSpecies()
{
    $species = isset($_POST['species_description']) ? $_POST['species_description'] : null;

    if (strlen($species) == 0) {
        return false;
    }

    $db = openDatabaseConnection();

    $sql = "INSERT INTO species(species_description) VALUES (:description)";
    $query = $db->prepare($sql);

    $params = array(
        ':description' => $species);

    $query->execute($params);

    $db = null;

    return true;
};


