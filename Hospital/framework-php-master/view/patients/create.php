<div class="container">
	<form action="<?= URL ?>/patient/createSave" method="post">

		<input type="text" name="patient_name" placeholder="john"><br>
        <select name="species_id">
            <?php foreach ($species as $specie) {
                $id =  $specie['species_id'];
                $name = $specie['species_description'];
                    print "<option value='$id'>$name</option><br>";
            }?>
        </select><br>
            <select name="client_id">
                <?php foreach ($clients as $client) {
                    $id =  $client['client_id'];
                    $firstname = $client['client_firstname'];
                    $lastname = $client['client_lastname'];
                    print "<option value='$id'>$firstname $lastname </option><br>";
                }?>
            </select><br>
        <input type="text" name="patient_status" placeholder="status"><br>

		<input type="submit" value="Verzenden">

	</form>

</div>
