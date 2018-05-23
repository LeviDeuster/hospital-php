<?php

require(ROOT . "model/ClientModel.php");

function index()
{
	render("/clients/index", array(
		'clients' => getAllClients()
	));
}

function create()
{

	render("/clients/create");
}

function createSave()
{
	if (!createclient()) {
		header("Location:" . URL . "/error/index");
		exit();
	}

	header("Location:" . URL . "/client/index");
}

function edit($id)
{
	render("/clients/edit", array(
		'clients' => getClient($id)
	));
}

function editSave()
{
	if (!editClient()) {
		header("Location:" . URL . "/error/index");
		exit();
	}

	header("Location:" . URL . "/client/index");
} 

function delete($id)
{
	if (!deleteClient($id)) {
		header("Location:" . URL . "/error/index");
		exit();
	}

	header("Location:" . URL . "/client/index");
}
