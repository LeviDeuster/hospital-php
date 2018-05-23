<div class="container">
	<h1>Edit</h1>

	<form action="<?= URL ?>/patient/editSave" method="post">
		<input type="text" name="patient_name" value="<?= $patients['patient_name']; ?>">
        <select name="species_id">
        <?php foreach ($species as $specie) {
            $id =  $specie['species_id'];
            $name = $specie['species_description'];
            if ($id == $patients['species_id'])
                print "<option value='$id' selected>$name</option>";
            else
                print "<option value='$id'>$name</option>";
 }?>
        </select>
        <input type="text" name="patient_status" value="<?= $patients['patient_status']; ?>">
        <select name="client_id">
            <?php foreach ($clients as $client) {
                $id =  $client['client_id'];
                $firstname = $client['client_firstname'];
                $lastname = $client['client_lastname'];
                if ($id == $patients['client_id'])
                    print "<option value='$id' selected>$firstname $lastname</option>";
                else
                    print "<option value='$id'>$firstname $lastname</option>";
            }?>
		<input type="hidden" name="patient_id" value="<?= $patients['patient_id']; ?>">
		<input type="submit" value="Verzenden">
    </form>
</div>