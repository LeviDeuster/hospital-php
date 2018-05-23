<?php

require(ROOT . "model/SpecieModel.php");

function index()
{
    render("/species/index", array(
        'species' => getAllSpecies()
    ));
}

function create()
{

    render("/species/create");
}

function createSave()
{
    if (!createSpecies()) {
        header("Location:" . URL . "/error/index");
        exit();
    }

    header("Location:" . URL . "/specie/index");
}

function edit($id)
{
    render("/species/edit", array(
        'species' => getSpecies($id),
    ));
}

function editSave()
{
    if (!editSpecies()) {
        header("Location:" . URL . "/error/index");
        exit();
    }

    header("Location:" . URL . "/specie/index");
}

function delete($id)
{
    if (!deleteSpecies($id)) {
        header("Location:" . URL . "/error/index");
        exit();
    }

    header("Location:" . URL . "/specie/index");
}
