

	<h2>Patiënts</h2>
	<table>
		<thead>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th colspan="2">Action</th>
			</tr>
		</th    ead>
		</tbody>
        <?php
        foreach ($clients as $client) { ?>
            <tr>
                <td><?= $client['client_firstname']; ?></td>
                <td><?= $client['client_lastname']; ?></td>
                <td><a href="<?= URL ?>/client/edit/<?= $client['client_id'] ?>">Edit</a></td>
                <td><a href="<?= URL ?>/client/delete/<?= $client['client_id'] ?>">Delete</a></td>
            </tr>
        <?php } ?>
		</tbody>
	</table>
		<p><a href="/php dordt/Hospital/client/create">Create</a></p>
	</body>
</html>