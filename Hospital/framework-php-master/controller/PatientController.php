<?php

require(ROOT . "model/PatientModel.php");

function index()
{
    require(ROOT . "model/SpecieModel.php");
    require(ROOT . "model/ClientModel.php");
    render("/patients/index", array(
        'patients' => getAllPatients(),
        'clients' => getAllClients(),
        'species' => getAllSpecies()
    ));
}

function create()
{
    require(ROOT . "model/SpecieModel.php");
    require(ROOT . "model/ClientModel.php");
    render("/patients/create", array(
        'patients' => getAllPatients(),
        'clients' => getAllClients(),
        'species' => getAllSpecies()
    ));
}

function createSave()
{
    if (!createpatient()) {
        header("Location:" . URL . "/error/index");
        exit();
    }

    header("Location:" . URL . "/patient/index");
}

function edit($id)
{
    require(ROOT . "model/SpecieModel.php");
    require(ROOT . "model/ClientModel.php");
    render("/patients/edit", array(
        'patients' => getPatient($id),
        'species' => getAllSpecies(),
        'clients' => getAllClients()
    ));
}

function editSave()
{
    if (!editPatient()) {
        header("Location:" . URL . "/error/index");
        exit();
    }

    header("Location:" . URL . "/patient/index");
}

function delete($id)
{
    if (!deletePatient($id)) {
        header("Location:" . URL . "/error/index");
        exit();
    }

    header("Location:" . URL . "/patient/index");
}
