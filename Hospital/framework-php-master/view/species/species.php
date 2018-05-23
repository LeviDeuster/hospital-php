<div class="container">
	<table border="1">
		<tr>
			<th>diersoort</th>
		</tr>

        <?php
        foreach ($species as $specie) { ?>
            <tr>
                <td><?= $specie['species_name']; ?></td>
                <td><a href="<?= URL ?>/specie/edit/<?= $specie['species_id'] ?>">Edit</a></td>
                <td><a href="<?= URL ?>/specie/delete/<?= $specie['species_id'] ?>">Delete</a></td>
            </tr>
        <?php } ?>

	</table>
	<a href="<?= URL ?>specie/create">Toevoegen</a>
</div>