<div class="container">
	<h1>Edit</h1>

	<form action="<?= URL ?>/client/editSave" method="post">
		<input type="text" name="client_firstname" value="<?= $clients['client_firstname']; ?>">
		<input type="text" name="client_lastname" value="<?= $clients['client_lastname']; ?>">

		<input type="hidden" name="client_id" value="<?= $clients['client_id']; ?>">
		<input type="submit" value="Verzenden">
    </form>
</div>