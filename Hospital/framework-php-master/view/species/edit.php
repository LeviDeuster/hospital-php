<div class="container">
    <h1>Edit</h1>

    <form action="<?= URL ?>/specie/editSave" method="post">
        <input type="text" name="species_description" value="<?= $species['species_description']; ?>">

        <input type="hidden" name="species_id" value="<?= $species['species_id']; ?>">
        <input type="submit" value="Verzenden">
    </form>
</div>