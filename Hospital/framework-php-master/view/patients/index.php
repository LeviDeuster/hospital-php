<html>
<head>
<script type="text/javascript" src="sortable.js"></script>
</head>
<body>
<h2>Patiënts</h2>
	<table class="sortable" id="table">
		<thead>
			<tr>
				<th>name</th>
				<th>species</th>
                <th>Status</th>
                <th>Client</th>
				<th colspan="2">Action</th>
			</tr>
		</th    ead>
		</tbody>
        <?php
        foreach ($patients as $patient) { ?>
            <tr>
                <td><?= $patient['patient_name']; ?></td>
                <td><?= $patient['species_id']; ?></td>
                <td><?= $patient['patient_status']; ?></td>
                <td><?= $patient['client_id']; ?></td>
                <td><a href="<?= URL ?>/patient/edit/<?= $patient['patient_id'] ?>">Edit</a></td>
                <td><a href="<?= URL ?>/patient/delete/<?= $patient['patient_id'] ?>">Delete</a></td>
            </tr>
        <?php } ?>
		</tbody>
	</table>
		<p><a href="/php dordt/Hospital/patient/create">Create</a></p>
	</body>
</html>